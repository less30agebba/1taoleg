<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
?>
<div class="index_p_list">
	<ul id="stage" class="clear1 shuju_load" >
	<?php foreach($shuju_data as $k=>$row){?>
    	<li>
        	<a isconvert="1" href="<?=WEBTYPE==0?$row['wap_jump']:$row['url']?>" url="<?=$row['yg_url']?>" <?php if(WEBTYPE==0){?>dd-href="index.php?mod=jump&act=index&a=tb&id=<?=$row['id']?>&url=" data-itemid="<?=$row['data_id']?>" <?php }?>class="dd1 <?=$row['yugao_a']?> <?php if(WEBTYPE==0){?>click_url<?php }?>" target="_blank"><img data-original="<?=$row['img']?>" class="lazy picimg" src="<?=$dd_tpl_data['loading_img']?>" height="100%" width="100%"> </a>
            <dl>
            	<dd><a isconvert="1" href="<?=WEBTYPE==0?$row['wap_jump']:$row['url']?>" url="<?=$row['yg_url']?>" <?php if(WEBTYPE==0){?>dd-href="index.php?mod=jump&act=index&a=tb&id=<?=$row['id']?>&url=" data-itemid="<?=$row['data_id']?>"<?php }?> class="dd1 <?=$row['yugao_a']?> <?php if(WEBTYPE==0){?>click_url<?php }?>" target="_blank"><?=$row['title']?></a><a class="<?=$row['icon']?>"></a></dd>
                <dd class="clear1">
                	<span>
                    	<em>￥<?=$row['discount_price']?></em>
						<?php if((float)$row['fanli']>0){?><b>有返利</b><?php }?>
                    </span>
                </dd>
            </dl>
        </li>
		<?php }?>
    </ul>
</div>
<div class="more">
	<div class="more_curr clear">
    	<i></i>
		<a class="chakan_more">点击加载更多&gt;</a>
        <i></i>
    </div>
</div>
<div id="tpl-wrap" class="tpl-v3" style="width: 100%; height:100%; top: 0px; display:none;">
  <div class="box">
    <p>亲，该商品的超级返活动还没开始喔！现在去购买是普通返利喔！</p>
    <div> <a class="go_bt" target="_blank">立即前往</a> <a class="off_bt">含泪关闭</a> </div>
  </div>
</div>
<script>
function setTab(cursel,order){ 
	for(var j=1; j<=5; j++){ 
		var menu = document.getElementById('one'+"_"+j); 
		if(j==cursel){ 
			$('#one'+"_"+j).addClass("selected  curr");
			floorStep=1;
			jiazai(floorStep,order);
		} 
		else{ 
		     $('#one'+"_"+j).removeClass("selected  curr");
		} 
	}
} 
var floorStep=2;
var ajaxTag=0;
$(function(){
	var loadImg = function (url, fn) {
        var img = new Image();
        img.src = url;
        if (img.complete) {
            fn.call(img);
        } else {
            img.onload = function () {
                fn.call(img);
                img.onload = null;
            };
        };
    };
    $.fn.imgAutoSize = function (padding) {
        var maxWidth = this.innerWidth() - (padding || 0);
        return this.find('img.picimg').each(function (i, img) {
            loadImg(this.src, function () {
                if (this.width != maxWidth) {												
                    img.width = maxWidth;
                    img.height = maxWidth;
                };
            });
        });
    };
	$(window).bind('scroll',function(){
		if($(window).scrollTop()+$(window).height()>=$(document).height()-400){
			if(ajaxTag==0){
				ajaxTag=1;
				jiazai(floorStep,'');
				floorStep++;
			}
		}
	});
	$('.shuju_load img.lazy').lazyload({
		threshold:20,
		failure_limit:50
	});
	$('.shuju_load li').imgAutoSize();
	$(window).resize(function(){
		$('.shuju_load li').imgAutoSize();
	});
})
function index_tpl(){/*<li>
		<a isconvert="1" href="<?=WEBTYPE==0?'{$wap_jump}':'{$url}'?>" url="{$yg_url}" <?php if(WEBTYPE==0){?>dd-href="index.php?mod=jump&act=index&a=tb&id={$id}&url=" data-itemid="{$data_id}" <?php }?> class="dd1 {$yugao_a} <?php if(WEBTYPE==0){?>click_url<?php }?>" target="_blank"><img data-original="{$img}" title="{$title}" class="lazy" src="<?=$dd_tpl_data['loading_img']?>" alt="" width="100%"> </a>
		<dl>
			<dd><a isconvert="1" href="<?=WEBTYPE==0?'{$wap_jump}':'{$url}'?>" url="{$yg_url}" <?php if(WEBTYPE==0){?>dd-href="index.php?mod=jump&act=index&a=tb&id={$id}&url=" data-itemid="{$data_id}" <?php }?> class="dd1 {$yugao_a} <?php if(WEBTYPE==0){?>click_url<?php }?>" target="_blank">{$title}</a><a class="{$icon}"></a></dd>
			<dd class="clear1">
				<span>
					<em>￥{$discount_price}</em>
					{$fanli_tip}
				</span>
			</dd>
		</dl>
	</li>*/;}
function jiazai(floorStep,order_by){	
	$('.chakan_more').text('数据获取中……');
	var url = window.location.href;
	$.getJSON(url,{page:floorStep,order_by:order_by,ajax:1},function(data){
		ajaxTag=0;
		if(data.s=='1'){
			if(order_by!=''){
				$('.shuju_load').html('');
			}
			if(data.r=='' || data.r=='null' || data.r==null){
				alert('没有了');
				ajaxTag=1;
				$('.chakan_more').hidden();
			}else{
				for(i in data.r){
					row=data.r[i];
					var html=getTplObj(index_tpl,row);
					$('.shuju_load').append(html);
				}
				$('.chakan_more').text('点击更多');
				$('.shuju_load img.lazy').lazyload({
					threshold:20,
					failure_limit:50
				});
				
				$('.shuju_load li img').each(function(){
					var w=$(this).width();
					$(this).height(w);
				});
				
				
				$(".yugao_a").click(function(){				  
					var l=($(document.body).outerWidth(true)/2)-(450/2);
					$(".go_bt").attr('href',$(this).attr('url'));
					$("#tpl-wrap").show();
					$("#tpl-wrap").css("z-index","10001");
					$("#tpl-wrap").css('display','-webkit-box');
					$("#tpl-wrap").css("position","fixed");
					$("body").css('overflow','hidden');
				});
				$(".off_bt").click(function(){
					$("#tpl-wrap").hide();
					$("body").css('overflow','inherit');
				});
			}
		}
	});
}
$(function(){
	$(".yugao_a").click(function(){				  
		var l=($(document.body).outerWidth(true)/2)-(450/2);
		$(".go_bt").attr('href',$(this).attr('url'));
		$("#tpl-wrap").show();
		$("#tpl-wrap").css("z-index","10001");
		$("#tpl-wrap").css('display','-webkit-box');
		$("#tpl-wrap").css("position","fixed");
		$("body").css('overflow','hidden');
	});
	$(".off_bt").click(function(){
		$("#tpl-wrap").hide();
		$("body").css('overflow','inherit');
	});
})
</script>
<?php include(TPLPATH.'/inc/tdj.tpl.php');?>
