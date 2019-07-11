<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
if($_GET['app']==1){
	$duoduo->dduser['id']=$_GET['uid'];
	user_login($duoduo->dduser['id'], $_GET['pwd'], 86400);
}
$parameter=act_wap_user_invite();
extract($parameter);
include(TPLPATH.'/inc/header_2.tpl.php');
?>
<script>
var floorStep=1;
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
});

function index_tpl(){/*<tr>
                	<td>{$ddusername}</td>
                	<td>{$regtime}</td>
                	<td>{$tgyj} 元</td>
                </tr>*/;}

function jiazai(floorStep){	
	$('.chakan_more').text('数据获取中……');
	var url='<?=wap_l(MOD,ACT)?>&sub=1&page='+floorStep;
	$.ajax({
		url: url,
		dataType:'jsonp',
		jsonp:"callback",
		success: function(data){
			ajaxTag=0;
			if(data.s=='1'){
				if(data.r=='' || data.r=='null' || data.r==null){
					setCookie('inviteajax',1,300);
					//alert('没有了');
					ajaxTag=1;
					if(floorStep==1){
						$('.no_data').show();
					}else{
						$('.no_data').html('已全部加载！');
						$('.no_data').show();
					}
					$('.chakan_more').hide();
				}else{
					for(i in data.r){
						row=data.r[i];
						var html=getTplObj(index_tpl,row);
						$('.shuju_load').append(html);
					}
					$('.chakan_more').text('点击更多');
				}
			}
		}
	});
	return false;
}
</script>
<link href="<?=TPLURL?>/inc/css/invite.css?v=1" rel="stylesheet" type="text/css" />
<?php if($_GET['app']==1){?>
<style>
.fenxiang ul li{ width:15%}
.fenxiang ul li a img{ -webkit-border-radius:50%}
</style>
<?php }?>
<?php if($_GET['app']!=1){?>
<div class="listHeader">
  <p> <b>邀请好友</b> <a href="javascript:;" onclick="history.back()" class="left">返回</a> <a href='<?=wap_l()?>' class="right">首页</a>  </p>
</div>
<?php }?>
<div class="juzhong">
	<div class="top">
    	<img src="http://www.911yh.com/upload/2016/1027/header_bner.jpg" width="100%" />
    </div>
    <div class="mb_mid">
    	<p class="title">1、分享给好友</p>
        <p>点击下方任意按钮，分享即可！</p>
        <p>分享给QQ好友或者QQ空间，更容易邀请到好友哦~</p>
        <div class="fenxiang">
        <?php if($_GET['app']!=1){?>
        	<ul>
                 <li>
                    <a title="分享到新浪微博" href="http://service.weibo.com/share/mobile.php?title=<?=$share_desc?>&pic=<?=$share_img?>&url=<?=$rec_url?>"><img src="<?=TPLURL?>/inc/images/sina.png" width="100%" /></a>
                    <p>新浪微博</p>
                </li>
                <?php if($dd_wap_class->is_weixin()==1){?>
            	<li>
                	<a class="bds_weixin" onClick="document.getElementById('weixinshare').style.display='block'" title="分享到微信"><img src="<?=TPLURL?>/inc/images/weixin.png" width="100%" /></a>
                    <p>微信</p>
                </li>
                <?php }?>
            	<li>
                	<a title="分享到QQ空间" href="http://openmobile.qq.com/oauth2.0/m_jump?loginpage=loginindex.html&logintype=qzone&page=qzshare.html&quit=&site=<?=$rec_url?>&summary=<?=$share_desc?>&imageUrl=<?=$share_img?>&url=<?=$rec_url?>&title=<?=$share_desc?>&callbackUrl=<?=$rec_url?>"><img src="<?=TPLURL?>/inc/images/qzone.png" width="100%" /></a>
                    <p>QQ空间</p>
                </li>
            	<li>
                	<a href="http://share.v.t.qq.com/index.php?c=share&a=index&title=<?=$share_desc?>&pic=<?=$share_img?>&url=<?=$rec_url?>"><img src="<?=TPLURL?>/inc/images/txweibo.png" width="100%" /></a>
                    <p>腾讯微1博</p>
                </li>
            </ul>
         <?php }else{?>
         	<ul>
                 <li>
                    <a><img src="http://app.api.duoduo123.com/app/images/share2.png" width="100%" /></a>
                    <p>微信</p>
                </li>
            	<li>
                	<a><img src="http://app.api.duoduo123.com/app/images/share3.png" width="100%" /></a>
                    <p>朋友圈</p>
                </li>
            	<li>
                	<a ><img src="http://app.api.duoduo123.com/app/images/share1.png" width="100%" /></a>
                    <p>微博</p>
                </li>
            	<li>
                	<a><img src="http://app.api.duoduo123.com/app/images/share4.png" width="100%" /></a>
                    <p>空间</p>
                </li>
                <li>
                	<a><img src="http://app.api.duoduo123.com/app/images/share5.png" width="100%" /></a>
                    <p>QQ</p>
                </li>
            </ul>
            <div style="clear:both"></div>
         <?php }?>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="mb_down">
    	<p class="title">2、发送链接给好友</p>
        <p>复制您的专属邀请链接，发送给好友，好友通过该链接注册即可！</p>
        <p>
        	<div class="whitebg">
            	<input type="text" class="fuzhi" value="<?=urldecode($rec_url)?>" />
            </div>
        </p>
    </div>
    <div class="mb_down">
    	<p class="title">3、其他注意事项</p>
        <p>1、记得注册之后多多教教好友怎么用哦！获得更高<?=FANLI_WORD1?>机会更高！</p>
        <p>2、不要为了获得小小的邀请<?=FANLI_WORD1?>而失掉了自己的诚信，我们会人工核查，对于查实的<span>作弊行为</span>，我们将收回该帐号全部的邀请<?=FANLI_WORD1?>，严重者将冻结所有收入并永久封号；</p>
        <p class="f00">*作弊行为：包括但不限于使用相同的电脑、相同的IP地址在同一天内注册多个帐号，以骗取邀请<?=FANLI_WORD1?>的行为。</p>
    </div>
    <div class="mb_footer">
    	<p class="title">4、好友列表</p>
        <div class="topban">
        	<table width="100%" class="shuju_load">
            	<tr style="background:#f8f7f7;" >
                	<td>好友昵称</td>
                	<td>邀请时间</td>
                	<td>你获得的<?=FANLI_WORD1?></td>
                </tr>
            </table>
            <p style="text-align:center; margin-top:1em; line-height:1.2em; display:none" class="no_data">暂无好友！</p>
        </div>
    </div>
</div>
<?php if($_GET['app']!=1){?>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>
<?php }else{
$appinfo=json_encode(dd_get_cache('plugin/phone_app'));
?>
<script>
var appinfo=<?=$appinfo?>;
var qqInstalled=0,sinaInstall=0,weixinInstall=0;
var shareTitle='';
var shareDesc='';
var shareImg='';
var shareUrl='';
MONIQI=0;

function closePage(){
	unset('share');
	appcan.frame.close('share');
}

function shareReward(){
	var url=getddApiUrl({'act':'user','do':'share'});
	var obj={
		url:url,
		dataType:'json',
		cacheTime:0,
		success:function(data){
			if(data.s==1){
				toastOpen(data.r);
			}
			else{
				toastOpen('分享成功');
			}
		}
	};
	ddRequest(obj);
}

function weixinShare(a){
	/*if(weixinInstall==0){
		toastOpen('微信未安装');
		return false;
	}*/
	toastOpen('启动微信');
	if(shareImg==''){
		shareImg='http://cf.fanlicheng.com/app_n/images/link.png';
	}
	var json={'thumbImg':shareImg,'wedpageUrl':shareUrl,'title':shareTitle,'description':shareDesc,'scene':a};
	var jsonstr = JSON.stringify(json);
	uexWeiXin.shareLinkContent(jsonstr);
}

function weiboShare(){
	if(DD_yun_level>2 && typeof appinfo.sina_appid!='undefined' && appinfo.sina_appid!='' && sinaInstall==1 && get('plat_from')==1){
		toastOpen('新浪微博分享');
		uexSina.sendImageContent(shareImg,shareDesc+shareUrl);
		uexSina.cbShare=function(opId,dataType,data){
			if(data==0){
				/*toastOpen('分享成功');*/
				shareReward();
			}
			else{
				toastOpen('分享失败');
			}
		}
	}
	else{
		var url='http://service.weibo.com/share/mobile.php?title='+shareTitle+'&pic='+shareImg+'&url='+shareUrl+'&summary='+shareDesc;
		openPage('url',url,'url','新浪微博分享');
	}
}

function qqShare(a){
	if(DD_yun_level>2 && typeof appinfo.qq_appid!='undefined' && appinfo.qq_appid!='' && qqInstalled==1){
		toastOpen('QQ分享');
		if(a==1){
			var qqimg = [shareImg];
			var json={'imageUrl':qqimg,'targetUrl':shareUrl,'title':shareTitle,'summary':shareDesc};
			var jsonstr = JSON.stringify(json);
			uexQQ.shareImgTextToQZone(appinfo.qq_appid,jsonstr);
		}
		else{
			var json={"title":shareTitle,"summary":shareDesc,"targetUrl":shareUrl,"imageUrl":shareImg,"appName":appinfo.name,"cflag":a};
			uexQQ.shareWebImgTextToQQ(appinfo.qq_appid,JSON.stringify(json));
		}
		uexQQ.cbShareQQ=function(opId,dataType,data){
			data=JSON.parse(data);
			if(data.errCode==0){
				/*toastOpen('分享成功');*/
				shareReward();
			}
			else{
				toastOpen('分享失败');
			}
		}
	}
	else{
		if(a==2){
			var url='http://connect.qq.com/widget/shareqq/index.html?url='+shareUrl+'&desc='+shareDesc+'&pics='+shareImg;
		}
		else{
			var url='http://openmobile.qq.com/oauth2.0/m_jump?loginpage=loginindex.html&logintype=qzone&page=qzshare.html&summary='+shareDesc+'&imageUrl='+shareImg+'&url='+shareUrl+'&title='+shareTitle+'&callbackUrl='+shareUrl;
		}
		openPage('url',url,'url','qq分享');
	}
}

function qqtShare(){
	var url='http://share.v.t.qq.com/index.php?c=share&a=index&title='+shareTitle+'&pic='+shareImg+'&url='+shareUrl+'&summary='+shareDesc;
	openPage('url',url,'url','腾讯微博分享');
}

function clipboarSetShare(){
	if(typeof uexSMS!='undefined'){
		uexSMS.open('',shareDesc+'：'+shareUrl);
	}
	clipboarSet(shareUrl);
	toastOpen('复制成功');
}

function wxShareBack(data){
	if (data == 0){
		shareReward();
	}
	else{
		toastOpen('分享取消');
	}
}

function openAlert(msg,title,button){
	title=title||'提醒';
	button=button||'好';
	uexWindow.alert(title,msg,button);
}

function htmlLoad(){
	subscribe("share", function(data) {
		if(data=='close'){
			closePage();
		}
		else if(data!='' && data.indexOf('wxShare')==0){
			data=data.replace('wxShare_','');
			wxShareBack(data);
		}
	});
	
	if(shareTitle==''){
		shareTitle=appinfo.shareTitle;
	}
	if(shareImg==''){
		shareImg=appinfo.shareImg;
	}
	if(shareUrl==''){
		shareUrl=appinfo.shareUrl;
	}
	if(shareDesc==''){
		shareDesc=appinfo.shareDesc;
	}

	var uid=<?=$_GET['uid']?>;
	shareUrl=shareUrl.replace('{$uid}',uid);
	var DD_yun_level=3;
	if(appinfo.weixin_share==1 && DD_yun_level>2){
		$('#weixin_share').show().addClass('ub');
		var weixin_appid=appinfo.weixin_key;
		if(weixin_appid==''){
			openAlert('微信key不能为空');
		}
		if (typeof(uexWeiXin) != 'undefined'){
			uexWeiXin.registerApp(weixin_appid);
			uexWeiXin.cbIsWXAppInstalled = function(opCode,dataType,data){
				if (data == 1){
					openAlert('请先安装微信才能使微信用分享功能');
				}
			};
			uexWeiXin.cbShareLinkContent = function(data){
				wxShareBack(data);
			};
		}
		else{
		   openAlert('缺少微信分享组件');
		}
	}
	if(MONIQI==0){
		uexWeiXin.isWXAppInstalled();
		uexWeiXin.cbIsWXAppInstalled=function(opId,dataTpye,data){
			if(data==0){
				weixinInstall=1;
			}
			uexQQ.isQQInstalled();
			uexQQ.cbIsQQInstalled=function(opId,dataType,data){
				if(data==0){
					qqInstalled=1;
				}
				checkSinaInstalled(function(data){
					sinaInstall=data;
				});
			}
		};
	}
}
window.uexOnload=function(type)
{
	if(!type){
		htmlLoad();
	}
}
</script>
</body>
</html>
<?php }?>