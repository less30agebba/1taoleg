<?php
$css[]=TPLURL."/inc/css/weixin.css";
include(TPLPATH.'/inc/header3.tpl.php');

?>
<style>
.footer { margin:0; }
</style>

<div class="wx_bg">
	<div class="t">
		<div class="banner">
			<div style="width:1100px; margin:auto;">
				<span class="wx_img"><img src="<?=$dd_tpl_data['erweima']?>" width="300" height="300" /></span>
				<span class="title_1">关注<?=WEBNAME?>微信</span>
				<span class="title_2">加<?=WEBNAME?>为好友，更多贴心服务、活动等着你哦~</span>
				<span class="title_3"><?=$dd_tpl_data['weixinhao']?></span>
			</div>
		</div>
	</div>
	<div class="content_1">
		<div class="content">
			<span class="bigtitle" style="color:#ff7a7a;">微信粉丝专享活动</span><br /><br />
			关注<?=WEBNAME?>官方微信即可参加只属于微信会员的专属活动，更有机会赢得缤纷豪礼。
		</div>
		<div class="img"></div>
	</div>
	<div class="line_1"></div>
	<div class="content_2">
		<div class="content">
			<span class="bigtitle" style="color:#4baff5;">网购信息爆料</span><br /><br />
			1. 想知道最近什么流行吗？关注<?=WEBNAME?>官方微信，精致单品、创意宝贝，总有一款适合你。<br />
			2. 促销活动你错过了？关注<?=WEBNAME?>官方微信，我们只为你精选给力的促销爆料。
		</div>
		<div class="img"></div>
	</div>
	<div class="line_2"></div>
	<div class="content_3">
		<div class="content">
			<span class="bigtitle" style="color:#ff60ab;">日常有趣互动</span><br /><br />
			1. 可询问在使用<?=WEBNAME?>过程中遇到的问题<br />
			2. 把不开心的事告诉<?=WEBNAME?>，让<?=WEBNAME?>开心一下<br />
			3. 别跟<?=WEBNAME?>谈感情，戒了~<br />
			4. 关键是你不找<?=WEBNAME?>，<?=WEBNAME?>一般情况下很少发东西给你
		</div>
		<div class="img"></div>
	</div>
</div><div style="margin-top:-10px"></div>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>
</body>
</html>
