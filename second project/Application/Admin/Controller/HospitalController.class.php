<?php  

namespace Admin\Controller;
use think\Controller;
class HospitalController extends Controller
{
	function showlist(){
		$hospital=D('hospital');
		if(!empty($_POST)){
			if($_POST['hname']){
				$hname=$_POST['hname'];
				$hos=$hospital->where("hname ='$hname' ")->select(); 

			}else{
				if($_POST['hgrade']&&$_POST['hcity']){
					$hgrade=$_POST['hgrade'];
					$hcity=$_POST['hcity'];
					$hos=$hospital->where("hgrade = '$hgrade' AND hcity = '$hcity'")->select();
				}else{
					$map['hgrade']=$_POST['hgrade'];
					$map['hcity']=$_POST['hcity'];
					$map['_logic']='OR';
					$hos=$hospital->where($map)->select();
				}
				
				
			}
			
			$this->assign('hospital',$hos);
		}else{
			
			$h_info=$hospital->select();
			$this->assign('hospital',$h_info);
		}
		$this->display();
	}
	function add(){
		$hospital=D('hospital');
		if(!empty($_POST)){
			$add=$hospital->add($_POST);
			if($add){
				$this->redirect('showlist');
			}else{
				echo("<script type='text/javascript'> alert('添加失败');</script>"); 
				$this->redirect('showlist');
			}
		}
		$this->display();
	}
	function edit($hname){
		$hospital=D('hospital');
		if(!empty($_POST)){
			

			$save=$hospital->save($_POST);

			if($save){
				$this->redirect('showlist');
			}else{
				echo("<script type='text/javascript'> alert('修改失败');</script>"); 
				$this -> redirect('edit',array('hname'=>$hname));
			}
		}else{
			$hosinfo=$hospital->where("hname = '$hname'")->find();
			$this->assign('hospital',$hosinfo);
		}
		$this->display();
	}
	function delete($hname){
		$hospital=D('hospital');
		$delete=$hospital->where("hname='$hname'")->delete();
		$this->redirect('showlist');
		$this->display();
	}
}