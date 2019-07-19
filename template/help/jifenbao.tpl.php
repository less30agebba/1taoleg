<?php
include(TPLPATH.'/inc/header3.tpl.php');
?>
<style type="text/css">
.jfb{ 
	margin-bottom: -20px;
	padding: 0;
	background: url(<?=TPLURL?>/inc/images/jifenbao/1ybDuQKyQ1.png) repeat left top;
}
.topjfb {
	background: url(<?=TPLURL?>/inc/images/jifenbao/1ybDuMxbfZ.png) repeat-x left top;
}
.top-jfb {
	height: 134px;
	margin: 0 auto;
	background: url(<?=TPLURL?>/inc/images/jifenbao/1ybcqQtmmD.png) no-repeat center top;
	text-indent: -9999px;
}
.content {
	position: relative;
	width: 990px;
	height: 1250px;
	margin: auto;
	background: url(<?=TPLURL?>/inc/images/jifenbao/1ybDuO12tx.png) no-repeat center top;
}
.banner1 h3,
.banner2 h3,
.banner3 h3 {
	text-indent: -9999px;
}
.banner1 a,
.banner2 a,
.banner3 a {
	display: block;
	overflow: hidden;
	width: 200px;
	height: 40px;
	text-indent: -9999px;
}
.banner2 a {
	position: absolute;
	top: 656px;
	left: 36px;
}
.banner3 a {
	position: absolute;
	top: 1112px;
	left: 515px;
}

.bottom {
	height: 206px;
	background: url(<?=TPLURL?>/inc/images/jifenbao/1ybXvn5BAT.png) no-repeat center top;
}
.bottom-content {
	position: relative;
	width: 990px;
	margin: auto;
}
.left-hand {
	position: absolute;
	top: 24px;
	left: 600px;
	font-size: 14px;
	font-weight: 600;
	color: #E14683;
}
.left-hand a {
	font-size: 12px;
	font-weight: 400;
}
.right-hand {
	position: absolute;
	top: 35px;
	left: 220px;
	font-size: 14px;
	font-weight: 600;
	color: #fff;
}
</style>
<div class="out"></div>
<div class="jfb">
	<div class="topjfb">
		<div class="top-jfb">带你了解集分宝</div>
	</div>
	<div class="content">
		<div class="banner1">
			<h3>亲，集分宝是支付宝积分哦！</h3>
		</div>
		<div class="banner2">
			<h3>当钱花! 100个集分宝=1元</h3>
			<a href="<?=u('huan','list')?>" target="_blank">花集分宝秘籍</a>
		</div>
		<div class="banner3">
			<h3>轻松赚取集分宝</h3>
			<a href="<?=u('tao','index')?>" target="_blank">赚集分宝秘籍</a>
		</div>
	</div>
	<div class="bottom">
		<div class="bottom-content">
			<div class="left-hand">
				我有多少集分宝？
				<br />
				<a href="<?=u('user','index')?>">去查我的集分宝</a>
			</div>
			<div class="right-hand">
				集分宝有效期是3年哦～
			</div>
		</div>
	</div>
</div>

<?php include(TPLPATH.'/inc/footer.tpl.php');?>