<?php /* Smarty version Smarty-3.1.6, created on 2017-12-31 10:36:00
         compiled from "./Application/Admin/View\HospitalManager\keshi_manage.html" */ ?>
<?php /*%%SmartyHeaderCode:301205a3cd0113092b2-07646416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb4642a76a4c32316f9f3712dd4bbc655fcabe3f' => 
    array (
      0 => './Application/Admin/View\\HospitalManager\\keshi_manage.html',
      1 => 1514687599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301205a3cd0113092b2-07646416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a3cd0114c681',
  'variables' => 
  array (
    'keshi' => 0,
    'v' => 0,
    'error' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3cd0114c681')) {function content_5a3cd0114c681($_smarty_tpl) {?><!DOCTYPE html>
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
				<div class="card-box">
					<!-- Row start -->
						<div>
							
						</div>		
				        
				      
					  <!-- Row end -->
					  
					  <!-- Row start -->
					  	<div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form" action="<?php echo @__SELF__;?>
" method="POST" enctype="multipart/form-data">
              <table style="margin: 0; border: 0;">
              <thead>
              	<tr>
              		<td >
					<label style="padding-top:20px; padding-bottom:20px;padding-right: 30px;padding-left: 20px;" for="doc-ipt-phd-1"><font size="4">科室名称</font></label>
					</td>
					<td>
					 	<select name="keshi" style="width: 130px;padding-right: 20px;height: 34px;font-size:15px; font-family:微软雅黑;">
					 	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keshi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>

                        	<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['k_code'];?>
" style="font-size:12px; font-family:微软雅黑;" ><?php echo $_smarty_tpl->tpl_vars['v']->value['k_name'];?>
</option>
					 	
						<?php } ?>					      	
						</select>
					</td>
					<td style="padding-top:20px; padding-bottom:20px;padding-right: 30px;padding-left: 30px;">
						<input class="am-btn am-btn-default" type="submit" value="查看"></input>
						<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
					</td>
				</tr>
				
              </thead>
              
              </table>
            </div>
     </form>
            <form class="am-form" action="<?php echo @__CONTROLLER__;?>
/keshi_add" method="POST" enctype="multipart/form-data">    
              <div> 
              	<span style="padding-left: 12px;">成员管理</span>
             <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-id">序号</th><th class="table-title">专家姓名</th><th class="table-type">擅长领域</th><th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['z_name'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['field'];?>
</td>
                
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <a class="am-btn am-btn-default am-btn-xs am-text-secondary" 
                      href="<?php echo @__CONTROLLER__;?>
/keshi_edit/z_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['z_code'];?>
">
                      <span class="am-icon-pencil-square-o"></span> 编辑</a>
                      <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"
                      href="<?php echo @__CONTROLLER__;?>
/delete/z_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['z_code'];?>
/z_name/<?php echo $_smarty_tpl->tpl_vars['v']->value['z_name'];?>
" onclick="if(confirm('确定要删除吗？')) return true; else return false;"><span class="am-icon-trash-o"></span> 删除</a>
                    </div>
                  </div>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
            </div>
           </th>
           	<th style="vertical-align:bottom;">
             <div>
            	<div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs" style="float: right;">
                      <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>添加</button>
                    </div>
             </div>
             </th>
            </tr>
            </table>
            </div> 
  
             

      </div>
					  <!-- Row end -->
					  
					</div>
				
				</form>
				
				
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