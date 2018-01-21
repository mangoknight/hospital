<?php  

namespace Admin\Controller;
use think\Controller;
class DoctorController extends Controller
{
	function showlist(){
		$hos = D('hospital');
		$doctor = M('doctor');  
		if(!empty($_POST)){
			if($_POST['dname']){
				$dname=$_POST['dname'];
				$doc=$doctor->where("dname ='$dname' ")->select(); 
				$this->assign('doctor',$doc);
			}else{
				if($_POST['dhospital']&&$_POST['ddepartment']){
					$dhospital=$_POST['dhospital'];
					$ddepartment=$_POST['ddepartment'];
					$doc=$doctor->where("ddepartment = '$ddepartment' AND dhospital = '$dhospital'")->select();
					$this->assign('doctor',$doc);
				}else{
					$map['dhospital']=$_POST['dhospital'];
					$map['ddepartment']=$_POST['ddepartment'];
					$map['_logic']='OR';
					$count1 = $doctor->where($map)->count();
	        		$p1 = getpage($count1,6);
	        		$list1 = $doctor->order('did')->where($map)->limit($p1->firstRow, $p1->listRows)->select();
	        		$this->assign('doctor', $list1); // 赋值数据集
	        		$this->assign('page', $p1->show()); // 赋值分页输出
				}
				
				
			}
			
			
		}else{
		
			
			    
	        $count = $doctor->count();
	        $p = getpage($count,6);
	        $list = $doctor->order('did')->limit($p->firstRow, $p->listRows)->select();
	        $this->assign('doctor', $list); // 赋值数据集
	        $this->assign('page', $p->show()); // 赋值分页输出
		}
		$hinfo = $hos->select();
		$this->assign('hospital',$hinfo);
        $this->display();
		
	}
	function add(){
		$doctor=D('doctor');
		$hos = D('hospital');
		$hinfo = $hos->select();
		$this->assign('hospital',$hinfo);
		$doctor=D('doctor');
		if(!empty($_POST)){
			$add=$doctor->add($_POST);
			if($add){
				$this->redirect('showlist');
			}else{
				echo("<script type='text/javascript'> alert('添加失败');</script>"); 
				$this->redirect('showlist');
			}
		}
		$this->display();
	}
	function edit($dname){
		$doctor=D('doctor');
		$hos = D('hospital');
		$hinfo = $hos->select();
		$this->assign('hospital',$hinfo);
		if(!empty($_POST)){


			$save=$doctor->save($_POST);

			if($save){
				$this->redirect('showlist');
			}else{
				echo("<script type='text/javascript'> alert('修改失败');</script>"); 
				$this -> redirect('edit',array('dname'=>$dname));
			}
		}else{
			$doctorinfo=$doctor->where("dname = '$dname'")->find();
			$this->assign('doctor',$doctorinfo);
		}
		$this->display();
	}
	function delete($dname){
		$doctor=D('doctor');
		$delete=$doctor->where("dname='$dname'")->delete();
		$this->redirect('showlist');
		$this->display();
	}
	function holiday(){
		$holiday=D('holiday');
		$hoinfo=$holiday->select();
		$this->assign('holiday',$hoinfo);
		$this->display();
	}
	function enter($hoid){
		$holiday=D('holiday');
		$hoinfo=$holiday->where("hoid = '$hoid'")->setField('hostatus','已同意');
		$this->redirect('holiday');
	}
	function cancel($hoid){
		$holiday=D('holiday');
		$hoinfo=$holiday->where("hoid = '$hoid'")->setField('hostatus','已拒绝');
		$this->redirect('holiday');
	}
}