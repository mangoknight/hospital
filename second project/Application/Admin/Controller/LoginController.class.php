<?php

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
	//登录
	function login(){
		$login = D('login');
		if (!empty($_POST)) {
			$name = $_POST['name'];
			$pwd = $_POST['password'];
			$log = $login -> where("name = '$name'") -> find();
			if($log){
				if($log['pwd'] == $pwd){
					session('admin_name',$_POST['name']);
					session('admin_power',$log['power']);
					if($log['power']==1){
						$this -> redirect('DoctorManager/home');
					}if($log['power']==0){
						$this -> redirect('Home/Index/index');
					}
					if($log['power']==2){
						$this -> redirect('Index/home');
					}
					
				}else{
					$this -> assign('loginError','账号或密码错误');
				}
			}else{
				$this -> assign('loginError','账号不存在');
			}
			
		}else{
			$this -> assign('loginError','  ');
		}
		
		$this -> display();
	}
	//注册
	function register(){

		if(!empty($_POST)){
			
					$ll = D('login');
					$user = D('user');
					
					if($this->check_name($_POST['uname'])){
						if($this->check_card($_POST['ucard'])){
							if(strlen($_POST['ucard'])==18){

								$l['name'] = $_POST['uname'];
								$l['pwd'] = $_POST['upassword'];
							
								$info = $ll-> add($l);
								
								$u['uname']=$_POST['uname'];
								$u['upassword'] = $_POST['upassword'];
								$u['ucard']=$_POST['ucard'];
								$user->add($u);

								$this->redirect('login');
				
							}else{
								$this -> assign('error','身份证长度不符');
							}
						}else{
							$this -> assign('error','身份证已存在');
						}
					}else{
						$this -> assign('error','名字已存在');
					}
				
					

					
				
				
			}
				$this-> display();

			
		
	}
	function check_name($arg){
		$Login = D('login');
		$info = $Login -> where("name='$arg'") -> find();
		if($info){
			return false;
		}
		return true;
	}
	function check_card($arg){
		$user = D('user');
		$info = $user -> where("ucard='$arg'") -> find();
		if($info){
			return false;
		}
		return true;
	}
	
}