<?php /* Smarty version Smarty-3.1.6, created on 2018-01-07 11:40:53
         compiled from "./Application/Admin/View\DoctorManager\appoint.html" */ ?>
<?php /*%%SmartyHeaderCode:273165a5196c55cb6b1-95029229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dc456764aff2df0e16fbbbf92f25f56a48838f8' => 
    array (
      0 => './Application/Admin/View\\DoctorManager\\appoint.html',
      1 => 1515296315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273165a5196c55cb6b1-95029229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appoint' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a5196c57138f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5196c57138f')) {function content_5a5196c57138f($_smarty_tpl) {?><HTML>
	<HEAD>
		<meta http-equiv="Content-Language" content="zh-cn">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<LINK href="/niit/Public/css1/Style1.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="/niit/Public/js1/jquery-1.11.3.min.js"></script>
		
	</HEAD>
	
	<body>
		<!--  -->
		<form id="userAction_save_do" name="Form1" action="<?php echo @__SELF__;?>
" method="post">
			&nbsp;
			
			
			
			<table cellSpacing="1" cellPadding="5" width="100%" align="center" bgColor="#eeeeee" style="border: 1px solid #8ba7e3" border="0">
				<tr>
					<td class="ta_01" align="center" bgColor="#afd1f3" colSpan="4"
						height="26">
						<strong><STRONG>挂号信息查看</STRONG>
						</strong>
					</td>
				</tr>

				
				<tr>
					<td class="ta_01" align="center" bgColor="#f5fafe">
						<table cellspacing="0" cellpadding="1" rules="all"
							bordercolor="gray" border="1" id="DataGrid1"
							style="BORDER-RIGHT: gray 1px solid; BORDER-TOP: gray 1px solid; BORDER-LEFT: gray 1px solid; WIDTH: 100%; WORD-BREAK: break-all; BORDER-BOTTOM: gray 1px solid; BORDER-COLLAPSE: collapse; BACKGROUND-COLOR: #f5fafe; WORD-WRAP: break-word">
							<tr
								style="FONT-WEIGHT: bold; FONT-SIZE: 12pt; HEIGHT: 50px; BACKGROUND-COLOR: #afd1f3">

								<td align="center" width="9%">序号</td>

								<td align="center" width="31%">预约时间</td>
								<td align="center" width="43%">病情描述</td>
								<td align="center" width="17%">患者姓名</td>
							</tr>





							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['appoint']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>

								<tr onmouseover="this.style.backgroundColor = 'white'"
									onmouseout="this.style.backgroundColor = '#F5FAFE';">
									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="18%"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>

									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</td>
									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['illness'];?>
</td>
									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
									
								</tr>

							<?php } ?>





						</table>
					</td>
				</tr>
			</table>
		
			
			
		</form>
	</body>
</HTML><?php }} ?>