<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('INDEX')){
	exit('Access Denied');
}
$page = empty($_GET['page'])?'1':intval($_GET['page']);
$url='http://cf.fanlicheng.com/app/index.php?mod=brand&act=list&page='.$page;
$a=dd_get_json($url);
$list=$a['r'];
foreach($list as $k=>$row){
	$list[$k]['url']=wap_l('brand','view',array('brand_id'=>$row['id']));
}
if(AJAX==1){
	$msg['s']=1;
	$msg['r']=$list;
	echo dd_json_encode($msg);
	exit();
}
$webtitle="品牌团";

$css[]=TPLURL."/inc/css/cf_wap.css";
$css[]=TPLURL."/inc/css/cf_u.css";
include(TPLPATH.'/inc/header.tpl.php');?>
<div  class="shuju_load">
<?php foreach($list as $vo){?>
<div class="cjf">
	<a href="<?=$vo['url']?>" class="cjf_zj">
		<img  data-original="<?=$vo['l_pic']?>" title="<?=$row['title']?>" src="<?=$dd_tpl_data['loading_img']?>" class="lazy" style="width:100%;" height="auto">
        <div class="u_price">
        	
            <div class="u_sr">
            	<div class="u_title">
                	<?=$vo['title']?>-<?=$vo['des']?>
                </div>
                <div class="u_fanli">
                	<div class="u_fanli_fl">
                    	<span class="s_fl">返</span>
                        <span class="s_sz"><?=$vo['fan']?>%</span>
                    </div>
                    <div class="u_fanli_fr">
                    	<span class="s_sz"><?=$vo['zhe']?></span>折起
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
    </a>
</div>
<?php }?>
</div>
<div class="more">
  <div class="more_curr clear"> <i></i> <a class="notext chakan_more">点击加载更多&gt;</a> <i></i> </div>
</div>
<script>
function index_tpl(){/*<div class="cjf"><a href="{$url}" class="cjf_zj"><img  title="{$title}" src="{$l_pic}" class="lazy" style="width:100%;" height="auto"><div class="u_price"><div class="u_sr"><div class="u_title">{$title}-{$des}</div><div class="u_fanli"><div class="u_fanli_fl"><span class="s_fl">返</span><span class="s_sz">{$fan}%</span></div><div class="u_fanli_fr"><span class="s_sz">{$zhe}</span>折起</div></div></div><div style="clear:both"></div></div></a></div>*/;}
var ajaxTag=0,floorStep=2;
$(function(){
	$('.shuju_load img.lazy').lazyload({
		threshold:20,
		failure_limit:50
	});
	$(window).bind('scroll',function(){
		if($(window).scrollTop()+$(window).height()>=$(document).height()-400){
			if(ajaxTag==0){
				ajaxTag=1;
				jiazai(floorStep);
				floorStep++;
			}
		}
	});
});
function jiazai(floorStep){	
	$('.chakan_more').text('数据获取中……');
	var url='<?=wap_l('brand','list')?>&<?=http_build_query($url_arr)?>&page='+floorStep;
	$.getJSON(url,function(data){
		ajaxTag=0;
		if(data.s==0){
			$('.more').hide();
			alert('没有了');
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
		}
	});
}
</script>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>
