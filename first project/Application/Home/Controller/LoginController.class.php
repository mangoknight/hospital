<?php

namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
	function register(){
		$login = new \Model\LoginModel();
		if(!empty($_POST)){
			$data = $login -> create();
			$vry = new \Think\Verify();
			if($data){
					if($vry -> check($_POST['yzm'])){

					$l['name'] = $_POST['name'];
					$l['pwd'] = $_POST['pwd'];
					$ll = D('login');
					$info = $ll-> add($l);
					
					$huan = D('huanzhe');
					$cc = $huan -> count();
					$h['h_code'] = $cc +1;
					$h['h_name'] = $_POST['name'];
					$h['h_pwd'] = $_POST['pwd'];
					$h['id_card'] = $_POST['idcard'];
					
					$info1 = $huan -> add($h);
					if($info){
						echo("<script type='text/javascript'> alert('注册成功');location.href='login';</script>"); 
					}else{
						echo("<script type='text/javascript'> alert('注册失败');location.href='register';</script>"); 
					}
					}else{

						$this -> assign('error','验证码不正确'); 
						
					}
			}else{
				
				$this -> assign('errorInfo',$login -> getError());
			}
			
		}
		$this -> display();
	}
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
					session('name',$_POST['name']);
					session('power',$info['power']);
					$this -> redirect('Index/index');
					
				}else{
					$this -> assign('error1','账号或密码不正确'); 
				}
			}else{
				$this -> assign('error','验证码不正确'); 
			}
			
		}
		$this -> display();
	}
	//登出
	function logout(){
		session('name',null);
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