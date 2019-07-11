   <!--顶部导航栏开始-->
<div class="vipduo_top">
	<div class="vipduo_top_menu">
		<div class="vipduo_top_link">
					
			<div style="margin-left:20px; cursor:pointer">
						<i class="icon-phone"></i><a  href="<?=u('shouji','index')?>" target="_blank">手机APP端</a>
						</div>
						            
		
		 <div style="margin-left:20px; cursor:pointer"><em class="icon icon1"></em><a id="kefu2">在线客服</a><em class="online"></em></div>
					<div style="margin-left:20px; cursor:pointer"><a href="<?=u('help','index')?>" target="_blank"><em class="icon icon2"></em>帮助中心</a><em class="online"></em></div>   		

		  
	
		<?php if($webset['user']['shoutu']==1){?> <div style="margin-left:20px;"><a href="<?=u('yaoqing','index')?>" title="邀请好友拿返利">邀请好友<font color="#FF0000">奖<?=$webset['tgfz']?>元</font></a></div><?php }?>
			
		  <?php if($webset['shangjia']['status']==1){?>
		  <div  style="margin-left:20px; cursor:pointer"> <a href="<?=u('hezuo','index')?>" target="_blank">
		商家报名</a></div>  <?php }?>
         
        </div>
	<!--登录前-->
        <div class="vipduo_top_user" style="display:none">
          
            <div class="menu_title">
            <div class="vipduo_login">您好，</div>
            <div class="vipduo_login"><a href="<?=u('user','login')?>" title="会员登录">请登录</a></div><span></span>
            <div class="vipduo_reg"><a href="<?=u('user','register')?>" title="立即注册会员">免费注册</a></div>
			 <?php if($app_show==1){?>
		    <?php foreach($apps as $k=>$row){?>
		    <span></span><div class="vipduo_reg"><a rel="nofollow" href="<?=u('api',$row['code'],array('do'=>'go'))?>" target="_blank" title="<?=$row['title']?>登录"><div class="ico_<?=$row['code']?>"></div><?=$row['title']?>登录</a></div><?php }?>	
			 <?php }?>
			 
</div></div>

 <!--登录后-->
				<script type="text/javascript">
				function topHtml() {/*<div class="vipduo_user_login" onmouseover="this.className='vipduo_user_login active'" onmouseout="this.className='vipduo_user_login'">
					<div class="menu_title">
						<div style="float:left;">
							<a href="<?=u('user')?>"><div class="user_head"><img src="{$avatar}" width="18" height="18"/></div></a>{$name}</div>
							<div class="ico_menu" style="float:left;"></div>
						</div>
						<div class="menu_content">
							<ul>
								<li><a href="<?=u('user','index')?>"><div class="menu_list_title"><div class="vipduo_ico ico_manager"></div>我的后台</div></a></li>
								<?php if($dd_tpl_data['fanli-kg']['open']==0){?><li><a href="<?=u('user','tixian',array('type'=>1))?>"><div class="menu_list_title"><div class="vipduo_ico ico_mall"></div><?=TBMONEY?>提取</div></a></li><?php }?>
								<li><a href="<?=u('user','tradelist')?>"><div class="menu_list_title"><div class="vipduo_ico ico_order"></div>我的订单</div></a></li>
								<li><a href="<?=u('user','mingxi')?>"><div class="menu_list_title"><div class="vipduo_ico ico_onshare"></div>收入明细</div></a></li>
								<li><a href="<?=u('user','huan')?>"><div class="menu_list_title"><div class="vipduo_ico ico_score"></div>我的兑换</div></a></li>
								<li><a href="<?=u('baobei','user',array('uid'=>$dduser['id']))?>"><div class="menu_list_title"><div class="vipduo_ico ico_like"></div>我的分享</div></a></li>
								<li class="last"><a href="<?=u('yaoqing','index')?>"><div class="menu_list_title"><div class="vipduo_ico ico_invite"></div>邀请好友</div></a></li>
							</ul>
						</div>
					</div>
							<div style="float:left;padding-left:5px; padding-right:5px;"><a href="<?=u('user','mingxi')?>">
							<?php if($dd_tpl_data['fanli-kg']['open']==0){?>
							<font color="ff6699"><?=TBMONEY?>：{$jifenbao}个</font><?php }else{?><font color="ff6699">我的积分：<?=$dduser['live_jifen']?>点</font><?php }?></a></div>
						
					<a href="<?=u('user','msg')?>"><?php if($msgnum==0){?> <div style="float:left;padding-left:5px;padding-top:14px; padding-right:5px;"> {$msgsrc}</div> <?php }else{?><div style="float:left;padding-left:5px;padding-right:5px;color:#FF0000">{$msgsrc}</div><?php }?></a>
			
					<div class="vipduo_user_login" onmouseover="this.className='vipduo_user_login active'" onmouseout="this.className='vipduo_user_login'">
						<div class="menu_title" style="width:22px; padding-left:5px; padding-right:5px;">
							<div style="padding-top:8px; height:32px;"><div class="menu_set"></div></div>
						</div>
						<div class="menu_content">
							<ul>
								<li><a href="<?=u('user','info')?>"><div class="menu_list_title"><div class="vipduo_ico ico_profile"></div>账户资料</div></a></li>
								<li><a href="<?=u('user','avatar')?>"><div class="menu_list_title"><div class="vipduo_ico ico_head"></div>修改头像</div></a></li>
								<li class="last"><a href="<?=u('user','info',array('do'=>'apilogin'))?>"><div class="menu_list_title"><div class="vipduo_ico ico_safe"></div>帐号绑定</div></a></li>
							</ul>
						</div>
					</div>			
					<a href="<?=u('user','exit',array('t'=>TIME))?>"><div class="menu_logout" title="退出登录"></div></a>			
				</div>*/;}
				$.ajax({
	            url: '<?=l('ajax','userinfo')?>',
	            dataType:'jsonp',
	            jsonp:"callback",
	             success: function(data){
		if(data.s==1){
			topHtml=getTplObj(topHtml,data.user);
			$('.vipduo_top_user').html(topHtml).show();
		}
		else{
			$('.vipduo_top_user').show();
		}
	}
});
</script>
</div>
</div>
<?php if($dd_tpl_data['fanli-kg']['open']==0){?>

<div class="search">
<div class="search1000">
<div class="logo">
  <a href="<?=SITEURL?>"><img src="<?=$dd_tpl_data['logo']?>" alt="<?=WEBNAME?>" style="height:80px; width:250px"/></a></div>
<div class="searchR"><div class='searchbox' id="searchbox">
<div style="TEXT-AliGN: left;">
<FORM style="FLOAT: left" class='frombox' method='get' name='formname' action='index.php' target="_blank" autocomplete="off" onsubmit="return checkSubFrom('#s-txt');">
<input type="hidden" id="mod" name="mod" value="inc" class="mod" /><input type="hidden" id="act" name="act" value="check" class="act" />
<SPAN class="box-middle c_border">
<INPUT id=s-txt class=s-txt name='q' x-webkit-speech value='请输入任意商城名、淘宝/天猫商品名称搜索拿返利~' moren="<?=$webset['search_key']['head']?>"/>

<INPUT class="sbutton c_bgcolor" type=submit value="<?php if(FANLI==1){?>购物拿返利<?php }else{?>去购物<?php }?>">
</SPAN> 
<SPAN class=box-right></SPAN>
</FORM>
<p></p>
</div>
</div>
<div class="reso">热门搜索: 
<a href="<?=u('jump','s8',array('name'=>''.$dd_tpl_data["seo_1"].''))?>" target="_blank"><?=$dd_tpl_data["seo_1"]?></a>
<a href="<?=u('jump','s8',array('name'=>''.$dd_tpl_data["seo_2"].''))?>" target="_blank"><?=$dd_tpl_data["seo_2"]?></a>
<a href="<?=u('jump','s8',array('name'=>''.$dd_tpl_data["seo_3"].''))?>" target="_blank"><?=$dd_tpl_data["seo_3"]?></a>
<a href="<?=u('jump','s8',array('name'=>''.$dd_tpl_data["seo_4"].''))?>" target="_blank"><?=$dd_tpl_data["seo_4"]?></a>
<a href="<?=u('jump','s8',array('name'=>''.$dd_tpl_data["seo_5"].''))?>" target="_blank"><?=$dd_tpl_data["seo_5"]?></a>
<a href="<?=u('jump','s8',array('name'=>''.$dd_tpl_data["seo_6"].''))?>" target="_blank"><?=$dd_tpl_data["seo_6"]?></a>

<a href="<?=u('goods','index')?>" target="_blank" class="hh">更多>></a>
</div>
</div>
<div class="jc">
<a href="<?=u('tao','index')?>" target="_blank"><img src="<?=TPLURL?>/inc/images/vip/help.gif" style="margin-right:30px"/></a>

<div class="header-fa">

   <?php if($dd_tpl_data['foot_vipduo']==1){?>
<?php 
if($app_status==1){
	$phone_url='href="'.u('app','index').'" target="_blank"';
}
else{
	$phone_url='href="'.u('shouji','index').'" target="_blank"';
}
?><? }else{?>
<?php 
if($app_status==1){
	$phone_url='href="'.u('app','index').'" target="_blank"';
}
else{
	$phone_url='href="javascript:alert(\'开发中，敬请期待\');"';
}
?>
 <?php }?>
<a class="fa-link" <?=$phone_url?> ><img src="<?=TPLURL?>/inc/images/right_sj_1.png" /></a>
</div></div>
</div>
</div>


<?php }else{?>

<div class="header">
    <div class="area">
        <div class="logo">
            <div class="fl"><a href="/"><img src="<?=$dd_tpl_data['logo']?>" alt="<?=WEBNAME?>" style="height:80px; width:250px"/></a></div>
        </div>
		 <div class="logo2"><a href="/" style=" float:left;margin-left: 348px;"><img src="<?=TPLURL?>/inc/img/bs.png"></a></div>
      
		<a href="/index.php?mod=hezuo&act=index" target="_blank"  style=" float:right;margin-top: -25px;margin-left: 48px;"><img src="<?=TPLURL?>/inc/img/baoming.gif"></a>
         <div class="search">
		<form name="search" action="index.php" method="get" id="search">
	        <input type="hidden" id="mod" name="mod" value="goods" class="mod" />
                          <input type="hidden" id="act" name="act" value="index" class="act" />
                            <input type="hidden" id="act" name="code" value="tejia"/>
		   <span class="search-area fl">
		   <input id="s-txt" name="q" autocomplete="off" onblur="this.value==''?this.value=this.title:null" onfocus="this.value==this.title?this.value='':null" title="懒得找了，我搜..." value="懒得找了，我搜..." class="txt" />
		    </span><input type="submit" value="" class="smt fr"></form>          
        </div>
    </div>
	  </div>

<?php }?>


	
<?php if($act=='login' || $act=='register'){?>
<?php }else{?>
<div class="daohang" id="navdaohang">
  <div class="daohang1000">
    <ul class="ulnav">
	
	  <?php if($dd_tpl_data['fenlei-kg']['open']==1){?> <?php }else{?> <li class="linav1">   <!--首页分类开始--> 
		  <?php include(TPLPATH.'/vip/fenlei.tpl.php');?>
  </li>   <?php }?> 
   <?php 
	$nav_c=count($nav);
	$nav_num=6; //导航个数
	$nav_c=$nav_c>=$nav_num?$nav_num:$nav_c;
	
	$nav_cur_ok=0;
	if($_GET['code']!=''){
		for($i=0;$i<$nav_c;$i++){
			$dom_id = "";
			if ($nav[$i]['code'] == $_GET['code'] && $nav_cur_ok==0) {
				$nav[$i]['dom_id'] = "id='fontt'";
				$nav_cur_ok=1;
			}
			else{
				$nav[$i]['dom_id'] = "";
			}
		}
	}
	
	for($i=0;$i<$nav_c;$i++){
		$have_child_class='';
		if($nav_cur_ok==0){
			$dom_id = "";
			if ($nav[$i]['tag'] == PAGETAG && $nav_cur_ok==0) {
				$dom_id = "id='fontt'";
				$nav_cur_ok=1;
			}
		}
		else{
			$dom_id=$nav[$i]['dom_id'];
		}
	    
		if(!empty($nav[$i]['child'])){
			$have_child_class=' have_child';
			$em='<em></em>';
		}
		else{
			$have_child_id='';
			$em='';
		}
		if($i==$nav_c-1){
			$lastclass=' last';
		}
		else{
			$lastclass=' ';
		}
	?>
      <li class="linav<?=$have_child_class?><?=$lastclass?>" <?=$dom_id?>> <a <?=$nav[$i]['target']?> class="anav" href="<?=$nav[$i]['link']?>"><?=$nav[$i]['title']?><?=$nav[$i]['type_img']?><?=$em?></a>
      <?php if($em!=''){?>
      <ul class="n-h-list" style="background:#fff;border-style:solid; border-width:0px 1px 1px 1px;">
        <?php foreach($nav[$i]['child'] as $row){?>
        <li><a class="c_border" <?=$row['target']?> href="<?=$row['link']?>"><?=$row['title']?></a> </li>
        <?php }?>
	  </ul>
      <?php }?>
      </li>
    <?php }?>
    
            <li class="linav2 have_child"><img src="<?=TPLURL?>/inc/images/vip/sj.png" id="checkin-img" style="vertical-align:middle;margin-left:15px; margin-right:5px;"><font style=" font-size:14px;cursor:pointer">手机扫描</font>
    <ul class="n-h-list2">
		           <div style="margin-left:8px; font-size:14px; margin-bottom:5px;color:#FF6699;">扫描下载<?=WEBNAME?>APP</div>
		     <a href="<?=u('shouji','index')?>" target="_blank"><img src="<?=$dd_tpl_data['app']?>" alt="扫一扫，把<?=WEBNAME?>装进手机" width="140" height="140" /></a>
			</ul>	
			</li>	
	 <li class="linav2"> <a href="<?=u('user','index')?>" id="check-in" title="每日签到领奖" style="font-weight:normal;"><img src="<?=TPLURL?>/inc/images/vip/qd.png" id="checkin-img" style="vertical-align:middle; margin-bottom:3px;margin-right:5px;"><font color="#FF3366">签到领奖</font></a></li> 
	  
	 </ul>
	 </div>
  </div> 
   <?php }?>
<script>
var sousuoxiala=new Array();
sousuoxiala[0]=new Array("tao","view","淘宝相关宝贝"); 
<?php if(BIJIA>1){?>
sousuoxiala[1]=new Array("mall","goods","全网比价");
<?php }?>
<?php if($webset['paipai']['open']==1){?>
sousuoxiala[2]=new Array("paipai","list","拍拍相关宝贝"); 
<?php }?>
//sousuoxiala[3]=new Array("goods","index","站内精选宝贝"); 
/*sousuoxiala[4]=new Array("zhidemai","index","值得买精选宝贝"); */

$searchInput=$("#s-txt");

$(".have_child").hover(function() {
	thisId=$(this).attr('id');
	$(this).attr('id','navc');
    $(this).find("a").eq(0).addClass("sub_on").removeClass("sub");
    $(this).find("ul").show();
},function() {
	if(typeof(thisId) == "undefined"){
		thisId='';	
	}
	$(this).attr('id',thisId);
    $(this).find("a").eq(0).addClass("sub").removeClass("sub_on");
    $(this).find("ul").hide()
});
$searchInput.focusClear();
</script>
<div id="header-bottom" style="height:0px; overflow:hidden"></div>