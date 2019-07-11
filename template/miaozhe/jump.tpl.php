<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
include(TPLPATH.'/admin_set/vipduo.tpl.php');
if($act=='goods' || $act=='s8'){
	$mallname="淘宝网";
	if($fan==''){
		$fan='50%';
	}
}
$phone_app_status=$app_status;

$show_yzm=login_error('check');

function mobile_tip($click_url,$web_price,$mobile_price,$phone_app_statu){?>
<div id='inline_content' style="width:600px">
    <div class="ewma">
        <img src="<?=SITEURL?>/api/qrcode.php?type=1&url=<?=urlencode($click_url)?>" width="150" height="150" />
        <p style="color:#333; margin-top:5px; text-align:center;">用手机扫一扫</p>
    </div>
    <div class="ewwz">
        <p>亲，你查看的这个商品用手机购买可优惠<span><?=round($web_price-$mobile_price,2)?></span>元！</p>
        <a href="<?=$click_url?>" class="pcbuy"></a>
        <?php if($phone_app_statu==0){?>
          <?php if($dd_tpl_data['foot_vipduo']==1){?> <a href="<?=u('app','phone')?>" class="sjbuy"></a><? }else{?><a href="<?=u('shouji','index')?>" class="sjbuy"></a> <?php }?>
        <?php }?>
    </div>
    <div style="clear:both"></div>
</div>
<?php }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$mallname?> - <?=WEBNAME?></title>
<link type="text/css" rel="stylesheet" href="<?=TPLURL?>/inc/css/alert.css" />
<style>
body {background:none repeat scroll 0 0 #EFEFEF;color:#5E5E5E;font-family:"微软雅黑";font-size:12px}
.clear {clear:both;display:block;height:0;overflow:hidden;visibility:hidden;width:0}
a {color:#5e5e5e;text-decoration:none}
a:hover {color:#ff6c01;text-decoration:underline}
#desc{height:45px;font-size:14px;font-weight:bold}
#desc big{font-size:16px;color:#f00}
form .field_notice { color:#9C9C9C; margin-left:5px; }
form .red { color:red; border:0px; background-color:#FFFFFF; }
form label.error { color:red; margin-left:5px; }
form input.error { border:red 1px dotted; }
form label.checking { padding-left:18px; background:transparent url(<?=TPLURL?>/inc/images/checking.gif) no-repeat; margin-left:5px; font-style:italic; color:#9C9C9C; display:none; }
form label.validate_right { padding-left:12px; background:transparent url(<?=TPLURL?>/inc/images/right.gif) no-repeat; margin-left:5px; font-style:italic; color:green; float:none; }
.linehei{padding:5px 15px; background:#f60; color:#fff; text-decoration:none; border-radius:5px;}
.linehei:hover{color:#fff; text-decoration:none;}

.alert_bg .alert_box .alert_top {
	width:630px;
	background:<?=$dd_tpl_data['tebie']?>; height:80px; 
	text-indent:21px;
	font-size:14px;
	font-weight:bold
}

#alert_fast_log_reg .login_reg .l_r_menu .current {
	border-bottom:none;
	color:<?=$dd_tpl_data['tebie']?>;border-bottom:1px solid <?=$dd_tpl_data['tebie']?>;
	height:42px;
	position:relative;
	top:-1px;
	_position:static;
}
#alert_fast_log_reg .login_reg .button,#alert_fast_log_reg .login_reg .reg .button {
	width:265px; height:50px;line-height:50px;text-align:center; border-radius:2px;background:<?=$dd_tpl_data['tebie']?>; border:none;  color:#fff; cursor:pointer; font-size:20px; margin-bottom:10px
}

</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/base64.js"></script>
<script type="text/javascript" src="js/fun.js"></script>
<script type="text/javascript" src="data/error.js"></script>
<script type="text/javascript" src="data/noWordArr.js"></script>
</head>
<body>
<!--<iframe frameborder="0" scrolling="no" src="<?=$iframe_url?>" marginwidth="0" marginheight="0" width="100%" class="ifrnameurl" id="flboxcontent"></iframe>-->
<div class="alert_fullbg"></div>
<div class="alert_bg" id="alert_fast_log_reg" style="display: block;">
	<div class="alert_box">
<div class="alert_content">

<div class="alert_top">
		<a href="/index.php?mod=user&act=register" class="closeTip" target="_blank" style="width:554px;height:65px;position:absolute;left:5px;top:20px;"><img src="<?=TPLURL?>/inc/img/jump.png" border="0"></a>
<a href="<?=$url?>" title="关闭" style="position:absolute;top:-15px;right:-15px;*top:25px;*right:28px;cursor:pointer;z-index:9999999;">
<img src="<?=TPLURL?>/inc/img/guanbi.png" border="0"></a></div>

<div class="sort_info">
<?php if($need_tbnick==1 && FANLI==1){?>
 <div class="login_reg" style="text-align:center; font-size:18px; padding-left:0px; width:auto">
<p style="padding-bottom:20px; margin:0 auto; line-height:25px; text-align:center;">亲！  ~  请先去绑定您淘宝购物的淘宝账号，以便能快速返利给您！</p>
<p style="padding-bottom:20px;">
	<a href="<?=u('user','info',array('do'=>'tbnick'))?>" class="linehei" style="margin-right:80px;">去绑定淘宝账号</a>
	<a href="<?=$url?>" class="linehei">先购物，再来返利</a>
</p>
<?php if($mobile_tip==1){?>
<?=mobile_tip($click_url,$web_price,$mobile_price,$phone_app_statu)?>
<?php }?>

</div>
<?php }elseif($mobile_tip==1 && $uid>0){?>

<?=mobile_tip($click_url,$web_price,$mobile_price,$phone_app_statu)?>
<?php }else{?>



<p class="pop-title mb10">您即将以返利模式进入<b>"<?=$mallname?>"</b>，购物后拿<b>"<?=$fan?>返利"！</b></p>
				<p class="pop-subtitle mb30">您尚未登录<?=WEBNAME?>，登录后享受该返利</p>

</div>
<div class="login_reg">
<ul class="l_r_menu">
  <li><a href="javascript:;" class="l_log current">登录<?php if(FANLI==1){?>领取返利<?php }?></a></li>
  <li><a href="javascript:;" class="l_reg">注册<?php if(FANLI==1){?>领取返利<?php }?></a></li>
  <p style="font-size:16px"><?php if(!$dduser['id']){?><a style="float:right" class="blue" href="<?=$url?$url:$iframe_url?>">先购物<?php if(FANLI==1){?>，再返利<?php }?>>></a><?php }else{?><a style="float:right" class="blue" href="<?=$url?>">如果您的浏览器没有自动跳转，<b style="color:#F00">请点击这里</b></a><?php }?></p>
</ul>
<div class="l_r_login" id="log">
  <div class="login">
  <form action="<?=u('user','login')?>" method="post" onSubmit="return ajaxLogin(this)">
  
    <span class="fl">帐号：</span><input type="text" value="" class="login_name"  tabindex="1" name="username" id="username1" />
    <div style="clear:both"></div>
    <span class="fl">密码：</span><input type="password" class="login_pwd"  tabindex="2" name="password" id="password1"/>
    <div style="clear:both"></div>
    
    <?php if($show_yzm==1){?>
    <span class="fl">验证：</span><input name="captcha" type="text" id="captcha" tabindex="3" maxlength="4" style="width:70px;" class="login_name"/>&nbsp;&nbsp;<?=yzm()?>
    <div style="clear:both"></div>
    <?php }?>
    <div style="float:left;margin-left:20px;"><a href="<?=u('user','getpassword')?>" class="fo_psw" target="_blank">忘记密码?</a></div>
   
    <div style="clear:both"></div>
    <input type="hidden" name="sub" value="1" />
    <div style="margin-top:10px;">
    <div style="float:left; _margin-left:20px"><input type="submit" class="button" value="立即登录"  tabindex="3" /></div>
    </div>
    <div style="clear:both"></div>
  </form>
  </div> 
  <?php if(count($api)>0){?>
             <div class="hezuo">
         <h3>使用合作网站帐号登录</h3>
              <ul>
               <?php foreach($api as $row){?>
			<li><a class="denglu <?=$row['code']?>" href="<?=u('api','do',array('code'=>$row['code'],'do'=>'go'))?>"><?=$row['title']?></a></li>
              <?php }?>              
              </ul>
          </div>
          <?php }?>
  </div>
  <div class="login_reg" id="reg" style="display:none; padding-top:0px;">
  <div class="l_r_reg" id="fill">
  <form id="register_form" name="form" action="<?=u('user','register')?>" method="post">
  <ul class="reg">
  <table border="0">
  <tr>
    <td><label class="fl" for="email">电子邮箱：</label></td>
    <td><input type="text" value="" class="reg_email" id="email" tabindex="4" name="email" /></td>
    <td><label class="field_notice">请输入有效邮箱地址</label></td>
  </tr>
  
  <tr>
    <td><label for="password" class="fl">登录密码：</label></td>
    <td><input type="password" class="reg_pwd" id="password" tabindex="2" name="password" /></td>
    <td><label class="field_notice">密码6～16位，区分大小写</label></td>
  </tr>
  <tr>
    <td><label for="password" class="fl">重复密码：</label></td>
    <td><input type="password" class="reg_pwd" id="password_confirm" tabindex="3" name="password_confirm" /></td>
    <td><label class="field_notice">密码6～16位，区分大小写</label></td>
  </tr>
  <tr>
    <td><label for="username" class="fl">用户账号：</label></td>
    <td><input type="text" class="reg_name" id="username" tabindex="1" name="username" /></td>
    <td><label class="field_notice">用户名长度3-15位字母或数字</label><label id="checking_user" class="checking">检查中...</label></td>
  </tr>
  <?php if($webset['user']['need_tbnick']==1&&TAOTYPE==1){?>
  <tr>
    <td><label for="qq" class="fl">淘宝帐号：</label></td>
    <td><input type="test" class="reg_name" id="tbnick" tabindex="5" name="tbnick" /></td>
    <td><label class="field_notice">填写您的淘宝帐号</label></td>
  </tr>
  <?php }?>
  <?php if($webset['user']['need_qq']==1 && $default_name==''){?>
  <tr>
    <td><label for="qq" class="fl">填写QQ：</label></td>
    <td><input type="test" class="reg_name" id="qq" tabindex="5" name="qq" /></td>
    <td><label class="field_notice">填写您的QQ号</label></td>
  </tr>
  <?php }?>
  <?php if($webset['user']['need_alipay']==1 && $default_name==''){?>
  <tr>
    <td><label for="qq" class="fl">填写支付宝：</label></td>
    <td><input type="test" class="reg_name" id="alipay" tabindex="6" name="alipay" /></td>
    <td><label class="field_notice">务必填写正确</label><label id="checking_alipay" class="checking">检查中...</label></td>
  </tr>
  <?php }?>
  <tr>
    <td><label for="captcha" class="fl">验&nbsp;证&nbsp;码&nbsp;：</label></td>
    <td><input name="captcha" type="text" id="captcha" tabindex="7" maxlength="4" style="width:136px;" class="ddinput"/>&nbsp;&nbsp;<?=yzm()?></td>
    <td><label class="field_notice">填写4位验证码</label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="hidden" name="sub" value="1" />
    <input type="submit" class="button" name="sub" value="注 册" tabindex="8" id="submits" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
  </ul>
  </form>
  </div>
  </div>
<?php }?>
</div>

</div>

</div>
<script src="js/jquery.validate.js"></script>
<script type="text/javascript">
(function($) {
    var iheight;
    iheight = $(window).height();
    $('#flboxcontent').attr('height', iheight + 'px');
    $(window).resize(function() {
        iheight = $(window).height();
        $('#flboxcontent').attr('height', iheight + 'px');
    });
    var top = $(window).height() / 2 - $("#alert_fast_log_reg").height() / 2;
    var left = $(window).width() / 2 - $("#alert_fast_log_reg").width() / 2;
    $("#alert_fast_log_reg").css("left", left);
    $("#alert_fast_log_reg").css("top", top);
})(jQuery);

$(function(){
    $('.l_r_menu li a').click(function(){
	    $('.l_r_menu li a').removeClass('current');
		var classname=$(this).attr('class');
		if(classname=='l_log'){
		    $('#reg').hide();
			$('#log').show();
		}
		else if(classname=='l_reg'){
		    $('#log').hide();
			$('#reg').show();
		}
		$(this).addClass('current');
	});

    $('#register_form').validate({
        errorPlacement: function(error, element){
            var error_td = element.parent('td').next('td');
            error_td.find('.field_notice').hide();
            error_td.append(error);
        },
        success       : function(label){
            label.addClass('validate_right').text('OK!');
        },
        onkeyup: false,
        rules : {
            username : {
                required : true,
                byteRange: [3,15,'utf-8'],
				remote   : {
                    url :'index.php?mod=ajax&act=check_user',
                    type:'post',
                    data:{
                        username : function(){
                            return $('#username').val();
                        }
                    },
                    beforeSend:function(){
                        var _checking = $('#checking_user');
                        _checking.prev('.field_notice').hide();
                        _checking.next('label').hide();
                        $(_checking).show();
                    },
                    complete :function(){
                        $('#checking_user').hide();
                    }
                }
            },
            password : {
                required : true,
                minlength: 6
            },
            password_confirm : {
                required : true,
                equalTo  : '#password'
            },
            email : {
                required : true,
                email    : true,
				remote   : {
                    url :'index.php?mod=ajax&act=check_email',
                    type:'post',
                    data:{
                        email : function(){
                            return $('#email').val();
                        }
                    },
                    beforeSend:function(){
                        var _checking = $('#check_email');
                        _checking.prev('.field_notice').hide();
                        _checking.next('label').hide();
                        $(_checking).show();
                    },
                    complete :function(){
                        $('#check_email').hide();
                    }
                }
            },
            <?php if($webset['user']['need_alipay']==1 && $default_name==''){?>
			alipay : {
                required : true,
                alipay    : true,
				remote   : {
                    url :'index.php?mod=ajax&act=check_alipay',
                    type:'post',
                    data:{
                        alipay : function(){
                            return $('#alipay').val();
                        }
                    },
                    beforeSend:function(){
                        var _checking = $('#check_alipay');
                        _checking.prev('.field_notice').hide();
                        _checking.next('label').hide();
                        $(_checking).show();
                    },
                    complete :function(){
                        $('#check_alipay').hide();
                    }
                }
            },
			<?php }?>
			<?php if($webset['user']['need_tbnick']==1&&TAOTYPE==1){?>
			tbnick : {
				required : true,
				byteRange: [3,100,'utf-8'],
				remote   : {
                    url :'index.php?mod=ajax&act=check_tbnick&t=<?=TIME?>',
                    type:'post',
                    data:{tbnick : function(){return $('#tbnick').val();},type:1},
                    beforeSend:function(){
                        var _checking = $('#checking_tbnick');
                        _checking.prev('.field_notice').hide();
                        _checking.next('label').hide();
                        $(_checking).show();
                    },
                    complete :function(){
                        $('#checking_tbnick').hide();
                    }
                }
            },
			<?php }?>
			<?php if($webset['user']['need_qq']==1 && $default_name==''){?>
            qq : {
                required : true,
                range:[1000,999999999999]
            },
			<?php }?>
            agree : {
                required : true
            }
        },
        messages : {
            username : {
                required : '您必须提供一个用户名',
                byteRange: '用户名必须在3-15个字符之间',
				remote   : '用户名已存在'
            },
            password  : {
                required : '您必须提供一个密码',
                minlength: '密码长度应在6-20个字符之间'
            },
            password_confirm : {
                required : '您必须再次确认您的密码',
                equalTo  : '两次输入的密码不一致'
            },
            email : {
                required : '您必须提供您的电子邮箱',
                email    : '这不是一个有效的电子邮箱',
				remote   : '邮箱已存在'
            },
			<?php if($webset['user']['need_tbnick']==1&&TAOTYPE==1){?>
			tbnick : {
				required : '您必须提供一个淘宝帐号',
                byteRange: '用户名位数错误',
				remote   : '淘宝账号不存在'
            },
			<?php }?>
			<?php if($webset['user']['need_alipay']==1 && $default_name==''&&TAOTYPE==1){?>
			alipay : {
                required : '您必须提供您的支付宝',
                alipay    : '这不是一个有效的支付宝',
				remote   : '支付宝已存在'
            },
			<?php }?>
			<?php if($webset['user']['need_qq']==1 && $default_name==''){?>
			qq : {
                required : '您必须提供您的QQ号码',
                range:'QQ号码位数错误'
            },
			<?php }?>
            captcha : {
                required : '请输入右侧图片中的字符',
				rangelength    : '位数错误'
            },
            agree : {
                required : '您必须阅读并同意该协议'
            }
        },
		submitHandler: function(form) { 
		    $.ajax({
	            url: '?mod=user&act=reigster',
		        type: "POST",
		        data:$(form).serialize(),
		        dataType: "json",
		        success: function(data){
			        if(data.s==0){
			            alert(errorArr[data.id]);
			        }
			        else if(data.s==1){
						window.location='<?=u('jump',$act,$_GET)?>';
			        }
		        }
	        });
        }
    });
});

function ajaxLogin(t){
	$.ajax({
	    url: '?mod=user&act=login',
		type: "POST",
		data:$(t).serialize(),
		dataType: "json",
		success: function(data){
			if(data.s==0){
				if(isNaN(data.id)){
					alert(data.id);
				}
				else{
					alert(errorArr[data.id]);
				}
			}
			else if(data.s==1){
			    window.location='<?=u('jump',$act,$_GET)?>';
			}
		 }
	});
	return false;
}
</script>
</body>
</html>