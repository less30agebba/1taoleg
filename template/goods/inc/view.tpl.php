<?php  //多多
if(!defined('INDEX')){
	exit('Access Denied');
}
$parameter=dd_act();
extract($parameter);
		
$tuijian_lanmu_title='推荐商品';
$tuijian_lanmu_goods=$goods_class->index_list(array('code'=>$goods['code']),4,1,"code='".$goods['code']."' and id!=".$goods['id']);
foreach($tuijian_lanmu_goods as $k=>$row){
	if($row['data_id']!=$goods['data_id']){
		$tuijian_lanmu_goods[$k]['view']=u('tao','view',array('iid'=>iid_encode($row['data_id'])));
	}
}
$css[]=TPLURL."/goods/250/css/list.css";
$css[]=TPLURL."/inc/css/vipduo_view.css";
$js[]="js/jQuery.autoIMG.js";
include(TPLPATH.'/inc/header3.tpl.php');
?><style>.demo ul{position:relative;padding:0;margin:0;font-size:12px; z-index:999}.demo ul li{visibility:hidden;color:#fff; background:#FF9900;position:absolute;top:0px;left:0px;width:320px;padding:15px;border-radius:5px;}/*显示li的内容的定位*/.demo ul:hover li,.demo ul a:hover li{visibility:visible;}/*鼠标经过ul时，显示li的内容*/.demo ul li a{margin-right:10px;color:#fff;line-height:28px;}.demo ul .copy-link{float:right; border:1px solid #ff3366; padding:0 10px;height:52px;text-align:center;line-height:52px;background:#fff;color:#ff3366;display:inline-block;margin:0;font-size:16px;font-family:Microsoft Yahei;margin-left:15px;border-radius:3px; cursor:pointer}.tg{padding:8px 0;width:320px;line-height:28px;color:#fff;border:0;  background:#FF9900; clear:both; position:relative}.tg span{padding:8px 0;width:320px;line-height:28px;color:#fff; clear:both; position:relative}</style>
<script>
$(function(){
	var pic_url='<?=tb_img($goods['img'],310)?>';
	$('#goodspic').attr('src',pic_url);
	$(".shopright .shopitem_main_l").imgAutoSize(310,310);
	
	$('.my-like').click(function(){
		goodsShoucang($(this));
	});
	$('.tx_title .tx_saomiao').hover(function(){
		$(this).find('.tx_erweima').show();
	},function(){
		$(this).find('.tx_erweima').hide();
	})
});

</script>
<script language="javascript" type="text/javascript" src="http://static.bshare.cn/b/buttonLite.js"></script>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC1.js"></script>
<div class="mainbody">
  <div class="mainbody1200" style="margin-top:15px">
   <div class="left-wrap">
    <div class="shop-item">
        <h1 class="title"><span class="item-title">特卖：</span><?=$goods['title']?></h1>
        <div class="item-content">
                    <a target="_blank" class="click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($goods['data_id'])?>&url=" data-itemid="<?=$goods['data_id']?>" isconvert=1 href="<?=$goods['jump']?>" target="_blank"><img  class="item-img" style="width: 407px;" id="goodspic" src="images/310.gif" alt="<?=$goods['title']?>" /></a>	
            <div class="tp_ab">
              <?php if($goods['price_man']>0){?>
              <div class="tp_bq tp_1 dd_cure"> <a target="_blank" href="<?=$goods['lq_url']?$goods['lq_url']:'javascript:void(0)'?>" > 
             <span class="span_1">满<?=$goods['price_man']?>元</span><br />
              <span>减<?=$goods['price_jian']?>元</span>
              </a></div>
              <?php }?>
              <?php if($goods['shouji_price']>0 && $goods['shouji_price']<$goods['discount_price']){?>
              <div class="tp_bq tp_2 dd_cure">
                <div class="inline" style="color:#fff;">
                <span>手机买再省</span><br />
                <span class="span_1"><?=$goods['discount_price']-$goods['shouji_price']?>元</span>
                </div>
              </div>
              <?php }?>
              <?php if($goods['is_fanli_ico']){?>
              <div class="tp_bq tp_3">
              <span>高额优惠</span>
              </div>
              <?php }?>
            </div>
			
                        <div class="item-info status-ongoing">
                    <a class="click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($goods['data_id'])?>&url=" data-itemid="<?=$goods['data_id']?>" isconvert=1 href="<?=$goods['jump']?>"  target="_blank">
					 <?php if($goods['is_starttime']){?>
				    <div class="orange-wrap1">
					 <?php }else{?>
					<div class="orange-wrap c_bgcolor">
					<?php }?>
                        <p class="real-price"><span class="money-sign">￥</span><?=$goods['discount_price']>999?round($goods['discount_price']):$goods['discount_price']?>&nbsp;    <?php if(isset($goods['price']) && $goods['price']>0){?><span id="yuanjia"  style="text-decoration:line-through; margin-top:-5px; font-size:15px">原价：<span><?=number_format($goods['price'],1)?></span> 元</span><?php }?></p>
                        <span class="buy-button"> <?php if($goods['is_starttime']){?><span style="font-size:14px"><?=$goods['starttime_tag']?>开抢</span><?php }else{?> 去抢购	<?php }?></span>
                    </div>
                </a>
                                <div class="pink-wrap">
								<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
              <span class="org-price">优惠三步：<span class="orange-text">①</span> 去抢购==<span class="orange-text">②</span> <?php if($goods['laiyuan_type']==3){?>京东购买<?php }else{?>到淘宝购买<?php }?>==<span class="orange-text">③</span> 确认收货回来拿积分！</span> <?php }else{?>
              <span class="org-price">优惠三步：<span class="orange-text">①</span> 去抢购==<span class="orange-text">②</span> <?php if($goods['laiyuan_type']==3){?>京东购买<?php }else{?>进入淘宝<?php }?>==<span class="orange-text">③</span> 按正常购物流程购买！</span><?php }?>
			
                </div>   
			
                <div class="center-wrap">   <?php if(FANLI==1){?><span style="font-size:21px; height:35px;line-height:55px; margin-top:10px; color:#FF0000"<?php if($goods['fanli']>0){?>title="购买后得<?=$goods['fanli'].$goods['unit']?>"<?php }?>><?php if($goods['fanli']==0){?>
 <h1><span class="orange-text" style="font-size:20px">确认收货后回到 <a href="/index.php?mod=user&act=tradelist&do=taobao" target="_blank"><font color="#0099CC" style="font-size:20px">我的订单</font> </a>查看<?php if($dd_tpl_data['fanli-kg']['open']==0){?>优惠<?php }?></span></h1><?php }else{?>
 
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
购买后得:<font size="+3"><strong><?=$goods['fanli']?></strong></font> <?php if($goods['laiyuan_type']==3){?>元<?php }else{?><?=TBMONEY?><?php }?>
<?php }else{?>
购买后有优惠<font size="+3"><strong></strong></font>
<?php }?> 
<?php }?></span><?php }?> <script type="text/javascript">function copyUrl2(){var Url2=document.getElementById("biao1");Url2.select(); document.execCommand("Copy"); alert("已复制好，可贴粘。");}</script> <div class="demo"> <ul>  <li><textarea cols="55" rows="9" id="biao1" class="tg">【商品名称】：<?=$goods['title']?>【原价】：<?=number_format($goods['price'],1)?> 元【优惠价】：<?=number_format($goods['discount_price'],1)?>元包邮秒杀！【下单地址】:http://www.1taoleg.com/index.php?mod=goods&act=view&code=<?=$goods['code']?>&id=<?=$goods['id']?>一淘乐购专享优惠！已抢购 <?=$goods['sell']?> 件！	 </textarea></li><input type="button" class="copy-link"  onClick="copyUrl2()" value="复制推广"></ul></div>
                                     	  <?php if($goods['is_starttime']){?><?php }else{?>   <?php if($goods['sell']>0){?><h1>已有<span class="orange-text"> <?=$goods['sell']?></span> 人在抢购该商品</h1><?php }?> 
                                        <div class="item-last-time">
										<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
										
                       <?php if(FANLI==1){?>
                      <img src="/yao.png" alt="<?=$row['name']?>" alt="该商品有优惠，请放心购买" title="该商品有优惠，请放心购买" /></span>
						<?php }else{?> <img src="/yao.png" alt="<?=$row['name']?>" alt="该商品有优惠，请放心购买" title="该商品有优惠，请放心购买" /></span> <?php }?> <?php }else{?>
						<img src="<?=TPLURL?>/inc/images/tao/wfanli.png" alt="<?=$row['name']?>" alt="" title="" />
						<?php }?> 
						</div>
						<?php }?> 
						
                    <div class="tuan-share">
					  <?php if($goods['is_starttime']){?>
          <div style="float:right; margin-right:25px; width:400px; padding:0 10px;">
          	<a class="y-like my-like" title="<?=$goods['is_shoucang']==1?'已收藏':'加入收藏'?>" data_id="<?=$goods['id']?$goods['id']:$goods['data_id']?>">
            	<span class="like-ico <?=$goods['is_shoucang']==1?'l-active':''?>"></span>
        	</a>
			<div class="h15px"></div>
			<div class="tixing"></div>
            <div class="tx_gt">
            	<div class="tx_top">
                	<div class="tx_title">
                    	<div class="tx_bt">开抢提醒:</div>
                        <script type="text/javascript">
						var __qqClockShare = {
						   content: "亲你关注的<?=utf_substr($goods['title'],27)?>...将在5分钟后以<?=$goods['discount_price']?$goods['discount_price']:$goods['price']?>价格开抢，请及时做好抢购准备！点击",
						   time: "<?=date('Y-m-d H:i',strtotime($goods['starttime']))?>",
						   advance: 5,
						   url: "<?=$goods['_url']?>",
						   icon: "1_1"
						};
						document.write('<a href="http://qzs.qq.com/snsapp/app/bee/widget/open.htm#content=' + encodeURIComponent(__qqClockShare.content) +'&time=' + encodeURIComponent(__qqClockShare.time) +'&advance=' + __qqClockShare.advance +'&url=' + encodeURIComponent(__qqClockShare.url) + '" target="_blank"><img src="http://i.gtimg.cn/snsapp/app/bee/widget/img/' + __qqClockShare.icon + '.png" style="border:0px;"/></a>');
						
						</script>
                    </div></br>
                	<div class="tx_title" style="font-size:14px;">设置提醒后会以QQ消息形式提醒</div>
                </div>
                <?php if($dd_tpl_data['erweima']){?>
                <div class="tx_top" style="margin-left:140px;">
                	<div class="tx_title">
                    	<div class="tx_bt">微信提醒:</div>
                        <div class="tx_saomiao">
                        	<div class="tx_erweima">
                            	<img src="<?=$dd_tpl_data['erweima']?>" />
                            </div>
                        </div>
                    </div>
                	<div class="tx_title" style="font-size:14px;">打开微信扫描下微信公众号定期推送消息</div>
                </div>
                <?php }?>
                <?php if($goods['phone_app_status']>0){?>
                <div class="tx_top" style="margin-left:90px;">
                	<div class="tx_title">
                    	<div class="tx_bt">APP提醒:</div>
                        <a href="<?=SITEURL?>/index.php?mod=app&act=phone"><div class="tx_down"></div></a>
                    </div></br>
                	<div class="tx_title" style="font-size:14px;">下载手机客户端，随时随地可查看</div>
                </div>
                <?php }?>
            </div>
          </div>
          <?php }else{?>
           <div class="bshare-custom" style="margin-top:10px;margin-left:80px">如果您喜欢此宝贝，记得分享给您的朋友，一起享优惠：<a title="分享到QQ空间" class="bshare-qzone">QQ</a>
<a title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>
<a title="分享到人人网" class="bshare-renren">人人</a>
<a title="分享到腾讯微博" class="bshare-qqmb">腾讯</a>
</div> <script type="text/javascript" charset="utf-8">
bShare.addEntry({
    title: "<?=$goods['title']?>",
    url: "<?=$goods['_url']?>",
    summary: "<?=str_replace('"','',compact_html(strip_tags($goods['content'])))?>",
    pic: "<?=preg_match('/^http/',$goods['img'])?$goods['img']:SITEURL.'/'.$goods['img']?>"
});
</script>
				 
          <?php }?>
                  
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
            <span class="rank-name">同类商品精选</span>
            <a href="<?=u('tao','daohang')?>" target="_blank"><span class="more-btn" style="cursor:pointer">更多热卖商品 ></span></a>
        </div>
        <ul class="rank-ul">
                   <?php foreach($tuijian_lanmu_goods as $row){?>
								          <li>
                 <a href="<?=$row['url']?>"> <img src="<?=tb_img($row['img'],200)?>" alt="<?=$row['title']?>" width="100" height="100" /></a>
                <div class="intro">
                    <p class="intro-text"><a href="<?=$row['url']?>"><?=$row['title']?></a></p>
                    <p class="price">￥<?=$row['discount_price']?><span style="font-size:12px; margin-left:5px; color:#999999;text-decoration:line-through"><?=$row['price']?></span>	</p>
                </div>
            </li><?php }?>	
                                      
                    </ul>
    </div>
</div>  
 
 <?php include(TPLPATH.'/vip/huodong.tpl.php');?>
</div>
</div>  
<?php include(TPLPATH.'/inc/tdj.tpl.php');?>
<?php include(TPLPATH.'/goods/jumpbox.tpl.php');?>
<?php 
include(TPLPATH.'/inc/footer.tpl.php');
?>
