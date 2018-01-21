<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 09:06:26
         compiled from "./Application/Admin/View\Admin\add.html" */ ?>
<?php /*%%SmartyHeaderCode:224785a50203137b097-43738455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd281bdd1563edd2643b6e25cce949f94a182b255' => 
    array (
      0 => './Application/Admin/View\\Admin\\add.html',
      1 => 1515200774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224785a50203137b097-43738455',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a5020314750d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5020314750d')) {function content_5a5020314750d($_smarty_tpl) {?><HTML>
	<HEAD>
		<meta http-equiv="Content-Language" content="zh-cn">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<LINK href="/niit/Public/css1/Style1.css" type="text/css" rel="stylesheet">
		
		
		
		
	</HEAD>
	
	<body>
		<form id="userAction_save_do" name="Form1" action="<?php echo @__SELF__;?>
" method="post">
			
			&nbsp;
			<table cellSpacing="1" cellPadding="5" width="100%" align="center" bgColor="#eeeeee" style="border: 1px solid #8ba7e3" border="0">
				<tr>
					<td class="ta_01" align="center" bgColor="#afd1f3" colSpan="4"
						height="26">
						<strong><STRONG>添加管理员</STRONG>
						</strong>
					</td>
				</tr>

				<tr >
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						管理员用户名：
					</td>
					<td class="ta_01" bgColor="#ffffff" colspan="8">
						<input type="text" name="username" value="" id="userAction_save_do_logonName" class="bg"/>
					</td>
				</tr>
				
				<tr >
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						管理员密码：
					</td>
					<td class="ta_01" bgColor="#ffffff" colspan="3">
						<input type="text" name="password" value="" id="userAction_save_do_logonName" class="bg"/>
					</td>
				</tr>
			
				<tr>
					<td class="ta_01" style="WIDTH: 100%" align="center"
						bgColor="#f5fafe" colSpan="4">
						<button type="submit" id="userAction_save_do_submit" value="确定" class="button_ok">
							&#30830;&#23450;
						</button>

						<FONT face="宋体">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</FONT>
						<button type="reset" value="重置" class="button_cancel">&#37325;&#32622;</button>

						<FONT face="宋体">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</FONT>
						<INPUT class="button_ok" type="button" onclick="history.go(-1)" value="返回"/>
						<span id="Label1"></span>
					</td>
				</tr>
			</table>
		</form>
	</body>
</HTML><?php }} ?>