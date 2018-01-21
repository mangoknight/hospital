<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 11:00:48
         compiled from "./Application/Admin/View\Hospital\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:237145a5034511886d5-03009528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c512a18f113e6c8abb5a331d8ad9fbd1c6de00e' => 
    array (
      0 => './Application/Admin/View\\Hospital\\showlist.html',
      1 => 1515207640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237145a5034511886d5-03009528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a5034513da35',
  'variables' => 
  array (
    'hospital' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5034513da35')) {function content_5a5034513da35($_smarty_tpl) {?><HTML>
<HEAD>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/niit/Public/css1/Style1.css"
	rel="stylesheet" type="text/css" />
<script language="javascript"
	src="/niit/Public/js1/public.js"></script>



<script language="javascript"
	src="/niit/Public/js1/public.js"></script>
<script type="text/javascript"
	src="/niit/Public/js1/jquery-1.11.3.min.js"></script>


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

	<form id="Form1" name="Form1"
		action="<?php echo @__SELF__;?>
"
		method="post">
		<table cellSpacing="1" cellPadding="0" width="100%" align="center"
			bgColor="#f5fafe" border="0">
			<TBODY>
				<tr>
					<td class="ta_01" align="center" bgColor="#afd1f3"><strong>医院列表</strong>
					</TD>
				</tr>
				<tr style="FONT-WEIGHT: bold">
					<td style="height: 40px" class="ta_01" align="center">医院名称<input
						id="hname" type="text" width="17%"
						style="margin-right: 20px; margin-left: 20px" name="hname">
						医院等级<select id="hgrade" width="17%" style="margin-right: 20px"
						name="hgrade">
							<option value=""></option>
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
					</select> 所在城市<select width="17%" id="hcity" style="margin-right: 20px"
						name="hcity">
							<option value=""></option>
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



					</select> <input style="FONT-WEIGHT: bold; maigin-left: 100px" type="submit"
						value="提交">





						<a style="FONT-WEIGHT: bold; margin-left: 570px"
							type="button" id="add" name="add" value="添加" class="button_add"
							href="<?php echo @__CONTROLLER__;?>
/add" 
							>&#28155;&#21152;</a>

					</td>
				</tr>
				<tr>
					<td class="ta_01" align="center" bgColor="#f5fafe">
						<table cellspacing="0" cellpadding="1" rules="all"
							bordercolor="gray" border="1" id="DataGrid1"
							style="BORDER-RIGHT: gray 1px solid; BORDER-TOP: gray 1px solid; BORDER-LEFT: gray 1px solid; WIDTH: 100%; WORD-BREAK: break-all; BORDER-BOTTOM: gray 1px solid; BORDER-COLLAPSE: collapse; BACKGROUND-COLOR: #f5fafe; WORD-WRAP: break-word">
							<tr
								style="FONT-WEIGHT: bold; FONT-SIZE: 18pt; HEIGHT: 50px; BACKGROUND-COLOR: #afd1f3">

								<td align="center" width="18%">序号</td>

								<td align="center" width="17%">医院名称</td>
								<td align="center" width="17%">医院等级</td>
								<td align="center" width="17%">医院城市</td>
								<td align="center" width="17%">医院类型</td>
								<td width="7%" align="center">编辑</td>
								<td width="7%" align="center">删除</td>
							</tr>





							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hospital']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>

								<tr onmouseover="this.style.backgroundColor = 'white'"
									onmouseout="this.style.backgroundColor = '#F5FAFE';">
									<td style="FONT-SIZE: 14pt; CURSOR: hand; HEIGHT: 50px"
										align="center" width="18%"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>

									<td style="FONT-SIZE: 14pt; CURSOR: hand; HEIGHT: 50px"
										align="center" width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['hname'];?>
</td>
									<td style="FONT-SIZE: 14pt; CURSOR: hand; HEIGHT: 50px"
										align="center" width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['hgrade'];?>
</td>
									<td style="FONT-SIZE: 14pt; CURSOR: hand; HEIGHT: 50px"
										align="center" width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['hcity'];?>
</td>

									<td style="FONT-SIZE: 14pt; CURSOR: hand; HEIGHT: 50px"
										align="center" width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['htype'];?>
</td>


									<td align="center" style="HEIGHT: 50px"><a
										href="<?php echo @__CONTROLLER__;?>
/edit/hname/<?php echo $_smarty_tpl->tpl_vars['v']->value['hname'];?>
">
											<img
											src="/niit/Public/images1/i_edit.gif"
											border="0" style="CURSOR: hand">
									</a></td>

									<td align="center" style="HEIGHT: 50px"><a
										href="<?php echo @__CONTROLLER__;?>
/delete/hname/<?php echo $_smarty_tpl->tpl_vars['v']->value['hname'];?>
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
	</form>
</body>
</HTML>

<?php }} ?>