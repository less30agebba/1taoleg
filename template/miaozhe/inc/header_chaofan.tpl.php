  <!--顶部导航栏开始-->
<div class="vipduo_top">
	<div class="vipduo_top_menu">
		<div class="vipduo_top_link">
					
			<div style="margin-left:20px; cursor:pointer">
						<i class="icon-phone"></i><a  href="<?=wap_l()?>" target="_blank">手机WAP</a>
						</div>
						            
		
		 <div style="margin-left:20px; cursor:pointer"><em class="icon icon1"></em><a id="kefu2">在线客服</a><em class="online"></em></div>
					<div style="margin-left:20px; cursor:pointer"><a href="<?=u('help','index')?>" target="_blank"><em class="icon icon2"></em>帮助中心</a><em class="online"></em></div>   		

		  
			
		  <?php if($webset['shangjia']['status']==1){?>
		  <div  style="margin-left:20px; cursor:pointer"> <a href="<?=u('hezuo','index')?>" target="_blank">
		商家报名</a></div>  <?php }?>
	
		<?php if($webset['user']['shoutu']==1){?> <div style="margin-left:20px;"><a href="<?=u('yaoqing','index')?>" title="邀请好友拿返利">邀请好友<font color="#FF0000">奖<?=$webset['tgfz']?>元</font></a></div><?php }?>
         
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
								<li><a href="<?=u('user','tixian',array('type'=>1))?>"><div class="menu_list_title"><div class="vipduo_ico ico_mall"></div><?=TBMONEY?>提取</div></a></li>
								<li><a href="<?=u('user','tradelist')?>"><div class="menu_list_title"><div class="vipduo_ico ico_order"></div>我的订单</div></a></li>
								<li><a href="<?=u('user','mingxi')?>"><div class="menu_list_title"><div class="vipduo_ico ico_onshare"></div>收入明细</div></a></li>
								<li><a href="<?=u('user','huan')?>"><div class="menu_list_title"><div class="vipduo_ico ico_score"></div>我的兑换</div></a></li>
								<li><a href="<?=u('baobei','user',array('uid'=>$dduser['id']))?>"><div class="menu_list_title"><div class="vipduo_ico ico_like"></div>我的分享</div></a></li>
								<li class="last"><a href="<?=u('yaoqing','index')?>"><div class="menu_list_title"><div class="vipduo_ico ico_invite"></div>邀请好友</div></a></li>
							</ul>
						</div>
					</div>
							<div style="float:left;padding-left:5px; padding-right:5px;"><a href="<?=u('user','mingxi')?>"><font color="ff6699"><?=TBMONEY?>：{$jifenbao}个</font></a></div>
						
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

 <input id=s-txt style="height:0px; border:0"/>   
<div class="search" style="margin-bottom:-6px">
<div class="search1000">
<div class="logo">
  <a href="<?=SITEURL?>"><img src="<?=$dd_tpl_data['logo']?>" alt="<?=WEBNAME?>" style="height:80px; width:250px"/></a></div>
<div class="searchR"><div class='searchbox' id="searchbox">
<img src="<?=TPLURL?>/inc/img/logo_right.png" style="margin-top:35px; margin-left:150px">
</div></div>

</div>
</div>
<div class="daohang" id="navdaohang">
  <div class="daohang1000">
    <ul class="ulnav">
	
	  <?php if($dd_tpl_data['fenlei-kg']['open']==1){?> <?php }else{?> <li class="linav1">   <!--首页分类开始--> 
		  <?php include(TPLPATH.'/vip/fenlei.tpl.php');?>
  </li>   <?php }?> 
   <?php 
	$nav_c=count($nav);
	if($dd_tpl_data['fenlei-kg']['open']==1){
	$nav_num=8; //导航个数
	}
	else{
	$nav_num=6; //导航个数
	}
	$nav_c=$nav_c>=$nav_num?$nav_num:$nav_c;
	
	$nav_cur_ok=0;
	if($_GET['code']!=''){
		for($i=0;$i<$nav_c;$i++){
			$dom_id = "";
			if ($nav[$i]['code'] == $_GET['code'] && $nav_cur_ok==0) {
				$nav[$i]['dom_id'] = "id='fontc'";
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
      <li class="linav<?=$have_child_class?><?=$lastclass?>" <?=$dom_id?>> <a <?=$nav[$i]['target']?> class="anav c_fcolor" href="<?=$nav[$i]['link']?>"><?=$nav[$i]['title']?><?=$nav[$i]['type_img']?><?=$em?></a>
      <?php if($em!=''){?>
      <ul class="n-h-list" style="background:#fff;border-style:solid; border-width:0px 1px 1px 1px;">
        <?php foreach($nav[$i]['child'] as $row){?>
        <li><a class="c_border" <?=$row['target']?> href="<?=$row['link']?>"><?=$row['title']?></a> </li>
        <?php }?>
	  </ul>
      <?php }?>
      </li>
    <?php }?>
    
           <li class="linav2 have_child"><img src="<?=TPLURL?>/inc/images/vip/sj.png" id="checkin-img" style="vertical-align:middle;margin-left:15px; margin-right:5px;"><font style=" font-size:14px;cursor:pointer">手机返利</font>
    <ul class="n-h-list2">
		           <div style="margin-left:8px; font-size:14px; margin-bottom:5px;color:#FF6699;">扫描手机WAP站</div>
		     <a href="<?=wap_l('index')?>" target="_blank"><img src="<?=$dd_tpl_data['wap']?>" alt="扫一扫，把<?=WEBNAME?>装进手机" width="140" height="140" /></a>
			</ul>	
			</li>	
	  <?php if($webset['sign']['open']==1){?> <li class="linav2"> <a href="<?=u('user','index')?>" id="check-in" title="每日签到领奖" style="font-weight:normal;"><img src="<?=TPLURL?>/inc/images/vip/qd.png" id="checkin-img" style="vertical-align:middle; margin-bottom:3px;margin-right:5px;"><font color="#FF3366">签到领奖</font></a></li> <? }else{?>
	   <li class="linav2"> <a href="<?=$dd_tpl_data["qdlj"]?>" target="_blank" id="check-in"  style="font-weight:normal; margin-left:15px"><?=$dd_tpl_data["qdmc"]?></a></li><?php }?>
	 </ul>
	 </div>
  </div> 
<script>
var sousuoxiala=new Array();
sousuoxiala[0]=new Array("tao","view","淘宝相关宝贝"); 
<?php if(BIJIA>1){?>
sousuoxiala[1]=new Array("mall","goods","全网比价");
<?php }?>
<?php if($webset['paipai']['open']==1){?>
sousuoxiala[2]=new Array("paipai","list","拍拍相关宝贝"); 
<?php }?>
//sousuoxiala[3]=new Array("tao","list","站内精选宝贝"); 
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