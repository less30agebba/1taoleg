<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$index=1;
define('VIEW_PAGE',1);
include(TPLPATH.'/admin_set/vip.tpl.php');
$css[]=TPLURL."/inc/css/vipduo_index.css";
include(TPLPATH.'/inc/header.tpl.php');?>
<script>
$(function(){
	fixDiv('#ddlanmu .ddlanmu_c',0);
	countDown('.count_down');
});
</script>
	<div class="f-1">
<div class="f-0">
 <div class="f-1left">&nbsp;</div> 
	<div class="f-1center">
          <div class="banner">
	           <div class="banner-btn">
		        <a href="javascript:;" class="prevBtn"><i></i></a>
		         <a href="javascript:;" class="nextBtn"><i></i></a>
	         </div>
	        <ul class="banner-img" style=" height:360px; overflow:hidden; background:url(<?=$slides[1]['img']?>)">
		 <?php foreach($slides as $row){?>
            <li> <a href="<?=$row['url']?>" target="_blank" rel="nofollow"><img src="<?=$row['img']?>" alt="<?=$row['title']?>" width="700" height="360" /></a></li>
		<?php }?>
	        </ul>
			<ul class="banner-circle"></ul>
         </div>
  </div>
  
 <!--首页幻灯片结束--> 
<div class="f-1right">
   
 <?php if($dd_tpl_data['index_dl']==1){?>
 
    <!--首页登录框--> 
<div style="padding:8px 15px 12px 7px;border-bottom:#ddd dashed 1px;"> 

	  <!--首页登录后--> 
	  <div class="dengluhou" style="display:none">
	  <div class="vipuser">
                    <div class="vipuserleft2"><span class="avatar"><img src="<?=a($dduser['id'])?>" width="55" height="55" border="0"/></span></div> 
				    <div class="vipuserright">
				    <div class="wz1"> Hi，<font color="#FF6699"><span class="mc"><?=$dduser['name']?></span> </font> </div>
                    <div class="wz2">  欢迎回来！</div>
				    </div>
        </div>
		<div class="reg-box">   
	                <span class="font2"><a href="<?=u('user','tixian',array('type'=>1))?>"><font color="#ff6699">申请提取</font></a></span>
	                 <span class="font2"><a href="<?=u('user','index')?>">进入会员中心</a></span>
		</div> 
         <div class="xinxi">
         <div class="score">我的<?=TBMONEY?>：<span class="jifenbao font1"><?=$dduser['jifenbao']?></span> <?=TBMONEYUNIT?></div>
	     <div class="score">我的余额：<span class="money font1"><?=$dduser['money']?></span> 元</div>
         <div class="score">我的积分：<span class="jifen font1"><?=$dduser['jifen']?></span> 点</div>
         </div>
	<div class="clear"></div>
	  </div>
	  <!--首页登录后--> 
	  
	   <!--首页登录前--> 
	   <div class="dengluqian" style="display:none">
	          <div class="mod_exclusivity">
                         <ol>
                 <li><a href="<?=u('user','index')?>" target="_blank" ><img src="<?=TPLURL?>/inc/images/index/user.jpg" alt="会员中心"/>会员中心</a></li>
                <li><a href="<?=u('yaoqing','index')?>" target="_blank" ><img src="<?=TPLURL?>/inc/images/index/huodong.jpg" alt="邀请有奖"/>邀请有奖</a></li>
                <li><a href="<?=u('huan','list')?>" target="_blank"><img src="<?=TPLURL?>/inc/images/index/duihuan.jpg" alt="积分兑换"/>积分换礼</a></li>
                  </ol>
                  </div>
      <div class="reg-dl">
                    <a href="<?=u('user','login')?>" style="border-right:#e9e9e9 solid 1px;"><div class="dl-btn"></div>会员登录</a>
                    <a href="<?=u('user','register')?>"><div class="zc-btn"></div>立即注册</a>
			</div>	
          <div class="third-box">
              <span>快捷登录：</span> <?php foreach($apps as $row){?>
			             <a class="denglu <?=$row['code']?>" href="<?=u('api','do',array('code'=>$row['code'],'do'=>'go'))?>" title="<?=$row['title']?>" target="_blank"></a>  <?php }?>
		  </div>	
		 </div> 
		   <!--首页登录前--> 
	 
 </div>  
	
	 <!--首页登录框--> 
		  <?php }else{?>  
		   
		  <!--首页充值框--> 
		<div style="padding:12px 15px 12px 20px;border-bottom:#ddd dashed 1px;">  
    <?php if($chongzhi_url!=''){?>
        <iframe frameborder="0" style="height:200px; width:210px" src="<?=$chongzhi_url?>"></iframe>
        <?php }else{?>
        <div style="text-align:center; line-height:200px; font-size:16px; font-weight:bold">淘点金代码未生效</div>
        <?php }?>	
		</div>	
		<!--首页充值框--> 
 
	 <?php }?>
			
   <div class="last"><a href="<?=$dd_tpl_data['adscz1url']?>" target="_blank" class="'right"><img src="<?=$dd_tpl_data['adscz1']?>" alt=""></a></div>
  </div>   
 </div>    
  <!--会员登录后结束--> 
     </div>   
       <div class="pinpai">			
	               <!-- 首页商城开始 -->
              	<div class="home_list">  	
				   <div class="clearfix home-shop" style="position:relative;">
                       <ul>
			                <li>
						<a  target="_blank"  href="<?=$dd_tpl_data['aitaobao']?>">
							<img  alt="淘宝返利" src="<?=TPLURL?>/inc/img/taobao.gif"  style="width:90px;height:45px; display:block;margin:5px auto;">
							    <p>最高返<font color="#ff6699"><B>90%</B></font></p>
						</a>
					  <div style="display:none" class="mall-sc">
							<div class="mall-names">
								<a target="_blank" href="<?=$dd_tpl_data['aitaobao']?>">
									<span class="sub-names">淘宝返利</span><br/><br/>
									<span class="sub-fanli">最高返<i>90%</i></span>
								</a>
							</div>
							<div class="mall-names">
								<a class="mall-flxq2" target="_blank" href="<?=$dd_tpl_data['aitaobao']?>">返利详情</a>
								<a class="mall-nowbuy" target="_blank" href="<?=$dd_tpl_data['aitaobao']?>">直接购物</a>
							</div>
						</div>
						</li>
		  <?php foreach($malls as $row){?>
            	<li> <?php if($dd_tpl_data['fanli-kg']['open']==0){?> 
                    <a href="<?=$row['view']?>" target="_blank"><?php }else{?> <a href="<?=$row['view_jump']?>" target="_blank"><?php }?>
                 <img alt="<?=$row['title']?>"  src="<?=$row['img']?>" style="width:90px;height:45px; display:block;margin:5px auto;">
                  <?php if($dd_tpl_data['fanli-kg']['open']==0){?> <p>最高返<font color="#ff6699"><B><?=$row['fan']?></B></font></p><?php }else{?>
				   <p><?=$row['title']?></p><?php }?>
                   </a>
				  <?php if($dd_tpl_data['fanli-kg']['open']==0){?> 
				     <div style="display:none" class="mall-sc">
							<div class="mall-names">
								<a target="_blank" href="<?=$row['view']?>">
									<span class="sub-names"><?=$row['title']?></span><br/><br/>
									 <?php if($dd_tpl_data['fanli-kg']['open']==0){?><span class="sub-fanli">最高返<i><?=$row['fan']?></i></span> <?php }else{?>
									 <span class="sub-fanli"></span>  <?php }?>
								</a>
							</div>
							<div class="mall-names">
								<a class="mall-flxq2" target="_blank" href="<?=$row['view']?>">返利详情</a>
								<a class="mall-nowbuy" target="_blank" href="<?=$row['view_jump']?>">直接购物</a>
							</div>
						</div><?php }?>
                </li>
            <?php }?>
           <li class="next"><a target="_blank" href="<?=u('mall','index')?>"></a><span>更多商城</span></li>
            </ul>
        </div>
	</div> 
		  <!-- 首页商城结束 -->    
</div> 

 <div class="clear"></div>
		 <!-- 首页商城、登陆结束 -->
 <div class="mainbody1200">
<div id="ddlanmu" style="margin-top:15px;">
        <div class="ddlanmu_c" style="width:1202px; overflow:hidden">
         <ul class="home-tab clearfix">
           <?php foreach($bankuai as $key=>$vo){?>
            <li <?php if($vo['code']==$_GET['code']||$key==0){?>class="current"<?php }?> code="<?=$vo['code']?>"><span code="<?=$vo['code']?>" class="home-tab-super">
              <?=$vo['title']?></span></li>
            <?php }?>
			  <?php if($first_bankuai['huodong_time']&&date('H')<$first_bankuai['huodong_time']){?>
                <div class="upnew" style="*margin-top:-40px; ">
                	<i></i>
                   <div style="float:left; line-height:39px"> 每天<span><?=$first_bankuai['huodong_time']?></span>点上新     距上新还有<span><?=$first_bankuai['huodong_time']-date('H')?></span>小时</div>
                </div>
                <?php }elseif($first_bankuai['huodong_time']){?>
                <div class="upnew" style="*margin-top:-40px; ">
                	<i></i>
                    <div style="float:left; line-height:39px">本场剩余</div><div class="count_down" style="line-height:39px"><span class="count_down_h">0</span>时<span class="count_down_m">0</span>分<span class="count_down_s">0</span>秒<input type="hidden" class="stime" value="<?=TIME?>"><input type="hidden" class="etime" value="<?=$first_bankuai['huodong_etime']?>"></div></div>
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
                <?php }?>
				
				 <a>排序：</a>
				 	  <a class="<?php if($_GET['do']=='addtime_desc'){?>cur<?php }?> c_border" href="<?=l('goods','index',array('code'=>$_GET['code'],'keyword'=>$_GET['keyword'],'cid'=>$_GET['cid'],'do'=>'addtime_desc'))?>#fl">最新↓</a>
         <a class="<?php if($_GET['do']=='sell_desc'){?>cur<?php }?> c_border" href="<?=l('goods','index',array('code'=>$_GET['code'],'keyword'=>$_GET['keyword'],'cid'=>$_GET['cid'],'do'=>'sell_desc'))?>#fl">最热↓</a>
         <a class="<?php if($_GET['do']=='price_asc'){?>cur<?php }?> c_border" href="<?=l('goods','index',array('code'=>$_GET['code'],'keyword'=>$_GET['keyword'],'cid'=>$_GET['cid'],'do'=>'price_asc'))?>#fl"><span class="ff">价格↓ </span></a>
		
   <?php if($first_bankuai['yugao']==1){?>
     <div style="float:right; width:90px; margin-right:0px;">
  <a  <?php if($yugao_close){?>onClick="alert('对不起，亲！<?=$first_bankuai['yugao_time']?>后公布预告商品。');"<?php }else{?>href="<?=u('goods','index',array('code'=>$first_bankuai['code'],'do'=>'yugao'))?>"<?php }?>><span class="yg">明日预告</span><font size="+0.8"></font></a> </div> <?php }?> 
              
               
              </div>
              <?php }?>
            </div>
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
   </div>   </div>
<script src="js/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>
 <script src="<?=TPLURL?>/vip/js/huandengpian.js" type="text/javascript"></script>
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
			$indexGoods.find('#'+code+'Div div ul').html('<div id="ajax_goods_loading" style=" display:block"><img src="<?=TPLURL?>/inc/inc/img/white-ajax-loader.gif" style="margin-bottom:-2px" alt="加载商品" />&nbsp;&nbsp;正在加载商品</div>');
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
/* 商城悬浮 */
$(function(){
	$(".home-shop li").hover(function(){
		$(this).find(".mall-sc").show();
	},function(){
		$(this).find(".mall-sc").hide();
	});
})
</script>
<script type="text/javascript">
function setTab(name,cursel){
	cursel_0=cursel;
	for(var i=1; i<=links_len; i++){
		var menu = document.getElementById(name+i);
		var menudiv = document.getElementById("con_"+name+"_"+i);
		if(i==cursel){
			menu.className="off";
			menudiv.style.display="block";
		}
		else{
			menu.className="";
			menudiv.style.display="none";
		}
	}
}
function Next(){                                                        
	cursel_0++;
	if (cursel_0>links_len)cursel_0=1
	setTab(name_0,cursel_0);
} 
var name_0='one';
var cursel_0=1;
var ScrollTime=100000000;//循环周期（毫秒）
var links_len,iIntervalId;
onload=function(){
	var links = document.getElementById("tab1").getElementsByTagName('li')
	links_len=links.length;
	for(var i=0; i<links_len; i++){
		links[i].onmouseover=function(){
			clearInterval(iIntervalId);
			this.onmouseout=function(){
				iIntervalId = setInterval(Next,ScrollTime);;
			}
		}
	}
	document.getElementById("con_"+name_0+"_"+links_len).parentNode.onmouseover=function(){
		clearInterval(iIntervalId);
		this.onmouseout=function(){
			iIntervalId = setInterval(Next,ScrollTime);;
		}
	}
	setTab(name_0,cursel_0);
	iIntervalId = setInterval(Next,ScrollTime);
}
</script>			 
<?php if($dd_tpl_data['index_jc']==1){?>
<?php include(TPLPATH.'/vip/jiaocheng.tpl.php');?>
<?php }?>

<?php include(TPLPATH.'/inc/footer.tpl.php');?>

