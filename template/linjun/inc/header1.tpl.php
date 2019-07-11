<!DOCTYPE html PUBliC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="author" content="duoduo_v8.3(<?=BANBEN?>)" />
<link rel="bookmark" href="/favicon.ico"/>
<?php 
foreach($apps as $row){
	if($row['open']==1 && $webset[$row['code'].'_meta']!=''){echo $webset[$row['code'].'_meta']."\r\n";}
}
?>
<?php if(is_file(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php')){?>
<?php include(DDROOT.'/data/title/'.$mod.'_'.$act.'.title.php');?>
<?php }else{?>
<title><?=WEBNAME?></title>
<meta name="keywords" content="<?=WEBNAME?>" />
<meta name="description" content="<?=WEBNAME?>" />
<?php }?>
<base href="<?=SITEURL?>/" />
<link rel=stylesheet type=text/css href="/login.css" />
<link rel=stylesheet type=text/css href="/template/linjun/inc/css/kly.css" />
<?php
/*
$css[]="css/jumpbox.css";
$css[]="css/helpWindows.css";
$css[]="css/kefu.css";
$css[]=TPLURL."/inc/css/kly.css";

$css[]=TPLURL."/inc/css/default.css";
$css[]=TPLURL."/inc/css/common.css";
$css[]=TPLURL."/inc/css/goos.css";
$css[]="data/plugin/default/color.css";

echo css($css);
unset($css);
*/
$js['a']='js/jquery.js';
$js[]='js/fun.js';
$js[]=TPLURL.'/inc/js/fun.js';
$js[]=TPLURL.'/inc/js/js.js';
$js[]='js/base64.js';
$js[]='js/jquery.lazyload.js';
$js[]='data/error.js';
$js[]='data/noWordArr.js';
$js[]='js/jumpbox.js';
$js[]=TPLURL.'/inc/js/taokey.js';
echo js($js);
unset($js);
?>
<?php include(TPLPATH.'/inc/js.config.tpl.php')?>
</head>
<body>
<style type="text/css">
.register_b{ width:250px; height:45px; border:0; color:#FFFFFF; cursor:pointer; font-size:16px; background:#EE113D; }

.home-tab li.current .home-tab-super{height:45px;line-height:45px;background:#FFF;color:#EE113D;cursor:default; width:150px;border-bottom:3px solid #EE113D; font-weight:bold}
.home-tab .home-tab-super:hover{height:45px;line-height:45px;background:#FFF;color:#EE113D;cursor:pointer; border-bottom:3px solid #EE113D; font-weight:bold}

.gwzx .vipduo2{display:block;width:273px;height:43px; padding-left:15px;border-top:3px solid #EE113D;font-size:16px;line-height:43px;text-align:left;color:#444;cursor:pointer;border-bottom:0;font-family:'Hiragino Sans GB','Microsoft YaHei','SimSun',sans-serif;}

.daohang1000 li.linav a.anav:hover{font-size:18px;color:#EE113D;text-decoration:none;position:relative;width:120px;height:46px;DISPLAY:block}
#fontt a {color:#EE113D;}

.daohang1000 li.linav1{position:relative;z-index:999;margin-top:0px;float:left;width:239px;height:46px; background:#EE113D}


.dddefault .sbutton{LINE-HEIGHT:35px;*LINE-HEIGHT:37px;background:#EE113D;BORDER-RIGHT-WIDTH:0px;WIDTH:110px;FLOAT:right;BORDER-TOP-WIDTH:0px;BORDER-BOTTOM-WIDTH:0px;HEIGHT:40px;BORDER-LEFT-WIDTH:0px;CURSOR:pointer;color:#fff;cursor:pointer;font-size:16px;padding-left: 6px;font-family:'微软雅黑';}

.dddefault .sbutton:hover{background:#F03157;}

.searchbox .box-middle {WIDTH: 520px; DISPLAY: block; FLOAT: left;line-HEIGHT: 40px; HEIGHT: 40px;border:2px solid #EE113D;}

.gm .tejia{background:#EE113D;color:#fff;}

.unlogged a.register2{display:inline-block;background:#EE113D; margin-top:15px;width:80px;height:30px;line-height:2.2;margin-right:20px;text-decoration:none;border-radius:4px;}
.unlogged a.login1{display:inline-block; margin-top:15px;width:80px;height:30px;border:1px solid #ddd;background-color:#fff;line-height:2.2;margin-right:20px;text-decoration:none;border-radius:4px;color:#EE113D;}
.n-h-list {
	line-height:46px;
	font-size:15px;
	position:absolute;
	top:46px;
	right:0px;
	z-index:1000;color:#333;border:1px solid #EE113D;
	background:#fff;border-top:none;
	display:none; width:118px; overflow:hidden
}
.n-h-list li a:hover{ color:#EE113D;}
.item-info .orange-wrap {height:92px;background-color:#EE113D;position:relative}
.contact .dian_ico{ position:absolute;color:#EE113D; height:29px; width:180px;display:block; top:35px; left:2px;font-size: 24px; font-weight: bold; }

.goods-list li .good-price .price-current {font-size:40px;font-family:Arial;color:#EE113D;  font-weight:500}
.goods-list li .good-price .price-current em {font-size: 14px; font-family:"微软雅黑"; color:#EE113D; vertical-align:1px; margin-left:1px;}



</style>

<div class="container dddefault" style="background:#f2f2f2;">
<!--顶部导航栏开始-->
<div class="vipduo_top screen">
	<div class="vipduo_top_menu">
		<div class="vipduo_top_link">
			 <div class="menu_list" onmouseover="this.className='menu_list active'" onmouseout="this.className='menu_list'">
         
		   <div class="vipduo_body">
		   <div class="menu_title">
               <div><div class="zy"></div><a href="/m/">手机奖励</a></div>
            </div>   </div>
		 </div>
		  
			 <div class="menu_list" onmouseover="this.className='menu_list active'" onmouseout="this.className='menu_list'">
            <div class="menu_title">
            <div>在线客服</div> <div class="ico_menu"></div>
            </div>
            <div class="menu_content">
            	<ul>
                	<li><a id="kefu"><div class="menu_list_title"><div class="vipduo_ico ico_online"></div>联系客服</div></a></li>
					<li><a href="/index.php?mod=user&act=getpassword" target="_blank"><div class="menu_list_title"><div class="vipduo_ico ico_help"></div>找回密码</div></a></li>				
                	<li class="last"><a href="/index.php?mod=help&act=index" target="_blank"><div class="menu_list_title"><div class="vipduo_ico ico_share"></div>帮助中心</div></a></li>		   			   
            	</ul>
            </div>
            </div>
			  <div class="menu_list" onmouseover="this.className='menu_list active'" onmouseout="this.className='menu_list'">
            <div class="menu_title">
            <div>收藏本站</div> <div class="ico_menu"></div>
            </div>
            <div class="menu_content">
            	<ul>
                	<li><a onclick="AddFavorite('http://www.1taob.com','一淘乐购')"><div class="menu_list_title"><div class="vipduo_ico ico_collection"></div>加入收藏</div></a></li>			
                	<li class="last"><a href="comm/shortcut.php"><div class="menu_list_title"><div class="vipduo_ico ico_desk"></div>保存桌面</div></a></li>		   			   
            	</ul>
         </div>
            </div>
			
		<div  style="margin-left:20px; cursor:pointer"> <a href="/index.php?mod=user&act=chadan" target="_blank">
		认领订单</a></div>
	
		 <div style="margin-left:20px;"><a href="/index.php?mod=yaoqing&act=index" title="邀请好友拿奖励">邀请好友<font color="#FF0000">奖200元</font></a></div>           		    <div  style="margin-left:20px; cursor:pointer"> <a href="index.php?mod=user&act=tradelist&do=baoming" target="_blank">
		报名商品</a></div>  
		  <div  style="margin-left:20px; cursor:pointer"> <a href="/index.php?mod=hezuo&act=index" target="_blank">
		商家报名</a></div>          </div>
	<!--登录前-->
        <div class="vipduo_top_user" style="display:none">
          
            <div class="menu_title">
			 			 
            <div class="vipduo_login"><a href="/index.php?mod=user&act=login" title="会员登录">请登录</a></div><span></span>
            <div class="vipduo_reg"><a href="/index.php?mod=user&act=register" title="立即注册会员">免费注册</a></div>
</div></div>
 <!--登录后-->
		<script type="text/javascript">
				function topHtml() {/*<div class="vipduo_user_login" onmouseover="this.className='vipduo_user_login active'" onmouseout="this.className='vipduo_user_login'">
					<div class="menu_title">
						<div style="float:left;">
							<a href="/index.php?mod=user&act=index"><div class="user_head"><img src="{$avatar}" width="18" height="18"/></div></a>{$name}</div>
							<div class="ico_menu" style="float:left;"></div>
						</div>
						<div class="menu_content">
							<ul>
								<li><a href="/index.php?mod=user&act=index"><div class="menu_list_title"><div class="vipduo_ico ico_manager"></div>我的后台</div></a></li>
								<li><a href="/index.php?mod=user&act=tixian&type=1"><div class="menu_list_title"><div class="vipduo_ico ico_mall"></div>集分宝提取</div></a></li>
								<li><a href="/index.php?mod=user&act=tradelist"><div class="menu_list_title"><div class="vipduo_ico ico_order"></div>我的订单</div></a></li>
								<li><a href="/index.php?mod=user&act=mingxi"><div class="menu_list_title"><div class="vipduo_ico ico_onshare"></div>收入明细</div></a></li>
								<li><a href="/index.php?mod=user&act=huan"><div class="menu_list_title"><div class="vipduo_ico ico_score"></div>我的兑换</div></a></li>
								<li><a href="/index.php?mod=baobei&act=user&uid=0"><div class="menu_list_title"><div class="vipduo_ico ico_like"></div>我的分享</div></a></li>
								<li class="last"><a href="/index.php?mod=yaoqing&act=index"><div class="menu_list_title"><div class="vipduo_ico ico_invite"></div>邀请好友</div></a></li>
							</ul>
						</div>
					</div>
							<div style="float:left;padding-left:5px; padding-right:5px;"><a href="/index.php?mod=user&act=mingxi"><font color="ff6699">集分宝：{$jifenbao}个</font></a></div>
						
				
			
					<div class="vipduo_user_login" onmouseover="this.className='vipduo_user_login active'" onmouseout="this.className='vipduo_user_login'">
						<div class="menu_title" style="width:22px; padding-left:5px; padding-right:5px;">
							<div style="padding-top:8px; height:32px;"><div class="menu_set"></div></div>
						</div>
						<div class="menu_content">
							<ul>
								<li><a href="/index.php?mod=user&act=info"><div class="menu_list_title"><div class="vipduo_ico ico_profile"></div>账户资料</div></a></li>
								<li><a href="/index.php?mod=user&act=avatar"><div class="menu_list_title"><div class="vipduo_ico ico_head"></div>修改头像</div></a></li>
								<li class="last"><a href="/index.php?mod=user&act=info&do=apilogin"><div class="menu_list_title"><div class="vipduo_ico ico_safe"></div>帐号绑定</div></a></li>
							</ul>
						</div>
					</div>			
					<a href="/index.php?mod=user&act=exit&t=1558518432"><div class="menu_logout" title="退出登录"></div></a>			
				</div>*/;}
				$.ajax({
	            url: '/index.php?mod=ajax&act=userinfo',
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

    <!-- 顶部导航结束 -->
	</div></div>
<div class="search">
<div class="search1000">

<div class="logo">

  <a href="<?=SITEURL?>"><img src="<?=$dd_tpl_data['logo']?>" alt="<?=WEBNAME?>" style="height:80px; width:250px"/></a></div>


<div class="searchR"><div class='searchbox' id="searchbox">
<div style="TEXT-AliGN: left;">
<FORM style="FLOAT: left" class='frombox' method='get' name='formname' action='index.php' target="_blank" autocomplete="off" onsubmit="return checkSubFrom('#s-txt');">
<input type="hidden" id="mod" name="mod" value="inc" class="mod" /><input type="hidden" id="act" name="act" value="check" class="act" />
<SPAN class="box-middle c_border">
<INPUT id=s-txt class=s-txt name='q' x-webkit-speech value='请输入任意商城名、淘宝/天猫商品标题开始购物' moren="<?=$webset['search_key']['head']?>"/>

<INPUT class="sbutton c_bgcolor" type=submit value="购物搜索">
</SPAN> 
<SPAN class=box-right>
<span><INPUT class="sbutton3 c_bgcolor search_quan" type=submit value="优惠券"></span>
</SPAN>
</FORM>
<p></p>
</div>
</div></div>
<div class="header-fa">
<?php 
if($app_status==1){
	$phone_url='href="'.u('app','index').'" target="_blank"';
}
else{
	$phone_url='href="javascript:alert(\'开发中，敬请期待\');"';
}
?>
<a class="fa-link" <?=$phone_url?> ><img src="<?=TPLURL?>/inc/images/right_sj_1.png" /></a>
</div>
</div>
</div>
</div>
