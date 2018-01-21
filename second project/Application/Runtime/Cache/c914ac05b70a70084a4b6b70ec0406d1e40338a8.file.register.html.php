<?php /* Smarty version Smarty-3.1.6, created on 2018-01-07 15:30:50
         compiled from "./Application/Admin/View\Login\register.html" */ ?>
<?php /*%%SmartyHeaderCode:45105a51bb0bdb9aa3-31844300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c914ac05b70a70084a4b6b70ec0406d1e40338a8' => 
    array (
      0 => './Application/Admin/View\\Login\\register.html',
      1 => 1515310228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45105a51bb0bdb9aa3-31844300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a51bb0c07b12',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a51bb0c07b12')) {function content_5a51bb0c07b12($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>注册</title>
<link rel="stylesheet" href="/niit/Public/css/style.css">
<link href="/niit/Public/css/popup-box.css" rel="stylesheet" type="text/css"
	media="all" />
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
-->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="Sign In And Sign Up Forms  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript">
	
	
	
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 



</script>

</script>
<script src="/niit/Public/js/jquery.min.js"></script>
<script src="/niit/Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="/niit/Public/js/modernizr.custom.53451.js"></script>
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type : 'inline',
			fixedContentPos : false,
			fixedBgPos : true,
			overflowY : 'auto',
			closeBtnInside : true,
			preloader : false,
			midClick : true,
			removalDelay : 300,
			mainClass : 'my-mfp-zoom-in'
		});

	});
</script>

<style type="text/css">

#mydiv {


position:absolute;
top:30%;
left:50%;
margin:-150px 0 0 -200px;
/* border:1px solid #000000; */


}


body {
	text-align: center
	margin:0;
    padding:0;
    width:100%;
    height:100%;
}

.div {
	margin: 0 auto;
	width: 400px;
	height: 100px;
	border: 1px solid #F00
}
/* css注释：为了观察效果设置宽度 边框 高度等样式 */
</style>

</head>
<body style="text-align:center">

	<div  id="mydiv" >
		<div style="padding-bottom: 100px" class="signin-agile">
			<h2>注册</h2>
			<form action="<?php echo @__SELF__;?>
" method="post">
				
				<input type="text" name="ucard" class="name"
					placeholder="身份证号码" required=""> 
				<input type="text"
					name="uname" class="name" placeholder="姓名" required="">
			 <input
					type="password" name="upassword" class="name" placeholder="密码"
					required="">
				
				<div class="clear"></div>
				<h3 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
				<input type="submit" value="注册">
			</form>
		</div>
		<!-- <div class="signup-agileinfo">
			<div class="more">
				<a class="book popup-with-zoom-anim button-isi zoomIn animated"
					data-wow-delay=".5s" href="#small-dialog">点击注册</a>
			</div>
		</div> -->
		<div class="clear"></div>
	</div>

	<div class="pop-up">
		<div id="small-dialog" class="mfp-hide book-form">
			<h3>注册表单</h3>
			<form action="#" method="post">
				<input type="text" name="Name" placeholder="用户名" required="" /> <input
					type="text" name="Email" class="email" placeholder="邮件" required="" />
				<input type="password" name="Password" class="password"
					placeholder="密码" required="" /> <input type="password"
					name="Password" class="password" placeholder="重复密码" required="" />
				<input type="submit" value="点击注册">
			</form>
		</div>
	</div>
<body>
</html><?php }} ?>