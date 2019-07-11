<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$parameter=act_about_index();
extract($parameter);
?>
<!doctype html>
<html class="um landscape min-width-240px min-width-320px min-width-480px min-width-768px min-width-1024px">
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>关于我们-<?=$site_info['title']?></title>
</head>
<style>
*{
	margin:0;
	padding:0;
}
body{
	font-family:'微软雅黑';
	font-size:1.5rem
}
.clearfloat:after{display:block;clear:both;content:"";visibility:hidden;height:0} 
.clearfloat{zoom:1} 
.afl_md{
	width:94%;
	margin:2rem auto 0;
}
.afl_bg{
	background:#fff;
	border-radius:1rem;
	padding-bottom:3rem;
	position:relative;
}
.afl_bg p.first{
	text-align:center;
	padding:2rem 0 1rem;
	font-weight:bold;
}
.afl_bg p.two{
	padding:0.5rem 0;
}
.afl_bg p.two img{
	display:block;
	margin:0 auto;
	margin-top:2.5rem;
}
.afl_bg p.three{
	border-top:0.1rem solid #eee;
	width:90%;
	margin:1rem auto 0;
	padding-top:1rem;
	text-align:center;
	color:#666;
}
.mt50{
	text-align:center;
	color:#666;
	position:absolute;
	bottom:1rem;
	width:100%;
}
.pt50{
	padding-bottom:5rem;
}
.mt50 p{ text-align:center}
</style>
<script>
function qq(code){
	uexWidget.loadApp("android.intent.action.VIEW",null,'mqqwpa://im/chat?chat_type=wpa&uin='+code);
}
</script>
<body style="background:#ccc;">
<div class="afl_md">
	<div class="afl_bg">
        <p class="two"><img src="<?=$site_info['wap_logo']?$site_info['wap_logo']:$site_info['logo']?>" width="80%" height="auto" /></p>
        <p class="three"><span><?=$site_info['title']?></span>&nbsp;&nbsp;&nbsp;服务网址:<span><?=$site_info['url']?></span></p>
        <p class="three pt50"><span>客服QQ：</span><span onClick="qq('<?=$site_info['qq']?>')"><?=$site_info['qq']?></span></p>
        <div class="mt50"><?=$site_info['app_banquan']?></div>
    </div>
</div>
<div style="height:1rem">&nbsp;</div>
</body>
</html>
