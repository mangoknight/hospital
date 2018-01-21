<?php /* Smarty version Smarty-3.1.6, created on 2018-01-07 11:20:33
         compiled from "./Application/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:296275a40a00554b368-65252579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8378b70862d866fede2c1372bd9cfe4821690da8' => 
    array (
      0 => './Application/Home/View\\Index\\index.html',
      1 => 1515295197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296275a40a00554b368-65252579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a40a0056e94c',
  'variables' => 
  array (
    'name' => 0,
    'hospital' => 0,
    'v' => 0,
    'doctor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a40a0056e94c')) {function content_5a40a0056e94c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>医院预约</title>
<meta name="Keywords" content="医院预约" />
<meta name="robots" content="All" />
<meta http-equiv="mobile-agent"
	content="format=html5;url=http://m.hnsrmyy.net/" />
<noscript>
	<meta http-equiv="refresh" content="0; url=/noscript.htm" />
</noscript>
<!--[if lt IE 7]><meta http-equiv="refresh" content="0; url=/YouLose.htm" /><![endif]-->
<meta name="Author" content="miraclevision technical team,kunyi" />

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/niit/Public/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/niit/Public/css/normalize.css" type="text/css" />
<link rel="stylesheet" href="/niit/Public/css/index.css" type="text/css" />
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/Kunyi.Respond.min.js" ></script><![endif]-->
<script language="javascript" type="text/javascript"
	src="/niit/Public/js/KunyiHTML5.min.js"></script>
<script language="javascript" type="text/javascript"
	src="/niit/Public/js/Kunyilibrary.js"></script>


<style>
.posirelative {
	position: relative;
}

.select-out-div {
	width: 160px;
	overflow: hidden;
}

select.m-wrap {
	background-color: #ffffff;
	background-image: none !important;
	filter: none !important;
	border: 1px solid #e5e5e5;
	outline: none;
	height: 35px !important;
	line-height: 25px;
}

.select-hide-span {
	height: 25px;
	position: absolute;
	top: 0;
	border-right: 1px solid #e5e5e5;
	right: 0;
	width: 20px !important;
	z-index: 999;
}

.select-show-b {
	border-color: #888 transparent transparent transparent;
	border-style: solid;
	border-width: 5px 4px 0 4px;
	margin-left: -4px;
	margin-top: 10px;
	position: absolute;
}
</style>




</head>
<body>
	<script language="javascript" type="text/javascript"
		src="/niit/Public/js/Kunyi.Init.js"></script>
	<header>
	<div class="topHidden"></div>
	<div class="toolBase">
		<div class="BaseMark">
			<ul>
				<li class="first"><a href="javascript:void(0);">站点地图</a></li>
				<li><a href="javascript:void(0);l">信箱</a></li>
				<li><a href="javascript:void(0);"
					target="_blank">内部信息</a></li>
				<li><a href="javascript:void(0);">人才招聘</a></li>
				<li><a href="javascript:void(0);">人事管理</a></li>
				<li><a href="javascript:void(0);">网上预约</a></li>
				<li><a href="javascript:void(0);">在线留言</a></li>
				<li><a href="javascript:void(0);"
					onClick="Kunyi.AddFavorite(window.location,document.title)">收藏</a></li>

			</ul>


		<div class="language">
				<a href="<?php echo @__CONTROLLER__;?>
/checkLogin"
					style="margin-left: 20%; margin-right: 20px; color: red"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
			</div>
			
			<div
				style="width: 94px; height: 36px; line-height: 30px; text-indent: 41px; position: absolute; right: 20px; top: 5px;">
				<a href="<?php echo @__CONTROLLER__;?>
/logout" style="margin-left: 20px; color: red">退出</a>
			</div>
		
			
			
			
			
		</div>
	</div>

	</header>
	<nav>
	<div class="navBase">
		<div class="quickMenuBase" data-type="1">
			<div class="quickMenu01">快捷菜单</div>
			
				<div class="quickMenus">
					<ul class="firstUl">
						<li class="first"><a href="javascript:void(0);" class="firstA"><em>就诊指南</em><i
								class="style01"></i><span></span></a>
						</li>
						<li class="first"><a href="javascript:void(0);"
							target="_blank" class="firstA"><em>预约挂号</em><i
								class="style02"></i><span></span></a>
							</li>
						<li class="first"><a href="javascript:void(0);" class="firstA"><em>出诊安排</em><i
								class="style03"></i><span></span></a>
							</li>
						<li class="first"><a href="javascript:void(0);" class="firstA"><em>专家介绍</em><i
								class="style04"></i><span></span></a>
							</li>
						<li class="first"><a href="javascript:void(0);" class="firstA"><em>专科介绍</em><i
								class="style05"></i><span></span></a></li>
						<li class="first"><a href="javascript:void(0);" class="firstA"><em>药学服务</em><i
								class="style06"></i><span></span></a>
							</li>
						<li class="first last"><a href="javascript:void(0);"
							class="firstA"><em>医保服务</em><i class="style07"></i><span></span></a></li>
					</ul>
				</div>

		</div>
		<div class="nav Inav">
			<ul>
				<li class="PMenu"><a href="<?php echo @__MODULE__;?>
/Index/index" class="PAMenu">首页</a></li>
				<li class="PMenu"><img src="/niit/Public/images/ico_014.png"
					class="animated" width="15" height="8" /> <a href="<?php echo @__MODULE__;?>
/Appointment/myAppointment"
					id="Nav_AMenu0" class="PAMenu" title="我的预约">我的预约</a></li>
				<li class="PMenu"><img src="/niit/Public/images/ico_014.png"
					class="animated" width="15" height="8" /><a href="javascript:void(0);"
					id="Nav_AMenu1" class="PAMenu" title="关于我们">就诊指南</a></li>
				<li class="PMenu"><img src="/niit/Public/images/ico_014.png"
					class="animated" width="15" height="8" /><a href="javascript:void(0);"
					id="Nav_AMenu2" class="PAMenu" title="检验报告">检验报告</a></li>
				<li class="PMenu"><img src="/niit/Public/images/ico_014.png"
					class="animated" width="15" height="8" /><a
					href="javascript:void(0);" id="Nav_AMenu3" class="PAMenu"
					title="健康问答">健康问答</a></li>
				<li class="PMenu"><img src="/niit/Public/images/ico_014.png"
					class="animated" width="15" height="8" /><a
					href="javascript:void(0);" id="Nav_AMenu4" class="PAMenu" title="健康管理">健康管理</a>
				</li>
				<li class="PMenu"><img src="/niit/Public/images/ico_014.png"
					class="animated" width="15" height="8" /><a href="javascript:void(0);"
					id="Nav_AMenu5" class="PAMenu" title="新闻动态">新闻动态</a></li>
				<li class="PMenu"><img src="/niit/Public/images/ico_014.png"
					class="animated" width="15" height="8" /><a href="javascript:void(0);"
					id="Nav_AMenu6" class="PAMenu" title="护理园地">护理园地</a></li>
				<li class="PMenu"><a href="javascript:void(0);"
					id="Nav_AMenu7" class="PAMenu" title="科室信息">科室信息</a></li>
				<li class="PMenu"><a href="javascript:void(0);" id="Nav_AMenu8"
					class="PAMenu">移动端</a></li>
			</ul>
		</div>
	</div>
	</nav>

	<section class="bannerBase BaseMark">
	<div class="Banners">
		<ul class="AnimUl">
			<li><a href="javascript:void(0);"
				title="为了保证病人的休息和治疗，维护良好的医疗秩序，请您配合在规定的时间内探视病人"><img
					src="/niit/Public/uploadfiles/thumb/timg (3).jpg"
					alt="为了保证病人的休息和治疗，维护良好的医疗秩序，请您配合在规定的时间内探视病人" /></a></li>

			<li><a href="javascript:void(0);"
				title="你没看错，我是一个帅气的医生"><img src="/niit/Public/uploadfiles/thumb/timg (2).jpg"
					alt="你没看错，我是一个帅气的医生" /></a></li>

			<li><a href="javascript:void(0);"
				title="随便看看吧"><img src="/niit/Public/uploadfiles/thumb/timg (1).jpg"
					alt="随便看看吧" /></a></li>

			<li><a href="javascript:void(0);"
				title="这是一家专业的预约平台"><img src="/niit/Public/uploadfiles/thumb/timg.jpg"
					alt="这是一家专业的预约平台" /></a></li>

			<li><a href="javascript:void(0);"
				title="请按预约时间 就诊"><img src="/niit/Public/uploadfiles/thumb/timg (4).jpg"
					alt="“请按预约时间 就诊" /></a></li>









			<li><a href="http://www.hnsrmyy.net/NewsDetail-7944.html"
				title="勤加锻炼，祝您有个好身体"><img
					src="/niit/Public/uploadfiles/thumb/2016072719395872.JPG" alt="勤加锻炼，祝您有个好身体" /></a></li>

			<li><a href="javascript:void(0)" title=""><img
					src="/niit/Public/uploadfiles/thumb/2016090608460311.jpg" alt="" /></a></li>
		</ul>
		<div class="tools">
			<a href="javascript:void(0)" class="prev"><img alt="上一幅"
				src="/niit/Public/images/btn_prev01.png" width="34" height="34" /></a> <a
				href="javascript:void(0)" class="next"><img alt="下一幅"
				src="/niit/Public/images/btn_next01.png" width="34" height="34" /></a>
			<div class="text" id="BannerInfo"></div>
			<ul class="ulMark">
				<li class="animated"></li>
				<li class="animated"></li>
				<li class="animated"></li>
				<li class="animated"></li>
				<li class="animated"></li>
				<li class="animated"></li>
			</ul>
			<div class="clear"></div>
			<div id="BannerSwitch" class="animated" data-type="0" data-right="0">
				<img src="/niit/Public/images/ico_027.png" width="5" height="7" class="animated"><span>隐藏</span>
			</div>
		</div>
	</div>
	</section>



	<section class="doctorsBase BaseMark">
	<div class="toolsBase">
		<div class="title">
			<em>预约医生</em> <span>Expert Introduction</span>
		</div>
		<div class="tools" style="widht: 650px">









			<form method="post"
				action="<?php echo @__SELF__;?>
">

				<table>

					<tr>
						<td>
							<div class=" posirelative select-out-div">
								<select class="m-wrap  "
									style="width: 180px; height: 35px; padding: 2px 0;"
									name="dhospital">
									
									<option value=""></option>



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



								</select> <span class="select-hide-span"> <b class="select-show-b"></b></span>
							</div>

						</td>

						<td>
							<div style="margin-left: 20px"
								class=" posirelative select-out-div">
								<select class="m-wrap  "
									style="width: 180px; height: 35px; padding: 2px 0;"
									name="ddepartment">
									


									<option value=""></option>
									<option value="内科">内科</option>
									<option value="外科">外科</option>
									<option value="妇产科">妇产科</option>
									<option value="中医科">中医科</option>
									<option value="心理科">心理科</option>




								</select> <span class="select-hide-span"> <b class="select-show-b"></b></span>
							</div>

						</td>


						<td><input
							style="height: 33px; width: 40px; border: none; position: absolute; top: 1px; right: 200px; font-size: 100%"
							type="submit" value="查找" /></td>
					</tr>


				</table>


			</form>
			<a href="keshi.html" class="Amore">更多 >></a> <a href="javascript:;"
				class="Aprev"></a> <a href="javascript:;" class="Anext"></a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="contents">
		<ul data-num="0">

			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['doctor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<li>
					<a href="" title="医生姓名" target="_blank" class="img">

						<img alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['dname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['dname'];?>
" src="/niit/Public/<?php echo $_smarty_tpl->tpl_vars['v']->value['dimage'];?>
" width="120"
						height="162" />
					</a> 
					<a href="javascript:void()" title="医生姓名" target="_blank" class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value['dname'];?>
</a>
					<a href="javascript:void()" title="所在医院" target="_blank" class="office"><?php echo $_smarty_tpl->tpl_vars['v']->value['dhospital'];?>
</a>
					<a href="javascript:void()" title="姓名" target="_blank" class="post"><?php echo $_smarty_tpl->tpl_vars['v']->value['dtype'];?>
</a>
					<a href="javascript:void()" title="姓名" target="_blank" class="btn more">详细</a>
					<a href="<?php echo @__MODULE__;?>
/Appointment/appoint/did/<?php echo $_smarty_tpl->tpl_vars['v']->value['did'];?>
" target="_blank" class="btn date">预约</a>
				</li>
			<?php } ?>
			


			<div class="hackR"></div>
			<div class="hackL"></div>
	</div>
	<div class="DFastSearch">
		<div class="DFTitle">
			<label>按医生姓名首字母查找</label>
			<button class="animated">关闭查找</button>
		</div>
		<div class="DFContent">
			<div class="DListBase"></div>
			<div class="IndexWords">
				<ul>
					<li data-index="0">A</li>
					<li data-index="1" class="other">B</li>
					<li data-index="2">C</li>
					<li data-index="3" class="other">D</li>
					<li data-index="4">E</li>
					<li data-index="5" class="other">F</li>
					<li data-index="6">G</li>
					<li data-index="7" class="other">H</li>
					<li data-index="8">I</li>
					<li data-index="9" class="other">J</li>
					<li data-index="10">K</li>
					<li data-index="11" class="other">L</li>
					<li data-index="12">M</li>
				</ul>
				<ul>
					<li data-index="13" class="other">N</li>
					<li data-index="14">O</li>
					<li class="other" data-index="15">P</li>
					<li data-index="16">Q</li>
					<li data-index="17" class="other">R</li>
					<li data-index="18">S</li>
					<li data-index="19" class="other">T</li>
					<li data-index="20">U</li>
					<li data-index="21" class="other">V</li>
					<li data-index="22">W</li>
					<li data-index="23" class="other">X</li>
					<li data-index="24">Y</li>
					<li data-index="25" class="other">Z</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

	<section class="officesBase BaseMark">
	<div class="toolsBase">
		<div class="title">
			<em>重点专科</em> <span>Key Specialty</span>
		</div>
		<div class="tools">
			<a href="javascript:void(0);" class="ASwitch" id="OSearchSwitch">快速查找科室</a>
			<a href="keshi.html" class="Amore">更多 >></a> <a href="javascript:;"
				class="Aprev"></a> <a href="javascript:;" class="Anext"></a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="contents">
		<ul data-num="0">
			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="呼吸内科" src="/niit/Public/pic/pic_007.png" width="80" height="80" />
				</div> <a href="javascript:void(0);" title="呼吸内科" class="office">呼吸内科</a>
				<p>我科始建于上世纪70年代初，目前为卫生部国家重点专科建设项目单位，山西省重点……</p> <a
				href="javascript:void(0);" title="呼吸内科" class="btn more">查看详细</a> <a
				href="javascript:void(0);" title="呼吸内科医生" class="btn doctor">科室专家</a></li>

			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="神经内科" src="/niit/Public/pic/pic_009.png" width="80" height="80" />
				</div> <a href="Office-12.html" title="神经内科" class="office">神经内科</a>
				<p>医院标题神经内科始建于1954年，经过半个多世纪的发展，目前已发展为全……</p> <a
				href="javascript:void(0);" title="神经内科" class="btn more">查看详细</a> <a
				href="javascript:void(0);" title="神经内科医生" class="btn doctor">科室专家</a></li>

			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="内分泌科" src="/niit/Public/pic/pic_008.png" width="80" height="80" />
				</div> <a href="javascript:void(0);" title="内分泌科" class="office">内分泌科</a>
				<p>医院标题内分泌代谢科，是国家重点专科、山西省重点专科、山西省糖尿病防治……</p> <a href="javascript:void(0);"
				title="内分泌科" class="btn more">查看详细</a> <a href="ExpertInfo-4.html"
				title="内分泌科医生" class="btn doctor">科室专家</a></li>

			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="神经内科康馨病房" src="/niit/Public/pic/pic_012.png" width="80" height="80" />
				</div> <a href="javascript:void(0);" title="神经内科康馨病房" class="office">神经内科康馨病房</a>
				<p>医院标题神经内科康馨病房为国家临床重点专科神经内科干部保健病房，成立于……</p> <a
				href="javascript:void(0);" title="神经内科康馨病房" class="btn more">查看详细</a> <a
				href="javascript:void(0);" title="神经内科康馨病房医生" class="btn doctor">科室专家</a></li>

			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="心内科" src="/niit/Public/pic/pic_010.png" width="80" height="80" />
				</div> <a href="javascript:void(0);" title="心内科" class="office">心内科</a>
				<p>医院标题心血管内科是国家级临床重点专科、山西临床重点专科、山西省心血管……</p> <a href="javascript:void(0);"
				title="心内科" class="btn more">查看详细</a> <a href="javascript:void(0);"
				title="心内科医生" class="btn doctor">科室专家</a></li>

			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="肾病风湿免疫科" src="/niit/Public/pic/pic_013.png" width="80" height="80" />
				</div> <a href="javascript:void(0);" title="肾病风湿免疫科" class="office">肾病风湿免疫科</a>
				<p>医院标题肾病风湿免疫科成立于1985年，由肾病专业及风湿病专业组成，是……</p> <a href="javascript:void(0);"
				title="肾病风湿免疫科" class="btn more">查看详细</a> <a
				href="javascript:void(0);" title="肾病风湿免疫科医生" class="btn doctor">科室专家</a></li>

			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="呼吸内科康馨病房" src="/niit/Public/pic/pic_012.png" width="80" height="80" />
				</div> <a href="javascript:void(0);" title="呼吸内科康馨病房" class="office">呼吸内科康馨病房</a>
				<p>医院标题呼吸与危重症医学科康馨病房为国家临床重点专科呼吸与危重症医学科……</p> <a
				href="javascript:void(0);" title="呼吸内科康馨病房" class="btn more">查看详细</a> <a
				href="javascript:void(0);" title="呼吸内科康馨病房医生" class="btn doctor">科室专家</a></li>

			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="心外科" src="/niit/Public/pic/pic_010.png" width="80" height="80" />
				</div> <a href="javascript:void(0);" title="心外科" class="office">心外科</a>
				<p>医院标题、山西省心血管病医院心血管外科是国家临床重点专科之一，是省内综……</p> <a
				href="javascript:void(0);" title="心外科" class="btn more">查看详细</a> <a
				href="javascript:void(0);" title="心外科医生" class="btn doctor">科室专家</a></li>

			<li><i class="ico01"></i>
				<div class="img animated">
					<img alt="山西省立眼科医院" src="/niit/Public/pic/pic_011.png" width="80" height="80" />
				</div> <a href="javascript:void(0);" title="山西省立眼科医院" class="office">山西省立眼科医院</a>
				<p>山西省眼科研究所于1962年经山西省人民政府批准正式成立，是国内最早集眼科临……</p> <a
				href="javascript:void(0);" title="山西省立眼科医院" class="btn more">查看详细</a> <a
				href="javascript:void(0);" title="山西省立眼科医院医生" class="btn doctor">科室专家</a></li>

		</ul>
		<div class="hackR"></div>
		<div class="hackL"></div>
	</div>
	<div class="hiddenLineR"></div>
	<div class="hiddenLineL"></div>
	<div class="OFastSearch">
		<div class="OFTitle">
			<label>快速查找科室</label>
			<button class="animated">返回重点科室</button>
		</div>
		<div class="OFContent">
			<div class="OListBase"></div>
		</div>
	</div>
	</section>


	<div class="BottomHidden"></div>
	<div id="QRBase">
		<div class="BaseMark">
			<div class="QRBase">
				<div class="QRList">
					<ul>
						<li><div>
								<img src="/niit/Public/pic/pic_QR01.jpg" width="75" height="75" /><label>医院标题APP</label>
							</div></li>
						<li><div>
								<img src="/niit/Public/pic/pic_QR02.jpg" width="75" height="75" /><label>健康之路APP</label>
							</div></li>
						<li><div>
								<img src="/niit/Public/pic/pic_QR03.jpg" width="75" height="75" /><label>挂号网APP</label>
							</div></li>
						<li><div>
								<img src="/niit/Public/pic/pic_QR04.jpg" width="75" height="75" /><label>山西省预约挂号平台Androi客户端</label>
							</div></li>
						<li><div>
								<img src="/niit/Public/pic/pic_QR05.jpg" width="75" height="75" /><label>山西省预约挂号平台IOS客户端</label>
							</div></li>
						<li><div>
								<img src="/niit/Public/pic/pic_QR06.jpg" width="75" height="75" /><label>山西预约挂号平台微信号</label>
							</div></li>
						<li><div>
								<img src="/niit/Public/pic/pic_QR07.jpg" width="75" height="75" /><label>健康之路微信公众号</label>
							</div></li>
						<li><div>
								<img src="/niit/Public/pic/pic_QR08.jpg" width="75" height="75" /><label>名医网微信公众号</label>
							</div></li>
						<li><div>
								<img src="/niit/Public/pic/pic_QR09.jpg" width="75" height="75" /><label>挂号网微信公众号</label>
							</div></li>
					</ul>
					<div class="clear"></div>
				</div>
				<button class="QRClose animated">关闭</button>
				<div class="BottomHidden"></div>
			</div>
		</div>
	</div>
	<footer> <img src="/niit/Public/images/ico_036.png" width="35" class="load"
		height="18" id="QRMark" />
	<div class="menusBase">
		<div class="BaseMark">
			<dl>
				<dt>
					<img src="/niit/Public/images/ico_006.jpg" class="load" width="36" height="34" /><em>门诊服务</em><span>outpatient
						services</span>
				</dt>
				<dd>
					<a href="javascript:void(0);" title="预约流程" target="_blank">预约流程</a>
				</dd>
				<dd>
					<a href="javascript:void(0);" title="门诊须知" target="_blank">门诊须知</a>
				</dd>
				<dd>
					<a href="javascript:void(0);" title="院内导航" target="_blank">院内导航</a>
				</dd>
			</dl>
			<dl>
				<dt>
					<img src="/niit/Public/images/ico_008.jpg" class="load" width="36" height="34" /><em>住院服务</em><span>hospitalized
						services</span>
				</dt>
				<dd>
					<a href="javascript:void(0);" title="住院须知" target="_blank">住院须知</a>
				</dd>
				<dd>
					<a href="javascript:void(0);" title="检查须知" target="_blank">检查须知</a>
				</dd>
				<dd>
					<a href="javascript:void(0);" title="住院清单" target="_blank">住院清单</a>
				</dd>
			</dl>
			<dl>
				<dt>
					<img src="/niit/Public/images/ico_009.jpg" class="load" width="36" height="34" /><em>体检服务</em><span>examination
						services</span>
				</dt>
				<dd>
					<a href="javascript:void(0);" title="体检须知" target="_blank">体检须知</a>
				</dd>
				<dd>
					<a href="javascript:void(0);" title="体检套餐查询" target="_blank">体检套餐查询</a>
				</dd>
				<dd>
					<a href="javascript:void(0);" title="体检报告查询" target="_blank">体检报告查询</a>
				</dd>
			</dl>
			<div class="QRBtn">
				<img src="/niit/Public/images/tempQR.jpg" class="load" width="85" height="85" />
				<span>扫描关注官方微信号</span> <a href="javascript:void(0)" id="BtnQRMore">更多二维码</a>
			</div>

			<div class="newsPaper">
				<div class="npTitle">
					<img src="/niit/Public/images/ico_010.jpg" class="load" width="28" height="39" /><em>省医院报</em><span>内部资料
						仅供阅读</span>
				</div>
				<div class="DChange">
					<select class="DYear" id="ddlYears"><option value="0">年份</option>
						<option value="2017">2017年</option>
						<option value="2016">2016年</option>
						<option value="2015">2015年</option>
						<option value="2014">2014年</option></select> <select class="DTime"
						id="ddlTimes">
						<option value="0">期数</option>
					</select>
				</div>
				<input class="newsPaperBtn animated" name="btnGoNewsPaper"
					id="btnGoNewsPaper" value="阅览" type="button" />
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="BottomHidden"></div>
	<div class="DWeibo">
		<a href="javascript:;" class="weibo" title="新浪微博">新浪官方微博</a><a
			href="javascript:;" class="tencent" title="腾讯微博">腾讯官方微博</a>
		<div class="clear"></div>
	</div>

	<div class="websiteInfo">
		<div class="info">
			主办单位：医院标题 &nbsp; &nbsp;综合服务电话：120&nbsp;&nbsp; &nbsp;急救中心电话：120 &nbsp;
			传真：120 &nbsp; 地 址：地址地址地址 &nbsp;<br /> 版权所有：医院标题
		</div>
		<ul>
			<li class="first"><a href="jianjie.html" target="_blank">关于我们</a></li>
			<li><a href="javascript:void(0);" target="_blank">法律声明</a></li>
			<li><a href="javascript:void(0);" target="_blank">网站地图</a></li>
			<li><a href="javascript:void(0);" target="_blank">联系我们</a></li>
			<li><a href="javascript:void(0);" target="_blank">院长(信访)信箱</a></li>
		</ul>
		<div class="clear"></div>
		<p>
			&copy;2015-
			<script language="javascript" type="text/javascript">
				document.write(new Date().getFullYear());
			</script>
			. All Rights Reserved. <a
				href="javascript:void(0);"
				target="_blank">备案号0000001 </a></a>
		</p>
		<select id="ddlLinks">
			<option value="0"><span>友情链接</span> HYPERLINK
			</option>
			<option value="javascript:void(0);">中华人民共和国卫生和计划生育委员会</option>
		</select>
	</div>
	</footer>
	<div id="Footer_CodeDiv">
		<script type="text/javascript">
			var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://"
					: " http://");
			document
					.write(unescape("%3Cscript src='"
							+ _bdhmProtocol
							+ "hm.baidu.com/h.js%3F4a1d36386e8734a5fd29acec9114818d' type='text/javascript'%3E%3C/script%3E"));
			document
					.write(unescape("%3Cscript src='"
							+ _bdhmProtocol
							+ "hm.baidu.com/h.js%3Fafd2ae44e23648da4e8a81a7b1349be4' type='text/javascript'%3E%3C/script%3E"));
		</script>
	</div>
	<script language="javascript" type="text/javascript"
		src="/niit/Public/js/Kunyi.Common.js"></script>
	<script language="javascript" type="text/javascript"
		src="/niit/Public/js/Kunyi.Index.js"></script>
</body>
</html>
<?php }} ?>