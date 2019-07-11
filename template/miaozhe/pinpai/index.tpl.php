<?php
$pinpai=1;
include(TPLPATH.'/admin_set/vipduo.tpl.php');
$css[]=TPLURL."/pinpai/css/pinpai.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<div class="cf_main"> 
	<!--banner-->
	<div class="chaofan_banner_bg">
		<div class="chaofan_banner"><img src="<?=TPLURL?>/pinpai/images/banner.jpg"></div>
	</div>
	<div class="chaofan_main_bg">
<div style="margin:0 auto; width:1200px">
<div class="con_auto super-limit-area" style="padding-top:20px">
<div style="display:block;" class="goods_list_cf">
<!--这里必须定义一个goods_items-->
<div class="clearfix home-limit-box yahei goods_items">
 <?php 
$page = !($_GET['page'])?'1':intval($_GET['page']);
$pagesize=10;
$frmnum=($page-1)*$pagesize;
$total=$duoduo->count('plugin_pinpai ','1');
$plugin_pinpai=$duoduo->select_all('plugin_pinpai ','*','1 order by sort desc limit '.$frmnum.','.$pagesize);
echo mysql_error();

foreach($plugin_pinpai as $vo){
?>

<div class="item-mod list-good">
               	<div class="tp">
               		<a href="<?=u('jump','s8',array('url'=>$vo['url']))?>" target="_blank"><img src="<?=$vo['pic_url']?>" alt="<?=$row['title']?>" width="540" height="240"/> <?php if(date('Y-m-d',$vo['stime'])==date('Y-m-d')||date('Y-m-d',$vo['addtime'])==date('Y-m-d')){?><span class="new-icon"></span><?php }?></a>  </div>
                   <div class="money desc">	<a href="<?=$row['url']?>"  target="_blank"><span class="title"><span class="red"><?=(float)$vo['zhe']?>折 今日活动</span><?=$vo['title']?></span></a>
              
     <div class="status-box">
          <ul>
	<li>活动时间：<?=date('m月d日',$vo['stime'])?>~<?=date('m月d日',$vo['etime'])?></li>
</ul>
</div>
<div class="money-box money">
<div class="price-box l">
<div class="left l">
<p class="price">平均返利：<strong><?=$vo['bili']?>%</strong></p> </div>

</div>
<div class="btn-box l"><p class="btn-status"><a href="<?=u('jump','s8',array('url'=>$vo['url']))?>" target="_blank"> <?php if($vo['etime']<time()){?><font  color="#000">活动结束</font><?php }else{ ?>去看看<?php }?></a></p></div></div>

 </div>
              
            </div>
    

    
<?php }?>
 </div></div>
<div class= "clear"></div>
<?php if($total>$pagesize){?>
		<div class="chaofan_page" style="margin-top:20px"><?=pageft($total,$pagesize,u('pinpai','index'))?></div>
		<?php }?>
<div id="m_active" class="m_active">
<div class="active_tit cf">
<span class="name">活动规则</span>
</div>
<div class="active_con j_target">
<ol style="" data-tabid="1">
<li>通过本活动页面点击直达购买即可跟踪到订单，都有返利。</li>

<li>超高返利只限于活动页面展示里面所展示的商品，同店铺其他商品只按照普通比例进行返利。</li>

<li>最终返利集分宝为您的订单商品实付金额上乘于返利比率而获得的返利。</li>

<li>超高返利订单确认收货后，24小时内会发放返利到您的账户中。</li>

<li>若超高返利订单发生了退款行为（包括全额退款、部分退款或退运费等），无法享有超高返利。</li>

<li>分享超级返利商品到微博、QQ空间等，如果有人通过您分享的链接注册并购买了该商品，您还可以获得额外的奖励。</li>

<li>其他疑问联系在线客服。</li>
</ol>
</div>
</div>
<!-- /活动规则 -->


</div></div></div>  
<div style="margin-top:-30px"></div>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>