<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 12:47:14
         compiled from "./Application/Admin/View\Doctor\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:312515a50523eadfe87-97192195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ded5a1fad9445033df6386ef405fe0759dad23af' => 
    array (
      0 => './Application/Admin/View\\Doctor\\edit.html',
      1 => 1515214028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312515a50523eadfe87-97192195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a50523ed4921',
  'variables' => 
  array (
    'doctor' => 0,
    'hospital' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a50523ed4921')) {function content_5a50523ed4921($_smarty_tpl) {?><HTML>
	<HEAD>
		<meta http-equiv="Content-Language" content="zh-cn">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<LINK href="/niit/Public/css1/Style1.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="/niit/Public/js1/jquery-1.11.3.min.js"></script>
		<script type="text/javascript">
		$(function(){
			//回显当前页面的option
			$("#dhospital option[value='<?php echo $_smarty_tpl->tpl_vars['doctor']->value['dhospital'];?>
']").prop("selected",true);
			
			$("#dtype option[value='<?php echo $_smarty_tpl->tpl_vars['doctor']->value['dtype'];?>
']").prop("selected",true);
			
			$("#ddepartment option[value='<?php echo $_smarty_tpl->tpl_vars['doctor']->value['ddepartment'];?>
']").prop("selected",true);
			$("#dday option[value='<?php echo $_smarty_tpl->tpl_vars['doctor']->value['dday'];?>
']").prop("selected",true);
		});
		</script>
	</HEAD>
	
	<body>
		<!--  -->
		<form id="userAction_save_do" name="Form1" action="<?php echo @__SELF__;?>
" method="post">
			&nbsp;
			
			<input type="hidden" name="did" value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['did'];?>
">
			
			<table cellSpacing="1" cellPadding="5" width="100%" align="center" bgColor="#eeeeee" style="border: 1px solid #8ba7e3" border="0">
				<tr>
					<td class="ta_01" align="center" bgColor="#afd1f3" colSpan="4"
						height="26">
						<strong><STRONG>更新医生信息</STRONG>
						</strong>
					</td>
				</tr>

				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医生名称：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						<input type="text" name="dname" value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['dname'];?>
" id="userAction_save_do_logonName" class="bg"/>
					</td>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医生科室：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						
						<select id="ddepartment" name="ddepartment">
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
						
						<select id="dtype" name="dtype">
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
						<select id="dhospital" name="dhospital">
						
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
						<textarea name="ddescription" rows="10" cols="100"><?php echo $_smarty_tpl->tpl_vars['doctor']->value['ddescription'];?>
</textarea>
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