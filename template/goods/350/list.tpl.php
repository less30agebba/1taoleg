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
	              <div class="list-good">              <div class="big_list">
	                                
									    <a class="click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['url']?>" target="_blank"></a>
									   
	                                <span class="pic">
									
										<?=dd_html_img($row['img'],$row['title'],500)?>
<?php if($row['is_new']){?><span class="new-icon2">新品</span><?php }?>
									
									</span>
	                                <div class="title yahei">
										<span class="red"><?=$row['zhe']?>折/【超级返】</span><?=$row['title']?></div>
	                                <div class="money_bg">
	                                    <div class="money">￥<em class="num2"><?=number_format($row['discount_price'],1)?></em>&nbsp;<del>￥<?=$row['price']?></del></div>
	                                    <div class="f_money">
										<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
						<span class="fuhao">-</span><span class="f_num"><?=$row['fanli_je']?></span><span class="f_word"><em></em>购买后返<?=(float)$row['fanli_bl']?>%</span>
						<?php }else{?>
						<span class="fuhao"></span><span class="f_num">有返利</span><span class="f_word"><em></em>购买后显示</span>
						<?php }?>
						</div>
	                                   <div class="bottons"> <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?></div>
										<div class="botton botton1"> <em class="icon">马上抢</em><span class="icon"></span></div>
										
	                                </div>
	                            </div>	  </div>	
                        	</li>
<?php }?>
<?php }elseif(defined('VIEW_PAGE')){?>
       	<div class="empty_data">
          <div class="empty_ico">&nbsp;</div>
          <div class="empty_word">抱歉，没有找到相关商品。<a href="<?=u('tao','daohang')?>"  title="查看详情" ><font color="#0099CC">去导航看看</font></a></div>
		  <div style="clear:both"></div>
        </div>
        <?php }?>
<?php if(defined('VIEW_PAGE')||$_GET['page']<=1){
?>
</ul>
<div style="clear:both"></div>
</div></div>
<?php include(TPLPATH.'/inc/tdj.tpl.php');?>
<?php }?>