<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$js[]="js/jQuery.autoIMG.js";
$css[]=TPLURL."/inc/css/vipduo_view.css";
include(TPLPATH.'/inc/header3.tpl.php');
?>
<script>
$(function(){
		   
	<?php if($webset['taoapi']['goods_comment']==1 && WEBTYPE==0){?>
	getComment();
	<?php }?>
	
	var pic_url='<?=$goods['pic_url']?>';
	if(pic_url.indexOf('taobaocdn.com')>0){
		pic_url=pic_url+'_310x310.jpg';
	}
	$('#goodspic').attr('src',pic_url);
	$(".shopright .shopitem_main_l").imgAutoSize(310,310);
});
</script>
<div class="mainbody1100">
	<div class="mainbody1200">
	<div style="margin-top:20px"></div>
	
     <div class="left-wrap">
    <div class="shop-item">
        <h1 class="title"><span class="item-title">特卖：</span><?=$goods['title']?></h1>
        <div class="item-content">
                   <a class="click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($goods['iid'])?>&url=" data-itemid="<?=$goods['iid']?>" isconvert=1 href="<?=$goods['jump']?>" target="_blank"><img  class="item-img" id="goodspic" src="images/310.gif" alt="<?=$goods['title']?>" /></a>
			
                        <div class="item-info status-ongoing">
                     <a class="click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($goods['iid'])?>&url=" data-itemid="<?=$goods['iid']?>" isconvert=1 href="<?=$goods['jump']?>" target="_blank">
                   <?php if(TAOTYPE==1){?>
				    <?php if($has_fanli*$allow_fanli==0){?>
					<div class="orange-wrap2">
					<?php }else{?>
				    <div class="orange-wrap">
					<?php }?>
					<?php }else{?>
					<div class="orange-wrap">
					<?php }?>
                        <p class="real-price"><span class="money-sign">￥</span><?=$goods['price']?>&nbsp;<?php if(isset($goods['yuanjia']) && $goods['yuanjia']>0){?><span id="yuanjia"  style="text-decoration:line-through; font-size:15px">原价：<span><?=$goods['yuanjia']?></span> 元</span><?php }?></p>
                        <span class="buy-button"> <?php if(TAOTYPE==1){?><?php if($has_fanli*$allow_fanli==0){?>无返利<?php }else{?>去抢购<?php }?><?php }else{?>去抢购<?php }?></span>
                    </div>
                </a>
                                <div class="pink-wrap">
		
		       <?php if($benzhan==1){?><span class="org-price">&nbsp;&nbsp;&nbsp;</span>
                    <span class="jiesheng">  <span class="tishi"><span>返利</span><span class="jfb"><?=$max_fan?></span>&nbsp;&nbsp;&nbsp;<span class="jfb2">即省<?=round($max_fan/TBMONEYBL,2)?> 元</span></span></span><?php }else{?>
				 <span class="org-price">返利三步：<span class="orange-text">①</span> 去抢购==<span class="orange-text">②</span> 到淘宝购买==<span class="orange-text">③</span> 确认收货回来拿返利！</span>
				<?php }?>
                  
                </div>
				  <?php if($zhuanxiang==1){?>
                        <div title="使用手机扫描二维码购买，优惠<?=$shouji_youhui?>元" style="width:90px; height:90px;  position:absolute; top:240px; left:450px;">
                        <div style="margin-bottom:5px">手机省<b style="font-family: Arial; color:#F60; font-size:16px"><?=$shouji_youhui?></b>元</div>
                        <img src="<?=$qrcode?>"  style="width:95%; height:95%; display:block" alt="二维码"   alt="使用手机扫描二维码购买，优惠<?=$goods['discount_price']-$goods['shouji_price']?>元"/>
                        </div>
                        <?php }?>
						
						
                <div class="center-wrap">
                                        <h1>已有<span class="orange-text"><?=$goods['volume']?></span>人在抢购该商品</h1>
                                        <div class="item-last-time">
                      <?php if($has_fanli*$allow_fanli==0){?><img src="<?=TPLURL?>/inc/images/tao/wfanli.png" alt="无返利" title="该商品无返利"> <?php }else{?><img  src="<?=TPLURL?>/inc/images/tao/youfanli.png" alt="<?=$row['name']?>" alt="该商品有返利，请放心购买" title="该商品有返利，请放心购买" /> 
                   <?php }?>
                                                                        </div>
						
                    <div class="tuan-share" align="center" style="margin-top:30px;margin-left:50px">
                    <div class="bshare-custom">宝贝分享到：<a title="分享到QQ空间" class="bshare-qzone">QQ</a>
<a title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>
<a title="分享到人人网" class="bshare-renren">人人</a>
<a title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=<?=$webset['bshare']['uuid']?>&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
				 
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>

<!--右边部分-->
<div class="right-wrap">

<!--全站销售排行-->
    <div class="rank-list" style="padding-bottom:8px">
        <div class="rank-title">
            <span class="rank-name">本站推荐精选</span>
            <a href="<?=u('tao','daohang')?>" target="_blank"><span class="more-btn">更多热卖商品 ></span></a>
        </div>
        <ul class="rank-ul">
		 	   <?php foreach($tuijian_lanmu_goods as $row){?>
								          <li>
                 <a href="<?=$row['url']?>"> <img src="<?=tb_img($row['img'],200)?>" alt="<?=$row['title']?>" width="100" height="100" /></a>
                <div class="intro">
                    <p class="intro-text"><a href="<?=$row['url']?>"><?=$row['title']?></a></p>
                    <p class="price">￥<?=$row['discount_price']?>	   <del style="color:#999999; font-size:14px"><?=$row['price']?></del></p>
                </div>
            </li><?php }?>	
                                      
                    </ul>
    </div>
</div>  
 <?php include(TPLPATH.'/tao/huodong.tpl.php');?>
</div>

<?php include(TPLPATH.'/inc/tdj.tpl.php');?>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>