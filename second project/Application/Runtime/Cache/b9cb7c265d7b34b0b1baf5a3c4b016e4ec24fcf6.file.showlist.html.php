<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 09:02:38
         compiled from "./Application/Admin/View\Admin\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:241515a4f655f5b4030-38438602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9cb7c265d7b34b0b1baf5a3c4b016e4ec24fcf6' => 
    array (
      0 => './Application/Admin/View\\Admin\\showlist.html',
      1 => 1515200493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241515a4f655f5b4030-38438602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4f655f72720',
  'variables' => 
  array (
    'admin' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f655f72720')) {function content_5a4f655f72720($_smarty_tpl) {?><HTML>
<HEAD>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/niit/Public/css1/Style1.css"
	rel="stylesheet" type="text/css" />
<script language="javascript"
	src="/niit/Public/js1/public.js"></script>


<style type="text/css">

body {
margin: 0;
padding: 0;
line-height: 1.5em;
        font-family: "Times New Roman", Times, serif;
font-size: 16px;
        color: #000000;
background: #f2e7ca url(/niit/Public/images1/templatemo_body.jpg) top center no-repeat;

}

</style>	
		
	
</HEAD>
<body>
	<table cellSpacing="1" cellPadding="0" width="100%" align="center"
		bgColor="#f5fafe" border="0">
		<TBODY>
			<tr>
				<td class="ta_01" align="center" bgColor="#afd1f3"><strong>管理员列表</strong>
				</TD>
			</tr>
			<tr>
				<td class="ta_01" align="right">
					<a type="button" id="add" name="add" value="添加"
						class="button_add" href="<?php echo @__CONTROLLER__;?>
/add/" >
						&#28155;&#21152;</a>

				</td>
			</tr>
			<tr>
				<td class="ta_01" align="center" bgColor="#f5fafe">
					<table cellspacing="0" cellpadding="1" rules="all"
						bordercolor="gray" border="1" id="DataGrid1"
						style="BORDER-RIGHT: gray 1px solid; BORDER-TOP: gray 1px solid; BORDER-LEFT: gray 1px solid; WIDTH: 100%; WORD-BREAK: break-all; BORDER-BOTTOM: gray 1px solid; BORDER-COLLAPSE: collapse; BACKGROUND-COLOR: #f5fafe; WORD-WRAP: break-word">
						<tr
							style="FONT-WEIGHT: bold; FONT-SIZE: 24pt; HEIGHT: 50px; BACKGROUND-COLOR: #afd1f3">

							<td align="center" width="7%">序号</td>
							<td align="center" width="17%">管理员用户名</td>
							<td align="center" width="17%">管理员密码</td>
							<td width="7%" align="center">编辑</td>
							<td width="7%" align="center">删除</td>
						</tr>
						
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
						
							<tr onmouseover="this.style.backgroundColor = 'white'"
								onmouseout="this.style.backgroundColor = '#F5FAFE';">
								<td style="FONT-SIZE: 14pt;CURSOR: hand; HEIGHT: 50px" align="center"
									width="18%"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
								<td style="FONT-SIZE: 14pt;CURSOR: hand; HEIGHT: 50px" align="center"
									width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
								<td style="FONT-SIZE: 14pt;CURSOR: hand; HEIGHT: 50px" align="center"
									width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['password'];?>
</td>
								<td align="center" style="FONT-SIZE: 16pt;HEIGHT: 50px"><a
									href="<?php echo @__CONTROLLER__;?>
/edit/name/<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
">
										<img
										src="/niit/Public/images1/i_edit.gif"
										border="0" style="CURSOR: hand">
								</a></td>

								<td align="center" style="HEIGHT: 50px"><a
										href="<?php echo @__CONTROLLER__;?>
/delete/name/<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
"
										onclick="if(confirm('确定要删除吗？')) return true; else return false;"> <img
											src="/niit/Public/images1/i_del.gif"
											width="16" height="16" border="0" style="CURSOR: hand">
									</a></td>
							</tr>
							
						<?php } ?>
							
					</table>
						
				</td>
			</tr>
		</TBODY>
	</table>
</body>
</HTML>

<?php }} ?>