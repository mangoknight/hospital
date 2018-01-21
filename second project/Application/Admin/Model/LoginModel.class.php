<?php 
 
namespace Admin\Model;
use Think\Model;

class LoginModel extends Model
{	
	protected $patchValidate = true;
	//array（字段，验证规则，错误提示，[验证条件，附加规则，验证时间]）;
	 
	protected $_validate  = array(

		
		array('uname','check_name','用户名已存在','2','callback'),
		array('ucard','check_card','身份证已存在','2','callback'),
		array('ucard','18','身份证长度不符','2','length'),
	);
	
	function check_name($arg){
		$Login = new Model('Login');
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