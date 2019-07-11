
   <!-- 大分类开始 -->
			  <div class="new-brand" id="1f" style="margin-top:5px">
                    <div class="brand-title" id="J_specials">
                        <h3 class="name fl"><em class="icon brand nvzhang fl"></em><a href="<?=u('goods','index',array('cid'=>'10001'))?>" target="_blank"><span>1F 服饰内衣</span></a></h3> <div class="time fl">
                            <em class="icon clock fl"></em>
                            <span class="fl left_time">新品特卖，秋季新款 每日上新</span>
                        </div> 
                        <a href="<?=u('goods','index',array('cid'=>'10001'))?>" target="_blank" class="see-more fr"><em class="icon brand-other fl"></em><span>查看更多>></span></a>	
           </div>
  </div>  
		   <!-- 大分类结束 -->
		
		
		   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian1 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
 <?php if(FANLI==1&&$row['fanli']){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:425px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank">
  <img  data-original="<?=tb_img($row['img'],300)?>" src="<?=$dd_tpl_data['loading_img']?>" alt="<?=$row['title']?>" class="lazy" width="285" height="285" />
<?php if($row['top']){?><span class="tuijian"></span><?php }?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=u('goods','view',array('code'=>xinpin,'id'=>$row['id']))?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
           <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>高额返利</span>
    </div>
    <?php }?>
</div>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"><del>¥<?=number_format($row['price'],0)?></del> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
   <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==3){?><div title="京东" class="tmall"><i></i>京东</div><?php }?>
			<?php if($row['laiyuan_type']==4){?><div title="其它" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			  <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">

  <?php if(FANLI==1&&$row['fanli']){?>
                  <p class="fl clearfix" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><strong>-<?=$row['fanli_je']?></strong><i class="i-gmhf">到手价<span><?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></i></p> <?php }else{?>
                
                    <?php }?>
					
</div>  <?php }?>
</div>
 <div class="jy_fx">
                	<div class="bshare-custom" style="font-size:12px"><a id="bshare-shareto" class="bshare-more">分享：</a><a target="_blank" href="<?=$row['qzone_url']?>" title="分享到QQ空间" class="bshare-qzone">空间</a>  <a href="<?=$row['sina_url']?>" target="_blank" title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>  <a href="<?=$row['qqim_url']?>" target="_blank" title="分享到QQ好友" class="bshare-qqim">QQ</a>  <a href="<?=$row['qqmb_url']?>" target="_blank" title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div>
                </div>
</div>
  <a href="<?=u('goods','view',array('id'=>$row['id']))?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a>
</li>
<?php }?>
</ul>
</div>
			   <!-- 分类下商品结束 -->	   
			
		   <!-- 大分类开始 -->
			  <div class="new-brand" id="2f" style="margin-top:5px">
                    <div class="brand-title" id="J_specials">
                        <h3 class="name fl"><em class="icon brand xiangbao fl"></em><a href="<?=u('goods','index',array('cid'=>'10002'))?>" target="_blank"><span>2F 鞋帽箱包</span></a></h3> <div class="time fl">
                            <em class="icon clock fl"></em>
                            <span class="fl left_time">新款包包、时尚女鞋特价包邮</span>
                        </div> 
                        <a href="<?=u('goods','index',array('cid'=>'10002'))?>" target="_blank" class="see-more fr"><em class="icon brand-other fl"></em><span>查看更多>></span></a>	
           </div>
  </div>  
		   <!-- 大分类结束 -->
		
		
		   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian2 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
 <?php if(FANLI==1&&$row['fanli']){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:425px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']){?><span class="tuijian"></span><?php }?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=u('goods','view',array('code'=>xinpin,'id'=>$row['id']))?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
           <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>高额返利</span>
    </div>
    <?php }?>
</div>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"><del>¥<?=number_format($row['price'],0)?></del> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
   <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==3){?><div title="京东" class="tmall"><i></i>京东</div><?php }?>
			<?php if($row['laiyuan_type']==4){?><div title="其它" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			  <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">

  <?php if(FANLI==1&&$row['fanli']){?>
                  <p class="fl clearfix" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><strong>-<?=$row['fanli_je']?></strong><i class="i-gmhf">到手价<span><?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></i></p> <?php }else{?>
                
                    <?php }?>
					
</div>  <?php }?>
</div>
 <div class="jy_fx">
                	<div class="bshare-custom" style="font-size:12px"><a id="bshare-shareto" class="bshare-more">分享：</a><a target="_blank" href="<?=$row['qzone_url']?>" title="分享到QQ空间" class="bshare-qzone">空间</a>  <a href="<?=$row['sina_url']?>" target="_blank" title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>  <a href="<?=$row['qqim_url']?>" target="_blank" title="分享到QQ好友" class="bshare-qqim">QQ</a>  <a href="<?=$row['qqmb_url']?>" target="_blank" title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div>
                </div>
</div>
  <a href="<?=u('goods','view',array('id'=>$row['id']))?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a>
</li>
<?php }?>
</ul>
</div>
			   <!-- 分类下商品结束 -->	   
			
		   <!-- 大分类开始 -->
			  <div class="new-brand" id="3f" style="margin-top:10px">
                    <div class="brand-title" id="J_specials">
                        <h3 class="name fl"><em class="icon brand meizhuang fl"></em><a href="<?=u('goods','index',array('cid'=>'10003'))?>" target="_blank"><span>3F 美容化妆</span></a></h3> <div class="time fl">
                            <em class="icon clock fl"></em>
                            <span class="fl left_time">美容护肤各大国际知名品牌</span>
                        </div> 
                        <a href="<?=u('goods','index',array('cid'=>'10003'))?>" target="_blank" class="see-more fr"><em class="icon brand-other fl"></em><span>查看更多>></span></a>	
           </div>
  </div>  
		   <!-- 大分类结束 -->
		
		
		   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian3 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
 <?php if(FANLI==1&&$row['fanli']){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:425px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']){?><span class="tuijian"></span><?php }?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=u('goods','view',array('code'=>xinpin,'id'=>$row['id']))?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
           <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>高额返利</span>
    </div>
    <?php }?>
</div>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"><del>¥<?=number_format($row['price'],0)?></del> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
   <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==3){?><div title="京东" class="tmall"><i></i>京东</div><?php }?>
			<?php if($row['laiyuan_type']==4){?><div title="其它" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			  <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">

  <?php if(FANLI==1&&$row['fanli']){?>
                  <p class="fl clearfix" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><strong>-<?=$row['fanli_je']?></strong><i class="i-gmhf">到手价<span><?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></i></p> <?php }else{?>
                
                    <?php }?>
					
</div>  <?php }?>
</div>
 <div class="jy_fx">
                	<div class="bshare-custom" style="font-size:12px"><a id="bshare-shareto" class="bshare-more">分享：</a><a target="_blank" href="<?=$row['qzone_url']?>" title="分享到QQ空间" class="bshare-qzone">空间</a>  <a href="<?=$row['sina_url']?>" target="_blank" title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>  <a href="<?=$row['qqim_url']?>" target="_blank" title="分享到QQ好友" class="bshare-qqim">QQ</a>  <a href="<?=$row['qqmb_url']?>" target="_blank" title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div>
                </div>
</div>
  <a href="<?=u('goods','view',array('id'=>$row['id']))?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a>
</li>
<?php }?>
</ul>
</div>
			   <!-- 分类下商品结束 -->	   
			
		   <!-- 大分类开始 -->
			  <div class="new-brand" id="4f" style="margin-top:10px">
                    <div class="brand-title" id="J_specials">
                        <h3 class="name fl"><em class="icon brand meishi fl"></em><a href="<?=u('goods','index',array('cid'=>'10004'))?>" target="_blank"><span>4F 美食特产</span></a></h3> <div class="time fl">
                            <em class="icon clock fl"></em>
                            <span class="fl left_time">网络天下美食、特产，应有尽有</span>
                        </div> 
                        <a href="<?=u('goods','index',array('cid'=>'10004'))?>" target="_blank" class="see-more fr"><em class="icon brand-other fl"></em><span>查看更多>></span></a>	
           </div>
  </div>  
		   <!-- 大分类结束 -->
		
		
		   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian4 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
 <?php if(FANLI==1&&$row['fanli']){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:425px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']){?><span class="tuijian"></span><?php }?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=u('goods','view',array('code'=>xinpin,'id'=>$row['id']))?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
           <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>高额返利</span>
    </div>
    <?php }?>
</div>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"><del>¥<?=number_format($row['price'],0)?></del> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
   <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==3){?><div title="京东" class="tmall"><i></i>京东</div><?php }?>
			<?php if($row['laiyuan_type']==4){?><div title="其它" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			  <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">

  <?php if(FANLI==1&&$row['fanli']){?>
                  <p class="fl clearfix" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><strong>-<?=$row['fanli_je']?></strong><i class="i-gmhf">到手价<span><?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></i></p> <?php }else{?>
                
                    <?php }?>
					
</div>  <?php }?>
</div>
 <div class="jy_fx">
                	<div class="bshare-custom" style="font-size:12px"><a id="bshare-shareto" class="bshare-more">分享：</a><a target="_blank" href="<?=$row['qzone_url']?>" title="分享到QQ空间" class="bshare-qzone">空间</a>  <a href="<?=$row['sina_url']?>" target="_blank" title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>  <a href="<?=$row['qqim_url']?>" target="_blank" title="分享到QQ好友" class="bshare-qqim">QQ</a>  <a href="<?=$row['qqmb_url']?>" target="_blank" title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div>
                </div>
</div>
  <a href="<?=u('goods','view',array('id'=>$row['id']))?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a>
</li>
<?php }?>
</ul>
</div>
			   <!-- 分类下商品结束 -->	   
			
		   <!-- 大分类开始 -->
			  <div class="new-brand" id="5f" style="margin-top:10px">
                    <div class="brand-title" id="J_specials">
                        <h3 class="name fl"><em class="icon brand muying fl"></em><a href="<?=u('goods','index',array('cid'=>'10005'))?>" target="_blank"><span>5F 母婴童装</span></a></h3> <div class="time fl">
                            <em class="icon clock fl"></em>
                            <span class="fl left_time">新品童装每日上新、母婴用品专卖</span>
                        </div> 
                        <a href="<?=u('goods','index',array('cid'=>'10005'))?>" target="_blank" class="see-more fr"><em class="icon brand-other fl"></em><span>查看更多>></span></a>	
           </div>
  </div>  
		   <!-- 大分类结束 -->
		
		
		   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian5 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
 <?php if(FANLI==1&&$row['fanli']){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:425px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']){?><span class="tuijian"></span><?php }?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=u('goods','view',array('code'=>xinpin,'id'=>$row['id']))?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
           <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>高额返利</span>
    </div>
    <?php }?>
</div>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"><del>¥<?=number_format($row['price'],0)?></del> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
   <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==3){?><div title="京东" class="tmall"><i></i>京东</div><?php }?>
			<?php if($row['laiyuan_type']==4){?><div title="其它" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			  <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">

  <?php if(FANLI==1&&$row['fanli']){?>
                  <p class="fl clearfix" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><strong>-<?=$row['fanli_je']?></strong><i class="i-gmhf">到手价<span><?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></i></p> <?php }else{?>
                
                    <?php }?>
					
</div>  <?php }?>
</div>
 <div class="jy_fx">
                	<div class="bshare-custom" style="font-size:12px"><a id="bshare-shareto" class="bshare-more">分享：</a><a target="_blank" href="<?=$row['qzone_url']?>" title="分享到QQ空间" class="bshare-qzone">空间</a>  <a href="<?=$row['sina_url']?>" target="_blank" title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>  <a href="<?=$row['qqim_url']?>" target="_blank" title="分享到QQ好友" class="bshare-qqim">QQ</a>  <a href="<?=$row['qqmb_url']?>" target="_blank" title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div>
                </div>
</div>
  <a href="<?=u('goods','view',array('id'=>$row['id']))?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a>
</li>
<?php }?>
</ul>
</div>
			   <!-- 分类下商品结束 -->	   
			
		   <!-- 大分类开始 -->
			  <div class="new-brand" id="6f" style="margin-top:10px">
                    <div class="brand-title" id="J_specials">
                        <h3 class="name fl"><em class="icon brand jujia fl"></em><a href="<?=u('goods','index',array('cid'=>'10006'))?>" target="_blank"><span>6F 居家生活</span></a></h3> <div class="time fl">
                            <em class="icon clock fl"></em>
                            <span class="fl left_time">享受生活便捷！居家日用尽在掌握！</span>
                        </div> 
                        <a href="<?=u('goods','index',array('cid'=>'10006'))?>" target="_blank" class="see-more fr"><em class="icon brand-other fl"></em><span>查看更多>></span></a>	
           </div>
  </div>  
		   <!-- 大分类结束 -->
		
		
		   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian6 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
 <?php if(FANLI==1&&$row['fanli']){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:425px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']){?><span class="tuijian"></span><?php }?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=u('goods','view',array('code'=>xinpin,'id'=>$row['id']))?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
           <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>高额返利</span>
    </div>
    <?php }?>
</div>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"><del>¥<?=number_format($row['price'],0)?></del> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
   <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==3){?><div title="京东" class="tmall"><i></i>京东</div><?php }?>
			<?php if($row['laiyuan_type']==4){?><div title="其它" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			  <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">

  <?php if(FANLI==1&&$row['fanli']){?>
                  <p class="fl clearfix" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><strong>-<?=$row['fanli_je']?></strong><i class="i-gmhf">到手价<span><?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></i></p> <?php }else{?>
                
                    <?php }?>
					
</div>  <?php }?>
</div>
 <div class="jy_fx">
                	<div class="bshare-custom" style="font-size:12px"><a id="bshare-shareto" class="bshare-more">分享：</a><a target="_blank" href="<?=$row['qzone_url']?>" title="分享到QQ空间" class="bshare-qzone">空间</a>  <a href="<?=$row['sina_url']?>" target="_blank" title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>  <a href="<?=$row['qqim_url']?>" target="_blank" title="分享到QQ好友" class="bshare-qqim">QQ</a>  <a href="<?=$row['qqmb_url']?>" target="_blank" title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div>
                </div>
</div>
  <a href="<?=u('goods','view',array('id'=>$row['id']))?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a>
</li>
<?php }?>
</ul>
</div>
			   <!-- 分类下商品结束 -->	   
			
		   <!-- 大分类开始 -->
			  <div class="new-brand" id="7f" style="margin-top:10px">
                    <div class="brand-title" id="J_specials">
                        <h3 class="name fl"><em class="icon brand shuma fl"></em><a href="<?=u('goods','index',array('cid'=>'10007'))?>" target="_blank"><span>7F 数码电器</span></a></h3> <div class="time fl">
                            <em class="icon clock fl"></em>
                            <span class="fl left_time">数码家电新品展销会 各类时尚新品全面到货</span>
                        </div> 
                        <a href="<?=u('goods','index',array('cid'=>'10007'))?>" target="_blank" class="see-more fr"><em class="icon brand-other fl"></em><span>查看更多>></span></a>	
           </div>
  </div>  
		   <!-- 大分类结束 -->
		
		
		   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian7 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
 <?php if(FANLI==1&&$row['fanli']){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:425px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']){?><span class="tuijian"></span><?php }?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=u('goods','view',array('code'=>xinpin,'id'=>$row['id']))?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
           <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>高额返利</span>
    </div>
    <?php }?>
</div>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"><del>¥<?=number_format($row['price'],0)?></del> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
   <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==3){?><div title="京东" class="tmall"><i></i>京东</div><?php }?>
			<?php if($row['laiyuan_type']==4){?><div title="其它" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			  <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">

  <?php if(FANLI==1&&$row['fanli']){?>
                  <p class="fl clearfix" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><strong>-<?=$row['fanli_je']?></strong><i class="i-gmhf">到手价<span><?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></i></p> <?php }else{?>
                
                    <?php }?>
					
</div>  <?php }?>
</div>
 <div class="jy_fx">
                	<div class="bshare-custom" style="font-size:12px"><a id="bshare-shareto" class="bshare-more">分享：</a><a target="_blank" href="<?=$row['qzone_url']?>" title="分享到QQ空间" class="bshare-qzone">空间</a>  <a href="<?=$row['sina_url']?>" target="_blank" title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>  <a href="<?=$row['qqim_url']?>" target="_blank" title="分享到QQ好友" class="bshare-qqim">QQ</a>  <a href="<?=$row['qqmb_url']?>" target="_blank" title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div>
                </div>
</div>
  <a href="<?=u('goods','view',array('id'=>$row['id']))?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a>
</li>
<?php }?>
</ul>
</div>
			   <!-- 分类下商品结束 -->	   
			
		   <!-- 大分类开始 -->
			  <div class="new-brand" id="8f" style="margin-top:10px">
                    <div class="brand-title" id="J_specials">
                        <h3 class="name fl"><em class="icon brand peishi fl"></em><a href="<?=u('goods','index',array('cid'=>'10008'))?>" target="_blank"><span>8F 其它精品</span></a></h3> <div class="time fl">
                            <em class="icon clock fl"></em>
                            <span class="fl left_time">新品配饰、其它商品限时抢购</span>
                        </div> 
                        <a href="<?=u('goods','index',array('cid'=>'10008'))?>" target="_blank" class="see-more fr"><em class="icon brand-other fl"></em><span>查看更多>></span></a>	
           </div>
  </div>  
		   <!-- 大分类结束 -->
		
		
		   <!-- 分类下商品开始 -->
		   <div class="goods_list_315">
<ul class="goods_items">
<?php foreach($tuijian8 as $row){?>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
 <?php if(FANLI==1&&$row['fanli']){?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:425px; "<?php }?>>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<?php }else{?>
<li class="gm" <?php if($m%4==0){?> style="margin-left:0px; height:390px; "<?php }?>>
<?php }?>
<div class="list-good">
<div class="left">
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?>
<?php if($row['top']){?><span class="tuijian"></span><?php }?>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
</a>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1 dd_cure">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima dd_cure"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=u('goods','view',array('code'=>xinpin,'id'=>$row['id']))?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
    	<div class="inline" style="color:#fff;">
           <span>手机买再省</span><br />
            <b class="span_1"><?=$row['discount_price']-$row['shouji_price']?>元</b>
        </div>
    </div>
    <?php }?>
    <?php if($row['is_fanli_ico']){?>
    <div class="tp_bq tp_3">
        <span>高额返利</span>
    </div>
    <?php }?>
</div>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=u('goods','view',array('id'=>$row['id']))?>" target="_blank"> <div class="jy_title">[包邮] <?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"><del>¥<?=number_format($row['price'],0)?></del> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
   <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			<?php if($row['laiyuan_type']==3){?><div title="京东" class="tmall"><i></i>京东</div><?php }?>
			<?php if($row['laiyuan_type']==4){?><div title="其它" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
			  <?php if($row['sell']){?>   <div class="yishou">已售<?=$row['sell']?>件</div> <?php }?>
        </div>
    </div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
<div class="jy_del">

  <?php if(FANLI==1&&$row['fanli']){?>
                  <p class="fl clearfix" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><strong>-<?=$row['fanli_je']?></strong><i class="i-gmhf">到手价<span><?php
$a=$row['discount_price'];
$b=$row['fanli_je'];
$fanliba=$a-$b;
echo $fanliba;
?></span></i></p> <?php }else{?>
                
                    <?php }?>
					
</div>  <?php }?>
</div>
 <div class="jy_fx">
                	<div class="bshare-custom" style="font-size:12px"><a id="bshare-shareto" class="bshare-more">分享：</a><a target="_blank" href="<?=$row['qzone_url']?>" title="分享到QQ空间" class="bshare-qzone">空间</a>  <a href="<?=$row['sina_url']?>" target="_blank" title="分享到新浪微博" class="bshare-sinaminiblog">新浪</a>  <a href="<?=$row['qqim_url']?>" target="_blank" title="分享到QQ好友" class="bshare-qqim">QQ</a>  <a href="<?=$row['qqmb_url']?>" target="_blank" title="分享到腾讯微博" class="bshare-qqmb">腾讯</a></div>
                </div>
</div>
  <a href="<?=u('goods','view',array('id'=>$row['id']))?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a>
</li>
<?php }?>
</ul>
</div>
			   <!-- 分类下商品结束 -->	   