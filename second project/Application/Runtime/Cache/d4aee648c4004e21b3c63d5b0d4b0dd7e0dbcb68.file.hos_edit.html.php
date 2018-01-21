<?php /* Smarty version Smarty-3.1.6, created on 2017-12-31 10:23:44
         compiled from "./Application/Admin/View\SystemManager\hos_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:82065a41f19e1423c5-14817394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4aee648c4004e21b3c63d5b0d4b0dd7e0dbcb68' => 
    array (
      0 => './Application/Admin/View\\SystemManager\\hos_edit.html',
      1 => 1514615330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82065a41f19e1423c5-14817394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a41f19e2ff92',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41f19e2ff92')) {function content_5a41f19e2ff92($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>系统管理员</title>
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
                <a href="index.html" class="logo"><span>系统管理</span><i class="zmdi zmdi-layers"></i></a>
            </div>
	
			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">

					<li><h4 class="page-title">医院管理员管理</h4></li>
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
/hos_manage"><span class=""></span> 医院管理</a></li>
						    <li><a href="<?php echo @__CONTROLLER__;?>
/hos_admin_manage"><span class=""></span> 医院管理员管理</a></li>
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
						<td style="padding-top:10px; padding-bottom:0px;">
						<input type="hidden" name="hos_code" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['hos_code'];?>
">
						</tr>
						<tr>
						<td style="padding-top:10px; padding-bottom:20px;padding-left: 10px;">
						<label style="width:150px;padding-left: 35px;font-size: 21px;"  for="doc-ipt-text-1">医院名称</label>
						<input  style="width:200px; height:35px;font-size: 15px;padding-left: 0px;"  name="hos_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['hos_name'];?>
"></input>
						</td>
						</tr>
						<tr>
						<td style="padding-top:10px; padding-bottom:20px;padding-left: 10px;">
						<label style="width:150px;padding-left: 35px;font-size: 21px;" for="doc-ipt-text-1">医院等级</label>
						<input style="width:200px; height:35px;font-size: 15px;padding-left: 0px;"  name="level" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['level'];?>
"></input>
						</td>
						</tr>
						<tr>
						<td style="padding-top:10px; padding-bottom:20px;padding-left: 10px;">
						<label style="width:150px;padding-left: 35px;font-size: 21px;" for="doc-ipt-text-1" for="doc-ipt-text-1">医院地址</label>
						<input style="width:200px; height:35px;font-size: 15px;padding-left: 0px;"  name="addr" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['addr'];?>
"></input>
						</td>
						</tr>
						<tr><td style="padding-top:10px; padding-bottom:20px;padding-left: 50px;">
						<input class="am-btn am-btn-default" type="submit" value="修改"></input>
						</td>
						</tr>
						</table>
					</form>
				
			
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