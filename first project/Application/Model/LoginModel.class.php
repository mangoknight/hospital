<?php 
 
namespace Model;
use Think\Model;

class LoginModel extends Model
{	
	protected $patchValidate = true;
	//array（字段，验证规则，错误提示，[验证条件，附加规则，验证时间]）;
	protected $_validate  = array(

		array('name','require','用户名不能为空'),
		array('name','check_name','用户名已存在','2','callback'),
		array('pwd','require','密码不能为空'),
		array('yzm','require','验证码不能为空'),
		array('pwd1','require','密码不能为空'),
		array('idcard','require','身份证不能为空'),
		array('idcard','check_card','身份证已存在','2','callback'),
		array('idcard','18','身份证长度不符','2','length'),
		array('pwd1','pwd','两次密码不一致','2','confirm'),
	);
	//判断用户名密码是否正确
	function checkNamePwd($name,$pwd){
		$info = $this -> where("name='$name'") -> find();
		if($info['pwd']===$pwd){
			return $info;
		}
		return null;
	}
	function check_name($arg){
		$Login = new Model('Login');
		$info = $Login -> where("name='$arg'") -> find();
		if($info){
			return false;
		}
		return true;
	}
	function check_card($arg){
		$Login = D('huanzhe');
		$info = $Login -> where("id_card='$arg'") -> find();
		if($info){
			return false;
		}
		return true;
	}
}