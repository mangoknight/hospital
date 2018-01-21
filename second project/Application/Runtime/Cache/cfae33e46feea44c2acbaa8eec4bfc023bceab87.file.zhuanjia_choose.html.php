<?php /* Smarty version Smarty-3.1.6, created on 2017-12-30 09:34:24
         compiled from "./Application/Home/View\Guahao\zhuanjia_choose.html" */ ?>
<?php /*%%SmartyHeaderCode:295725a41aaea517a94-57741414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfae33e46feea44c2acbaa8eec4bfc023bceab87' => 
    array (
      0 => './Application/Home/View\\Guahao\\zhuanjia_choose.html',
      1 => 1514597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295725a41aaea517a94-57741414',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a41aaea6d500',
  'variables' => 
  array (
    'name' => 0,
    'zhuanjia' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41aaea6d500')) {function content_5a41aaea6d500($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>预约挂号系统</title>
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
                <a href="index.html" class="logo" ><span style="color: #0f0;">预约挂号系统</span><i class="zmdi zmdi-layers"></i></a>
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
	                            <img src="/hospital/Public/img/avatar-2.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
	                            <div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="true"></i></div>
	                        </div>
	                        <h5><a  id="a" href="<?php echo @__MODULE__;?>
/Index/checkLogin"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a> </h5>
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
						 <li><a href="<?php echo @__MODULE__;?>
/Index/index"><span class=""></span> 主页</a></li>
						    <li><a href="<?php echo @__MODULE__;?>
/Guahao/keshi_choose" ><span class=""></span> 医院科室选择</a></li>
						    <li><a href="<?php echo @__MODULE__;?>
/Guahao/zhuanjia_choose"><span class=""></span> 专家选择</a></li>
                                                    <li><a href="<?php echo @__MODULE__;?>
/Guahao/bingqing_miaoshu"><span class=""></span> 填写病情</a></li>
                                                    <li><a href="<?php echo @__MODULE__;?>
/Guahao/queren_tijiao"><span class=""></span> 提交缴费</a></li>
                                                    <li><a href="<?php echo @__MODULE__;?>
/Guahao/guahao_chaxun"><span class=""></span> 挂号查询</a></li>
						  </ul>
				</div>
				  </div>
				  <!-- sidebar end -->
    
				<!--</div>
			</div>
		</div>-->
		<!-- ========== Left Sidebar end ========== -->
		
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
					<div class="card-box">
						
                                                    <br/>
						    <div class="am-g">
					<!-- Row start -->
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['zhuanjia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<form class="am-form" action="<?php echo @__CONTROLLER__;?>
/z_choose" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="z_code" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['z_code'];?>
">
					<input type="hidden" name="z_name" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['z_name'];?>
">
					<input type="hidden" name="day" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['day'];?>
">
						<div class="am-u-md-3">
							<div class="card-box widget-user">
                                <div>
                                    <img src="/hospital/Public/img/avatar-3.jpg" class="img-responsive img-circle" alt="user">
                                    <div class="wid-u-info">

                                        <p class="m-t-0 m-b-5 font-600" ><?php echo $_smarty_tpl->tpl_vars['v']->value['z_name'];?>
</p>
                                        <p class="text-muted m-b-5 font-13" ><?php echo $_smarty_tpl->tpl_vars['v']->value['z_jianjie'];?>
</p>
                                        <small class="text-warning"><b >坐诊时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['day'];?>
</b></small><br/><br/>
										<select name="time">
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 08:00:00"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 08:00:00</option>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 09:00:00"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 09:00:00</option>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 10:00:00"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 10:00:00</option>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 11:00:00"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 11:00:00</option>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 14:00:00"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 14:00:00</option>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 15:00:00"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 15:00:00</option>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 16:00:00"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
 16:00:00</option>
										</select>
                                        <input class="am-btn am-btn-default" type="submit" value="选择" style="float: right"></input>
                                    </div>
                                </div>
                            </div>
						</div>
						</form>
					<?php } ?>
						
					</div>			  
						<br/><br/>
                                               
						
					</div>	
	

                        </div>   
                </div>                                 
		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{ target: '#admin-offcanvas' }"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="/hospital/Public/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="/hospital/Public/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/hospital/Public/js/app.js" ></script>
		<script type="text/javascript" src="/hospital/Public/js/blockUI.js" ></script>
	</body>
	
</html>
<?php }} ?>