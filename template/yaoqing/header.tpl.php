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
<title><?=WEBNAME?></title>
<meta name="keywords" content="<?=WEBNAME?>" />
<meta name="description" content="<?=WEBNAME?>" />
<?php }?>
<?php include(TPLPATH.'/inc/js.config.tpl.php')?>
<base href="<?=SITEURL?>/" />
<?php
$css[]=PLUGIN_TPLURL."css/index.css";
$css[]=PLUGIN_TPLURL."css/home.css";
$css[]="css/jumpbox.css";
$css[]="css/helpWindows.css";
echo css($css);
unset($css);

$js['a']='js/jquery.js';
$js[]='js/fun.js';
$js[]=TPLURL.'/inc/js/fun.js';
$js[]=TPLURL.'/inc/js/js.js';
$js[]=TPLURL.'/vip/js/huandengpian.js';
$js[]='js/base64.js';
$js[]='js/jquery.lazyload.js';
$js[]='data/error.js';
$js[]='data/noWordArr.js';
$js[]='js/jumpbox.js';
$js[]=TPLURL.'/inc/js/taokey.js';
echo js($js);
unset($js);
?>

</head>
<body>
<script>
var sousuoxiala=new Array();
sousuoxiala[0]=new Array("tao","view","淘宝相关宝贝"); 
<?php if(BIJIA>1){?>
sousuoxiala[1]=new Array("mall","goods","全网比价");
<?php }?>
<?php if($webset['paipai']['open']==1){?>
sousuoxiala[2]=new Array("paipai","list","拍拍相关宝贝"); 
<?php }?>

//sousuoxiala[3]=new Array("zhannei","index","站内精选宝贝"); 
/*sousuoxiala[4]=new Array("zhidemai","index","值得买精选宝贝"); */

$searchInput=$("#s-txt");

$(".have_child").hover(function() {
	thisId=$(this).attr('id');
	$(this).attr('id','navc');
    $(this).find("a").eq(0).addClass("sub_on").removeClass("sub");
    $(this).find("ul").show();
},function() {
	if(typeof(thisId) == "undefined"){
		thisId='';	
	}
	$(this).attr('id',thisId);
    $(this).find("a").eq(0).addClass("sub").removeClass("sub_on");
    $(this).find("ul").hide()
});
<?php if($jianban!==1){?>
$searchInput.focusClear();
<?php }?>
</script>
