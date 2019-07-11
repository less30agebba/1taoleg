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
        <div class="goods_pic img"><a href="<?=$row['url']?>" target="_blank"><img data-original="<?=$row['img']?>" src="images/lazy.gif"  alt="简约现代家用电脑桌台式办公桌写字台 白色烤漆美容店书桌书柜" /></a></div>
        <div class="goods_info">
            <div class="goods_tit"><a href="" target="_blank"><?=$row['title']?></a></div>
            <div class="goods_price_coupon">
                <span class="goods_price"><b>￥</b>1190<em>券后 <span class="fr" style="margin-top:5px">热销126件</span></em></span></span>
            </div>

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
