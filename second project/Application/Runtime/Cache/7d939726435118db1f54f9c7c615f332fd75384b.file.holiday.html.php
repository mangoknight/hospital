<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 14:41:08
         compiled from "./Application/Admin/View\Doctor\holiday.html" */ ?>
<?php /*%%SmartyHeaderCode:274705a506ed4854eb9-57793699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d939726435118db1f54f9c7c615f332fd75384b' => 
    array (
      0 => './Application/Admin/View\\Doctor\\holiday.html',
      1 => 1515220710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274705a506ed4854eb9-57793699',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a506ed4a5892',
  'variables' => 
  array (
    'holiday' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a506ed4a5892')) {function content_5a506ed4a5892($_smarty_tpl) {?><HTML>
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
						<strong><STRONG>请假管理</STRONG>
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

								<td align="center" width="18%">序号</td>

								<td align="center" width="17%">医生名称</td>
								<td align="center" width="17%">所属医院</td>
								<td align="center" width="17%">请假日期</td>
								<td align="center" width="17%">状态</td>
								<td width="7%" align="center">同意</td>
								<td width="7%" align="center">拒绝</td>
							</tr>





							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['holiday']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['dname'];?>
</td>
									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['hname'];?>
</td>
									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['hoday'];?>
</td>

									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['hostatus'];?>
</td>


									<td align="center" style="HEIGHT: 50px"><a
										href="<?php echo @__CONTROLLER__;?>
/enter/hoid/<?php echo $_smarty_tpl->tpl_vars['v']->value['hoid'];?>
">
											<img
											src="/niit/Public/images1/i_edit.gif"
											border="0" style="CURSOR: hand">
									</a></td>

									<td align="center" style="HEIGHT: 50px"><a
										href="<?php echo @__CONTROLLER__;?>
/cancel/hoid/<?php echo $_smarty_tpl->tpl_vars['v']->value['hoid'];?>
"
										> <img
											src="/niit/Public/images1/i_del.gif"
											width="16" height="16" border="0" style="CURSOR: hand">
									</a></td>
								</tr>

							<?php } ?>





						</table>
					</td>
				</tr>
			</table>
		
			
			
		</form>
	</body>
</HTML><?php }} ?>