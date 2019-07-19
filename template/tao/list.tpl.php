
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

function act_t_list(){
	global $duoduo,$dd_tpl_data;
	$webset = $duoduo->webset;
	$dduser = $duoduo->dduser;

	$sort_arr=array('total_sales_desc'=>'销量','tk_total_sales_desc'=>'推广');
	$sort=$_GET['sort']?$_GET['sort']:'total_sales_desc';
	$q=$_GET['q']?$_GET['q']:'热卖';
	$_GET['page']=$_GET['page']?$_GET['page']:1;
	$page=$_GET['page'];

	$ddTaoapi = new ddTaoapi();
	$data=array('page_no'=>$page,'page_size'=>40,'q'=>$q,'sort'=>$sort);
	$shuju_data=$ddTaoapi->taobao_tbk_item_get($data);
	$shuju_data=$shuju_data['s']==1?$shuju_data['r']:'';
	$num_iids='';
	foreach($shuju_data as $k=>$row){
		$shuju_data[$k]['img']=tb_img($row['pict_url'],'b');
		$shuju_data[$k]['url']=u(MOD,'view',array('iid'=>$row['num_iid']));
		$shuju_data[$k]['jump']=u('jump','goods',array('iid'=>$row['num_iid']));
		$num_iids.=','.$row['num_iid'];
	}
	
	$num_iids=preg_replace('/^,/','',$num_iids);
	$b=$ddTaoapi->taobao_taobaoke_rebate_auth_get($num_iids,3);
	foreach($b as $k=>$row){
		$b['a'.$row['param']]=$row['rebate'];
		unset($b[$k]);
	}
	foreach($shuju_data as $k=>$row){
		if(!isset($b['a'.$row['num_iid']])){
			$b['a'.$row['num_iid']]=1;
		}
		$shuju_data[$k]['rebate']=(int)$b['a'.$row['num_iid']];
		$shuju_data[$k]['rebate_word']=$shuju_data[$k]['rebate']==1?'有返利':'<font color="#999999">无返利</font>';
	}

	$webtitle=$q.'-'.$dd_tpl_data['title'];
	
	if(AJAX==1){
		echo dd_json_encode(array('s'=>1,'r'=>$shuju_data));
		dd_exit();
	}
	unset($duoduo);
	unset($webset);
	unset($dduser);
	unset($dd_tpl_data);
	$parameter['shuju_data']=$shuju_data;
	$parameter['sort_arr']=$sort_arr;
	$parameter['sort']=$sort;
	$parameter['page']=$page;
	$parameter['q']=$q;
	$parameter['webtitle']=$webtitle;
	return $parameter;
}
?><?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$parameter=act_t_list();
extract($parameter);
$css[]=TPLURL."/inc/css/vipduo_list.css";
include(TPLPATH.'/inc/header3.tpl.php');?>
<script>
var floorStep=2;
var ajaxTag=0;
$(function(){
	$(window).bind('scroll',function(){
		if($(window).scrollTop()+$(window).height()>=$(document).height()-400){
			if(ajaxTag==0){
				ajaxTag=1;
				jiazai(floorStep);
				floorStep++;
			}
		}
	});
	$('.shuju_load img.lazy').lazyload({
		threshold:20,
		failure_limit:50
	});
});

function index_tpl(){/*
 <li onMouseOver="this.className='li_on'" onMouseOut="this.className='li_off'">
                <div class="list-good buy">
                    <div class="good-pic"><a href="{$url}" class="pic-img" target="_blank">
                        <img   data-original="{$img}" src="<?=$dd_tpl_data['loading_img']?>" alt="{$title}" class="lazy" width="285" height="285" />
                                     <?php if(date('Y-m-d',$row['stime'])==date('Y-m-d')||date('Y-m-d',$row['addtime'])==date('Y-m-d')){?> <span class="new-icon">新品</span>  <?php }?> </a>  </div>
									 
			                <h3 class="good-title"> <span class="bt" ><?php if($row['is_promotion']==1){?><font color="#FF3300">【<?=$row['promotion_name']?>】</font> <?php }?>{$title}</span></h3>
							
                             <div class="good-price">
                                 <span class="price-current dd_color" ><em>￥</em>{$zk_final_price}</span>
                                 <span class="des-other"> <strong></strong> <span class="baoyou"><em>包邮</em></span>
                                 <span class="price-old"><em>￥</em>{$reserve_price}</span></span> 
					            <div class="btn">  <span class="youfanli"><em>{$rebate_word}</em></span>
 </div>
								 <a href="{$jump}"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a></div>	
					 
                </div>
            </li> 	*/;}

function jiazai(floorStep){	
	$('.chakan_more').text('数据获取中……');
	var url='/index.php?mod=tao&act=list&cid=&q=<?=$q?>'+floorStep;
	$.getJSON(url,function(data){
		ajaxTag=0;
		if(data.s=='1'){
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
			}
		}
	});
}
</script>
 <div class="clothes-nav">
	<div class="sub-nav">
		<ul>
	<li class="clothes-icon"><a href="<?=u('tao','list',array('cid'=>0,'q'=>'女装'))?>"><span></span><div class="category-name <?php if($q=='女装'){?>current-menu<?php }?>">女装</div></a></li>
		<li class="clothes_icon" ><a href="<?=u('tao','list',array('cid'=>0,'q'=>'男装'))?>"><span></span><div class="category-name <?php if($q=='男装'){?>current-menu<?php }?>">男装</div></a></li>
			<li class="cos_icon" ><a href="<?=u('tao','list',array('cid'=>0,'q'=>'护肤'))?>"><span></span><div class="category-name <?php if($q=='护肤'){?>current-menu<?php }?>">美妆</div></a></li>
	<li class="shoes-icon"><a href="<?=u('tao','list',array('cid'=>0,'q'=>'鞋子'))?>"><span></span><div class="category-name <?php if($q=='鞋子'){?>current-menu<?php }?>">鞋子</div></a></li>
	<li class="bag-icon"><a href="<?=u('tao','list',array('cid'=>0,'q'=>'包包'))?>"><span></span><div class="category-name <?php if($q=='包包'){?>current-menu<?php }?>">箱包</div></a></li>
	<li class="food_icon"><a href="<?=u('tao','list',array('cid'=>0,'q'=>'美食'))?>"><span></span><div class="category-name <?php if($q=='美食'){?>current-menu<?php }?>">美食</div></a></li>
	<li class="tz_icon" ><a href="<?=u('tao','list',array('cid'=>0,'q'=>'母婴'))?>"><span></span><div class="category-name <?php if($q=='母婴'){?>current-menu<?php }?>">母婴童装</div></a></li>
	<li class="kitchen-icon"><a href="<?=u('tao','list',array('cid'=>0,'q'=>'居家'))?>"><span></span><div class="category-name <?php if($q=='居家'){?>current-menu<?php }?>">居家</div></a></li>
	<li class="electric-icon"><a href="<?=u('tao','list',array('cid'=>0,'q'=>'数码'))?>"><span></span><div class="category-name <?php if($q=='数码'){?>current-menu<?php }?>">家用电器</div></a></li>
	<li class="accessories-icon"><a href="<?=u('tao','list',array('cid'=>0,'q'=>'配饰'))?>"><span></span><div class="category-name <?php if($q=='配饰'){?>current-menu<?php }?>">配饰</div></a></li>
		</ul>
	</div>
</div>
   <div class="list1200">
<div class="blank20px"></div>
     <ul class="goods-list shuju_load">
                 <?php foreach($shuju_data as $k=>$row){?>
        <li onMouseOver="this.className='li_on'" onMouseOut="this.className='li_off'">
                <div class="list-good buy">
                    <div class="good-pic"><a href="<?=$row['url']?>" class="pic-img" target="_blank">
                        <img  data-original="<?=tb_img($row['img'],300)?>" src="<?=$dd_tpl_data['loading_img']?>" alt="<?=$row['title']?>" class="lazy" width="285" height="285" />
                                     <?php if(date('Y-m-d',$row['stime'])==date('Y-m-d')||date('Y-m-d',$row['addtime'])==date('Y-m-d')){?> <span class="new-icon">新品</span>  <?php }?> </a>  </div>
									 
			                <h3 class="good-title"> <span class="bt" ><?php if($row['is_promotion']==1){?><font color="#FF3300">【<?=$row['promotion_name']?>】</font> <?php }?><?=$row['volume']?><?=$row['title']?></span></h3>
						
                             <div class="good-price" style="margin-top:17px">
                                 <span class="price-current dd_color" ><em>￥</em><?=$row['zk_final_price']?></span>
                                 <span class="des-other"> <strong></strong>
                                 <span class="discount"><em><?=round($row['zk_final_price']/$row['reserve_price']*10,1)?></em>折</span>     <span class="baoyou"><em>包邮</em></span>
                                 <span class="price-old"><em>￥</em><?=$row['reserve_price']?></span></span> 
					            <div class="btn">  <span class="youfanli"><em><?=$row['rebate_word']?></em></span>
 </div>
								 <a href="<?=$row['jump']?>"  title="查看详情" target="_blank" class="tejia c_bgcolor" >去抢购</a></div>	
					 
                </div>
            </li> 	
			<?php }?>
         </ul>
  
	<a class="chakan_more">下拉加载更多</a></div> 


<script type="text/javascript" src="<?=TPLURL?>/vip/js/jquery.lazyload.js"></script>


<?php include(TPLPATH.'/inc/footer.tpl.php');?>