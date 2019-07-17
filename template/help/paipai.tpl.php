<?php
include(TPLPATH.'/inc/header3.tpl.php');
?>
<style type="text/css">

.left {	float: left;}
.right {float: right;}
.clear {clear: both;}
.noBorder {border:none;}

.w1000{ width:1000px;background:#FFFFFF; margin-top:12px; height:2350px; padding:20px 100px 10px 100px; margin:0 auto;}
.wrapper{ margin:0 auto;}

img, li {vertical-align:top;}
.blank40px {height:40px;line-height:40px;font-size:0;clear:both}
.blank30px {height:30px;line-height:30px;font-size:0;clear:both}
.blank20px {height:20px;line-height:20px;font-size:0;clear:both}
.blank10px {height:10px;line-height:10px;font-size:0;clear:both}
.blank15px {height:15px;line-height:15px;font-size:0;clear:both}
.blank5px {height:5px;line-height:5px;font-size:0;clear:both}
.blank1px {height:1px;line-height:1px;font-size:0;clear:both}

.taobao_fljc{ width:1000px; float:left; background:#fff;  }

.taobao_fljc .tab2{width:1000px; margin:0 auto;}
.taobao_fljc .tab2 .Menubox { width:998px;border:1px solid #e6e6e6; margin-bottom:20px;border-radius:3px;box-shadow:0 0 3px #e6e6e6;height:40px;}
.taobao_fljc .tab2 .Menubox ul{ }
.taobao_fljc .tab2 .Menubox li{ float:left;font: normal 16px/40px "Microsoft YaHei";cursor:pointer; padding:0 25px;text-align:center;color:#999;cursor:pointer;}
.taobao_fljc .tab2 .Menubox li.hover{ color:#555;font:normal 16px/40px "Microsoft YaHei"; padding:0 25px;  background:#eee;}

.taobao_fljc .tab2 .Contentbox{ width:1000px; margin:0 auto;}
.taobao_fljc .tab2 .Contentbox span.taofljc{ width:420px; padding-left:20px;}
.taobao_fljc .tab2 .Contentbox span.fljc960{ width:960px; padding-left:20px;}
.taobao_fljc .tab2 .Contentbox span.taofljc h4{font:normal 24px/40px "Microsoft YaHei";color:#5f9500; }
.taobao_fljc .tab2 .Contentbox span.taofljc p{ font:normal 14px/24px "Tahoma","瀹嬩綋"; color:#555; margin:10px 0 20px 0; }

.taobao_fljc .tab2 .Contentbox span.taofljc a.nextbtn{ width:110px; height:36px; font-size:0; text-indent:-110px; display:block; background:url(../inc/images/wanzhuan/taobaosprite.png) no-repeat 0 -146px;}
.taobao_fljc .tab2 .Contentbox span.taofljc a.nextbtn:hover{ width:110px; height:36px; font-size:0; text-indent:-110px; display:block; background:url(../inc/images/wanzhuan/taobaosprite.png) no-repeat -110px -146px;}

.taobao_fljc .tab2 .Contentbox span.taofljc a.okbtn{ width:110px; height:36px; font-size:0; text-indent:-110px; display:block; background:url(../inc/images/wanzhuan/taobaosprite.png) no-repeat 0 -183px;}
.taobao_fljc .tab2 .Contentbox span.taofljc a.okbtn:hover{ width:110px; height:36px; font-size:0; text-indent:-110px; display:block; background:url(../inc/images/wanzhuan/taobaosprite.png) no-repeat -110px -183px;}

.taobao_fljc .tab2 .Contentbox .fljcline{ background:url(../inc/images/wanzhuan/taobaosprite.png) repeat-x 0 -286px;}

.taobao_footer{ width:100%; overflow:hidden;margin-top:10px;}
.taobao_help{ width:958px; overflow:hidden; border:1px solid #e3e3e3; padding:10px 20px 20px 20px; background:#fff; margin:0 auto;}
.taobaohelp{ width:958px; overflow:hidden; height:32px; background: url(../inc/images/wanzhuan/gray.jpg) repeat-x bottom;}
.taobaohelp h6{width:220px;color:#333;float:left;margin-top:7px; position:relative;height:17px;font:bold 14px/32px "瀹嬩綋";background:url(../inc/images/wanzhuan/tao-index_14316.png) 0 0 no-repeat;}
.taobaohelp h6 a{width:140px;height:17px;line-height:17px;display:block;}
.taobaohelp bdo{width:50px; float:right;}
.taobaohelp bdo a{ color:#777; width:50px; display:block; position:relative;font:normal 12px/32px "瀹嬩綋";}
.taobaohelp bdo a:hover{ color:#1a8800;}
.taobaohelp bdo a i{ width:6px; height:9px; position:absolute; right:10px; top:11px; background: url(../inc/images/wanzhuan/indexsprite.png) no-repeat -80px 0px ; display:block;}
.taobaohelp bdo a:hover i{width:6px; height:9px; position:absolute; right:10px; top:11px;  background: url(../inc/images/wanzhuan/indexsprite.png) no-repeat -89px 0px ;}

.taobaohelplist{ width:260px;margin-right:20px; float:left; display:inline;}
.taobaohelplist p{ width:260px; display:block; line-height:22px; position:relative;}
.taobaohelplist p a{ width:260px; display:block; background:url(../inc/images/wanzhuan/iconsprite.png) no-repeat 0 -26px; text-indent:10px;}
.taobaohelplist p a:hover{ width:260px; display:block; background:url(../inc/images/wanzhuan/iconsprite.png) no-repeat 0 -116px; text-indent:10px;}

.tb-tips {display: none;overflow: hidden;position: absolute;width: 400px;z-index: 10;}
.tb-tips .hd {background: url(../inc/images/wanzhuan/bg-tips.png) repeat  0 0 ;font-size: 0;height: 10px;}
.tb-tips .bd {background: url(../inc/images/wanzhuan/bg-tips.png) repeat-y  right center ;padding: 7px 20px 10px;text-align: left;}
.tb-tips .ft {background: url(../inc/images/wanzhuan/bg-tips.png) repeat  0 -10px ;font-size: 0;height: 21px;}
.tips-q {    background: url(../inc/images/wanzhuan/bg-tips.png) no-repeat  0 -38px ;    color: #000000;   display: block;  font-size: 12px; font-weight: bold;margin: 0 0 10px;
text-indent: 20px;}
blockquote:before, blockquote:after, q:before, q:after { content: "";}
.tips-a { background: url(../inc/images/wanzhuan/bg-tips.png) no-repeat  0 -67px ;   font-style: normal;line-height: 1.7em;margin: 0;padding-left: 20px;}
</style>
<!--页面中间模块-->
<div class="tybg" style="margin-top:15px">
	<div class="w1000">
			<div align="center">
				<img src="<?=TPLURL?>/inc/images/wanzhuan/paipaifljc.png" width="861" height="136"/>
			</div>
		<div class="blank30px">	</div>
		
	<div class="taobao_fljc clear2">
			<div class="tab2" id="tao-tab2">
				<div class="Menubox">
					<ul class="tab-label-list">
						<li class="hover">拍拍返利教程<i></i></li>
					</ul>
				</div>
				<div class="Contentbox">
					<div>
						<span class="taofljc left">
						<h4>第一步：复制宝贝网址查返利！</h4>
						<p>
							复制您想购买的拍拍商品网址，如:http://auction1.paipai.com/C057F632000000000401000029AB1594 或 千步沙2013夏装新款女韩版清新印花背心裙淑女两件套连衣裙F1584 。
						</p>
						</span>
						<img src="<?=TPLURL?>/inc/images/wanzhuan/paipai_03.png" width="524" height="418" alt="复制网址" class="right"/>
						<div class="blank15px ">
						</div>
						<span class="taofljc left">
						<p>
								粘贴您复制的拍拍商品网址或商品全名查返利。
						</p>
						<a href="/index.php?mod=zt&act=paipai#a" class="nextbtn">下一步</a></span><img src="<?=TPLURL?>/inc/images/wanzhuan/paipai_06.png" width="524" height="88" alt="查返利" class="right"/>
						<div class="blank40px">
						</div>
						<div class="blank40px fljcline">
						</div>
						<a name="a" id="a"></a><span class="taofljc left" style="width:960px;">
						<h4>第二步：通过返利链接去拍拍购买宝贝！</h4>
						<p>
								查询到该商品通过<?=WEBNAME?>到拍拍购买可以返利，点击返利链接跳转到拍拍网后，按照你平时的拍拍购物流程购买该商品即可。（如遇商家打折，可在折扣价的基础上再享同比例返利。)
						</p>
						<a href="/index.php?mod=zt&act=paipai#b" class="nextbtn">下一步</a></span>
						<div class="blank20px ">
						</div>
						<img src="<?=TPLURL?>/inc/images/wanzhuan/paipai_09.png" width="1000" height="350" alt="通过返利链接去淘宝购买宝贝" class="left"/>
						<img src="<?=TPLURL?>/inc/images/wanzhuan/jc_arrow.png" width="1000" height="65" alt="箭头" class="left"/>
						<img src="<?=TPLURL?>/inc/images/wanzhuan/paipai_12.png" width="1000" height="424" alt="通过返利链接去淘宝购买宝贝" class="left"/>
						<div class="blank40px">
						</div>
						<div class="blank40px fljcline">
						</div>
						<a name="b" id="b"></a><span class="taofljc left" style="width:960px;">
						<h4>第三步：确认收货后回<?=WEBNAME?>拿返利！</h4>
						<p>
								当您成功购买该商品后，一般来说，确认收货当天返利即可到账，您可以登录<?=WEBNAME?>;在 “会员中心-->订单查询-->拍拍订单”查询到对应的返利收入，之后您可以在“资产管理-->我的返利”将这笔收入提取到您的支付宝账号。
						</p>
						<a href="/index.php?mod=zt&act=paipai#" onclick="window.scrollTo(0, 0);return false;" class="okbtn">知道了</a></span>
						<div class="blank20px ">
						</div>
						<img src="<?=TPLURL?>/inc/images/wanzhuan/paipai_15.png" width="780" height="235" alt="拿返利" class="left"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--页面中间模块 end-->
<div class="blank20px ">
						</div>

<?php include(TPLPATH.'/inc/footer.tpl.php');?>