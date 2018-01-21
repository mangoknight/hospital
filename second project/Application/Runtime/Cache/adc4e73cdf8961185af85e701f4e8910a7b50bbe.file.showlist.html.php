<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 13:14:18
         compiled from "./Application/Admin/View\Doctor\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:230475a504c52c5fdf4-73992227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc4e73cdf8961185af85e701f4e8910a7b50bbe' => 
    array (
      0 => './Application/Admin/View\\Doctor\\showlist.html',
      1 => 1515215655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230475a504c52c5fdf4-73992227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a504c52ec918',
  'variables' => 
  array (
    'hospital' => 0,
    'v' => 0,
    'doctor' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a504c52ec918')) {function content_5a504c52ec918($_smarty_tpl) {?><HTML>
<HEAD>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/niit/Public/css1/Style1.css"
	rel="stylesheet" type="text/css" />
<link href="/niit/Public/css1/mypage.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<script src="/niit/Public/js1/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/niit/Public/js1/bootstrap.min.js" type="text/javascript"></script>
<!-- 引入自定义css文件 style.css -->
<link rel="stylesheet" href="/niit/Public/css1/style.css" type="text/css" />

<script language="javascript"
	src="/niit/Public/js1/public.js"></script>



<script language="javascript"
	src="/niit/Public/js1/public.js"></script>
<script type="text/javascript"
	src="/niit/Public/js1/jquery-1.11.3.min.js"></script>




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
					<td class="ta_01" align="center" bgColor="#afd1f3"><strong>医生列表</strong>
					</TD>
				</tr>
				<tr style="FONT-WEIGHT: bold">
					<td style="height: 40px" class="ta_01" align="center">医生名称<input
						id="hname" type="text" style="margin-right: 20px" name="dname">
						所属医院<select id="hgrade" style="margin-right: 20px"
						name="dhospital">
							<option value=""></option>

							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hospital']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>

								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['hname'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['hname'];?>
</option>

							<?php } ?>



					</select> 所属科室<select id="hcity" style="margin-right: 20px"
						name="ddepartment">
							<option value=""></option>
							<option value="内科">内科</option>
							<option value="外科">外科</option>
							<option value="妇产科">妇产科</option>
							<option value="中医科">中医科</option>
							<option value="心理科">心理科</option>



					</select> <input type="submit" value="提交">





						<a style="FONT-WEIGHT: bold; margin-left: 570px"
							 id="add" name="add" value="添加" class="button_add"
							href="<?php echo @__CONTROLLER__;?>
/add">&#28155;&#21152;</a>

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
								<td align="center" width="17%">所属科室</td>
								<td align="center" width="17%">职称</td>
								<td width="7%" align="center">编辑</td>
								<td width="7%" align="center">删除</td>
							</tr>





							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['doctor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['dhospital'];?>
</td>
									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['ddepartment'];?>
</td>

									<td style="CURSOR: hand; HEIGHT: 50px" align="center"
										width="17%"><?php echo $_smarty_tpl->tpl_vars['v']->value['dtype'];?>
</td>


									<td align="center" style="HEIGHT: 50px"><a
										href="<?php echo @__CONTROLLER__;?>
/edit/dname/<?php echo $_smarty_tpl->tpl_vars['v']->value['dname'];?>
">
											<img
											src="/niit/Public/images1/i_edit.gif"
											border="0" style="CURSOR: hand">
									</a></td>

									<td align="center" style="HEIGHT: 50px"><a
										href="<?php echo @__CONTROLLER__;?>
/delete/dname/<?php echo $_smarty_tpl->tpl_vars['v']->value['dname'];?>
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

	<!--分页 -->


	 <tr class="content">
                <!--<td colspan="3" bgcolor="#FFFFFF">&nbsp;<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</td>-->
                <td colspan="3" bgcolor="#FFFFFF"><div class="pages">
                        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                </div></td>  
            </tr>



			<!-- <li class="disabled"><a href="#" aria-label="Previous"><span
					aria-hidden="true">&laquo;</span></a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<li><a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span>
			</a></li> -->
		</ul>
	</div>
	<!-- 分页结束 -->


</body>
</HTML>

<?php }} ?>