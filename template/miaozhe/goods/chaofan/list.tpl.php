<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$pagesize=$dd_tpl_data['pagesize'];
include_once(DDROOT.'/mod/goods/public.act.php');
$bankuai_code=$bankuai_code?$bankuai_code:$_GET['code'];
$parameter=act_goods_list($bankuai_code,$_GET['do'],$ajax_load_num,$pagesize,$_GET['page'],$_GET['cid'],$goods_total);
extract($parameter);
if(defined('VIEW_PAGE')||$_GET['page']<=1){
?>
<div class="brand_big_list">
<!--这里必须定义一个goods_items-->
<ul class="goods_items">
<?php }?>
<?php if(!empty($goods_list)){?>
<?php foreach($goods_list as $row){?>
<li>
	              <div class="list-good">  
				      <div class="big_list">
	                                
									    <a class="click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['url']?>" target="_blank"></a>
									   
	                                <span class="pic">
										<?=dd_html_img($row['img'],$row['title'],500)?>
<?php if($row['top']>0){?><span class="tuijian"></span><?php }?>
		<?php if($row['is_starttime']){?>
<span class="yugao2"></span>
<?php }else{?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
<?php }?>							
									</span>
									<div class="right">
	                                <div class="title yahei">
										<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i></div><?php }?>
                                       <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i></div><?php }?>
			    <?=$row['title']?></div>
	                                <div class="money_bg">
	                                    <div class="money">￥<em class="num2"><?=number_format($row['discount_price'],1)?></em>&nbsp;<del>￥<?=$row['price']?></del></div>
	                                    <div class="f_money">
						(先支付 <span><?=number_format($row['discount_price'],0)?></span> 元购买，确认收货后返利 <span><?=$row['fanli_je']?></span> 元)
						
						</div>
						
						<div class="price mt-15 pb-5">
						<span class="l f-16 ml-20">到手价：</span>
						<span class="l mr-5 mt-5">¥</span>
						<span class="l real">
<?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span>
					</div>
					<p class="buy"> 
					<?php if($row['is_starttime']){?>
         <a class="yugao click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['url']?>"  title="<?=$row['starttime_tag']?>开始" target="_blank"><?=$row['starttime_tag']?>开始</a>
          <?php }else{?>
         <a class="left2 click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['url']?>"  title="查看商品详情" target="_blank">查看详情</a>
                   <a class="right2 click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['jump']?>" title="立即去淘宝购买" target="_blank">立即购买</a>
            <?php }?>		
					</p>
        
		<?php if($row['is_starttime']){?>
           <div class="bottons"> <div class="yishou">已有<?=$row['sell']?>人关注</div> </div>
          <?php }else{?>
          <div class="bottons"> <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?></div>
            <?php }?>		
			
	                                 
										
	                                </div>	</div>
	                            </div>	  </div>	
                        	</li>
<?php }?>
<?php }elseif(defined('VIEW_PAGE')){?>
       	<div class="empty_data">
          <div class="empty_ico">&nbsp;</div>
          <div class="empty_word">抱歉，没有找到相关商品。</div>
		  <div style="clear:both"></div>
        </div>
        <?php }?>
<?php if(defined('VIEW_PAGE')||$_GET['page']<=1){?>
</ul>
<div style="clear:both"></div>
</div>
<?php include(TPLPATH.'/inc/tdj.tpl.php');?>
<?php }?>



