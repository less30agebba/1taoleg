<?php
$tuijian1=$goods_class->index_list('',16,1,'discount_price>=0 and discount_price<=40');	
?>
    <div align="center" style="margin-top:20px;margin-bottom:20px"><img src="<?=TPLURL?>/vip/images/index/day_select.png" ></div>

   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian1 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:400px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:370px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a class="click_url" dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['url']?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']>0){?><span class="tuijian"></span><?php }?>
<?php if($row['is_starttime']){?>
<span class="yugao2"></span>
<?php }else{?>
<?php if($row['is_new']){?><span class="new-icon"></span><?php }?>
<?php }?>
<?php if($row['is_starttime']){?>
<?php }elseif($row['oversell']==1){?>
<div class="yimaiguang"></div>
<?php }elseif($row['is_endtime']){?>
<div class="end_time" title="于<?=$row['endtime']?>结束"></div>
<?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=$row['url']?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
            <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>超级返利</span>
    </div>
    <?php }?>
</div>
<?php if($row['top']>0){?><div class="n_top"></div><?php }?>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=$row['url']?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price">
	<div class="inblock">
	<?php if($row['is_starttime']){?>
<font color="#008800">¥</font><span><font color="#008800"><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],2)?><?php }?></font></span>
<?php }else{?>
¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],2)?><?php }?></span>

<?php }?>
    </div>
    <div class="inblock2">
			<div style="width:80px"> <span class="dazhe"><del>￥<?=$row['price']?></del></span></div>
    </div></div>
	<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<?php }else{?>
	<div class="jy_del">
 <div class="inblock guan" style="float:right; margin-right:10px">
	<div class="jy_w_buy" style=" margin-top:-33px;*margin-top:-26px;">
	<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==3){?><div title="京东商城" class="jd"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==4){?><div title="拍拍" class="paipai"><i></i></div><?php }?>
			  </div>  </div>
			  </div>  
<?php }?>
   <div class="inblock guan" style="float:right; margin-right:10px">
    
    	<div class="jy_w_buy" style=" margin-top:-33px;*margin-top:-25px;">
			<?php if($row['is_starttime']){?>
<div class="yishou2"><?=$row['starttime_tag']?>开始</div>
<?php }else{?>

<?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>

<?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">
<?php if(FANLI==1&&$row['fanli']){?> <div class="f_money"><span class="fuhao">返</span><span class="f_num"><?=$row['fanli_je']?></span><span class="f_word">到手价<?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></div><?php }else{?><div class="yfl">有返利</div>
                    <?php }?>

 <div class="inblock guan" style="float:right; margin-right:10px">
	<div class="jy_w_buy" style=" margin-top:-28px;*margin-top:-26px;">
	<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==3){?><div title="京东商城" class="jd"><i></i></div><?php }?>
            <?php if($row['laiyuan_type']==4){?><div title="拍拍" class="paipai"><i></i></div><?php }?>
			  </div>  </div>
			  </div>  <?php }?>
</div>
<a class="y-like my-like" title="<?=$row['is_shoucang']==1?'已收藏':'加入收藏'?>" data_id="<?=$row['id']?$row['id']:$row['data_id']?>">
	<span class="like-ico <?=$row['is_shoucang']==1?'l-active':''?>"></span>
</a>

</div>
 <a class="tejia click_url c_bgcolor"  dd-href="?mod=jump&act=s8&iid=<?=iid_encode($row['data_id'])?>&url=" data-itemid="<?=$row['data_id']?>" isconvert=1 href="<?=$row['jump']?>" isconvert=1 title="查看详情" target="_blank">去抢购</a>
</li>
<?php }?>
			   <!-- 分类下商品结束 -->	 
<script type="text/javascript" src="<?=TPLURL?>/vip/js/jquery.lazyload.js"></script> 
 <script type="text/javascript">	  
	$(function() {
	$("img").lazyload({
		effect : "fadeIn"
	});
});
</script>