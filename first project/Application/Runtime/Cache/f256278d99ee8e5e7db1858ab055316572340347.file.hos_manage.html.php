<?php /* Smarty version Smarty-3.1.6, created on 2018-01-01 17:13:12
         compiled from "./Application/Admin/View\SystemManager\hos_manage.html" */ ?>
<?php /*%%SmartyHeaderCode:58105a25f6400e1221-19720141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f256278d99ee8e5e7db1858ab055316572340347' => 
    array (
      0 => './Application/Admin/View\\SystemManager\\hos_manage.html',
      1 => 1514687199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58105a25f6400e1221-19720141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a25f6400e50b',
  'variables' => 
  array (
    'error' => 0,
    'info' => 0,
    'v' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25f6400e50b')) {function content_5a25f6400e50b($_smarty_tpl) {?><!DOCTYPE html>
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
				<div class="card-box">
					<!-- Row start -->
								<div class="am-u-md-6">
										<form class="am-form am-text-sm" action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
											<table style="margin:0 ;border: 0; padding-bottom: 20px;">
												<tr>
												  <td style="padding-top:10px; padding-bottom:10px;padding-left: 10px;">
											      <label  style="width:80px;"for="doc-ipt-text-1"><font size="4">医院代码</font></label>
										          </td>
											      <td style="padding-top:10px; padding-bottom:10px;padding-right: 40px;padding-left: 10px;">
											      	<input style="width:300px; height: 35px; font-size: 15px;"class=""  id="doc-ipt-text-1" placeholder="输入医院代码" name="hos_code"></input>
											      </td>
					
											      </tr>
											      <tr>
											      	<td style="padding-top:10px; padding-bottom:10px;padding-left: 10px;">
											      <label  style="width:80px;"class="" for="doc-ipt-text-1"><font size="4">医院名称</font></label></td>
											      <td style="padding-top:10px; padding-bottom:10px;padding-right: 40px;padding-left: 10px;">
											      	<input style="width:300px; height: 35px; font-size: 15px;"class=""  id="doc-ipt-text-1" placeholder="输入医院名称" name="hos_name"></input></td>
											      
											      	</td>
											      </tr>
											      </table>
											      <table style="margin: 0;border: 0;">
											      <tr>
											      <td style="padding-top:10px; padding-bottom:10px;padding-left: 10px;">
											      	<label class="" for="doc-ipt-text-1"><font size="4">医院级别</font></label>
											      </td>
											      <td style="padding-top:10px; padding-bottom:10px;padding-left: 20px;">
											      	<select name="level" style="width: 120px;padding: 0px;
                                                                                height: 30px;font-size:14px; font-family:微软雅黑;">
                                                    <option value="null" style="font-size:12px; font-family:微软雅黑;">选择医院级别</option>
											      	<option value="三级甲等" style="font-size:12px; font-family:微软雅黑;">三级甲等</option>
											      	<option value="三级乙等" style="font-size:12px; font-family:微软雅黑;">三级乙等</option>
											      	<option value="二级甲等" style="font-size:12px; font-family:微软雅黑;">二级甲等</option>
											      </select>
											      </td>
											      <td style="width: 200px;padding-top:10px; padding-bottom:10px;padding-left: 20px;">
											      <span style="color:red;font-family: 微软雅黑; font-size: 15px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
											      </td>
											      </tr>
											      <tr>
											      <td style="padding-top:0px; padding-bottom:0px;padding-left: 10px;">
										   <input class="am-btn am-btn-default" type="submit" value="搜索"></input></td>
										   </tr>
										 
								         </table>
										</form>
										
									</div>
				        
				      
					  <!-- Row end -->
					  
					  <!-- Row start -->
		<div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th style="width: 130px;padding-right: 10px;" class="table-id">医院代码</th><th style="padding-right: 10px;" class="table-title">医院名称</th><th class="table-type">医院级别</th><th class="table-type">医院地址</th><th class="table-set">操作</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['hos_code'];?>
</td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['hos_name'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['level'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['addr'];?>
</td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <a class="am-btn am-btn-default am-btn-xs am-text-secondary" 
                      href="<?php echo @__CONTROLLER__;?>
/hos_edit/hos_code/<?php echo $_smarty_tpl->tpl_vars['v']->value['hos_code'];?>
">
                      <span class="am-icon-pencil-square-o"></span> 编辑</a>
                      <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"
                      href="<?php echo @__CONTROLLER__;?>
/delete/admin_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
/admin_name/<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_name'];?>
" onclick="if(confirm('确定要删除吗？')) return true; else return false;"><span class="am-icon-trash-o"></span> 删除</a>
                    </div>
                  </div>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
            <div class="am-cf" style="text-align: center;">
             共 <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 条记录
            </div>
            <hr />
            
          </form>
        </div>

      </div>
					  <!-- Row end -->
					  
					</div>
				
				
				
				
			</div>
			

		</div>
	</div>
		<!-- end right Content here -->
		<!--</div>-->
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