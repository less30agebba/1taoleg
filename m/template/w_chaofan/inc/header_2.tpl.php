<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$webset['advertise']=$webset['advertise']?$webset['advertise']:'口袋中的购物返利神器！';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="full-screen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<?php
if($_GET['do']==1){
	$do_name="20元封顶";
}
if($_GET['do']==2){
	$do_name="返利50%以上";
}
if($_GET['do']=='yugao'){
	$do_name="下期精选";
}
if($_GET['code']=='jd'){
	$do_name="京东超返";
}
if(isset($seo_data)){
	$seo_data_r=$seo_data;
}
$seo_data=$duoduo->select('seo','`title`,`keyword`,`desc`',"`mod`='".MOD."' and `act`='".ACT."'");
if((MOD=='index'||MOD=='goods')&&ACT=='index'){
	$seo_data['title']=WEBNAME."触屏版";
    $seo_data['keyword']=WEBNAME."触屏版";
    $seo_data['desc']=WEBNAME."触屏版";
}elseif(MOD=='app'){
	$seo_data['title']=WEBNAME." 手机客户端";
    $seo_data['keyword']=WEBNAME." 手机客户端";
    $seo_data['desc']=WEBNAME." 手机客户端";
}
if(empty($seo_data)){
	$seo_data=$seo_data_r;
}
del_magic_quotes_gpc($seo_data,1);
foreach($seo_data as $key=>$vo){
	$vo=str_replace('{WEBNAME}',WEBNAME,$vo);
	$vo=str_replace('{$do_name}',$do_name,$vo);
	$vo=str_replace('{$moshi_name}',$moshi_name,$vo);
	$vo=str_replace('{$brand_title}',$brand['title'],$vo);
	$vo=str_replace('{$brand_nick}',$brand['tbnick'],$vo);
	$vo=str_replace('{$brand_zhe}',$brand['zhe'],$vo);
	$vo=str_replace('{$brand_fan}',$brand['fan'],$vo);
	$vo=str_replace('{$goods[\'title\']}',$goods['title'],$vo);
	$vo=str_replace('{$goods_type_title}',$goods_type_title,$vo);
	if($goods_type_title==''){
		$vo=preg_replace("/{goods_type_title}[^{]*{\/goods_type_title}/",'',$vo);
	}else{
		$vo=str_replace('{goods_type_title}','',$vo);
		$vo=str_replace('{/goods_type_title}','',$vo);
	}
	if($do_name==''){
		$vo=preg_replace("/{do_name}[^{]*{\/do_name}/",'',$vo);
	}else{
		$vo=str_replace('{do_name}','',$vo);
		$vo=str_replace('{/do_name}','',$vo);
	}
	$seo_data[$key]=$vo;
}
?>
<title><?=$webtitle?></title>
<base href="<?=SITEURL?>/" />
<?php
$css[]=TPLURL."/inc/css/cf_wap.css";
$css[]=TPLURL."/inc/css/common.css";
$css[]=TPLURL."/inc/css/u.css";
echo css($css);
unset($css);

$js['a']=TPLURL.'/inc/js/jquery.js';
$js[]=TPLURL.'/inc/js/jquery.lazyload.js';
$js[]=TPLURL.'/inc/js/iscroll.js';
$js[]=TPLURL.'/inc/js/fun.js';
$js[]=TPLURL.'/inc/js/base64.js';
echo js($js);
unset($js);
$right_jump=$right_jump?$right_jump:'<a class="denglu" href="'.wap_l('index','index').'"><i class="icon iconfont">&#xe6a7;</i></a>';
?>
<style>
html{ line-height:1em;}
.m-list-nav .selected a {color: <?=$dd_tpl_data['color'] ?>;}
.index_head{background:<?=$dd_tpl_data['color'] ?>;}
.index_menu ul li.curr a.index_menu_li_a span {color: <?=$dd_tpl_data['color'] ?>;}
.index_menu ul li.curr a.index_menu_li_a {border-bottom: solid <?=$dd_tpl_data['color'] ?> 3px;}
.m-list-nav .selected a {color: <?=$dd_tpl_data['color'] ?>;}
.index_p_list li dd span em { color:  <?=$dd_tpl_data['color'] ?>;}
.t_top_bg {background-color: <?=$dd_tpl_data['color'] ?>;}
.u-mid-2 ul li {border-right: 1px solid <?=$dd_tpl_data['color'] ?>;}
.u-mid-2 { background: <?=$dd_tpl_data['color'] ?>;}
input{ font-size:16px}
</style>

<script type="text/javascript">
	$(function(){
		$('.span_close').click(function(){
			$('.head_banner').css('display','none');
			$('.head_banner').css('margin-bottom','0px');
		})
	})
</script>
</head>
<body <?php if($background){?>style="background:<?=$background?>"<?php }?>>
<?php if($_GET['app']==1 || (defined('DD_APP') && DD_APP==1)){?>

<?php }else{?>
<?php if($site_info['app_download']==1&&MOD!='zhuanti'){?>
<div class="head_banner" style=" position:relative;width:100%; overflow:hidden; margin:0 auto;  ">
        <a href="<?=SITEURL.'/m/index.php?mod=app'?>" style="display: block;text-align: center; width: 100%; margin-bottom:-2px;"><img src="<?=TPLURL?>/inc/images/appdown.png" style="height: auto; min-width: 320px;
    max-width: 640px;  width: 100%;" /></a>
    <span class="span_close" style="position:absolute; top:10px; right:5px; color:#333;"><i class="icon iconfont">&#xe7c6;</i></span>
</div>
<?php }?>
	<?php if(MOD=='index'){?>
    <div class="index_head"> <a class="logol" href="<?=wap_l('index')?>"><img src="<?=$dd_tpl_data['logo']?>"></a> 
      <!--<span><a class="denglu" href="#0">登录</a>  |<a class="qiandao" href="#0">签到</a></span>--> 
      <!-- <span class="right"><a class="denglu" href="#0"><i class="icon iconfont">&#xe69f;</i></a>会员</a></span>--> 
      <span class="left"><a class="denglu" href="<?=wap_l('goods','search_index')?>"><i class="icon iconfont">&#xe694;</i> 搜索</a></span> </div>
    <?php }elseif($webtitle!=''){?>
    <div class="index_head"> <span class="logol">
      <?=$webtitle?>
      </span> 
      <!--<span><a class="denglu" href="#0">登录</a>  |<a class="qiandao" href="#0">签到</a></span>--> 
      <span class="right"><?=$right_jump?></span> <span class="left"><a class="denglu" href="javascript:history.go(-1);"><i class="icon iconfont">&#xe6a2;</i></a></span> </div>
    <?php }?>
<?php }?>