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
<?php
$css[]="css/jumpbox.css";
$css[]="css/helpWindows.css";
$css[]="css/kefu.css";
$css[]=TPLURL."/inc/css/baoming.css";
$css[]=TPLURL."/hezuo/css/baoming.css";
$css[]=TPLURL."/inc/css/vipduo.css";
$css[]=TPLURL."/inc/css/common.css";
$css[]=TPLURL."/inc/css/goos.css";
$css[]="data/plugin/default/color.css";
echo css($css);
unset($css);
$js['a']='js/jquery.js';
$js[]='js/fun.js';
$js[]=TPLURL.'/inc/js/fun.js';
$js[]=TPLURL.'/inc/js/js.js';
$js[]=TPLURL.'/inc/js/vipduo.js';
$js[]='js/base64.js';
$js[]='js/jquery.lazyload.js';
$js[]='data/error.js';
$js[]='data/noWordArr.js';
$js[]='js/jumpbox.js';
$js[]=TPLURL.'/inc/js/taokey.js';
echo js($js);
unset($js);
?>
<?php if($dd_have_tdj==1){include(DDROOT.'/comm/tdj_tpl.php');}?>
</head>
<body>
		
<INPUT id=s-txt class="text" style="border:none; background:none; height:0px"/>
    <!-- 顶部顶部、LOGO、搜索开始 -->
<div class="search">
<div class="search1000" style="margin:0 auto; width:1000px">

<div class="logo">

  <a href="<?=SITEURL?>"><img src="<?=$dd_tpl_data['logo']?>" alt="<?=WEBNICK?>网 上<?=WEBNICK?>，送<?=TBMONEY?>" width="250" height="80" /></a></div>
  <span style="margin-top:60px; float:right; font-size:16px">您好，<?php if($dduser['id']>0){?><a href="<?=u('user','index')?>" target="_blank"><font color="#FF9900"> <?=$dduser['name']?></font></a><?php }else{?><a href="<?=u('user','login')?>" target="_blank"> <font color="#FF9900">请登录<?php }?></font></a>，欢迎来到商家报名中心！</span>
</div>
	</div></div>
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
	
<div  style="margin:0 auto; width:1000px">