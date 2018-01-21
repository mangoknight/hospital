<?php  

namespace Admin\Controller;
use think\Controller;
class HospitalManagerController extends Controller
{
	//医院信息管理
	function hos_info_manage(){
		$hos = D('hospital');
		$hosname = $_SESSION['admin_hos'];
		if(!empty($_POST)){
			$z = $hos -> where("hos_name = '$hosname'") -> save($_POST);
			if($z){
				//redirect (地址，参数，延迟时间，提示信息)
				echo("<script type='text/javascript'> alert('修改成功');</script>"); 
				$this -> redirect('hos_info_manage');
				
			}else{
				echo("<script type='text/javascript'> alert('修改失败');</script>"); 
				$this -> redirect('hos_info_manage');
			}
		}else{
			
			
			$info = $hos -> where("hos_name = '$hosname'") -> find();
			$this -> assign('info',$info);
			$this -> display();
		}
		
	}
	//科室管理
	function keshi_manage(){
		$keshi = D('keshi');
		$hosname = $_SESSION['admin_hos'];

		$k = $keshi -> join("hospital ON hospital.hos_code = keshi.hos_code") -> where("hos_name = '$hosname'") -> select();
		
		$this -> assign('keshi',$k);
		if(!empty($_POST)){
			$zhuan =  D('zhuanjia');
			$ke = $_POST['keshi'];
			
			$info = $zhuan -> join("hospital ON hospital.hos_code = zhuanjia.hos_code") -> where("hos_name = '$hosname' AND k_code = '$ke'") -> select();
			$this -> assign('info',$info);
			$this -> display();
		}else{
			$this -> display();
		}
		
	}
	//删除成员
	function delete($z_id,$z_name){
		$zhuan =  D('zhuanjia');
		$login = D('login');
		$z = $zhuan -> delete($z_id);
		$y = $login -> where("name = '$z_name'") -> setField('power',0);
		if($z){
			echo("<script type='text/javascript'> alert('删除成功');</script>"); 
		$this -> redirect('keshi_manage');
		}else{
			$this -> assign('error',"删除失败");
		}
	}
	//添加成员
	function keshi_add(){
		$keshi = D('keshi');
		$zhuan = D('zhuanjia');
		$hosname = $_SESSION['admin_hos'];
		$hos = D('hospital');
		$hcode = $hos -> where("hos_name = '$hosname'") -> field('hos_code') ->find();
		$k = $keshi -> join("hospital ON hospital.hos_code = keshi.hos_code") -> where("hos_name = '$hosname'") -> select();
		
		$this -> assign('keshi',$k);
		if(!empty($_POST)){
			$count = $zhuan -> count();
			$data['z_name'] = $_POST['z_name'];
			$data['field'] = $_POST['field'];
			$data['gender'] = $_POST['gender'];
			$data['age'] = $_POST['age'];
			$data['k_code'] = $_POST['k_code'];
			$data['hos_code'] = (int)$hcode;
			$s = $zhuan -> add($data);
			if($s){
				echo("<script type='text/javascript'> alert('添加成功');</script>"); 
				$this -> redirect('keshi_manage');
			}else{
				$this -> assign('error',"添加失败");
			}
		}else{
			$this -> display();
		}
		$this -> display();
	}
	//成员编辑
	function keshi_edit($z_id){
		$keshi = D('keshi');
		$hosname = $_SESSION['admin_hos'];

		$k = $keshi -> join("hospital ON hospital.hos_code = keshi.hos_code") -> where("hos_name = '$hosname'") -> select();
		
		$this -> assign('keshi',$k);
		$zhuan = D('zhuanjia');
		$info = $zhuan -> where("z_code = '$z_id'") -> find();
		$this -> assign('info',$info);
		if(!empty($_POST)){
			$z = $zhuan -> save($_POST);
			if($z){
				//redirect (地址，参数，延迟时间，提示信息)
				echo("<script type='text/javascript'> alert('编辑成功');</script>"); 
				$this -> redirect('keshi_manage');
			}else{
				echo("<script type='text/javascript'> alert('编辑失败');</script>"); 
				$this -> redirect('keshi_edit',array('z_id'=>$info['z_code']));
			}
		}
		$this -> display();

	}
	//挂号
	function guahao(){
		$guahao = D('guahao');
		$hospital = D('hospital');
		$hosname = $_SESSION['admin_hos'];
		$h = $hospital -> where("hos_name = '$hosname'") ->find();
		$hcode = $h['hos_code'];
		$info = $guahao ->join('zhuanjia ON zhuanjia.z_code = guahao.z_code') -> where("h_code = '$hcode'") -> select();

		$this -> assign('info',$info);
		$this -> display();
	}
	function guahao_enter($g_code){
		$guahao = D('guahao');
		$info = $guahao -> where("g_code = '$g_code'") ->setField('status','已确认');
		echo("<script type='text/javascript'> alert('确认成功');location.href='guahao';</script>"); 
	}
	function guahao_delete($g_code){
		$guahao = D('guahao');
		$info = $guahao -> where("g_code = '$g_code'") ->setField('status','已取消');
		echo("<script type='text/javascript'> alert('取消成功');location.href='guahao';</script>"); 
	}
	function qingjia(){
		$hosname = $_SESSION['admin_hos'];
		$qingjia = D('qingjia');
		$info = $qingjia -> where("hos_name = '$hosname'") -> select();
		$this -> assign('info',$info);
		$this -> display();
	}
	function qingjia_enter($qid){
		$qingjia = D('qingjia');
		$info = $qingjia -> where("q_code = '$qid'") ->setField('status','已同意');
		$guahao = D('guahao');
		$info1 = $qingjia -> where("q_code = '$qid'") -> find();
		$time = $info1['time'];
		$zhuanjia = $info1['z_name'];
		$zhuan = D('zhuanjia');

		$z = $zhuan -> where("z_name = '$zhuanjia'") -> find();
		$zcode = $z['z_code'];
		$map['time'] = array('like',"$time%");
		$res = $guahao -> where($map) -> where("z_code = '$zcode'") -> setField('status','医生请假，已取消');
		dump($guahao -> getLastSql());
		echo("<script type='text/javascript'> alert('同意成功');</script>"); 
		//$this -> redirect('qingjia');
	}
	function qingjia_delete($qid){
		$qingjia = D('qingjia');
		$info = $qingjia -> where("q_code = '$qid'") ->setField('status','已拒绝');
		echo("<script type='text/javascript'> alert('拒绝成功');</script>"); 
		$this -> redirect('qingjia');
	}
}