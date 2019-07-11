<?php
include(TPLPATH.'/inc/header.tpl.php');
?>
<style>.bj{width:990px;margin:0 auto;}
.tbg-wrap{padding-bottom:30px; margin-bottom:30px; background:url(<?=TPLURL?>/inc/images/wanzhuan/bg.png) #E6E6E6 no-repeat center top;}
.tbg-try{border:1px solid #CCC; border-top:none; padding:27px 0; background:#F6F6F6; text-align:center;}
.tbg-faq{margin-bottom:25px;}
#backtop{margin-left:20px;}

.t-faq{position:relative; padding:20px; background:#FFF; font-size:17px; line-height:27px; color:#9D0406;}
.t-faq .t{margin-bottom:10px; font-size:19px; font-weight:bold; color:#3488B4;}
.t-faq em{color:#3488B4; font-weight:normal;}
.t-faq dl{padding:10px 0; border-bottom:1px dotted #E5E5E5; color:#666;}
.t-faq dl.last{border-bottom:none;}
.t-faq dt{color:#333; font-weight:bold;}
.t-faq a:link, .t-faq a:visited{color:#125A11; text-decoration:underline;}
.t-faq a:hover, .t-faq a:active{color:#F60; text-decoration:underline;}
.btn-tbg-more{position:absolute; right:20px; bottom:20px; display:block; width:183px; height:48px;}
.del{margin-top:-105px; margin-left:594px; font-size:32px; font-weight:bold; color:#3488B4;}
</style>
<div class="tbg-wrap">
<div class="bj">
<div class="tbg-top">
<img src="<?=TPLURL?>/inc/images/wanzhuan/img-1.png" alt="玩转淘宝返利" width="990" height="337" usemap="#Map" />
<map name="Map"><area shape="rect" coords="147,252,380,324" href="<?=u('help','taobao')?>#J-anchor-1" alt="基础篇" class="J-anchor"><area shape="rect" coords="380,251,616,324" href="<?=u('help','taobao')?>#J-anchor-2" alt="问答篇" class="J-anchor"><area shape="rect" coords="616,251,847,324" href="<?=u('help','taobao')?>#J-anchor-3" alt="场外援助篇" class="J-anchor"></map></div>

<div class="tbg-guide">
<div id="J-anchor-1" style="background:#FFFFFF"> 

<img src="<?=TPLURL?>/inc/images/wanzhuan/img-2.jpg" width="990" height="642" alt="1-复制宝贝标题" />
<div style="border-left:1px solid #ccc;border-right:1px solid #ccc; padding-left:0px"><img src="<?=TPLURL?>/inc/images/wanzhuan/img3b.jpg" width="988" height="462" alt="2-来返利网搜索" /></div>
<img src="<?=TPLURL?>/inc/images/wanzhuan/img4b.jpg" width="990" height="580" alt="3-到淘宝搜索结果页" /> 



<div class="tbg-try"><a href="<?=u('tao','index')?>" class="btn-tbg-try" target="_blank"><img src="<?=TPLURL?>/inc/images/wanzhuan/img-5.png" width="397" height="76" alt="简单不？马上去试试" /></a></div></div>

<div id="J-anchor-2" class="tbg-faq"><h3><img src="<?=TPLURL?>/inc/images/wanzhuan/img-6.png" width="990" height="81" alt="问答篇"></h3>

<div class="yahei t-faq"><h4 class="t">常见疑问解答：</h4><dl><dt><em>Q：</em>通过淘宝返利收藏宝贝，下次购物能返利吗？</dt><dd><em>A：</em>经淘宝返利跳转到淘宝网，先收藏宝贝，下次再购买时不能有得到返利的哦！不建议使用。</dd></dl><dl><dt><em>Q：</em>购买淘宝网套餐有返利吗？</dt><dd><em>A：</em>经淘宝返利通道前往淘宝网，购买套餐宝贝暂时不能返利，不建议使用哦。</dd></dl><dl><dt><em>Q：</em>聚划算的商品有返利么？</dt><dd><em>A：</em>购买的商品若参加聚划算，则订单无返利。</dd></dl><dl><dt><em>Q：</em>商家宝贝打折优惠时，可以返利吗？返利是怎么算的</dt><dd><em>A：</em>商家宝贝有打折优惠时，可以在成交价的基础上获得返利，享受折上折待遇。</dd></dl><dl><dt><em>Q：</em>手机充值卡、游戏点卡、机票有返利吗？</dt><dd><em>A：</em>这些都是虚拟类商品，虽然可以在淘宝返利里搜索查看到返利信息，但是没有返利的。</dd></dl><dl class="last"><dt><em>Q：</em>货到付款是否可以得到返利？</dt><dd><em>A：</em>货到付款暂时无法得到返利，建议使用网上支付。</dd></dl><a href="/index.php?mod=help&act=index&cid=3" class="btn-tbg-more" target="_blank"><img src="<?=TPLURL?>/inc/images/wanzhuan/img-7.png" width="183" height="48" alt="查看更多解答" /></a></div></div>

<div id="J-anchor-3" class="tbg-cs"><img src="<?=TPLURL?>/inc/images/wanzhuan/img-8.png" alt="场外援助篇" width="990" height="225" usemap="#Map2" />
<map name="Map2"><area shape="rect" coords="170,119,331,161" id="kefu" class="btn-cs" alt="客服在线 每天8:30-22:00"></map></div><div class="del"><?=$dd_tpl_data['tel']?></div></div></div><div style="padding-top:80px"></div></div>
<div style="margin-bottom:-50px"></div>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>