<?php /* Smarty version Smarty-3.1.6, created on 2017-12-31 11:41:07
         compiled from "./Application/Home/View\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:66415a40a00f0b1b18-40671025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e057bb2e2c8b5abbc5fea97ffea30abc7ed15af' => 
    array (
      0 => './Application/Home/View\\Login\\login.html',
      1 => 1514691541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66415a40a00f0b1b18-40671025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a40a00f1cedd',
  'variables' => 
  array (
    'error1' => 0,
    'errorInfo' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a40a00f1cedd')) {function content_5a40a00f1cedd($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>预约挂号系统登录</title>	
		<link rel="stylesheet" href="/hospital/Public/css/core.css" />
		<link rel="stylesheet" href="/hospital/Public/css/menu.css" />
		<link rel="stylesheet" href="/hospital/Public/css/amazeui.css" />
		<link rel="stylesheet" href="/hospital/Public/css/component.css" />
		<link rel="stylesheet" href="/hospital/Public/css/page/form.css" />
	</head>
	<body>
		<div class="account-pages">
			<div class="wrapper-page">
				<div class="text-center">
	                <a href="#" class="logo"><span style="color: #0f0;">预约挂号系统登录</span></a>
	            </div>
	            
	            <div class="m-t-40 card-box">
	            	<div class="text-center">
	                    <h4 class="text-uppercase font-bold m-b-0">登录</h4>
	                </div>
	                <div class="panel-body">
	                	<form class="am-form" action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
	                		<div class="am-g">
	                			<div class="am-form-group">
	                			 <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['error1']->value;?>
</span>
							      <input type="text" class="am-radius"  placeholder="Username" name="name">
							     <!-- <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['name'];?>
</span>-->
							    </div>

							
							    <div class="am-form-group form-horizontal m-t-20">
							      <input type="password" class="am-radius"  placeholder="Password" name="pwd">
							        <!--<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['pwd'];?>
</span>-->
							     
							    </div>
							     <div class="am-form-group form-horizontal m-t-20">
							      <input type="text" class="am-radius"  placeholder="输入验证码" name="yzm">
							      <img src="<?php echo @__CONTROLLER__;?>
/verifyImg" alt=""
							      onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()" />
							      <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
							    </div>
		                        <div class="am-form-group ">
		                        	<button type="submit" class="am-btn am-btn-primary am-radius" style="width: 100%;height: 100%;">Log In</button>
		                        </div>
		                        
		                        <div class="am-form-group ">
		                        <a href="<?php echo @__CONTROLLER__;?>
/register" class="text-muted"><i class="fa fa-lock m-r-5"></i> 没有账号?注册</a>
		                        </div>
	                		</div>

	                	</form>
							
	                </div>
	            </div>
			</div>		
		</div>
	</body>
</html>
<?php }} ?>