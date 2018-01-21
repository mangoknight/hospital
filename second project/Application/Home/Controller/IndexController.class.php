<?php  

namespace Home\Controller;
use think\Controller;
class IndexController extends Controller
{
	function index(){
		if($_SESSION['admin_name']){
			$this->assign('name',$_SESSION['admin_name']);

		}else{
			$this->assign('name','登录');
			
		}
		$hospital=D('hospital');
		$doctor = D('doctor');
		if(!empty($_POST)){
			
				if($_POST['dhospital']&&$_POST['ddepartment']){
					$dhospital=$_POST['dhospital'];
					$ddepartment=$_POST['ddepartment'];
					$doc=$doctor->where("dhospital = '$dhospital' AND ddepartment = '$ddepartment'")->select();
				}else{
					$map['dhospital']=$_POST['dhospital'];
					$map['ddepartment']=$_POST['ddepartment'];
					$map['_logic']='OR';
					$doc=$doctor->where($map)->select();
				}
				
			 $this->assign('doctor',$doc);
		}else{
			$dinfo=$doctor->select();
			$h_info=$hospital->select();
			$this->assign('hospital',$h_info);
			$this->assign('doctor',$dinfo);
		}

		$this->display();
	}
	function checkLogin(){
		if($_SESSION['admin_name']){
			$this->redirect('index');

		}else{
			$this->redirect('Admin/Login/login');
			
		}
	}
	function logout(){
			session('admin_name',null);
		$this -> redirect('Admin/Login/login');
	}
}