<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$index=7;
define('VIEW_PAGE',1);
include(TPLPATH.'/admin_set/vip.tpl.php');
$css[]=TPLURL."/inc/css/vipduo_index7.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<script>
$(function(){
	fixDiv('#ddlanmu .ddlanmu_c',0);
	countDown('.count_down');
});
</script>
	<div class="mainvipduo">
 <?php if(!empty($slides)){?>
<div class="mainbanner">
	<div class="mainbanner_window">
		<ul id="slideContainer">
		 <?php foreach($slides as $row){?>
                    <li> <a href="<?=$row['url']?>" target="_blank" rel="nofollow"><img src="<?=$row['img']?>" alt="<?=$row['title']?>" width="1920" height="265" /></a></li><?php }?>
		</ul>
		</div>
	<ul class="mainbanner_list">
		 <?php foreach($slides as $row){?><li><a href="javascript:void(0);"></a></li><?php }?>
	</ul>
	 <div class="guanbihdp"></div>
 </div> 
 
 <div class="mainbanner2" style="display:none;">
	  <div class="kaiqi" style="display:none;"></div>
 </div> 

<?php if($dd_tpl_data['index7-kg']['open']==1){?>    <?php }else{?>
<div class="top_wrap">
    <div class="top_box">
                <div class="banner_l">
            <dl>
                                <dd>
                    <a href="/index.php?mod=goods&act=index&code=jiu"  target="_blank" >
                        <img src="<?=TPLURL?>/inc/img/ad/t1.jpg">
                                                    <div class="txt"><span class="title">9.9包邮</span> <span>特价商品<em>天天</em>有</span>  </div>
                                                </a>
                </dd>
                                <dd style="border-bottom:none">
                    <a href="/index.php?mod=goods&act=index&code=shijiu"  target="_blank">
                        <img src="<?=TPLURL?>/inc/img/ad/t2.jpg">
                                                    <div class="txt other"><span class="title">20元封顶</span> <span>精选<em>超值特卖</em>商品</span> </div>
                                            </a>
                </dd>
                            </dl>
        </div>   
		 <div class="banner_r">
            <dl>
		<?php if($dd_tpl_data['index7-ad-kg']['open']==0){?>
                                <dd>
                    <a href="<?=u('tao','list',array('q'=>'女鞋'))?>" target="_blank">
                        <img src="<?=TPLURL?>/inc/img/ad/t3.jpg">
                    </a>
                </dd>
                                <dd>
                    <a href="<?=u('tao','list',array('q'=>'男鞋'))?>" target="_blank">
                        <img src="<?=TPLURL?>/inc/img/ad/t4.jpg">
                    </a>
                </dd>
                                <dd>
                    <a href="<?=u('tao','list',array('q'=>'青蛙王子'))?>" target="_blank" >
                        <img src="<?=TPLURL?>/inc/img/ad/t5.jpg">
                    </a>
                </dd>
                                <dd>
                    <a href="<?=u('tao','list',array('q'=>'飞科'))?>" target="_blank">
                        <img src="<?=TPLURL?>/inc/img/ad/t6.jpg">
                    </a>
                </dd>
				<? }else{?>
                                <dd>
                    <a href="<?=$dd_tpl_data["ad7-1url"]?>" target="_blank">
                        <img src="<?=$dd_tpl_data["ad7-1"]?>">
                    </a>
                </dd>
                                <dd>
                    <a href="<?=$dd_tpl_data["ad7-2url"]?>" target="_blank">
                        <img src="<?=$dd_tpl_data["ad7-2"]?>">
                    </a>
                </dd>
                                <dd>
                    <a href="<?=$dd_tpl_data["ad7-3url"]?>" target="_blank" >
                        <img src="<?=$dd_tpl_data["ad7-3"]?>">
                    </a>
                </dd>
                                <dd>
                    <a href="<?=$dd_tpl_data["ad7-4url"]?>" target="_blank">
                        <img src="<?=$dd_tpl_data["ad7-4"]?>">
                    </a>
                </dd>
                            </dl>
        </div>
      <?php }?>
    </div>
</div> 
 <?php }?>
 <?php }?>
    <!-- 首页商城、登陆开始 -->
 <div class="w1200">
	    <?php if($dd_tpl_data['index7-mall-kg']['open']==1){?>    <?php }else{?>
		  <div class="tb_topcont">
         <!-- 首页商城开始 -->
               <div class="tb_topl">
               	<div class="clearfix home-shop" style="position:relative;">
			<ul class="mall-list clearfix">
			<li>
						<a  target="_blank"  href="<?=$dd_tpl_data['aitaobao']?>">
						<img  alt="淘宝返利"  src="<?=TPLURL?>/inc/img/taobao.gif" >
						</a>
						<span>最高返利<em>90%</em></span>
					  <div style="display:none" class="mall-sc">
							<div class="mall-names">
								<a target="_blank" href="<?=$dd_tpl_data['aitaobao']?>">
									<span class="sub-names">淘宝返利</span><br/>
									<span class="sub-fanli">最高返利<em>90%</em></span>
								</a>
							</div>
							<div class="mall-names">
								<a class="mall-flxq2" target="_blank" href="<?=$dd_tpl_data['aitaobao']?>">返利详情</a>
								<a class="mall-nowbuy" target="_blank" href="<?=$dd_tpl_data['aitaobao']?>">直接购物</a>
							</div>
						</div>
						</li>
								 <?php foreach($malls as $row){?>	<li>
						<a  target="_blank"  href="<?=$row['view']?>">
						<img alt="<?=$row['title']?>"  src="<?=$row['img']?>">
						</a>
						<span>最高返利<em><?=$row['fan']?></em></span>
					  <div style="display:none" class="mall-sc">
							<div class="mall-names">
								<a target="_blank" href="<?=$row['view']?>">
									<span class="sub-names"><?=$row['title']?></span><br/>
									<span class="sub-fanli">最高返利<em><?=$row['fan']?></em></span>
								</a>
							</div>
							<div class="mall-names">
								<a class="mall-flxq2" target="_blank" href="<?=$row['view']?>">返利详情</a>
								<a class="mall-nowbuy" target="_blank" href="<?=$row['view_jump']?>">直接购物</a>
							</div>
						</div>
						</li>
					 <?php }?>
					<li class="next"><a target="_blank" href="<?=u('mall','index')?>"></a><span>更多商城</span></li>
			</ul>
        </div>
		</div>
		 <!-- 首页商城结束 -->
		 
 <div class="tb_topr">
	<div class="m-body">
	    <div class="m-content">
		   <div class="dengluqian" style="display:none">
	        <div class="unlogged">
    	        <p>
                    <b class="bold c-333">Hi，你好</b>
    	        </p>
    	        <p class="actions">
    	            <a class="register2 c_bgcolor" href="<?=u('user','register')?>"><font color="#FFFFFF">免费注册</font></a>
    	            <a class="login1 c_fcolor" href="<?=u('user','login')?>">立即登录</a>
    	        </p>
    	       <p class="actions" style="margin-top:10px">
    	            <span class="desc" style="margin-top:10px">无需注册，快捷登录：</span></p>
    	              <p style="margin-bottom:-20px; width:230px">
					 <div class="third-box">
                      <?php foreach($apps as $row){?>
			<a class="denglu <?=$row['code']?>" href="<?=u('api','do',array('code'=>$row['code'],'do'=>'go'))?>" title="<?=$row['title']?>" target="_blank"></a>   <?php }?>    
                        </div>
	        </div>  <div class="clear"> </div>
			
			</div>
		  <div class="dengluhou" style="display:none">
		  <div class="logged">
    	        <p class="actions" style="margin-left:20px">
    	            <a class="common-btn register2" href="<?=u('user','index')?>">会员中心</a>
    	            <a class="common-btn register2" href="/index.php?mod=user&act=tixian&type=1">申请提现</a>
    	        </p>
    	        <ul>

<li>欢迎您：&nbsp;&nbsp;<span class="name" style="color:#FF6699; font-weight:bold"><?=$dduser['name']?></span></li>
<li>账户余额：&nbsp;&nbsp;<span class="money" style="color:#FF6699; font-weight:bold"><?=$dduser['money']?></span> 元</li>
<li>账户<?=TBMONEY?>：&nbsp;&nbsp;<span class="jifenbao" style="color:#FF6699; font-weight:bold"><?=$dduser['jifenbao']?></span> <?=TBMONEYUNIT?></li>
  </ul></div>
    	      
			</div>
			
	</div>
</div> <div class="shihui"> <ul><?php foreach($article_1 as $row){?>
		        <li><a href="<?=u('article','view',array('id'=>$row['id']))?>"  target="_blank"><font color="#f60">[公告]</font> <?=$row['title']?></a></li> <?php }?></ul>   </div>
          </div>
     </div>
     </div>
	 <?php }?> 
	 
	<div class="clear"></div>
		 <!-- 首页商城、登陆结束 -->
 <div class="mainbody1200">
 <div id="ddlanmu" style="margin-top:15px;">
        <div class="ddlanmu_c" style="width:1202px; overflow:hidden">
          <ul class="home-tab clearfix">
            <?php foreach($bankuai as $key=>$vo){?>
            <li <?php if($vo['code']==$_GET['code']||$key==0){?>class="current"<?php }?> code="<?=$vo['code']?>"><span code="<?=$vo['code']?>" class="home-tab-super c_border"> <?=$vo['title']?></span></li>
            <?php }?>
          </ul>
           <div class="jy_tl">
            <div class="jy_auto">
              <?php if($goods_type||$first_bankuai['yugao']==1){?>
              <div class="jy_nav" id="<?=$first_bankuai['code']?>_nav"> 
              <?php if($goods_type){?>
              <div class="up_fenlei">
            	<a class="cur c_border" href="<?=u('goods','index',array('code'=>$first_bankuai['code']))?>">全部</a>
                <?php foreach($goods_type as $vo){?>
                <a target="_blank" href="<?=u('goods','index',array('code'=>$first_bankuai['code'],'cid'=>$vo['id']))?>">
                <?=$vo['title']?>
                </a>
                <?php }?> </div>
			  <?php if($first_bankuai['huodong_time']&&date('H')<$first_bankuai['huodong_time']){?>
                <div class="upnew">
                	<i></i>
                    每天<span><?=$first_bankuai['huodong_time']?></span>点上新     距上新还有<span><?=$first_bankuai['huodong_time']-date('H')?></span>小时
                </div>
                <?php }elseif($first_bankuai['huodong_time']){?>
                <div class="upnew">
                	<i></i>
                    <div style="float:left; line-height:39px">本场剩余</div><div class="count_down" style="line-height:39px"><span class="count_down_h">0</span>时<span class="count_down_m">0</span>分<span class="count_down_s">0</span>秒<input type="hidden" class="stime" value="<?=TIME?>"><input type="hidden" class="etime" value="<?=$first_bankuai['huodong_etime']?>"></div></div>
                <?php }?>
               
                <?php }?>
				 <!-- 	<a href="<?=u('goods','index',array('code'=>$first_bankuai['code'],'do'=>'sell'))?>">按销量</a>
 <a href="<?=u('goods','index',array('code'=>$first_bankuai['code'],'do'=>'discount_price'))?>">按价格</a> 
<a href="<?=u('goods','index',array('code'=>$first_bankuai['code'],'do'=>'new'))?>"><span class="sx">今日上新</span><font size="+0.8">(<?=$row['$total_new']?>)</font></a> -->
   <?php if($first_bankuai['yugao']==1){?>
     <div style="float:right; width:110px; margin-right:10px;">
  <a  <?php if($yugao_close){?>onClick="alert('对不起，亲！<?=$first_bankuai['yugao_time']?>后公布预告商品。');"<?php }else{?>href="<?=u('goods','index',array('code'=>$first_bankuai['code'],'do'=>'yugao'))?>"<?php }?>><span class="yg">明日预告</span><font size="+0.8"></font></a> </div> <?php }?> 
              
               
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    <div id="index-goods">
      <?php 
	foreach($bankuai as $key=>$vo){
?>

      <div id="<?=$vo['code']?>Div" class="ddgoods goods_list" <?php if($key==0){?>show="1" style=" display:block"<?php }else{?>show="0"<?php }?>>
        <?php if($key==0){
	$bankuai_tpl=$vo['bankuai_tpl'];
	$bankuai_code=$vo['code'];
 	include(TPLPATH."/goods/".$bankuai_tpl."/list.tpl.php");
}
?>
      </div>
      <?php }?>
      <div style="clear:both"></div>
      <div id="ajax_goods_loading" style="margin-bottom:10px"><img src="<?=TPLURL?>/inc/images/white-ajax-loader.gif" style="margin-bottom:-2px" alt="加载商品" />&nbsp;&nbsp;正在加载商品</div>
      <?php include(TPLPATH.'/goods/jumpbox.tpl.php');?>
    </div>
   </div>  
<script src="js/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>
 <script src="<?=TPLURL?>/vip/js/hdp.js" type="text/javascript"></script>
<script type="text/javascript" src="js/scrollpagination.js"></script>
<?php
$a=$url_arr;
$a['code']=trim($_GET['code']);
$contentData=json_encode($a);
?>
<script>
var scrollPaginationPage=1;
var ajaxLoadNum=<?=$ajax_load_num?>;
var lanmuChangeStop=0;
var ajaxGet=0;
<?php
foreach($bankuai as $k=>$v){
	$indexAjaxCodeObj[$v['code']]=1;
}
?>
var indexAjaxCodeObj=<?=dd_json_encode($indexAjaxCodeObj)?>;
$(function(){
	if(typeof getCookie('userlogininfo')=='undefined'){
		$('#index-chongzhi-tiplogin-beijing,#index-chongzhi-tiplogin-wenzi').show();
	}
	$("#KinSlideshow").KinSlideshow({
		isHasTitleFont:false,
		isHasTitleBar:false,
		moveStyle:'up',
		btn:{btn_fontHoverColor:"#FFFFFF"}
	});
	$('.clearfix ul li').hover(function(){
		$(this).css('position','relative');
		$(this).find('.fuxuanting').show();
	},function(){
		$(this).css('position','static');
		$(this).find('.fuxuanting').hide();
	});
	
	indexAjaxLoad('<?=$first_bankuai['code']?>');
	var $homeTabLi=$('.home-tab li');
	$homeTabLi.click(function(){
		if(lanmuChangeStop==1){
			return false;
		}		
		scroller('ddlanmu',500,50);
		$homeTabLi.removeClass('current');
		$(this).addClass('current');
		var code=$(this).attr('code');
		//分类选择显示
		$(".jy_nav").hide();
		$("#"+code+"_nav").show();
		var $indexGoods=$('#index-goods');
		$indexGoods.find('.ddgoods').hide();
		$indexGoods.find('#'+code+'Div').show();
		var show=$indexGoods.find('#'+code+'Div').attr('show');
		$('#ajax_goods_loading').html('<img src="<?=TPLURL?>/inc/images/white-ajax-loader.gif" style="margin-bottom:-2px" alt="加载商品" />&nbsp;&nbsp;正在加载商品').hide();
		if(show==0){
			$indexGoods.find('#'+code+'Div div ul').html('<div id="ajax_goods_loading" style=" display:block"><img src="<?=TPLURL?>/inc/images/white-ajax-loader.gif" style="margin-bottom:-2px" alt="加载商品" />&nbsp;&nbsp;正在加载商品</div>');
			$indexGoods.find('#'+code+'Div').attr('show',1);
			/*setTimeout(function(){
				changelanmu(code);
			},500);*/
			
			lanmuChangeStop=1;
			ajaxGet=1;
			changelanmu(code);
		}
	});
	fixDiv('#ddlanmu .ddlanmu_c',0);
});

function indexAjaxLoad(code){
	LazyLoad($('#'+code+'Div'));
	for(var i in indexAjaxCodeObj){
		if(i!=code){
			$('#'+i+'Div .goods_items').stopScrollPagination();
		}
	}
	ajaxLoad('#'+code+'Div .goods_items','',ajaxLoadNum,CURURL+u('goods','data'),{"code":code},500,LazyLoad);
}

function changelanmu(code,first){
	var arr=new Array()
	arr['code']=code;
	arr['page']=1;
	scrollPaginationPage=1;
	var url=CURURL+u('goods','data',arr);
	$.get(url,function(data){
		$('#'+code+'Div').html(data);
		indexAjaxLoad(code);
		lanmuChangeStop=0;
		ajaxGet=0;
	});
	//分类
	var arr=new Array()
	arr['code']=code;
	var url=CURURL+u('ajax','goods_type',arr);
	$.get(url,function(data){
		$(".jy_nav").hide();
		$(".jy_auto").append(data);
	});
} 
$(function() {
	$("img").lazyload({
		effect : "fadeIn"
	});
});
</script>
<script language="javascript">
/* 商城悬浮 */
$(function(){
	$(".home-shop li").hover(function(){
		$(this).find(".mall-sc").show();
	},function(){
		$(this).find(".mall-sc").hide();
	});
})
</script>
<?php if($dd_tpl_data['index_jc']==1){?>
<?php include(TPLPATH.'/vip/jiaocheng.tpl.php');?>
<?php }?>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>
