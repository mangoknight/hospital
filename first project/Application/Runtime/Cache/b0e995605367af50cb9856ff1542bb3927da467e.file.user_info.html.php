<?php /* Smarty version Smarty-3.1.6, created on 2018-01-01 17:10:29
         compiled from "./Application/Home/View\Guahao\user_info.html" */ ?>
<?php /*%%SmartyHeaderCode:51985a41c8da81e6c1-29311558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0e995605367af50cb9856ff1542bb3927da467e' => 
    array (
      0 => './Application/Home/View\\Guahao\\user_info.html',
      1 => 1514797404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51985a41c8da81e6c1-29311558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a41c8da9dfaa',
  'variables' => 
  array (
    'name' => 0,
    'power' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a41c8da9dfaa')) {function content_5a41c8da9dfaa($_smarty_tpl) {?><!DOCTYPE html>
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
        <div class="am-u-sm-12">
         
            <div> 
            <table class="am-table am-table-striped am-table-hover table-main">

            <div class="am-form-group">                                                       
						    		       
                        <div>
              <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              	<tr>
              		<th>
				 <label >用户名称</label>
											     <p><?php echo $_SESSION['name'];?>
</p>
					</th>
				
				<th>
				 <label >权限</label>
			      							<a href="<?php echo @__CONTROLLER__;?>
/checkPower"><?php echo $_smarty_tpl->tpl_vars['power']->value;?>
</a>
											    
					</th>
				</tr>
              </thead>
              </table>
            </div>
        

						    </div>

           <br/><br/><br/
						
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
	
</html><?php }} ?>