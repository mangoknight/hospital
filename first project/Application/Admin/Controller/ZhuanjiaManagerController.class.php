<?php  

namespace Admin\Controller;
use think\Controller;
class ZhuanjiaManagerController extends Controller
{
	function zhuanjia_info()
	{
		$zname = $_SESSION['admin_name'];
		$zhuan = D('zhuanjia');
		$info = $zhuan -> where("z_name = '$zname'") ->find();
		$this -> assign('info',$info);
		if(!empty($_POST)){
			$z = $zhuan -> save($_POST);
			if($z){
				//redirect (地址，参数，延迟时间，提示信息)
				$this -> redirect('zhuanjia_info',array(),2,'编辑成功');
			}else{
				$this -> redirect('zhuanjia_info',array(),2,'编辑失败');
			}
		}
		$this -> display();
	}
	function guahao(){
		$guahao = D('guahao');
		$zname = $_SESSION['admin_name'];
		$hosname = $_SESSION['admin_hos'];
		$info = $guahao ->join('zhuanjia ON zhuanjia.z_code = guahao.z_code') -> where("z_name = '$zname'") -> select();
		$this -> assign('info',$info);
		$this -> display();
	}
	function qingjia(){
		$zhuan = D('zhuanjia');
		$zname = $_SESSION['admin_name'];
		$day = $zhuan -> where("z_name = '$zname'") -> field('day') -> find();
		$d = (int)$day['day'];
		$cha = $d - date('w');
		if($cha >= 0){
			$a = $cha + 7;
			$b = $cha + 14;
			$info[0]['time'] = date('Y-m-d',strtotime("+$cha day"));
			$info[1]['time'] = date('Y-m-d',strtotime("+$a day"));
			$info[2]['time'] = date('Y-m-d',strtotime("+$b day"));
		}else{
			$c = 7 + $cha;
			$e = $cha + 14;
			$f = $cha + 21;
			$info[0]['time'] = date('Y-m-d',strtotime("+$c day"));
			$info[1]['time'] = date('Y-m-d',strtotime("+$e day"));
			$info[2]['time'] = date('Y-m-d',strtotime("+$f day"));
		}
		$this -> assign('day',$info);
		$qingjia = D('qingjia');
		$in = $qingjia -> where("z_name = '$zname'") -> select();
		$this -> assign('info',$in);
		if(!empty($_POST)){
			$hos = $zhuan -> join("hospital ON hospital.hos_code = zhuanjia.hos_code") -> where("z_name = '$zname'") -> field('hos_name') -> find();
			
			$data['z_name'] = $_SESSION['admin_name'];
			$data['hos_name'] = $hos['hos_name'];
			$data['time'] = $_POST['time'];
			$data['reason'] = $_POST['reason'];
			$qingjia -> add($data);
			$this -> redirect('qingjia');
		}
		$this -> display();
	}
}