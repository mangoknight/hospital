<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 11:03:30
         compiled from "./Application/Admin/View\Hospital\add.html" */ ?>
<?php /*%%SmartyHeaderCode:87815a503c82d770f2-47134317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ff4fb63fc87524eac2639b7c9bf23c46ebe317' => 
    array (
      0 => './Application/Admin/View\\Hospital\\add.html',
      1 => 1515207806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87815a503c82d770f2-47134317',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a503c8303c5f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a503c8303c5f')) {function content_5a503c8303c5f($_smarty_tpl) {?><HTML>
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
						医院名称：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						<input type="text" name="hname" value="" id="userAction_save_do_logonName" class="bg"/>
					</td>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医院等级：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						
						<select name="hgrade">
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
						<input type="text" name="haddress" value="" id="userAction_save_do_logonName" class="bg"/>
					</td>
					<td width="18%" align="center" bgColor="#f5fafe" class="ta_01">
						医院分类：
					</td>
					<td class="ta_01" bgColor="#ffffff">
						
						<select name="htype">
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
						<select name="hcity">
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
						<textarea name="hdescription" rows="10" cols="100"></textarea>
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