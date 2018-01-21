<?php /* Smarty version Smarty-3.1.6, created on 2018-01-06 14:38:10
         compiled from "./Application/Admin/View\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:326465a4eeb213eebd0-30003428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e78eb414bd5ccefea74bfad4105e0be48c2d9c5' => 
    array (
      0 => './Application/Admin/View\\Index\\left.html',
      1 => 1515216049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326465a4eeb213eebd0-30003428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a4eeb21532f9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4eeb21532f9')) {function content_5a4eeb21532f9($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>菜单</title>
<link href="/niit/Public/css1/left.css" rel="stylesheet" type="text/css"/>
<link rel="StyleSheet" href="/niit/Public/css1/dtree.css" type="text/css" />
</head>
<body>
<table  width="100" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="12"></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td>
<div  class="dtree">

	<a hight:50px href="javascript: d.openAll();">展开所有</a> | <a href="javascript: d.closeAll();">关闭所有</a>
	
	
	
	<script type="text/javascript" src="/niit/Public/js1/dtree.js"></script>
	<script type="text/javascript">
	
		d = new dTree('d');
		d.add('01',-1,'系统菜单树');
		d.add('0102','01','管理员管理','','','mainFrame');
		d.add('010201','0102','管理员管理','<?php echo @__MODULE__;?>
/Admin/showlist','','mainFrame');
		d.add('0104','01','医院管理');
		d.add('010401','0104','医院管理','<?php echo @__MODULE__;?>
/Hospital/showlist','','mainFrame');
		d.add('0105','01','医生管理');
		d.add('010501','0105','医生管理','<?php echo @__MODULE__;?>
/Doctor/showlist','','mainFrame');
		d.add('010502','0105','请假管理','<?php echo @__MODULE__;?>
/Doctor/holiday','','mainFrame');
		document.write(d);
		
	</script>
</div>	</td>
  </tr>
</table>
</body>
</html>
<?php }} ?>