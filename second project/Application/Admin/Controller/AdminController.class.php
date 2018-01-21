<?php  

namespace Admin\Controller;
use think\Controller;
class AdminController extends Controller
{
	function showlist(){
		$admin=D('admin');
		$ad_info=$admin->select();
		$this->assign('admin',$ad_info);
		$this->display();
	}
	function add(){
		$admin=D('admin');
		if(!empty($_POST)){
			$add=$admin->add($_POST);
			if($add){
				$this->redirect('showlist');
			}else{
				echo("<script type='text/javascript'> alert('添加失败');</script>"); 
				$this->redirect('showlist');
			}
		}
		$this->display();
	}
	function edit($name){
		$admin=D('admin');
		if(!empty($_POST)){
			

			$save=$admin->save($_POST);

			if($save){
				$this->redirect('showlist');
			}else{
				echo("<script type='text/javascript'> alert('修改失败');</script>"); 
				$this -> redirect('edit',array('name'=>$name));
			}
		}else{
			$admininfo=$admin->where("username = '$name'")->find();
			$this->assign('admin',$admininfo);
		}
		$this->display();
	}
	function delete($name){
		$admin=D('admin');
		$delete=$admin->where("username='$name'")->delete();
		$this->redirect('showlist');
		$this->display();
	}
}