<?php /* Smarty version Smarty-3.1.6, created on 2018-01-07 11:40:51
         compiled from "./Application/Admin/View\DoctorManager\left.html" */ ?>
<?php /*%%SmartyHeaderCode:146855a509f485e5b72-36117120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1d27b06c7a65e602fa9f85903ebf361a92a0336' => 
    array (
      0 => './Application/Admin/View\\DoctorManager\\left.html',
      1 => 1515296323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146855a509f485e5b72-36117120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a509f486d01a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a509f486d01a')) {function content_5a509f486d01a($_smarty_tpl) {?><html>
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
		d.add('0102','01','请假申请','','','mainFrame');
		d.add('010201','0102','请假申请','<?php echo @__CONTROLLER__;?>
/holiday','','mainFrame');
		d.add('0104','01','挂号管理');
		d.add('010401','0104','挂号管理','<?php echo @__CONTROLLER__;?>
/appoint','','mainFrame');
		
		document.write(d);
		
	</script>
</div>	</td>
  </tr>
</table>
</body>
</html>
<?php }} ?>