<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 10:48:58
         compiled from "./Application/Admin/View\Hospital\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:15325a50391a3ab974-71957043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '362c5ba4ce789917bed3ecff3dfeecc969614b10' => 
    array (
      0 => './Application/Admin/View\\Hospital\\edit.html',
      1 => 1515206656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15325a50391a3ab974-71957043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hospital' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a50391a5edbf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a50391a5edbf')) {function content_5a50391a5edbf($_smarty_tpl) {?><HTML>
	<HEAD>
		<meta http-equiv="Content-Language" content="zh-cn">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<LINK href="/niit/Hospital/css1/Style1.css" type="text/css" rel="stylesheet">
		
		
		
		
		<script type="text/javascript" src="/niit/Hospital/js1/jquery-1.11.3.min.js"></script>
		
		<script type="text/javascript">
		
			$(function(){
				//回显当前页面的option
				$("#hgrade option[value='<?php echo $_smarty_tpl->tpl_vars['hospital']->value['hgrade'];?>
']").prop("selected",true);
				
				$("#htype option[value='<?php echo $_smarty_tpl->tpl_vars['hospital']->value['htype'];?>
']").prop("selected",true);
				$("#hcity option[value='<?php echo $_smarty_tpl->tpl_vars['hospital']->value['hcity'];?>
']").prop("selected",true);
			});
		
		
			
		</script>
		
		
		
	</HEAD>
	
	<body>
		<!--  -->
		<form id="userAction_save_do" name="Form1" action="<?php echo @__SELF__;?>
" method="post" >
			
			
			<input type="hidden" name="hid" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value['hid'];?>
">
			
			<table cellSpacing="1" cellPadding="5" width="100%" align="center" bgColor="#eeeeee" style="border: 1px solid #8ba7e3" border="0">
				<tr>
					<td class="ta_01" align="center" bgColor="#afd1f3" colSpan="4"
						height="26">
						<strong><STRONG>编辑医院</STRONG>
						</strong>
					</td>
				</tr>

				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医院名称：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						<input type="text" name="hname" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value['hname'];?>
" id="userAction_save_do_logonName" class="bg"/>
					</td>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医院等级：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						
						<select id="hgrade" name="hgrade" >
							<option value="三级特等">三级特等</option>
							<option value="三级甲等">三级甲等</option>
							<option value="三级乙等">三级乙等</option>
							<option value="三级丙等">三级丙等</option>
							<option value="二级甲等">二级甲等</option>
							<option value="二级乙等">二级乙等</option>
							<option value="二级丙等">二级丙等</option>
							<option value="一级甲等">一级甲等</option>
							<option value="一级乙等">一级乙等</option>
							<option value="一级丙等">一级丙等</option>
							
							
						</select>
					</td>
				</tr>
				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医院地址：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						<input type="text" name="haddress" value="<?php echo $_smarty_tpl->tpl_vars['hospital']->value['haddress'];?>
" id="userAction_save_do_logonName" class="bg"/>
					</td>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医院分类：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						
						<select id="htype" name="htype">
							<option value="综合医院">综合医院</option>
							<option value="妇产医院">妇产医院</option>
							<option value="精神医院">精神医院</option>
							<option value="口腔医院">口腔医院</option>
							<option value="整形医院">整形医院</option>
							<option value="中医院">中医院</option>
							
							
						</select>
					</td>
				</tr>
				
				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						选择城市：
					</td>
					<td class="ta_01" bgColor="#ffffff" colspan="3">
						<select  id="hcity" name="hcity">
							<option value="青岛">青岛</option>
							<option value="济南">济南</option>
							<option value="烟台">烟台</option>
							<option value="潍坊">潍坊</option>
							<option value="济宁">济宁</option>
							<option value="淄博">淄博</option>
							<option value="滨州">滨州</option>
							<option value="临沂">临沂</option>
							<option value="东营">东营</option>
							<option value="泰安">泰安</option>
							<option value="菏泽">菏泽</option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医院描述：
					</td>
					<td class="ta_01" bgColor="#ffffff" colspan="3">
						<textarea name="hdescription" rows="10" cols="100"><?php echo $_smarty_tpl->tpl_vars['hospital']->value['hdescription'];?>
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