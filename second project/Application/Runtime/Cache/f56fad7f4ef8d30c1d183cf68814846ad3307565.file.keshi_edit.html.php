<?php /* Smarty version Smarty-3.1.6, created on 2017-12-31 10:33:36
         compiled from "./Application/Admin/View\HospitalManager\keshi_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:224635a405df0913c82-28990704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f56fad7f4ef8d30c1d183cf68814846ad3307565' => 
    array (
      0 => './Application/Admin/View\\HospitalManager\\keshi_edit.html',
      1 => 1514687595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224635a405df0913c82-28990704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a405df0ae4a7',
  'variables' => 
  array (
    'info' => 0,
    'keshi' => 0,
    'v' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a405df0ae4a7')) {function content_5a405df0ae4a7($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>后台</title>
		<link rel="stylesheet" href="/hospital/Public/css/amazeui.css" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/hospital/Public/css/core.css" />
		<link rel="stylesheet" href="/hospital/Public/css/menu.css" />
		<link rel="stylesheet" href="/hospital/Public/css/index.css" />
		<link rel="stylesheet" href="/hospital/Public/css/admin.css" />
		<link rel="stylesheet" href="/hospital/Public/css/page/typography.css" />
		<link rel="stylesheet" href="/hospital/Public/css/page/form.css" />
	</head>
	<body>
		<!-- Begin page -->
		<header class="am-topbar am-topbar-fixed-top">		
			<div class="am-topbar-left am-hide-sm-only">
               <a href="#" class="logo" style="font-size: 25px"><?php echo $_SESSION['admin_hos'];?>
管理</a>
            </div>
	
			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">

					<li><h4 class="page-title">科室管理</h4></li>
				</ul>
			</div>
		</header>
		<!-- end page -->
		
		
		<div class="admin">
			<!--<div class="am-g">-->
		<!-- ========== Left Sidebar Start ========== -->
		<!--<div class="left side-menu am-hide-sm-only am-u-md-1 am-padding-0">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 548px;">
				<div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 548px;">-->
                  <!-- sidebar start -->
				  <div class="admin-sidebar am-offcanvas  am-padding-0" id="admin-offcanvas">
				    <div class="am-offcanvas-bar admin-offcanvas-bar">
				    	<!-- User -->
						<div class="user-box am-hide-sm-only">
	                        <div class="user-img">
	                            <img src="/hospital/Public/img/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
	                            <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="true"></i></div>
	                        </div>
	                        <h5><?php echo $_SESSION['admin_name'];?>
</h5>
	                        <ul class="list-inline">
	                            <li>
	                                 <a href="<?php echo @__MODULE__;?>
/Login/logout" onclick="if(confirm('确定要退出吗？')) return true; else return false;">
	                                    <img src="/hospital/Public/img/out.png" />
	                                </a>
	                            </li>
	
	                            
	                        </ul>
	                    </div>
	                    <!-- End User -->
	            
						 <ul class="am-list admin-sidebar-list">
						    <li><a href="<?php echo @__CONTROLLER__;?>
/hos_info_manage"><span class=""></span> 医院信息管理</a></li>
						    <li><a href="<?php echo @__CONTROLLER__;?>
/keshi_manage"><span class=""></span> 科室管理</a></li>
						    <li><a href="<?php echo @__CONTROLLER__;?>
/guahao"><span class=""></span>挂号设置管理</a></li>
						    <li><a href="<?php echo @__CONTROLLER__;?>
/qingjia"><span class=""></span>请假批准管理</a></li>
						  </ul>
				</div>
				  </div>
				
				  <!-- sidebar end -->
    
				<!--</div>
			</div>
		</div>-->
		<!-- ========== Left Sidebar end ========== -->
		
		
		
	<!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				
					<form class="" action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
						<table style="margin: 0;border: 0;">
							<tr>
						<td>
						<input type="hidden" name="z_code" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['z_code'];?>
">
						</td>
						</tr>
						<tr>
						<td style="padding-top:10px; padding-bottom:20px;padding-right: 40px;padding-left: 10px;">
						<label style="padding-left: 30px; padding-right: 10px;" for="doc-ipt-text-1"><font size="4">专家姓名</font></label>
						<input style="width:200px; height: 32px;"  name="z_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['z_name'];?>
" ></input>
						</tr>
						<tr>
						<td style="padding-top:10px; padding-bottom:20px;padding-right: 40px;padding-left: 10px;">
						<label style="padding-left: 30px;padding-right: 10px;" for="doc-ipt-text-1"><font size="4">擅长领域</font></label>
				  		<input  style="width:200px;height: 32px;"  name="field" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['field'];?>
" ></input>
						</td>
						</tr>
						<tr>
						<td style=" float:right;padding-top:10px; padding-bottom:20px;padding-right: 40px;padding-left: 10px;">
						<label style="padding-left: 30px;padding-right: 10px;" for="doc-ipt-text-1"><font size="4">年龄</font> </label>
						
						<input  style="width:200px;height: 32px;"  name="age" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['age'];?>
" ></input>
						</td>	
						</tr>
						<tr style="float: right;">
						<td style="padding-top:10px; padding-bottom:20px;padding-right: 40px;padding-left: 10px;">
						<label style="padding-left: 30px;padding-right: 10px;" for="doc-ipt-text-1"><font size="4">科室</font></label>
			
						<select name="k_code" style="width: 200px;padding: 0px;height: 32px;font-size:10px; font-family:微软雅黑;">
					 	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keshi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>

                        	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['k_code'];?>
" style="font-size:12px; font-family:微软雅黑;" ><?php echo $_smarty_tpl->tpl_vars['v']->value['k_name'];?>
</option>
					 	
						<?php } ?>					      	
						</select>
						</td>
						</tr>
						<tr>
							<td style="padding-top:10px; padding-bottom:20px;text-align: center;">
						<input class="am-btn am-btn-default" type="submit" value="修改"></input>
						</td>
						</tr>
					</form>
					<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
				
			
		</div>
		</div>	

	  </div>
	
		<!-- end right Content here -->
		<!--</div>-->
	
		
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{ target: '#admin-offcanvas' }"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="/hospital/Public/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="/hospital/Public/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/hospital/Public/js/app.js" ></script>
		<script type="text/javascript" src="/hospital/Public/js/blockUI.js" ></script>
	</body>
	
</html>
<?php }} ?>