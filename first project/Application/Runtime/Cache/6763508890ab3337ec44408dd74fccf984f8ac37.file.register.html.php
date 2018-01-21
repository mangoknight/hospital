<?php /* Smarty version Smarty-3.1.6, created on 2017-12-31 12:13:09
         compiled from "./Application/Home/View\Login\register.html" */ ?>
<?php /*%%SmartyHeaderCode:85135a485326202ba5-17159610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6763508890ab3337ec44408dd74fccf984f8ac37' => 
    array (
      0 => './Application/Home/View\\Login\\register.html',
      1 => 1514693554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85135a485326202ba5-17159610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4853263f2d9',
  'variables' => 
  array (
    'error1' => 0,
    'errorInfo' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4853263f2d9')) {function content_5a4853263f2d9($_smarty_tpl) {?><!DOCTYPE html> 
<html>                                                                                                                                         
	<head>                                                                                                                                     
		<meta charset="UTF-8">                                                                                                                 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">                                                                 
		<title></title>	                                                                                                                       
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
	                <a href="#" class="logo" style="color: #0f0;">预约挂号个人注册</a>                                                                       
	            </div>                                                                                                                         
	                                                                                                                                           
	            <div class="m-t-40 card-box">                                                                                                  
	            	<div class="text-center">                                                                                                  
	                    <h4 class="text-uppercase font-bold m-b-0">注册</h4>                                                                     
	                </div>                                                                                                                     
	                <div class="panel-body">                                                                                                   
	                	<form class="am-form" action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">                   
	                		<div class="am-g">                                                                                                 
	                			<div class="am-form-group">                                                                                    
	                			 <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['error1']->value;?>
</span>                                                                     
							      <input type="text" class="am-radius"  placeholder="请输入用户名" name="name">                                    
							      <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['name'];?>
</span>                                                   
							    </div>                                                                                                         
                                                                                                                                               
							                                                                                                                   
							    <div class="am-form-group form-horizontal m-t-20">                                                             
							      <input type="password" class="am-radius"  placeholder="请输入数字字母等随机组合" name="pwd">                                 
							        <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['pwd'];?>
</span>                                                    
							                                                                                                                   
							    </div> 
							    <div class="am-form-group form-horizontal m-t-20">
							    	<input type="password" class="am-radius"  placeholder="请与密码保持一致" name="pwd1">
							    	<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['pwd1'];?>
</span>
							    </div>
							    <div class="am-form-group form-horizontal m-t-20">
							    	<input type="text" class="am-radius"  placeholder="请输入身份证号" name="idcard">
							    	<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['idcard'];?>
</span>
							    </div>
							     <div class="am-form-group form-horizontal m-t-20">                                                            
							      <input type="text" class="am-radius"  placeholder="输入验证码" name="yzm">
							      <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['yzm'];?>
</span>                                        
							      <img src="<?php echo @__CONTROLLER__;?>
/verifyImg" alt=""                                                   
							      onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()" />                              
							      <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>                                                                     
							    </div>                                                                                                         
		                        <div class="am-form-group ">                                                                                   
		                        	<button type="submit" class="am-btn am-btn-primary am-radius" style="width: 100%;height: 100%;">注册</but
		                        </div>                                                                                                         
		                                                                                                                                       
		                                                                                                                       
	                		</div>                                                                                                             
                                                                                                                                               
	                	</form>                                                                                                                
							                                                                                                                   
	                </div>                                                                                                                     
	            </div>                                                                                                                         
			</div>		                                                                                                                       
		</div>                                                                                                                                 
	</body>                                                                                                                                    
</html>                                                                                                                                        <?php }} ?>