<?php

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
	//登录
	function login()
	{
		$login = new \Model\LoginModel();
		if (!empty($_POST)) {
			$name = $_POST['name'];
			$data = $login -> create();
			$vry = new \Think\Verify();
			if($vry -> check($_POST['yzm'])){
				$info = $login -> checkNamePwd($_POST['name'],$_POST['pwd']);
				if($info){
					//session 持久化 并跳转
					session('admin_name',$_POST['name']);
					session('power',$info['power']);
					if($info["power"]==3){
						$this -> redirect('SystemManager/hos_admin_manage');
					}if ($info['power']==1) {
						$ad = M('admin');
						$hos = $ad -> join('hospital ON hospital.hos_code = admin.hos_code') -> where("admin_name = '$name'") ->select();
						session('admin_hos',$hos[0]['hos_name']);
						$this -> redirect('HospitalManager/hos_info_manage');
					}if($info['power']==2){
						$zhuan = M('zhuanjia');
						$hosc = $zhuan -> join('hospital ON hospital.hos_code = zhuanjia.hos_code') -> where("z_name = '$name'") ->find();
						session('zhuanjia_hos',$hosc['hos_name']);
						$this -> redirect('ZhuanjiaManager/zhuanjia_info');
					}
					
				}else{
					$this -> assign('error1','账号或密码不正确'); 
				}
			}else{
				$this -> assign('error','验证码不正确'); 
			}
			
		}else{
			$this -> assign('errorInfo',$login -> getError());
		}
		$this -> display();
	}
	//登出
	function logout(){
		session('admin_name',null);
		$this -> redirect('login');
	}

	//显示验证码
	function verifyImg(){
		//配置验证码
		$cfg = array(
			'imageH'    =>  50,               // 验证码图片高度
			'imageW'    =>  320,               // 验证码图片宽度
			'length'    =>  4,               // 验证码位数
			'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
		);
		$very = new \Think\Verify($cfg);
		$very -> entry(); //输出验证码
	}
}