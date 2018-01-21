<?php  

namespace Admin\Controller;
use think\Controller;
class SystemManagerController extends Controller
{
	//医院管理员管理
	function hos_admin_manage()
	{
		
		if(!empty($_POST)){
			$z = $_POST["hos_code"];
			$admin = D('admin');
			$info = $admin -> where('hos_code=%d',$z) -> select();

			if($info){
				$this -> assign('info',$info);
				$this -> assign('name',$_POST['hos_name']);
				$count = $admin -> where('hos_code=%d',$z) -> count();
				$this -> assign('count',$count);
				$this -> display();
			}else{
				$this -> assign('error',"查询失败请重新输入");
				$this -> display();
			}
			

		}else{
			$this -> assign('count',0);
			$this -> display();
		}
		
		
	}
	//编辑医院管理员
	function hos_admin_edit($admin_id){
		$admin = D('admin');
		if(!empty($_POST)){
			$z = $admin -> save($_POST);
			if($z){
				//redirect (地址，参数，延迟时间，提示信息)
				echo("<script type='text/javascript'> alert('编辑成功');</script>"); 
				$this -> redirect('hos_admin_manage');
			}else{
				echo("<script type='text/javascript'> alert('编辑失败');</script>"); 
				$this -> redirect('hos_admin_edit',array('admin_id'=>$admin_id));
			}
		}else{
			
			$info = $admin -> find($admin_id);
			$this -> assign('info',$info);
			$this -> display();
		}
	}
	//删除医院管理员
	function delete($admin_id,$admin_name){
		$admin = D('admin');
		$login = D('login');
		$z = $admin -> delete($admin_id);
		$x = $login -> where("name='$admin_name'") -> setField('power',0);
		if($z){
			echo("<script type='text/javascript'> alert('删除成功');</script>"); 
			$this -> redirect('hos_admin_manage');
		}else{
			$this -> assign('error',"删除失败");
		}
	}

	//医院管理
	function hos_manage(){
		$hos = D('hospital');
		if(!empty($_POST)){
			if($_POST["hos_code"]){
				$info = $hos -> where("hos_code=%d",$_POST["hos_code"]) -> select();

				if($info){
					$this -> assign('info',$info);
					$count = $hos -> where("hos_code=%d",$_POST["hos_code"]) -> count();
					$this -> assign('count',$count);
				}else{
					$this -> assign('error',"不存在该医院");
				
				}
			}else{
				if($_POST["hos_name"]){
					$hname = $_POST["hos_name"];
					$info = $hos -> where("hos_name='$hname'") -> select();

					if($info){
						$this -> assign('info',$info);
						$count = $hos -> where("hos_name='$hname'") -> count();
						$this -> assign('count',$count);
					}else{
						$this -> assign('error',"不存在该医院");
					
					}
				}else{
					$hlevel = $_POST["level"];
					$info = $hos -> where("level='$hlevel'") -> select();

					if($info){
						$this -> assign('info',$info);
						$count = $hos -> where("level='$hlevel '") -> count();
						$this -> assign('count',$count);
					}else{
						$this -> assign('error',"不存在该医院");
					
					}
				}
			}


		}else{
			$this -> assign('count',0);
			$this -> display();
		}
		$this -> display();
	}
	//医院编辑
	function hos_edit($hos_code){
		$hos = D('hospital');
		$info = $hos -> find($hos_code);
		$this -> assign('info',$info);
		$this -> display();
		if(!empty($_POST)){
			$z = $hos -> save($_POST);
			if($z){
				//redirect (地址，参数，延迟时间，提示信息)
				echo("<script type='text/javascript'> alert('编辑成功');</script>"); 
			$this -> redirect('hos_manage');
			}else{
				echo("<script type='text/javascript'> alert('编辑失败');</script>"); 
				$this -> redirect('hos_edit',array('hos_code'=>$hos_code));
			}
		}
	}
}