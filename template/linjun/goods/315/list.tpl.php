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
<ul>
<?php }?>
<?php if(!empty($goods_list)){?>
<?php foreach($goods_list as $row){?>
 <li>
  <div class="goods_pic img"><a href="<?=$row['url']?>" target="_blank"><img data-original="<?=$row['img']?>" src="images/lazy.gif"  alt="直白吹风机家用大功率负离子吹风筒不伤发电吹风网红款小米生态链" /></a><span class="shangxin"></span></div>
<div class="goods_info">
<div class="goods_price_coupon"> 
 <span class="goods_price"><span class="fl" style="color:#000"> <b>￥</b><?=$row['price']?></span><em> <span class="fr quan"><span class="lq">领券</span><span class="jian">再减<?=$row['price']-$row['discount_price']?>元</span></span></em></span></span>
</div> 
<div class="goods_tit"><a href="" target="_blank"><?=$row['title']?></a></div> 
</div>
<div class="qiangquan"><span class="fl quanhou">券后￥<font><?=$row['discount_price']?></font></span> <span class="fr qiang">销量： <font><?=$row['sell']?></font></span></span>
</div> 
</li>
<?php }?>

  </ul>  
           
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
</div></div>
<?php if(WEBTYPE==0){include(TPLPATH.'/inc/tdj.tpl.php');}?>
<?php }?>

