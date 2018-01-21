<?php /* Smarty version Smarty-3.1.6, created on 2017-12-31 10:35:57
         compiled from "./Application/Admin/View\HospitalManager\hos_info_manage.html" */ ?>
<?php /*%%SmartyHeaderCode:66985a38812c2bd314-76792915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b92e291f4305e96aba9d3f160b6d8f8f4c039f4e' => 
    array (
      0 => './Application/Admin/View\\HospitalManager\\hos_info_manage.html',
      1 => 1514687587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66985a38812c2bd314-76792915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a38812c472b8',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38812c472b8')) {function content_5a38812c472b8($_smarty_tpl) {?><!DOCTYPE html>
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

					<li><h4 class="page-title">医院信息管理</h4></li>
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
				<div class="card-box">
					<!-- Row start -->
						<div>
							
						</div>		
				        
				      
					  <!-- Row end -->
					  
					  <!-- Row start -->
					  	<div class="am-g">
        <div class="am-u-sm-12" >
          <form class="am-form" action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
          	<div>
              <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              	<tr>
              		<th>
					<label class="am-u-md-2 am-md-text-right am-padding-left-0" for="doc-ipt-phd-1"><font size="4">医院信息</font> </label>
					<textarea class="am-u-md-10 form-control" rows="5" id="doc-ta-1" name="hos_info"><?php echo $_smarty_tpl->tpl_vars['info']->value['hos_info'];?>
</textarea>
					</th>
				</tr>
              </thead>
              </table>
            </div>
             <div>
              <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              	<tr>
              		<th>
					<label class="am-u-md-2 am-md-text-right am-padding-left-0" for="doc-ipt-phd-1"><font size="4">医院荣誉</font></label>
					<textarea class="am-u-md-10 form-control" rows="5" id="doc-ta-1" name="hos_honor"><?php echo $_smarty_tpl->tpl_vars['info']->value['hos_honor'];?>
</textarea>
					</th>
				</tr>
              </thead>
              </table>
            </div>
            <div>
              <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              	<tr>
              		<th>
					<label class="am-u-md-2 am-md-text-right am-padding-left-0" for="doc-ipt-phd-1"><font size="4">联系方式</font> </label>
					<input class="am-u-md-10 form-control"  id="doc-ipt-phd-1"  name="phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
"></input>
					</th>
				</tr>
              </thead>
              </table>
            </div>
            
                
               
  
             <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs" style="float: right;">
                     <input class="am-btn am-btn-default" type="submit" value="修改"></input>
                    </div>
             </div>
       </form>
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
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{  target: '#admin-offcanvas'   }"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>
		
		<script type="text/javascript" src="/hospital/Public/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="/hospital/Public/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/hospital/Public/js/app.js" ></script>
		<script type="text/javascript" src="/hospital/Public/js/blockUI.js" ></script>
	</body>
	
</html>
<?php }} ?>