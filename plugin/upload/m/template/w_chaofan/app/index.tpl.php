<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}

/*if(strpos($_SERVER["HTTP_USER_AGENT"],"MicroMessenger")!==false){  //ios微信下的提示
	$is_weixin = 1;
}
else{
	$is_weixin=0;
}*/
$anzhuourl='href="'.$webset['app']['android_store_url'].'"';
$iosurl='href="'.$webset['app']['ios_update_url'].'"';

$parameter=act_user_index();
extract($parameter);
$css[]=TPLURL."/inc/css/app.css";
$css[]=TPLURL."/inc/css/cf_u.css";
$css[]=TPLURL."/inc/css/cf_wap.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<body>
<style>
#weixindiv{ position: fixed;	top:0;	left:0;	width:100%;	height:100%;background:rgba(0, 0, 0, 0.7);	display:none;z-index:20000;}
#weixindiv img {position: fixed;right: 18px;top:5px;width: 260px;height: 180px;z-index:20001;}
#weixinshare{ position: fixed;	top:0;	left:0;	width:100%;	height:100%;background:rgba(0, 0, 0, 0.7);	display:none;z-index:20000;}
#weixinshare img {position: fixed;right: 18px;top:5px;width: 260px;height: 180px;z-index:20001;}
</style>
<?php if($dduser['id']>0 && $yanzheng==0){?>
<div class="logindd">
    <div class="logind">
       <form action="<?=wap_l('app','index');?>" method="get" id="formg">
                <ul>
                    <li><input class="loginname"  value="<?=$dduser['mobile']>0?$dduser['mobile']:''?>" name="mobile" id="mobile" type="text" dd-required dd-type="mobile" placeholder="请输入手机号"/></li>
                    <li> 
                        <input type="text" style="width:150px;" class="loginname" name="yzm" id="yzm" placeholder="验证码" />
                        <input class="refresh" id="get_mobile_yzm" value="获取验证码" type="button" style="padding: 12px; width:93px;  float: left;  margin: 10px 0 0 10px;  font-size: 1.3rem;  color:#555;  border: 1px solid #DDD;">
                    </li>
                     <input type="hidden" name="sub" value="1">
                     <li><input type="submit" value="提交" id="tijiao" class="loginbtn1 img-btn1" style="border:0 none; margin-top:10px;"></li>
                </ul>
            </ul>
        </form>
    </div>
</div>
<?php }else{?>
<div class="app_down">
	<img src="<?=TPLURL?>/inc/images/app_download.gif">
    <?php if($yanzheng==1){?>
    <a style="background:#f65661; font-size:12px">登陆APP账号:<?=$dduser['mobile']?></a>
    <?php }?>
    <div id="click">
    <a <?=$anzhuourl?> id="android" style="background:#a4c93d;"> <span><i class="icon iconfont">&#xe7c4;</i> Android下载</span></a>
    <a <?=$iosurl?> id="iphone" style="background:red;"> <span><i class="icon iconfont">&#xe7bd;</i> iphone &nbsp;下载</span></a>
    </div>
    <a href="<?=SITEURL?>/m" style="background:#f60;"> <span>继续访问触屏版</span></a>
</div>


<div id="tpl-android" class="tpl-v3" style="width: 100%; height:100%; top: 0px; display:none;">
  <div class="box">
    <p>安卓版超级返APP正在开发中，敬请关注！</p>
    <div> <a class="off_bt">含泪关闭</a> </div>
  </div>
</div>
<div id="tpl-iphone" class="tpl-v3" style="width: 100%; height:100%; top: 0px; display:none;">
  <div class="box">
    <p>iphone版超级返苹果APP正在提交中，敬请关注！</p>
    <div> <a class="off_bt">含泪关闭</a> </div>
  </div>
</div>
<script>
$(function(){
	/*$("#android").click(function(){				  
		var l=($(document.body).outerWidth(true)/2)-(450/2);
		$("#tpl-android").show();
		$("#tpl-android").css("z-index","10001");
		$("#tpl-android").css('display','-webkit-box');
		$("#tpl-android").css("position","fixed");
	})*/
	/*$("#iphone").click(function(){				  
		var l=($(document.body).outerWidth(true)/2)-(450/2);
		$("#tpl-iphone").show();
		$("#tpl-iphone").css("z-index","10001");
		$("#tpl-iphone").css('display','-webkit-box');
		$("#tpl-iphone").css("position","fixed");
	})*/
	$("#iphone").click(function(){				  
		<?php if($is_weixin==1){?>
		document.getElementById('weixindiv').style.display='block';
		return false;
		<?php }?>
	})
	$(".off_bt").click(function(){
		$("#tpl-android").hide();
		$("#tpl-iphone").hide();
		$("body").css('overflow','inherit');
	})
	$("#click").click(function(){				  
		<?php if($dduser['id']==0){?>
		window.location.href='<?=WEBURL.'/plugin/dd_chaofan/api.php?url='.urlencode(CUR_URL)?>';
		return false;
		<?php }?>
		<?php if($parameter['yanzheng']==0){?>
		_alert('请先验证手机号','<?=wap_l('app','index',array('yanzheng_tip'=>1))?>',1);
		return false;
		<?php }?>
	})
})
</script>
<?php }?>
<script>
function _alert(text,cb,tag){
	var time=5000;
	$('body').append('<div style="position: fixed;	top:0;	left:0;	width:100%;	height:100%;background:rgba(0, 0, 0, 0.7);	display:none;z-index:20000;" id="mcover" onClick="document.getElementById(\'mcover\').style.display=\'none\';"><div style="z-index:20001; margin:auto; text-align:center;" class="rongqi"><span style="background:#666; font-size:18px; padding:0.5em 1em; color:#FFF;border-radius:0.5em;">'+text+'</span></div></div>');
	var h=$(window).height();
	$('#mcover').show().find('.rongqi').css('margin-top',(h*0.4)+'px');
	setTimeout(function(){
		document.getElementById('mcover').style.display='none';
		$('#mcover').remove();
		if(cb && typeof cb == 'function'){
			cb();
		}
		else if(cb){
			window.location.href=cb;
		}
	},time);
	if(tag==1){
		$('#mcover').click(function(){
			window.location.href=cb;
		});
	}
}
YZM_EFFE=60;
YZM_EFFE_USE=60;
function daojishi(){
	YZM_EFFE_USE--;
	if(YZM_EFFE_USE==0){
		$('#get_mobile_yzm').attr('disabled',false).val('从新获取验证码');
		clearInterval(daojishiProcess);
		YZM_EFFE_USE=YZM_EFFE;
	}
	else{
		$('#get_mobile_yzm').val('发送中（'+YZM_EFFE_USE+'）');
	}
	
}
function regMobile(str){    
    if(/^1\d{10}$/g.test(str)){      
        return true;    
    }else{    
        return false;    
    }    
}
$(function(){
	$('#pyzm').blur(function(){
		var s=$(this).val();
		var $t=$(this);
		if(s.length==4){
			$.getJSON('<?=u(MOD,ACT,array('do'=>'yzm'))?>&yzm='+s,function(data){
				if(data.s==1){
					$('#get_mobile_yzm').attr('disabled',false);
				}
				else{
					alert('验证码填写错误');
					$t.select().next('img').click();
				}
			});
		}
		else{
			alert('验证码填写错误');
		}
	});
	
	$('#formg').submit(function(){
		var mobile=$(this).find('#mobile').val();
		if(regMobile(mobile)==false){
			alert('手机号码格式错误');
			return false;
		}
		var yzm=$(this).find('#yzm').val();
		if(yzm.length!=6 || isNaN(yzm)){
			alert('验证码格式错误');
			return false;
		}
		var query=$(this).serialize();
	    var url=$(this).attr('action');
		$.ajax({
			url: url,
			type: "GET",
			data:query,
			dataType:'json',
			success: function(data){
				if(data.s==0){
					alert(data.r);
				}
				else if(data.s==1){
					alert(data.r);
					location.replace('<?=wap_l('app','index')?>');
				}
			}
		});
		return false;
	});
	
	$('#get_mobile_yzm').click(function(){
		var mobile=$('#formg').find('#mobile').val();
		if(regMobile(mobile)==false){
			alert('手机号码格式错误！');
		}
		else{
			$(this).attr('disabled','disabled').val('发送中（'+YZM_EFFE_USE+'）');
			$.ajax({
		    	url:'<?=wap_l('app','index',array('mobile_yanzheng'=>1))?>',
				dataType:'json',
				type: "GET",
				data:{mobile:mobile},  //手机验证
				success: function(data){
			    	if(data.s==0){
						alert(data.r);
						$('#get_mobile_yzm').attr('disabled',false).val('获取验证码');
					}
					else if(data.s==1){
						daojishiProcess=window.setInterval(daojishi, 1000);
					}else if(data.s==2){
						<?php if(is_mobile()==0){?>
						_alert(data.r,'<?=WEBURL.'/index.php?mod=user'?>',1);
						<?php }else{?>
						_alert(data.r,'<?=WEBURL.'/m/index.php?mod=user'?>',1);
						<?php }?>
					}
		    	}
			});
		}
	});
});
</script>
<?php
function get_device_type()
{
 //全部变成小写字母
 $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
 $type = 'other';
 //分别进行判断
 if(strpos($agent, 'iphone') || strpos($agent, 'ipad'))
{
   $type = 'ios';
 } 
 
 if(strpos($agent, 'android'))
{
   $type = 'android';
 }
 return $type;
}
?>
<div id="weixindiv" onClick="document.getElementById('weixindiv').style.display='';"><img src="images/<?=get_device_type()?>g.png"></div>
<div id="weixinshare" onClick="document.getElementById('weixinshare').style.display='';"><img src="images/weixinshare.png"></div>
</body>
</html>
