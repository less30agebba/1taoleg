<?php
include(TPLPATH.'/inc/header3.tpl.php');
?>
 <style type="text/css">
@charset "utf-8";
* html, * html body{background-attachment:fixed;}
.sjbj {
	background-color:#e7cba8;
}
.clear{ clear:both; line-height:0px; height:0px;}
p{ margin:0px; padding:0px;}
.tb_top{
	width:100%;
	height:412px;
	margin:0 auto;
	background-image:url(<?=TPLURL?>/inc/images/shouji/bj_img.jpg);
	background-repeat:repeat-x;
}
.tb_top .top_img{
	width:100%;
	height:412px;
	margin:0 auto;
	background-image:url(<?=TPLURL?>/inc/images/shouji/top_img.jpg);
	background-repeat:no-repeat;
	background-position:center center;
}


.buz{ width:980px; height:auto; margin:0 auto;}
.buz .bt{ width:327px; height:34px; background-image:url(<?=TPLURL?>/inc/images/shouji/01_03.jpg); background-repeat:no-repeat; margin-top:10px; margin-bottom:15px; float:left; _display:inline;}
.link{width:190px; height:30px; float:right;  _display:inline; margin-right:20px; margin-top:15px;}
.link .fx{line-height:2em; float:left; _display:inline;}

.buz .xiz{ width:966px; height:228px; background-image:url(<?=TPLURL?>/inc/images/shouji/01_07.jpg); background-repeat:no-repeat; margin-bottom:40px;}
.buz .xiz .miaoshu{ width:660px; height:198px; padding-top:30px; margin-left:290px; font-family:"微软雅黑"; font-size:18px; color:#fff;}
.buz .xiz .miaoshu .ys01{ line-height:1.6em;}
.buz .xiz .miaoshu .ys02{ padding-top:20px; line-height:1.6em; }
.buz .xiz .miaoshu .ys03{ font-size:22px; font-weight:bold; font-family:"微软雅黑";}
.buz .xiz .miaoshu .ys02 a{ color:#ffd29d; text-decoration:underline;}


.download{ width:980px; height:auto; margin:0 auto; padding-bottom:20px;}
.biaoti_01{ width:330px; height:50px; background-image:url(<?=TPLURL?>/inc/images/shouji/bianti_03.gif); background-repeat:no-repeat; background-position:left 0px; }
.download .fs01{ width:478px; height:125px; background-image:url(<?=TPLURL?>/inc/images/shouji/fs_di_03.gif); background-repeat:no-repeat; float:left; _display:inline; margin-top:10px;}
.download .fs01 .zou{ float:left; _display:inline;  height:101px; width:101px; margin-left:28px; margin-top:13px;}
.download .fs01 .you{ float:left; _display:inline; margin-left:16px; margin-top:20px;}
.download .fs01 .you .fsbt01{ width:215px; height:20px; background-image:url(<?=TPLURL?>/inc/images/shouji/fs_bt_03.gif); background-repeat:no-repeat; background-position:left 0px;}
.download .fs01 .you .ms{ font-size:12px; color:#666; line-height:2em; padding-top:6px;}
.download .fs02{ width:478px; height:125px; background-image:url(<?=TPLURL?>/inc/images/shouji/fs_di_03.gif); background-repeat:no-repeat; float:left; _display:inline; margin-top:10px; margin-left:12px;}
.download .fs02 .fsbt02{ width:215px; height:20px; background-image:url(<?=TPLURL?>/images/shouji/fs_bt_03.gif); background-repeat:no-repeat; background-position:left -20px; margin-left:20px; margin-top:20px;}

.download .fs02 .iphone{ margin-left:20px; margin-top:15px; height:47px; width:176px; float:left; _display:inline;}
.download .fs02 .iphone a{height:47px; width:176px; display:block;background-image:url(<?=TPLURL?>/inc/images/shouji/ruanj_03.gif);background-repeat:no-repeat;background-position:left 0px;}
.download .fs02 .iphone a:link{background-image:url(<?=TPLURL?>/inc/images/shouji/ruanj_03.gif); background-repeat:no-repeat; background-position:left 0px; }
.download .fs02 .iphone a:visited{background-image:url(<?=TPLURL?>/inc/images/shouji/ruanj_03.gif); background-repeat:no-repeat; background-position:left 0px; }
.download .fs02 .iphone a:hover{ background-image:url(<?=TPLURL?>/inc/images/shouji/ruanj_03.gif); background-repeat:no-repeat; background-position:left -47px;  }

.download .fs02 .android{ margin-left:16px; margin-top:15px; height:47px; width:176px; float:left; _display:inline;}
.download .fs02 .android a{height:47px; width:176px; display:block;background-image:url(<?=TPLURL?>/inc/images/shouji/ruanj_03.gif);background-repeat:no-repeat;background-position:left -94px;}
.download .fs02 .android a:link{background-image:url(<?=TPLURL?>/inc/images/shouji/ruanj_03.gif); background-repeat:no-repeat; background-position:left -94px; }
.download .fs02 .android a:visited{background-image:url(<?=TPLURL?>/inc/images/shouji/ruanj_03.gif); background-repeat:no-repeat; background-position:left -94px; }
.download .fs02 .android a:hover{ background-image:url(<?=TPLURL?>/inc/images/shouji/ruanj_03.gif); background-repeat:no-repeat; background-position:left -141px;  }

.xian{ width:970px;  height:1px;  font-size:0px; background-image:url(<?=TPLURL?>/inc/images/shouji/xian_03_03.gif); background-repeat:repeat-x; margin:0 auto; margin-top:20px; margin-bottom:20px;}

.sp{ width:980px; height:auto; margin:0 auto; padding-bottom:30px;}
.biaoti_02{ width:330px; height:50px; background-image:url(<?=TPLURL?>/inc/images/shouji/bianti_03.gif); background-repeat:no-repeat; background-position:left -50px; margin-bottom:12px;}

</style>
<?php 
if($app_status==1){
	$phone_url='href="'.u('app','index').'" target="_blank"';
}
else{
	$phone_url='href="javascript:alert(\'开发中，敬请期待\');"';
}
?>
<div class="sjbj">
<div class="tb_top">
<div class="top_img"></div>
</div>

<div class="buz">
<div class="bt"></div>
    <div class="link"><span class="fx"></span>
        <div id="bdshare" style="float:right; _display:inline;" class="bdshare_t bds_tools get-codes-bdshare">
        </div>
    </div>  
    <br class="clear" />
    <div class="xiz">
    	<div class="miaoshu">
        	<p class="ys01"><samp class="ys03">方法一：</samp>
                电脑上选商品,通过本站查返利,在跳转后的淘宝商品页“加入购物车”。
              然后再通过淘宝手机端直接购买“购物车”中的商品即可。</p><br />
            <p class="ys02"><samp class="ys03">方法二：</samp>
             登陆<?=WEBNICK?><a href="<?=wap_l()?>" target="_blank">手机版</a>或<a  <?=$phone_url?> >客户端</a>搜索商品购买。可搜索id 
			 <br />如：<a>http://item.taobao.com/item.htm?id=45330363551</a> 的id为<a>45330363551</a></p>
        </div>
    </div>

</div>
<div class="download">
<div id="#xiazai" class="biaoti_01"></div>
     <div class="fs01">
     	<div class="zou"><img  src="<?=$dd_tpl_data['app']?>" style="width:100px; height:100px" /></div>
        <div class="you">
        	<div class="fsbt01"></div>
            <p class="ms">用二维码扫描软件拍摄二维码，<br />可直接下载<?=WEBNICK?>手机APP</p>
        </div>
     </div>
	 	 
		 <div class="fs02">
     	 <div class="fsbt02"></div>
     	 <div class="android"><a href="<?=$dd_tpl_data['apkurl']?>"></a></div>
     	 <div class="iphone"><a href="<?=$dd_tpl_data['ipaurl']?>" target="_blank"></a></div>
     	 </div>
		 
     <br class="clear" />
</div>


<div class="clear"></div>




<?php include(TPLPATH.'/inc/footer.tpl.php');?>