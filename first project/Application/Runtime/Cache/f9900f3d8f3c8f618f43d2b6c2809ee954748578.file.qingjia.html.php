<?php /* Smarty version Smarty-3.1.6, created on 2018-01-01 16:41:10
         compiled from "./Application/Admin/View\ZhuanjiaManager\qingjia.html" */ ?>
<?php /*%%SmartyHeaderCode:53875a4720a1dd8654-44864184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9900f3d8f3c8f618f43d2b6c2809ee954748578' => 
    array (
      0 => './Application/Admin/View\\ZhuanjiaManager\\qingjia.html',
      1 => 1514612703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53875a4720a1dd8654-44864184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4720a217c60',
  'variables' => 
  array (
    'info' => 0,
    'day' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4720a217c60')) {function content_5a4720a217c60($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>后台模板</title>
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
                <a href="index.html" class="logo"><span>专家管理</span><i class="zmdi zmdi-layers"></i></a>
            </div>
	
			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">

					<li><h4 class="page-title">个人信息管理</h4></li>
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
/zhuanjia_info"><span class=""></span> 个人信息管理</a></li>
						    <li><a href="<?php echo @__CONTROLLER__;?>
/guahao"><span class=""></span> 挂号设置管理</a></li>
						    <li><a href="<?php echo @__CONTROLLER__;?>
/qingjia"><span class=""></span> 请假申请</a></li>
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
				<div class="card-box">
					<!-- Row start -->
		<div class="am-g">
		<div class="am-u-md-6">
		<form class="am-form am-text-sm" action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
											
		<input type="hidden" name="z_code" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['z_name'];?>
">
											<div class="am-form-group">
												<div class="am-g">
											      <label  >请假时间</label>
											      <select  name="time">
											      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['day']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 </option>
											      <?php } ?>
											       </select>
										      </div>
										    </div>
										    <div class="am-form-group">
										    	<div class="am-g">
											      <label >请假原因</label>
											      <textarea name="reason" ></textarea>
										    	</div>
										    </div>
										    <div class="am-form-group">
						    <div class="am-u-sm-10 am-u-sm-offset-3">
						      <button type="submit" class="am-btn am-btn-default" style="float: left; ">申请 </button>
						    </div>
						  </div> 
										</form>
										</div>
										</div>
										</div>
										</br>
		<div class="am-g">
        <div class="am-u-sm-12">
        <p style="float: left;  font-weight:bold; ">请假结果查询</p>
						<table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-title">请假时间</th><th class="table-type">状态</th>
              </tr>
              </thead>
              <tbody>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <tr>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
			</div>
			</div>						
                                                                 
		
             </div></div>                                                      
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{ target: '#admin-offcanvas' }"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="/hospital/Public/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="/hospital/Public/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/hospital/Public/js/app.js" ></script>
		<script type="text/javascript" src="/hospital/Public/js/blockUI.js" ></script>
	</body>
	
</html>
<?php }} ?>