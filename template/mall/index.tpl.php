<?php
//商城类型
$type_all=dd_get_cache('type');
$mall_type=$type_all['mall'];
include(TPLPATH.'/admin_set/vipduo.tpl.php');
$parameter=act_mall_index($pagesize=600);
extract($parameter);
$css[]=TPLURL.'/inc/css/mall.css';
$css[]=TPLURL.'/inc/css/mallindex.css';
include(TPLPATH.'/inc/header3.tpl.php');
$zimu=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
?>
<script>
var jiazai=0;
var $shangjia;
$(function(){
	$shangjia=$('.shangjia');
	$('#offer-q').focusClear('mallIndexSearch');
	$('.kuang01').focusClear('mallIndexSearch');
	
	/*$('.tao_choose li a').click(function(){
		var mod=$(this).attr('mod');
		var act=$(this).attr('act');
		var word=$(this).attr('word');
		var moren=$(this).attr('moren');
		
		$('.search-box .mod').val(mod);
		$('.search-box .act').val(act);
		$('.search-box form .search-fields #offer-q').val(word).attr('moren',moren);
		$('.tao_choose li').removeClass('active');
		$(this).parent('li').addClass('active');
		
		$('.jdfanli').hide();
		$('#'+$(this).attr('c')+'jc').show();
		$('#jiaochengurl').attr('href',$(this).attr('jiaocheng'));
		
	});*/

    liHover();
	
	var $lia=$('.search-nav').find('li').eq(0).find('a');
	$('#taobao_box .mod').val($lia.attr('mod'));
	$('#taobao_box .act').val($lia.attr('act'));
	$('#taobao_box .tao-text').val($lia.attr('word')).attr('moren',$lia.attr('moren'));
	$('#'+$lia.attr('c')+'jc').show();
	$('#jiaochengurl').attr('href',$lia.attr('jiaocheng'));
	
	$('.leimu .kuang01').keyup(function(){
	    var val=$(this).val();
		if(val!=''){
		    ajaxMall(val,100);
		}
	});
	
	$('.funumber li').click(function(){
		//if(jiazai==1){return false;}
		$('.fenlei2 li').removeClass('fontL');
		$('.funumber li').removeClass('current');
		$(this).addClass('current');
		var zimu=$(this).find('a').attr('zimu');
		ajaxMall(zimu,100);
	});
	
	$('.fenlei2 li').click(function(){
		//if(jiazai==1){return false;}
		$('.funumber li').removeClass('current');
		$('.fenlei2 li').removeClass('fontL');
		$(this).addClass('fontL');
		var cid=$(this).find('a').attr('cid');
		ajaxMall(cid,100);
	});
})

function liHover(){
	$('.zhanshi ul li').hover(function(){
	    $(this).css('position','relative');
		$(this).find('.fuxuanting').show();
	},function(){
	    $(this).css('position','static');
		$(this).find('.fuxuanting').hide();
	});
}

function ajaxMall(val,num){
	//if(val==''){return true;}
	if(!isNaN(val)){
		if(val==0) num=30;
		else num=100;
		data={cid:val,'num':num};
	}else{
		data={title:val,'num':num};
    }
	$('.zhanshi ul').html('<div style=" padding-top:50px; text-align:center">数据加载中。。。<br/><br/><img src="<?=TPLURL?>/inc/images/wait.gif" /></div>');
	jiazai=1;
    $.ajax({
	    url: '<?=u('ajax','malls')?>',
		data:data,
		dataType:'jsonp',
		jsonp:"callback",
		success: function(data){
			var jsonLi='';
			if(data!=''){
				jsonLi=getTplObj(mallHtml,data);
				var hang=parseInt(Math.ceil(data.length/6));
				if(hang<5){hang=5;}
				$shangjia.css('height',(hang*100+10)+'px');
			}
			if(jsonLi==''){
			    jsonLi='<div class="empty_data"><div class="empty_ico">&nbsp;</div><div class="empty_word">没有匹配商城</div><div style="clear:both"></div></div>';
			}
		    $('.zhanshi ul').html(jsonLi);
			liHover();
			jiazai=0;
         }
	});
}

function mallHtml() {/*<li>
<div class="pailie"><a href="{$view}"><img alt="{$title}" src="{$img}"/></a>
  <p>最高返<span id="fontk">{$fan}</span></p></div>
  <div class="fuxuanting" style="height:125px; border:1px solid #dfdfdf; background:#fff;">
                        <div class="fuxt01"><div class="fuxt01b"><img alt="{$title}" src="{$img}" /></div><div class="fuxt01a">返 <span>{$fan}</span></div></div>
                        <div class="fuxt02">
                          <ul>
                            <li><a href="{$view}"><img alt="返利详情" src="<?=TPLURL?>/inc/images/fx01.png" /></a></li>
                            <li><a target="_blank" href="{$view_jump}"><img alt="直接购买" src="<?=TPLURL?>/inc/images/fx02.png" /></a></li>
                          </ul>
                        </div>
                        <div class="fuxt03" style="border:0 none; background:#fff;">{$des}...</div>
                    </div>
</li>*/;}
</script>
<div style="width:1200px;  margin:0 auto; margin-top:15px;">
<div class="mall-layout malllayoutsp">
  <div class="mall-tl">
    <div class="mall-taofan"><span>商城返利</span><span style="font-size:16px; font-weight:normal; color:#FF0000">(共<?=$total?>家)</span></br></br></br><em>已有500家知名商城支持购物返利</em></div>
    <div class="mall-search">
	 <div style="width:898px;">
<?php if(FANLI==1){?>
 <div id="content" class="span-24" style="width:898px;"> 		    
	<div class="fan-box">
    	<div class="fl_box">
        	<div class="tao_choose">
            	<ul class="search-nav">
                    <li class="check-rebate active">
                    	<a c="mall" mod="inc" act="check" jiaocheng="<?=$dd_tpl_data['jiaocheng']['mall']?>" moren="<?=$webset['search_key']['mall']?>" word="粘贴京东、当当等商城商品网址，商城名称，开始购物拿返利~">京东、当当等查返利</a>
                    </li>
                </ul>
                <em class="see-tips"></em>
            </div>
            <div class="box_big" style="position:relative; z-index:0;">
            	<div class="search-box" style="z-index:0; position:relative;">
                	<div class="tao-key">
                    	<form id="taobao_box" target="_blank" method="GET" action="index.php" onsubmit="return checkSubFrom('#offer-q');">
                      
						 <input type="hidden" class="mod" name="mod" value="" />
						<input type="hidden" class="act" name="act" value="" /><input type="hidden" name="do" value="mall" />
                        	<div class="search-fields">
                        		<input id="offer-q" class="tao-text" type="text" value="" name="q" moren="">
                            </div>
                            <input class="tao-smt" type="submit" value="">
                        </form>
                    </div>
                </div>
                <a href="<?=u('help','mall')?>"  class="jc"  target="_blank"></a>
            </div>
        </div>
    </div>
  </div>
<?php }?>
  </div>
    </div>
  </div>
	<div class="funumber" >
<ul>
<li style="font-size:16px; color:#0099CC">按字母查找商家:</li>
<?php foreach($zimu as $v){?>
<li <?php if($q==$v){?> class="current" <?php }?>><a href="<?=u('mall','index',array('cid'=>$v))?>" style=" cursor:pointer" zimu="<?=$v?>"><?=strtoupper($v)?></a></li>
<?php }?>
</ul></div>
  <div class="mall-txt">
    <div class="mall-subnav">
      <ul class="mall_subnav_left">
       <li><a href="<?=u('mall','index')?>" <?php if($type_id==$q){?> class="current"<?php }?>><?=$type_title?>所有商城</a></li>
      <?php foreach($mall_type as $type_id=>$type_title){?>
	    <li><a href="<?=u('mall','index',array('cid'=>$type_id))?>" target="_self" <?php if($type_id==$q){?> class="current"<?php }?>><?=$type_title?></a></li>
       <?php }?>
      </ul>
	 </div> 

    <div class="mall-subcon">
      <ul class="shoplist">
       	<?php foreach($malls as $row){$n++;?>
		 <li><a href="<?=u('mall','view',array('id'=>$row['id']))?>" target="_self" class="mall-flxq_t">
		<img src="<?=$row['img']?>" width="100" height="50" ></a><?php if(FANLI==1){?><span>最高返利<em><?=$row['fan']?></em></span><?php }else{?><span><?=$row['title']?></span><?php }?>
		<div class="mall-unfold" style="display:none">
		<div class="mall-names">
		<a href="<?=u('mall','view',array('id'=>$row['id']))?>" target="_self">
		<span class="sub-names"><?=$row['title']?></span><?php if(FANLI==1){?><span class="sub-fanli">最高返利<em><?=$row['fan']?></em></span><?php }?></a>
		</div>
		<div class="mall-names"><a href="<?=u('mall','view',array('id'=>$row['id']))?>" title="<?=$row['name']?>" target="_self" class="mall-flxq">返利详情</a>
		<a href="<?=u('jump','mall',array('mid'=>$row['id']))?>" target="_blank" class="mall-nowbuy">直接购买</a>
		</div>
		</div>
		</li>
		<?php }?>  </ul>
		<div class="clear"></div>   </div>
				<div class="page" style="margin-top:30px;margin-bottom:24px;"><?=pageft($total,$pagesize,u(MOD,ACT,array('cid'=>$q)),WJT)?></div>
    
 
  </div>	<div class="clear"></div>
  </div>


	<div class="clear"></div>
<div style="margin-top:20px"></div>
<script language="javascript">
$(function(){
	$(".shoplist li").hover(function(){
		$(this).find(".mall-unfold").show();
	},function(){
		$(this).find(".mall-unfold").hide();
	});
})
</script> 
<script language="javascript">
function closeDiv(id){
	var cdiv = document.getElementById(id);
	cdiv.style.display="none";
}
function showDiv(id){
	var sdiv = document.getElementById(id);
	sdiv.style.display="block";
}
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
</script></div>
<?php include(TPLPATH."/inc/footer.tpl.php");?>