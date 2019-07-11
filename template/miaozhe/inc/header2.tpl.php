<!DOCTYPE html PUBliC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="author" content="duoduo_v8.3(<?=BANBEN?>)" />
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
<?php
$css[]="css/jumpbox.css";
$css[]="css/helpWindows.css";
$css[]="css/kefu.css";
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
<?php include(TPLPATH.'/inc/js.config.tpl.php')?>
</head>
<body>
<style type="text/css">
.tb-categories .tb-cat li.maintainHover { height:95px; color:#fff;border-bottom:1px dotted #E3E3E3; padding-left:10px; border-left:1px solid #E3E3E3;border-right:1px solid #E3E3E3; background:<?=$dd_tpl_data['tebie']?>;  border-top:0;}
.register_b{ width:250px; height:45px; border:0; color:#FFFFFF; cursor:pointer; font-size:16px; background:<?=$dd_tpl_data['tebie']?>; }

.home-tab li.current .home-tab-super{height:43px;line-height:42px;background:#FFF;color:<?=$dd_tpl_data['tebie']?>;cursor:default; width:170px;border-top:3px solid <?=$dd_tpl_data['tebie']?>;  }
.home-tab .home-tab-super:hover{height:42px;line-height:40px;background:#FFF;color:<?=$dd_tpl_data['tebie']?>;cursor:pointer; border-top:3px solid <?=$dd_tpl_data['tebie']?>; }

.gwzx .vipduo2{display:block;width:273px;height:43px; padding-left:15px;border-top:3px solid <?=$dd_tpl_data['tebie']?>;font-size:16px;line-height:43px;text-align:left;color:#444;cursor:pointer;border-bottom:0;font-family:'Hiragino Sans GB','Microsoft YaHei','SimSun',sans-serif;}

.dddefault .daohang{margin:0 auto;padding:0;text-align:left;height:46px;clear:both;font-family:"微软雅黑"; border-bottom: 2px solid <?=$dd_tpl_data['qianse']?>; background:#FFFFFF}
.daohang1000 li.linav1{position:relative;z-index:999;margin-top:0px;float:left;width:220px;height:46px; background:<?=$dd_tpl_data['qianse']?>;border-radius:5px 5px 0 0}

#fontt a {color:<?=$dd_tpl_data['qianse']?>;}
.dddefault .sbutton{LINE-HEIGHT:39px;*LINE-HEIGHT:37px;background:<?=$dd_tpl_data['tebie']?>;BORDER-RIGHT-WIDTH:0px;WIDTH:110px;FLOAT:right;BORDER-TOP-WIDTH:0px;BORDER-BOTTOM-WIDTH:0px;HEIGHT:40px;BORDER-LEFT-WIDTH:0px;CURSOR:pointer;color:#fff;cursor:pointer;font-size:14px;padding-left: 6px;font-family:'微软雅黑';}
.searchbox .box-middle {WIDTH: 520px; DISPLAY: block; FLOAT: left;line-HEIGHT: 40px; HEIGHT: 40px;border:1px solid <?=$dd_tpl_data['tebie']?>;}
.gm .tejia{float:right; text-align:center;background:<?=$dd_tpl_data['tebie']?>;color:#fff;font-size:15px;width:70px;margin-top:13px;margin-bottom:4px;*margin-bottom:9px;height:30px;line-height:30px;position:absolute; z-index:100px; bottom:10px;*bottom:10px; right:10px;*right:20px; _bottom:18px; display:none;border-radius:3px;}
.unlogged a.register2{display:inline-block;background:<?=$dd_tpl_data['tebie']?>; margin-top:15px;width:80px;height:30px;line-height:2.2;margin-right:20px;text-decoration:none;border-radius:4px;}
.unlogged a.login1{display:inline-block; margin-top:15px;width:80px;height:30px;border:1px solid #ddd;background-color:#fff;line-height:2.2;margin-right:20px;text-decoration:none;border-radius:4px;color:<?=$dd_tpl_data['tebie']?>;}
.n-h-list li a:hover{color:<?=$dd_tpl_data['tebie']?>;}
.item-info .orange-wrap {height:92px;background-color:<?=$dd_tpl_data['tebie']?>;position:relative}
.contact .dian_ico{ position:absolute;color:<?=$dd_tpl_data['tebie']?>; height:29px; width:180px;display:block; top:35px; left:2px;font-size: 24px; font-weight: bold; }
.goods-list li .good-price .tejia{float:right; text-align:center;color:#fff;font-size:15px;border-radius:3px; background-color:<?=$dd_tpl_data['tebie']?>;width:70px;margin-top:10px;margin-bottom:8px;height:30px;line-height:30px;position:absolute; z-index:100px; bottom:5px; right:10px; _bottom:5px; display:none;
}
.goods-list li .good-price .price-current {font-size:40px;font-family:Arial;color:<?=$dd_tpl_data['tebie']?>;  font-weight:500}
.goods-list li .good-price .price-current em {font-size: 14px; font-family:"微软雅黑"; color:<?=$dd_tpl_data['tebie']?>; vertical-align:1px; margin-left:1px;}


</style>
<?php if($dd_tpl_data['bj-kg']['open']==0){?>
<div class="container dddefault">
<?php }?>
<?php if($dd_tpl_data['bj-kg']['open']==1){?>
<div class="container dddefault" style="background:#f2f2f2;">
<?php }?>
<?php if($dd_tpl_data['bj-kg']['open']==2){?>
<div class="container dddefault" style="background:#efeef0;">
<?php }?>
<?php if($dd_tpl_data['bj-kg']['open']==3){?>
<div class="container dddefault" style="background:#fff;">
<?php }?>

<?php include(TPLPATH.'/inc/header_chaofan.tpl.php');?>
