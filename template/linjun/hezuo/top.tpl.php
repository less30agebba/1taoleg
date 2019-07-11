<!DOCTYPE html PUBliC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="author" content="duoduo_v8.3(<?=BANBEN?>)" />
<?php if($webset['qq_meta']!=''){echo $webset['qq_meta']."\r\n";}?>
<?php if(is_file(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php')){?>
<?php include(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php');?>
<?php }else{?>
<title>商家中心-<?=WEBNAME?></title>
<meta name="keywords" content="商家中心-<?=WEBNAME?>" />
<meta name="description" content="商家中心-<?=WEBNAME?>" />
<?php }?>
<?php include(TPLPATH.'/inc/js.config.tpl.php')?>
<base href="<?=SITEURL?>/" />

<?php if($dd_have_tdj==1){include(DDROOT.'/comm/tdj_tpl.php');}?><link rel=stylesheet type=text/css href="/hezuo.css" /><script type="text/javascript" src="/hezuo.js"></script>
</head>
<body><style>.zs{margin:0 auto;padding:0;text-align:left;height:60px;clear:both;font-family:"微软雅黑"; background:#20b6b1 ;}.zhaoshang{margin:0 auto;padding:0;text-align:left;height:60px;width:1100px;clear:both;}.zhaoshang ul.ulnav{margin:0 auto;padding:0;text-align:left;height:60px;width:1100px;clear:both;_overflow:hidden}.zhaoshang li.linav{float:left;width:180px;height:60px;font-family:Arial,Helvetica,sans-serif;font-size:21px; font-family:"微软雅黑"; padding:0 0 0 0;text-align:center;line-height:60px;position:relative;z-index:999}.zhaoshang li.last{background:none}.zhaoshang li.linav a.anav{width:180px;height:60px;DISPLAY:block;font-size:21px;text-decoration:none;}.zhaoshang li.linav a.anav img{position:absolute;top:-8px;right:0px}.zhaoshang li.linav a.anav:link,.zhaoshang li a.anav:visited{font-size:21px;color:#fff;text-decoration:none;position:relative;width:180px;height:60px;DISPLAY:block} .zhaoshang li.linav a.anav:hover{font-size:21px;color:#fff;background:#26aea4 ;text-decoration:none;position:relative;width:180px;height:60px;DISPLAY:block}#fontc a {color:#fff;background:#26aea4 ;}</style>	
		
<INPUT id=s-txt class="text" style="border:none; background:none; height:0px"/>
    <!-- 顶部顶部、LOGO、搜索开始 -->
<div class="search">
<div class="search1000" style="margin:0 auto; width:1100px">

<div class="logo">

  <a href="<?=SITEURL?>"><img src="<?=$dd_tpl_data['logo']?>" alt="<?=WEBNICK?>网 上<?=WEBNICK?>，送<?=TBMONEY?>" style=" width:200px;margin-top:28px" /></a><img src="/bm.png"  style=" width:230px; border-left:2px dashed #f2f2f2" /></div>
  <span style="margin-top:60px; float:right; font-size:16px">您好，<?php if($dduser['id']>0){?><a href="<?=u('user','index')?>" target="_blank"><font color="#FF9900"> <?=$dduser['name']?></font></a><?php }else{?><a href="<?=u('user','login')?>" target="_blank"> <font color="#FF9900">请登录<?php }?></font></a>，欢迎来到商家报名中心！</span>
</div>
	</div></div>	<div class="zs">  <div class="zhaoshang">    <ul class="ulnav" style="margin:0 auto; width:1100px">     <li class="linav"    id="fontc"><a  class="anav" href="/index.php?mod=hezuo&act=index">招商首页</a></li>     <li class="linav" ><a class="anav" href="/index.php?mod=hezuo&act=index#liucheng">报名流程</a></li>     <li class="linav" ><a class="anav" href="/index.php?mod=hezuo&act=index#rukou">报名入口</a></li>     <li class="linav" ><a class="anav" href="/index.php?mod=hezuo&act=index#youshi">我们的优势</a></li>     <li class="linav" style="float:right" ><a  class="anav" href="/">返回首页</a></li>	 </ul>	 </div>  </div>     <div class="big-banner">  <div class="inner"></div></div>		<!--
	<div class="dddefault">
<div class="c_bgcolor daohang" id="navdaohang">
  <div class="daohang1000">
    <ul class="ulnav" style="margin:0 auto; width:1000px">
     <li class="linav"   <?php if($act=='index'){?> id="fontc"<?php }?>><a  class="anav" href="<?=u('hezuo','index')?>"><font color="#fff">招商首页</font></a></li>
<li class="linav" <?php if($act=='xuzhi'){?> id="fontc"<?php }?>><a class="anav" href="<?=u('hezuo','xuzhi')?>"><font color="#fff">招商要求</font></a></li>
<li class="linav" <?php if($act=='baoming'){?> id="fontc"<?php }?>><a class="anav" href="<?=u('hezuo','baoming')?>"><font color="#fff">活动报名</font></a></li>
<li class="linav" <?php if($act=='list'){?> id="fontc"<?php }?>><a class="anav" href="<?=u('hezuo','list')?>"><font color="#fff">已报名商品</font></a></li>
     <li class="linav" style="float:right" ><a  class="anav" href="/"><font color="#fff">返回首页</font></a></li>
	 </ul>
	 </div>
  </div>
  </div>
    <div class="big-banner">  <div class="inner"></div></div>
	-->
<div  style="margin:0 auto; width:1200px"><script type="text/javascript" src="template/fenxiao/hezuo/js/cs_box.js"></script>