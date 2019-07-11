<?php
include(TPLPATH.'/inc/header.tpl.php');
?>
<style type="text/css">
.fanli-body{width:100%;padding-bottom:-20px;}
.fanli-body img{display:block;}
.fanli-banner-bj{width:100%;height:287px;margin-bottom:25px;background:url(<?=TPLURL?>/inc/images/jifenbao/banner-bj.png) repeat-x;}
.fanli-banner{width:1160px;height:259px;margin:0 auto;background:url(<?=TPLURL?>/inc/images/jifenbao/banner.png) top center no-repeat;}
.tb-fanli{width:960px;height:339px;margin:0 auto 18px auto;background:url(<?=TPLURL?>/inc/images/jifenbao/tb-fanli.png) no-repeat;}
.product-fanli{width:960px;height:340px;margin:0 auto 18px auto;background:url(<?=TPLURL?>/inc/images/jifenbao/product-fanli.png) left no-repeat;}
.fanli-title .product-fanli{background:url(<?=TPLURL?>/inc/images/jifenbao/title-2.png) no-repeat;}
.{padding-left:5px; padding-bottom:5px}
.btn-experience2,.fanli-problem{width:960px;margin:0 auto;}
.btn-experience2,.fanli-bbx{width:960px;margin:0 auto;}
.btn-experience1,.btn-experience2{width:258px;height:72px;margin:0 auto 30px auto;text-indent:-9999px;display:block;background:url(<?=TPLURL?>/inc/images/jifenbao/btn-experience.png) no-repeat;}.fanli-acl .mflcom{padding-bottom:20px;}
.btn-experience2{position:relative;left:-100px;margin-bottom:30px;}
.fanli-problem{padding-bottom:20px;}.fanli-ho  .ng .so{padding-bottom:20px;}
.fanli-problem .title{height:63px;font:20px/63px 'Microsoft YaHei';padding-left:70px;border:1px solid #bddb9b;background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem-bj.png) repeat-x;position:relative;}
.fanli-problem .content{padding:20px 160px 20px 70px;line-height:26px;font-size:16px;border:1px solid #bddb9b;border-top:none;display:none;background:#fff;}
.fanli-problem .array1,.fanli-problem .array2,.fanli-problem .array3,.fanli-problem .array4,.fanli-problem .array5,.fanli-problem .array6,.fanli-problem .array7,.fanli-problem .array8,.fanli-problem .array9{position:absolute;top:-1px;left:-1px;width:64px;height:64px;background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) no-repeat;}
.fanli-problem .array2{background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) 0 -64px no-repeat;}
.fanli-problem .array3{background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) 0 -128px no-repeat;}
.fanli-problem .array4{background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) 0 -192px no-repeat;}
.fanli-problem .array5{background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) 0 -256px no-repeat;}
.fanli-problem .array6{background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) 0 -320px no-repeat;}
.fanli-problem .array7{background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) 0 -384px no-repeat;}
.fanli-problem .array8{background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) 0 -448px no-repeat;}
.fanli-problem .array9{background:url(<?=TPLURL?>/inc/images/jifenbao/fanli-problem.png) 0 -512px no-repeat;}
.triangle-under,.triangle-on{position:absolute;top:20px;right:16px;padding:8px 6px 2px 6px;border:1px solid #bddb9b;cursor:pointer;}
.triangle-on{padding:2px 6px 8px 6px;}
.triangle-under .triangle,.triangle-on .triangle{border-width:5px;border-color:#75bc11 #fff #fff #fff;border-style:solid;width:0;height:0;font-size:1px;background:#f6ffe9;line-height:0;}
.triangle-on .triangle{border-color:#fff #fff #75bc11 #fff;}

.wrap header{margin-bottom:0;}
#footer{margin-top:40px;}
</style>
<div class="fanli-body">
<div class="fanli-banner-bj">
<div id="banner" class="fanli-banner"></div>
</div>
<div class="tb-fanli">
</div><a class="btn-experience1" href="<?=u('tao','index')?>" target="_blank">开始体验</a><div class="product-fanli"></div><a class="btn-experience2" href="<?=u('mall','list')?>" target="_blank">开始体验</a>

<div class="fanli-problem"><div class="title">我的返利在哪里？
                <div class="array1"></div><div class="triangle-under triangle-on"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">通过<?=WEBNAME?>返利网去购物后，您的返利和订单信息都会出现在<?=WEBNAME?>返利网，您可以在“会员中心，我的账号管理”中查看。</div></div>
				
				<div class="fanli-problem"><div class="title">返集分宝有什么用？
                <div class="array2"></div><div class="triangle-under"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">集分宝可以直接在淘宝网购物时抵用，100集分宝相当于1元钱。</div></div><div class="fanli-problem"><div class="title">我购物了，返利什么时候到账？
                <div class="array3"></div><div class="triangle-under"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">去淘宝购物的返利会在您确认收货后的24小时内出现在您的<?=WEBNAME?>返利网账户，去商城购物的返利信息会在下单后出现，但是需要过了退货期才能到账，一般1-2个月之间。</div></div><div class="fanli-problem"><div class="title">网购时老是忘记使用<?=WEBNAME?>返利网，怎么办？
                <div class="array4"></div><div class="triangle-under"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">您可以把<?=WEBNAME?>返利网加入收藏夹，或者存放到桌面。这样每次都记得从<?=WEBNAME?>返利网去购物，就不会忘记返利啦。</div></div><div class="fanli-problem"><div class="title">从<?=WEBNAME?>返利网去淘宝买了东西，但是没看到返利怎么办？
                <div class="array5"></div><div class="triangle-under"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">淘宝网的订单需要在您在淘宝网确认收货后才能看到，在订单出现的同时返利也会达到您的账户中。如果确认收货超过24小时后还没看到订单，请联系客服。</div></div><div class="fanli-problem"><div class="title">从<?=WEBNAME?>返利网去买淘宝购物车和收藏夹的宝贝有返利吗？
                <div class="array6"></div><div class="triangle-under"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">通过<?=WEBNAME?>返利网直接去购买淘宝购物车或者收藏夹的商品无返利，建议您可以通过<?=WEBNAME?>返利网搜索您要购买的商品再加入购物车进行下单。</div></div><div class="fanli-problem"><div class="title">在淘宝如果要购买多件商品怎么拿返利？
                <div class="array7"></div><div class="triangle-under"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">若您购买多件商品，可以通过<?=WEBNAME?>返利网搜索你要买的宝贝链接，然后在淘宝网加入购物车，依次全部加入购物车后一起购买。但如果是之前已经加入购物车的商品，建议您重新搜索后再放入购物车下单，否则可能会导致之前加入购物车的商品无法跟单。</div></div><div class="fanli-problem"><div class="title">打折的商品能返利吗？
                <div class="array8"></div><div class="triangle-under"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">商家宝贝有打折优惠时，可以在成交价的基础上获得返利，享受折上折待遇。</div></div><div class="fanli-problem"><div class="title">虚拟商品（如话费，点卡）是否参加返利？
                <div class="array9"></div><div class="triangle-under"><div class="triangle"></div></div></div><div class="content yahei" style="display:block;">虚拟类商品，虽然可以在淘宝返利里搜索查看到返利信息，但是没有返利的。</div></div></div>
				
<script>$(function(){
	var $triangleBox = $('.triangle').parent();
	
	$triangleBox.click(function(){
		$(this).toggleClass('triangle-on');	
		$(this).parent().next('div.content').toggle();
	},function(){
		$(this).toggleClass('triangle-on');	
		$(this).parent().next('div.content').toggle();
	});
});

Simple.nav(4);
</script>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>