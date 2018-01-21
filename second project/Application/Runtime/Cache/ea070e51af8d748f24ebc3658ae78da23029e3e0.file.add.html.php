<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 13:14:20
         compiled from "./Application/Admin/View\Doctor\add.html" */ ?>
<?php /*%%SmartyHeaderCode:100365a505b2c3fb256-46829290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea070e51af8d748f24ebc3658ae78da23029e3e0' => 
    array (
      0 => './Application/Admin/View\\Doctor\\add.html',
      1 => 1515215559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100365a505b2c3fb256-46829290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hospital' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a505b2c59d23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a505b2c59d23')) {function content_5a505b2c59d23($_smarty_tpl) {?><HTML>
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
						<strong><STRONG>添加医生</STRONG>
						</strong>
					</td>
				</tr>

				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医生名称：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						<input type="text" name="dname" value="" id="userAction_save_do_logonName" class="bg"/>
					</td>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医生科室：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						
						<select name="ddepartment">
							<option value="内科">内科</option>
							<option value="外科">外科</option>
							<option value="妇产科">妇产科</option>
							<option value="中医科">中医科</option>
							<option value="心理科">心理科</option>
							
							
						</select>
					</td>
				</tr>
				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						坐诊时间：
					</td>
					<td type="hideen" class="ta_01" bgColor="#ffffff">
						<select id="dday" name="dday">
							<option value="1">星期一</option>
							<option value="2">星期二</option>
							<option value="3">星期三</option>
							<option value="4">星期四</option>
							<option value="5">星期五</option>
							
						</select>
					</td>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医生职称：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						
						<select name="dtype">
							<option value="医师">医师</option>
							<option value="主治医师">主治医师</option>
							<option value="副主任医师">副主任医师</option>
							<option value="主任医师">主任医师</option>
							
							
						</select>
					</td>
				</tr>
				
				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						选择医院：
					</td>
					<td class="ta_01" bgColor="#ffffff" colspan="3">
						<select name="dhospital">
							
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hospital']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>

								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['hname'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['hname'];?>
</option>

							<?php } ?>
							
							
						</select>
					</td>
				</tr>
				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医生简介：
					</td>
					<td class="ta_01" bgColor="#ffffff" colspan="3">
						<textarea name="ddescription" rows="10" cols="100"></textarea>
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