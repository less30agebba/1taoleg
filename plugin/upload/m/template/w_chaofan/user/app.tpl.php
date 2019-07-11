<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$css[]=TPLURL."/inc/css/cf_wap.css";
$css[]=TPLURL."/inc/css/cf_u.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<style>
.mid_content {
    width: 80%;
    margin: 0 auto;
}
.mid_iphone {
    width: 100%;
    background: #f60;
    border-radius: 0.375em;
    margin-top: 0.75em;
    line-height: 2em;
	padding:0.5em 0;
	display:block;
}
.mid_iphone .down {
    width: 50%;
    margin: 0 auto;
    text-align: center;
}
.mid_iphone .down img {
    height: 30%;
    display: block;
    height: 2em;
    float: left;
	margin-top:3px;
}
.mid_iphone span {
    font-size: 0.875em;
    line-height: 2em;
    color: #fff;
	font-size:16px;
}
.mid_anzhuo{
	background:#88ba33;
}
.bdsj{
	padding:10px 0 0;
	text-align:center;
	font-size:16px;
	color:#333;
	height:2em;
	line-height:2em;
}
.bdsj span{
	font-weight:bold;
	font-size:16px;
}
.bdsj img{
	height:80%;
	margin-bottom:-5px;
	margin-right:5px;
}
</style>
<body style="background: #f5f5f5;">
<div class="mid_content">
	<div class="bdsj"><img src="<?=TPLURL?>/inc/images/bdsj.png" />您已经绑定的手机号：<span><?=$dduser['mobile']?></span></div>
    <div class="mid_iphone">
    	<a href="<?=$webset['app']['iphone_appstore']?$webset['app']['iphone_file']:'https://ios.duoduo123.com/iphone/down.php?url='.preg_replace('#/$#','',URL)?>">
        	<div class="down">
            	<img src="<?=TPLURL?>/inc/images/iphone.png">
                <span>iPhone版下载</span>
            </div>
        </a>   
    </div>
    <div class="mid_iphone mid_anzhuo">
    	<a href="<?=$webset['app']['android_file']?>">
        	<div class="down">
            	<img src="<?=TPLURL?>/inc/images/android.png">
                <span>安卓版下载</span>
            </div>
        </a>   
    </div>
</div>


</body>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>