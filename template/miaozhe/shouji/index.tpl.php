
<?php
include(TPLPATH.'/admin_set/vipduo.tpl.php');
include(TPLPATH."/inc/header.tpl.php");
?>  
<script src="<?=TPLURL?>/shouji/js/app.js" charset="utf-8"></script><style type="text/css">

.appduan{width:960px;margin:0 auto;text-align:left}
body{font:12px "\5B8B\4F53",sans-serif}


.btn-download{display:block;background:url(<?=TPLURL?>/shouji/images/btn-bj.alpha.png) no-repeat;width:292px;height:46px;line-height:46px;text-align:center;color:#fff;font-size:28px;font-family:"microsoft yahei",simsun}
.btn-download:hover{background:url(<?=TPLURL?>/shouji/images/btn-bj.alpha.png) 0 -47px no-repeat}
.none{display:none}





#funAbout{width:100%;min-width:960px;height:564px;overflow:hidden}
.ban-content{width:960px;margin:0 auto}
.fun-title{height:22px;padding-bottom:15px;margin-top:68px;margin-bottom:20px;border-bottom:solid 1px #e7e7e7;color:#4f4f4f;font:20px/24px "microsoft yahei"}
.fun-list{width:960px;margin:30px auto}
.fun-list li{width:200px;display:block;overflow:hidden;float:left;padding-right:180px}
.fun-list li.last{padding-right:0}
.fun-list i{width:80px;height:80px;display:block;float:left;margin-right:20px}
.fun-list i.price{background-position:0 0}
.fun-list i.order{background-position:0 -90px}
.fun-list i.favo{background-position:0 -180px}
.fun-list i.time{background-position:0 -270px}
.fun-list i.money{background-position:0 -360px}
.fun-list i.cart{background-position:0 -450px}
.fun-list .title,.fun-list span{width:200px;display:block;float:left}
.fun-list .title{font-size:24px;color:#000;font-family:"microsoft yahei",simsun;margin-bottom:5px}
.fun-list span{font:16px 'Microsoft YaHei',SimHei;color:#666}

.ao-box{background:url(<?=TPLURL?>/shouji/images/bg-smartphone.jpg) top center no-repeat}
.pc-box .ban-content-bj{width:960px;margin:0 auto;background:url(<?=TPLURL?>/shouji/images/content-bj.jpg) center top no-repeat}
.ao-box .ban-content-bj{position:relative;width:960px;height:346px;margin:0 auto;overflow:hidden}
.ao-leftBox{position:relative;z-index:20;float:left;width:244px;height:334px;padding:107px 0 0 135px;overflow:hidden}
.ao-leftBox-panels{position:absolute;width:223px;height:334px;overflow:hidden;background:url(<?=TPLURL?>/shouji/images/circle-32.gif) #EEE no-repeat center center}
.ao-leftBox-panels img{display:block;float:left}
#android-screen{position:absolute;width:1000%;color:#fff}
#android-screen a{color:#fff;cursor:default}

.ao-rightBox{float:right;width:550px;padding-top:100px;color:#333}
.ao-rightBox #android-code{display:block;width:120px;height:120px;overflow:hidden}
.ao-rightBox #android-code a{cursor:default}
.ao-rightBox .mode-title{height:70px;font-size:52px;font-family:"microsoft yahei",simsun;font-weight:bold; color:#FF5151;text-align:right}
.ao-rightBox .mode-content{height:55px;font-size:40px;padding-top:6px;font-family:"microsoft yahei",simsun;text-align:right}
.ao-content-box{position:relative;float:right;width:550px;padding-left:0;margin-top:60px}
.ao-content-box .trigger{height:56px;padding-left:20px}
.ao-content-box .trigger li{float:left}
.ao-content-box .trigger li a{display:block;width:264px;height:56px}
.ao-content-box .trigger li a.android{background:url(<?=TPLURL?>/shouji/images/trigger.alpha.png) 0 -57px no-repeat;_background-image:url(<?=TPLURL?>/shouji/images/trigger.gif)}
.ao-content-box .trigger li a.android:hover{background:url(<?=TPLURL?>/shouji/images/trigger.alpha.png) 0 -228px no-repeat;_background-image:url(<?=TPLURL?>/shouji/images/trigger.gif)}
.ao-content-box .trigger li a.iphone{background:url(<?=TPLURL?>/shouji/images/trigger.alpha.png) 0 -114px no-repeat;_background-image:url(<?=TPLURL?>/shouji/images/trigger.gif)}
.ao-content-box .trigger li a.iphone:hover{background:url(<?=TPLURL?>/shouji/images/trigger.alpha.png) 0 -285px no-repeat;_background-image:url(/misc/m/images/client-v3/trigger.gif)}
.ao-content-box .trigger li.current a.android{background:url(<?=TPLURL?>/shouji/images/trigger.alpha.png) no-repeat;_background-image:url(<?=TPLURL?>/shouji/images/trigger.gif)}
.ao-content-box .trigger li.current a.iphone{background:url(<?=TPLURL?>/shouji/images/trigger.alpha.png) 0 -171px no-repeat;_background-image:url(<?=TPLURL?>/shouji/images/trigger.gif)}
.ao-content-box .panel-box{clear:both}
.ao-content-box .ao-content-panel{padding-top:27px;}
.ao-content-box .ao-way{float:left;border-right:1px solid #62696e;padding:0 20px 0 30px;white-space:nowrap;overflow:hidden;height:100%
}
.ao-content-box .ao-way1{width:200px;padding-left:50px}
.ao-content-box .ao-way2{width:200px}
.ao-content-box .ao-way3{width:165px;padding-right:0;border-right:0}
.ao-content-box .ao-way h6{padding:0 0 12px;margin:0;line-height:18px;font-weight:400;color:#999;font-size:14px}
.ao-content-box .btn-down-css3{display:inline-block;*display:inline;*zoom:1;width:180px;border-radius:23px;line-height:46px;height:46px;background-color:#f60;color:#fff;text-align:center;font-size:26px;font-weight:600}
.ao-content-box .btn-down-css3-ios{font-size:16px}
.ao-content-box .btn-down-css3:hover{background-color:#f90}
.ao-content-box .download p{font-size:16px;font-family:"microsoft yahei",simsun;color:#fff;line-height:24px}
.ao-content-box .download p.bj{margin-bottom:25px}
.ao-content-box .ao-way3-int{border:1px solid #5c4b4e;padding-left:5px;width:151px;height:43px;line-height:42px;color:#333;vertical-align:middle}
.ao-content-box .ao-way3-int:focus,.ao-content-box .ao-way3-int:active{border-top:solid 1px #a5989b;border-left:solid 1px #a5989b}:-ms-input-placeholder{line-height:42px}:-moz-placeholder{line-height:42px}::-moz-placeholder{line-height:42px}::-webkit-input-placeholder{line-height:42px}
.ao-content-box .ao-way3-btn{margin-top:15px;padding:0 18px;height:35px;line-height:35px;color:#333;font-size:16px;border:0;border-radius:4px;border:1px
solid #eaeaea;background:#cecece;background:-webkit-gradient(linear,0 0,0 bottom,from(#ffffff),to(#cecece));background:-webkit-linear-gradient(#ffffff,#cecece);background:-moz-linear-gradient(#ffffff,#cecece);background:-ms-linear-gradient(#ffffff,#cecece);background:-o-linear-gradient(#ffffff,#cecece);background:linear-gradient(#ffffff,#cecece)}
.ao-content-box .ao-way3-btn:hover,.ao-content-box .ao-way3-btn:active{border-color:#513c3f;background:#cecece;background:-webkit-gradient(linear,0 0,0 bottom,from(#cecece),to(#ffffff));background:-webkit-linear-gradient(#cecece,#ffffff);background:-moz-linear-gradient(#cecece,#ffffff);background:-ms-linear-gradient(#cecece,#ffffff);background:-o-linear-gradient(#cecece,#ffffff);background:linear-gradient(#cecece,#ffffff)}
.ao-content-box .ao-btn-notactive,.ao-content-box .ao-btn-notactive:hover,.ao-content-box .ao-btn-notactive:active{font-size:16px;color:#666;border-color:#513c3f;cursor:default;background:#ccc;background:-webkit-gradient(linear,0 0,0 bottom,from(#ccc),to(#ccc));background:-webkit-linear-gradient(#ccc,#ccc);background:-moz-linear-gradient(#ccc,#ccc);background:-ms-linear-gradient(#ccc,#ccc);background:-o-linear-gradient(#ccc,#ccc);background:linear-gradient(#ccc,#ccc)}
.ao-error{padding-left:20px;background:url(<?=TPLURL?>/shouji/images/err.alpha.png) no-repeat 0 2px;margin-top:5px;color:#f60;font-size:14px;line-height:18px;white-space:normal;word-break:break-all;word-wrap:break-word}
.ao-cd-tip{margin-top:5px;line-height:20px;font-size:14px;color:#999}
.ao-fun-list li{padding:0 90px 0 60px}
li.favorable{background:url(<?=TPLURL?>/shouji/images/favorable.png) no-repeat}
.ao-fun-list li.cang{background:url(<?=TPLURL?>/shouji/images/cang.png) no-repeat}
.ao-fun-list li.orders{background:url(<?=TPLURL?>/shouji/images/orders.png) no-repeat}
</style>

<div class="content">
	<div id="funAbout" class="ao-box">
    	<div class="appduan">
        	<div class="ao-leftBox">
                <div class="ao-leftBox-panels">
                    <div class="clearfix"><img src="<?=TPLURL?>/shouji/images/iphone.jpg" style="width:223px; height:334px" /></div>
                </div>
            </div>
            
            <div class="ao-rightBox">
            	<p class="mode-title"><?=WEBNAME?>手机版</p>
                <p class="mode-content">最省钱的手机网购神器</p>
                
                <div class="ao-content-box">
                    <ul class="trigger clearfix">
                        <li class="current"><a href="javascript:void(0);" class="android"></a></li>
                        <li><a href="javascript:void(0);" class="iphone" ></a></li>
                    </ul>
                    <div class="yahei panel-box">
                        <div class="ao-content-panel clearfix">
                            <div class="ao-way ao-way1">
                                <h6>方式1：扫描二维码</h6>
                                <div class="code"><div><img src="<?=$dd_tpl_data['app']?>" style="width:120px; height:120px" /></div></div>
                            </div>
                            <div class="ao-way ao-way2">
                                <h6>方式2：安卓用户点击下载</h6>
                                <div class="download">
                                    <p class="bj"><a class="btn-down-css3" target="_blank" href="<?=$dd_tpl_data['apkurl']?>" onclick="Ftrack('/virtual/www/app','android_download');">免费下载</a></p>
                                    <p>您还可以在各大电子市场<br />中搜索"<strong><?=WEBNAME?></strong>"下载安装</p>
                                </div>
                            </div>
                          <!--  <div class="ao-way ao-way3">
                                <h6>方式3：短信获取下载链接</h6>
                                <form data-action="/" onsubmit="return false;" target="_self" class="J_aoform" id="J_aoform_android">
                                <div class="ao-way-con">
                                    <input type="hidden" name="t" value="1"/>
                                    <input class="yahei ao-way3-int J_int" data-nulltip="请输入手机号码" data-errortip="mobile-手机号码格式错误" type="text" name="tel" placeholder="在这里输入您的手机号" value="" autocomplete="off" maxlength="11"/><br/>
                                    <input class="yahei ao-way3-btn J_btn" type="submit" value="免费获取" />
                                    <div class="J_err ao-error" style="display:none;"></div>
                                </div>
                                </form>
                            </div>-->
                        </div>
                        <div class="ao-content-panel none">
                            <div class="ao-way ao-way1">
                                <h6>方式1：扫描二维码</h6>
                                <div class="code"><img  src="<?=$dd_tpl_data['app']?>" style="width:120px; height:120px" /></div>
                            </div>
                            <div class="ao-way ao-way2">
                                <h6>方式2：苹果用户点击下载</h6>
                                <div class="download">
                                    <p class="bj"><a class="btn-down-css3 btn-down-css3-ios" href="<?=$dd_tpl_data['ipaurl']?>" target="_blank" onclick="Ftrack('/virtual/www/app','iphone_download');">App Store 免费下载</a></p>
                                    <p>您还可以在 App Store<br />中搜索"<strong><?=WEBNAME?></strong>"下载安装</p>
                                </div>
                            </div>
                          <!--  <div class="ao-way ao-way3">
                                <h6>方式3：短信获取下载链接</h6>
                                <form data-action="/" onsubmit="return false;" target="_self" class="J_aoform" id="J_aoform_ios">
                                <div class="ao-way-con">
                                    <input type="hidden" name="t" value="2"/>
                                    <input class="yahei ao-way3-int J_int" data-nulltip="请输入手机号码" data-errortip="mobile-手机号码格式错误" type="text" name="tel" placeholder="在这里输入您的手机号" value="" autocomplete="off" maxlength="11"/><br/>
                                    <input class="yahei ao-way3-btn J_btn" type="submit" value="免费获取" />
                                    <div class="J_err ao-error" style="display:none;"></div>
                                </div>
                                </form>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div><div class="clear"></div> <div style="margin-top:50px"></div>
    <div class="fun-list ao-fun-list">
        <ul class="clearfix">
            <li class="favorable"><span class="title">发现优惠</span><span>逛优惠商品，找喜欢宝贝，让您不再错过任何划算！</span></li>
            <li class="cang"><span class="title">连续签到</span><span>手机连续7天签到，集分宝一天比一天多哦！</span></li>
            <li class="last orders"><span class="title">返利下单</span><span>随时随地拿返利，该省的一分也不能少！</span></li>
        </ul>
    </div>
</div>  <div class="clear"></div>
<div style="margin-top:50px"></div>

<?php
include(TPLPATH."/inc/footer.tpl.php");
?>

</body></html>
