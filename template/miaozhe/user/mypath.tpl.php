<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$parameter=act_user_mypath();
extract($parameter);

$css[]=TPLURL."/goods/250/css/list.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<script type="text/javascript" src="js/scrollpagination.js"></script>
<script>
$(function(){
	$('.my-del').click(function(){
		var t = $(this);
		var data_id=$(this).attr('data_id');
		$.ajax({
			url: "<?=u(MOD,ACT,array('del'=>1))?>",
			data:{id:data_id},
			dataType:'jsonp',
			jsonp:"callback",
			success: function(data){
				if(data.s==0){
					alert('数据错误，请刷新页面');
				}
				else if(data.s==1){ 
					window.location='<?=u(MOD,ACT)?>';
				}
			 }
		});
	});
});
</script>
<div id="ddlanmu">
  <div class="jy_tl">
    <div class="jy_auto">
      <div class="jy_nav">
      	<div style="float:right;"><b>我的浏览记录</b>（共<?=$total?>件)</div>
        <div style="width:690px; float:left;">
          <a onclick="confirm('确定清空所有记录？');window.location='<?=u(MOD,ACT)?>&del=1';" style="cursor: pointer;">全部清空</a> 
        </div>
        <div style="clear:both;"></div>
      </div>
    </div>
  </div>
</div>

<div style=" height:0px; overflow:hidden">&nbsp;</div>
<div class="goods_list">
 <div style="padding-top:10px;">
<div class="goods_list_315">
<!--这里必须定义一个goods_items-->
<ul class="goods_items">
<?php if(!empty($mypath)){?>
<?php foreach($mypath as $row){?>
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
<a href="<?=$row['url']?>" target="_blank"><?=dd_html_img($row['img'],$row['title'],310)?></a>
<?php if($row['is_new']){?><span class="new-icon">新品</span><?php }?>
<?php if($row['is_starttime']){?>
<div class="start_time" title="<?=date('Y-m-d H:i:s',strtotime($row['starttime']))?>开始"><?=$row['starttime_tag']?>开始</div>
<?php }elseif($row['oversell']==1){?>
<div class="yimaiguang"></div>
<?php }elseif($row['is_endtime']){?>
<div class="end_time" title="于<?=$row['endtime']?>结束"></div>
<?php }?>
<div class="tp_ab">
	<?php if($row['price_man']>0){?>
	<div class="tp_bq tp_1">
        <a href="<?=$row['lq_url']?$row['lq_url']:'javascript:void(0)'?>" target="_blank"> <span class="span_1">满<?=$row['price_man']?>元</span><br /><span>减<?=$row['price_jian']?>元</span> </a>
    </div>
    <?php }?>
    <?php if($row['shouji_price']>0 && $row['shouji_price']<$row['discount_price']){?>
    <div class="tp_bq tp_2 erweima"  id="<?=$row['id']?>&uid=<?=$dduser['id']?>" url="<?=$row['url']?>" youhui="<?=$row['discount_price']-$row['shouji_price']?>">
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
<?php if($row['top']>0){?><div class="n_top"></div><?php }?>
</div>
<?php if($row['opca']){?>
<div class="opca"></div>
<?php }?>
<a href="<?=$row['url']?>" target="_blank"><div class="jy_title"><?=$row['title']?></div></a>
<div class="jy_nr">
<div class="jy_price dd_color">
	<div class="inblock">
		¥<span><?php if($row['laiyuan_type']==3){?><?=number_format($row['discount_price'])?><?php }else{?><?=number_format($row['discount_price'],1)?><?php }?></span>
    </div>
    <div class="inblock2"><?php if(FANLI==1){?><span class="sm" <?php if($row['fanli']>0){?>title="购买后返<?=$row['fanli'].$row['unit']?>"<?php }?>><?php if($row['fanli']==0){?>购买后返利<?php }else{?>返<?=(float)$row['fanli_bl']?>%<?php }?></span><?php }?>
			<div style="width:80px"> <span class="dazhe">(<?=$row['zhe']?>折)</span></div>
    </div></div>
 <div class="inblock guan" style="float:right;">
    	<?php if($row['sell']){?> 	<div class="jy_w_buy" style=" margin-top:-54px;*margin-top:-40px;"><?php }else{?>
    	<div class="jy_w_buy" style=" margin-top:-44px;*margin-top:-30px;"><?php }?>
			<?php if($row['laiyuan_type']==1){?><div title="淘宝" class="tb"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==2){?><div title="天猫" class="tmall"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==3){?><div title="京东" class="jd"><i></i><?=$row['laiyuan']?></div><?php }?>
            <?php if($row['laiyuan_type']==4){?><div title="拍拍" class="paipai"><i></i><?=$row['laiyuan']?></div><?php }?>
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
</div><a class="y-like my-del" title="删除该商品" data_id="<?=$row['id']?>">
   <span class="del-ico"></span>
</a>
   <?php if($row['goods_attribute_arr']){?>
<div class="jy_fx"><div class="jy_del">
    <div class="inblock hiddens">
    <?php foreach($row['goods_attribute_arr'] as $vo){
	if($vo['ico']==''){?>
	<span class="biaoqian" title="<?=$vo['beizhu']?>" <?=$vo['style']?>><?=$vo['title']?></span>
    <?php }else{?>
    <span class="biaoqian" title="<?=$vo['beizhu']?>"><img alt="<?=$vo['title']?>" src="<?=$vo['ico']?>"></span>
	<?php }
	}?>
    </div></div></div><?php }?>
</div>
</li>
<?php }?>
<?php }else{?>
       	<div class="empty_data">
          <div class="empty_ico">&nbsp;</div>
          <div class="empty_word">抱歉，没有找到相关商品。</div>
		  <div style="clear:both"></div>
        </div>
        <?php }?>
</ul>
<div style="clear:both"></div>
</div></div>
</div>
<div style="clear:both;"></div>
<div id="ajax_goods_loading" style="margin-bottom:10px"><img src="<?=TPLURL?>/inc/images/white-ajax-loader.gif" style="margin-bottom:-2px" alt="加载商品" />&nbsp;&nbsp;正在加载商品</div>
<div class="megas512" style="padding:10px;">
 
<?=pageft($total,$pagesize,u(MOD,ACT))?>

</div>
<?php include(TPLPATH.'/goods/jumpbox.tpl.php');?>
<script type="text/javascript">
scrollPaginationPage=(<?=$ajax_load_num?>-1)*<?=($page-1)?>+1;
$(function(){
	LazyLoad($('.list-good'));
})
</script>
<?php 
include(TPLPATH."/inc/footer.tpl.php");
?>
