<?php

namespace Home\Controller;
use think\Controller;

class GuahaoController extends Controller{
	
	function keshi_choose(){
		
		if($_SESSION['name']){
			$name = $_SESSION['name'];
			$this -> assign('name',$_SESSION['name']);
			$hospital = D('hospital');
			$info = $hospital -> select();
			$this -> assign('hos',$info);
			if(!empty($_POST)){
				$huanzhe = D('huanzhe');
				$count = $huanzhe -> where("h_name = '$name'") -> field('c_count') ->find();
				$c = (int)$count['c_count'];

				$keshi = D('keshi');
				$hcode = $_POST['hos_code'];
				$k = $keshi -> where("hos_code='$hcode'") ->select();
					
				if($c >= 3){
					echo("<script type='text/javascript'> alert('您取消次数过多，禁止预约');location.href='keshi_choose';</script>"); 
				}else{
					
					session('g_hos',$hcode);
				}
				$this -> assign('keshi',$k);
			}
			$this -> display();
		}else{
			$this -> redirect('Login/login');
		}
		
	}
	function k_choose()
	{	

		if ($_SESSION['g_hos']) {
			if(!empty($_POST)){

				session('g_keshi',$_POST['k_code']);
					if($_SESSION['g_keshi']){
				$this -> redirect('zhuanjia_choose');}else{
					$this -> redirect('keshi_choose');
				}
			}
		}else{
			$this -> assign('error','请选择医院');
		}
	}
	//专家选择
	function zhuanjia_choose(){
		if($_SESSION['name']){
			$this -> assign('name',$_SESSION['name']);
			if($_SESSION['g_hos']){
				if($_SESSION['g_keshi']){
					$k = $_SESSION['g_keshi'];
					
					$zhuan = D('zhuanjia');
					$info = $zhuan -> where("k_code = '$k'") ->select();
					
					$in = $this -> get_date($info);
					
					$this -> assign('zhuanjia',$in);
					

				}else{
					echo("<script type='text/javascript'> alert('请先选择科室');location.href=keshi_choose';</script>"); 
				}
			}else{
				echo("<script type='text/javascript'> alert('请先选择医院');location.href='keshi_choose';</script>"); 
			}
			$this -> display();
		}else{
			$this -> redirect('Login/login');
		}
	}
	function get_date($info){
		for($i = 0; $i < count($info,0); $i++){
			$day = (int)$info[$i]['day'];
			$info[$i]['day'] = "星期".mb_substr( "日一二三四五六",$day,1,"utf-8" ); 
			$cha = $day - date('w');

			if($cha >= 0){
				$info[$i]['time'] = date('Y-m-d',strtotime("+$cha day"));
			}else{
				$c = 7 + $cha;
				$info[$i]['time'] = date('Y-m-d',strtotime("+$c day"));
			}
			
		}
		return $info;
	}
	function z_choose(){
		if(!empty($_POST)){
			$g = D('guahao');
			$time = $_POST['time'];
			$day = substr($time,0,10);
			$zhuanjia = $_POST['z_code'];
			$zzz = $_POST['z_name'];
			$info = $g -> where("time = '$time' AND z_code = '$zhuanjia' ") -> find();
			$q = D('qingjia');
			$info1 = $q -> where("time = '$day' AND z_name = '$zzz' AND status = '已同意'") -> find();
			if($info1){
				echo("<script type='text/javascript'> alert('该医生当天已请假，请选择其他专家');location.href='zhuanjia_choose';</script>"); 		
			}else{
				if($info){
					echo("<script type='text/javascript'> alert('该时间已被预约，请选择其他时间');location.href='zhuanjia_choose';</script>"); 
				}else{
					session('g_zhuanjia',$_POST['z_code']);
					session('g_zhuan',$_POST['z_name']);
					session('g_time',$_POST['time']);
					session('g_day',$_POST['day']);
					$this -> redirect('bingqing_miaoshu');
				}	
			}
			
						
		}
	}
	function bingqing_miaoshu(){
		if($_SESSION['name']){
			$this -> assign('name',$_SESSION['name']);
			if($_SESSION['g_hos']){
				if($_SESSION['g_keshi']){
					if($_SESSION['g_zhuanjia']){
						$hos = $_SESSION['g_hos'];
						$keshi = $_SESSION['g_keshi'];
						$hospital = D('hospital');
						$ke = D('keshi');
						$h = $hospital -> field('hos_name')->find($hos);
						$k = $ke -> field('k_name')->find($keshi);

						$this -> assign('hos',$h);
						$this -> assign('ke',$k);
						if(!empty($_POST)){
							session('g_bingqing',$_POST['bingqing']);
							$this->redirect('queren_tijiao');
						}
						}else{
							echo("<script type='text/javascript'> alert('请先选择专家');location.href='zhuanjia_choose';</script>"); 
						}

					}else{
					echo("<script type='text/javascript'> alert('请先选择科室');location.href=keshi_choose';</script>"); 
				}
			}else{
				echo("<script type='text/javascript'> alert('请先选择医院');location.href='keshi_choose';</script>"); 
			}
			$this -> display();
		}else{
			$this -> redirect('Login/login');
		}
	}

	function queren_tijiao(){
		if($_SESSION['name']){
			$this -> assign('name',$_SESSION['name']);
			if($_SESSION['g_hos']){
				if($_SESSION['g_keshi']){
					if($_SESSION['g_zhuanjia']){
						$hos = $_SESSION['g_hos'];
						$keshi = $_SESSION['g_keshi'];
						$hospital = D('hospital');
						$ke = D('keshi');
						$h = $hospital -> field('hos_name')->find($hos);
						$k = $ke -> field('k_name')->find($keshi);

						$this -> assign('hos',$h);
						$this -> assign('ke',$k);
						if(!empty($_POST)){

							$data['g_name'] = $_SESSION['name'];
							$data['z_code'] = $_SESSION['g_zhuanjia'];
							$data['h_code'] = $_SESSION['g_hos'];
							$data['time'] = $_SESSION['g_time'];
							$data['bingqing'] = $_SESSION['g_bingqing'];
							$data['day'] = $_SESSION['g_day'];
							$guahao = D('guahao');
							$g = $guahao -> add($data);
							echo("<script type='text/javascript'> alert('提交成功');location.href='guahao_chaxun';</script>"); 
						}
					}
					else{
							echo("<script type='text/javascript'> alert('请先选择专家');location.href='zhuanjia_choose';</script>"); 
						}

					}else{
					echo("<script type='text/javascript'> alert('请先选择科室');location.href=keshi_choose';</script>"); 
				}
			}else{
				echo("<script type='text/javascript'> alert('请先选择医院');location.href='keshi_choose';</script>"); 
			}
			$this -> display();
		}else{
			$this -> redirect('Login/login');
		}
	}
	function guahao_chaxun(){
		if($_SESSION['name']){
			$this -> assign('name',$_SESSION['name']);
			$name = $_SESSION['name'];
			$guahao = D('guahao');
			$info = $guahao -> where("g_name = '$name'") ->find();
			$hos =  $guahao -> join("hospital ON hospital.hos_code = guahao.h_code") ->where("g_name = '$name'") ->field('hos_name') ->find();
			$zhuan =  $guahao -> join("zhuanjia ON zhuanjia.z_code = guahao.z_code") ->where("g_name = '$name'") ->field('z_name') ->find();
			$this -> assign('info',$info);
			$this -> assign('hos',$hos);
			$this -> assign('zhuan',$zhuan);
			$this -> display();
		}else{
			$this -> redirect('Login/login');
		}
	}
	function cancel($gid){
		$name = $_SESSION['name'];
		$guahao = D('guahao');
		$info = $guahao -> delete($gid);
		$login = D('login');
		$power = $login -> where("name = '$name'")->find();
		
		if($power['power']==0){
			$h = D('huanzhe');
			$i = $h -> where("h_name = '$name'") -> field('c_count') -> find();
			$c = (int)$i['c_count'];
			$s = $h -> where("h_name = '$name'") -> setField('c_count',$c+1);
		}
		$this -> redirect('guahao_chaxun');
	}
	function user_info(){
		$login = D('login');
		$name = $_SESSION['name'];
		$power = $login -> where("name = '$name'")->find();
		if($power['power']==0){
			$this -> assign('power','患者');
		}
		if($power['power']==1){
			$this -> assign('power','医院管理员');
		}
		if($power['power']==2){
			$this -> assign('power','专家');
		}
		if($power['power']==3){
			$this -> assign('power','系统管理员');
		}
		$this -> display();
	}
	function checkPower(){
		$login = D('login');
		$this -> assign('name',$_SESSION['name']);
		$name = $_SESSION['name'];
		$power = $login -> where("name = '$name'")->find();
		if($power['power']==0){
			$this -> redirect('user_info');
		}else{
			$this -> redirect('Admin/Login/login');
		}
	}
}