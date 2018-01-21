<?php

namespace Home\Controller;
use think\Controller;

class IndexController extends Controller{
	
	function index(){
		if($_SESSION['name']){
			$this -> assign('name',$_SESSION['name']);
		}else{
			$this -> assign('name','尚未登录,请登录');
		}
		$this->display();
	}
	function checkLogin(){
		if($_SESSION['name']){
			$this -> redirect('Guahao/user_info');
		}else{
			$this -> redirect('Login/login');
		}
	}
}