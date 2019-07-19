<!DOCTYPE html PUBliC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="author" content="duoduo_v8.3(<?=BANBEN?>)" />
<link rel="bookmark" href="/favicon.ico"/>
<?php 
foreach($apps as $row){
	if($row['open']==1 && $webset[$row['code'].'_meta']!=''){echo $webset[$row['code'].'_meta']."\r\n";}
}
?>
<?php if(is_file(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php')){?>
<?php include(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php');?>
<?php }else{?>
<title><?=WEBNAME?></title>
<meta name="keywords" content="<?=WEBNAME?>" />
<meta name="description" content="<?=WEBNAME?>" />
<?php }?>
<base href="<?=SITEURL?>/" />
<link rel=stylesheet type=text/css href="/template/inc/css/kly.css" />
<?php
/*
$css[]="css/jumpbox.css";
$css[]="css/helpWindows.css";
$css[]="css/kefu.css";
$css[]=TPLURL."/inc/css/kly.css";

$css[]=TPLURL."/inc/css/default.css";
$css[]=TPLURL."/inc/css/common.css";
$css[]=TPLURL."/inc/css/goos.css";
$css[]="data/plugin/default/color.css";

echo css($css);
unset($css);
*/
$js['a']='js/jquery.js';
$js[]='js/fun.js';
$js[]=TPLURL.'/inc/js/fun.js';
$js[]=TPLURL.'/inc/js/js.js';
$js[]='js/base64.js';
$js[]='js/jquery.lazyload.js';
$js[]='data/error.js';
$js[]='data/noWordArr.js';
$js[]='js/jumpbox.js';
$js[]=TPLURL.'/inc/js/taokey.js';
echo js($js);
unset($js);
?>
<?php include(TPLPATH.'/inc/js.config.tpl.php')?>
</head>
<body>
<style type="text/css">
.register_b{ width:250px; height:45px; border:0; color:#FFFFFF; cursor:pointer; font-size:16px; background:#EE113D; }

.home-tab li.current .home-tab-super{height:45px;line-height:45px;background:#FFF;color:#EE113D;cursor:default; width:150px;border-bottom:3px solid #EE113D; font-weight:bold}
.home-tab .home-tab-super:hover{height:45px;line-height:45px;background:#FFF;color:#EE113D;cursor:pointer; border-bottom:3px solid #EE113D; font-weight:bold}

.gwzx .vipduo2{display:block;width:273px;height:43px; padding-left:15px;border-top:3px solid #EE113D;font-size:16px;line-height:43px;text-align:left;color:#444;cursor:pointer;border-bottom:0;font-family:'Hiragino Sans GB','Microsoft YaHei','SimSun',sans-serif;}

.daohang1000 li.linav a.anav:hover{font-size:18px;color:#EE113D;text-decoration:none;position:relative;width:120px;height:46px;DISPLAY:block}
#fontt a {color:#EE113D;}

.daohang1000 li.linav1{position:relative;z-index:999;margin-top:0px;float:left;width:239px;height:46px; background:#EE113D}


.dddefault .sbutton{LINE-HEIGHT:35px;*LINE-HEIGHT:37px;background:#EE113D;BORDER-RIGHT-WIDTH:0px;WIDTH:110px;FLOAT:right;BORDER-TOP-WIDTH:0px;BORDER-BOTTOM-WIDTH:0px;HEIGHT:40px;BORDER-LEFT-WIDTH:0px;CURSOR:pointer;color:#fff;cursor:pointer;font-size:16px;padding-left: 6px;font-family:'微软雅黑';}

.dddefault .sbutton:hover{background:#F03157;}

.searchbox .box-middle {WIDTH: 520px; DISPLAY: block; FLOAT: left;line-HEIGHT: 40px; HEIGHT: 40px;border:2px solid #EE113D;}

.gm .tejia{background:#EE113D;color:#fff;}

.unlogged a.register2{display:inline-block;background:#EE113D; margin-top:15px;width:80px;height:30px;line-height:2.2;margin-right:20px;text-decoration:none;border-radius:4px;}
.unlogged a.login1{display:inline-block; margin-top:15px;width:80px;height:30px;border:1px solid #ddd;background-color:#fff;line-height:2.2;margin-right:20px;text-decoration:none;border-radius:4px;color:#EE113D;}
.n-h-list {
	line-height:46px;
	font-size:15px;
	position:absolute;
	top:46px;
	right:0px;
	z-index:1000;color:#333;border:1px solid #EE113D;
	background:#fff;border-top:none;
	display:none; width:118px; overflow:hidden
}
.n-h-list li a:hover{ color:#EE113D;}
.item-info .orange-wrap {height:92px;background-color:#EE113D;position:relative}
.contact .dian_ico{ position:absolute;color:#EE113D; height:29px; width:180px;display:block; top:35px; left:2px;font-size: 24px; font-weight: bold; }

.goods-list li .good-price .price-current {font-size:40px;font-family:Arial;color:#EE113D;  font-weight:500}
.goods-list li .good-price .price-current em {font-size: 14px; font-family:"微软雅黑"; color:#EE113D; vertical-align:1px; margin-left:1px;}



</style>

<div class="container dddefault" style="background:#f2f2f2;">
<?php include(TPLPATH.'/inc/header_common.tpl.php');?>
