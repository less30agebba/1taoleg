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

if (!defined('INDEX')) {
	exit ('Access Denied');
}

function act_user_reg() {
global $duoduo;
	$webset = $duoduo->webset;
	$dduser = $duoduo->dduser;
	$errorData = $duoduo->errorData;

	if ($webset['yinxiangma']['open'] == 1) {
		include (DDROOT . "/api/YinXiangMaLib.php"); //印象验证码
		$yinxiangma = YinXiangMa_GetYinXiangMaWidget();
	}

	if (array_key_exists('web', $_POST)) {
		$webname = $_POST['webname'];
		$webid = $_POST['webid'];
		$webid = authcode($webid, 'DECODE', DDKEY);
		$web = $_POST['web'];
	} else {
		$webname = '';
		$webid = '';
		$web = '';
	}

	if (isset ($_POST['username']) && $_POST['username'] != '') {
		unset ($_POST['sub']);
		$tjr = (int) get_cookie("tjr");

		$captcha = trim($_POST['captcha']);
		$from = trim($_POST['from']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$md5pwd = md5($password);
		$email = trim($_POST['email']);
		$qq = trim($_POST['qq']);
		$alipay = trim($_POST['alipay']);
		$tjrname = trim($_POST['tjrname']);
		$tbnick = trim($_POST['tbnick']);
		$ip = get_client_ip();
		
		if($tjrname!=''){
			$tjrid=$duoduo->select('user','id','ddusername="'.$tjrname.'"');
			if($tjrid>0){
				$tjr = $tjrid;
			}
			else{
				jump(-1, 57); //推荐人ID错误
			}
		}
		elseif ($tjr > 0) {
			$tjr = (float)$duoduo->select('user', 'id', 'id="' . $tjr . '"');
		}

		if (limit_ip('user_limit_ip', $ip)) {
			jump(-1, 54); //禁用IP
		}

		$shield_arr = dd_get_cache('no_words'); //屏蔽词语

		
		$username_pass = reg_name($username, 3, 15, $shield_arr);
		if ($username_pass == -1) {
			jump(-1, 1); //用户名不合法
		}
		elseif ($username_pass == -2) {
			jump(-1, 2); //包含非法词汇
		}
		elseif ($duoduo->check_user($username) == 'false') {
			jump(-1, 6); //用户名已存在
		}

		$password_pass = reg_password($password);
		if ($password_pass == 0) {
			jump(-1, 3); //密码位数错误
		}

		$email_pass = reg_email($email);
		if ($email_pass == 0) {
			jump(-1, 7); //邮箱格式错误
		}
		elseif ($duoduo->check_email($email) == 'false') {
			jump(-1, 8); //邮箱已存在
		}

		

		if ($webset['user']['reg_between'] > 0) {
			$regtime = $duoduo->select('user', 'regtime', 'regip="' . $ip . '" order by id desc');
			$regtime = strtotime($regtime);
			if ($regtime > 0 && TIME - $regtime < $webset['user']['reg_between'] * 3600) {
				jump(-1, 50); //注册受限
			}
		}

		if ($webset['ucenter']['open'] == 1) {
			include DDROOT . '/comm/uc_define.php';
			include_once DDROOT . '/uc_client/client.php';
			$uc_name = iconv("utf-8", "utf-8", $username);
			$ucid = uc_user_register($uc_name, $password, $email);

			if ($ucid == -1) {
				jump(-1, 1); //用户名不合法
			}
			elseif ($ucid == -2) {
				jump(-1, 2); //包含非法词汇
			}
			elseif ($ucid == -3) {
				jump(-1, 6); //用户名已存在
			}
			elseif ($ucid == -4) {
				jump(-1, 7); //邮箱格式错误
			}
			elseif ($ucid == -5) {
				jump(-1, 7); //邮箱格式错误
			}
			elseif ($ucid == -6) {
				jump(-1, 8); //邮箱已存在
			}
			elseif ($ucid <= 0) {
				jump(-1, 999); //邮箱已存在
			}
		} else {
			$ucid = 0;
		}

		$info = arr_diff($_POST, array (
			'sub',
			'captcha',
			'from',
			'agree',
			'password_confirm',
			'password',
			'username',
			'web',
			'webid',
			'webname',
			'YinXiangMa_response',
			'YinXiangMa_challenge',
			'YXM_level',
			'YXM_input_result',
			'YinXiangMa_pk',
			'tjrname',
		));
		$info['regtime'] = SJ;
		$info['regip'] = $ip;
		$info['lastlogintime'] = SJ;
		$info['loginnum'] = 1;
		$info['money'] = (float) $webset['user']['reg_money'];
		$info['jifenbao'] = (float) $webset['user']['reg_jifenbao'];
		$info['jifen'] = (int) $webset['user']['reg_jifen'];
		$info['level'] = (int) $webset['user']['reg_level'];
		$info['ddpassword'] = $md5pwd;
		$info['ddusername'] = $username;
		$info['tjr'] = $tjr;
		$info['ucid'] = $ucid;

		if ($webset['user']['jihuo'] == 1) { //如果需要激活，会员初始的激活状态为0
			$info['jihuo'] = 0;
		} else {
			$info['jihuo'] = 1;
		}

		$uid = $duoduo->insert('user', $info, 0); //插入会员
		if ($uid <= 0) {
			exit (mysql_error() . '插入会员失败');
		}

		if ($web != '') {
			$data = array (
				'webid' => $webid,
				'webname' => $webname,
				'web' => $web,
				'uid' => $uid
			);
			$duoduo->insert('apilogin', $data, 0);
		}
		
		
		$tg = $webset['tgbl'];
		unset ($data);
		$data['uid'] = $uid;
		$data['username'] = $username;
		$data['tg'] = $tg;
		$data['webnick'] = WEBNAME;
		$data['email'] = $email;
		$msg_zhuce = $duoduo->msg_insert($data, 1); //1号站内信

		if ($webset['user']['reg_money'] > 0 || $webset['user']['reg_jifen'] > 0 || $webset['user']['reg_jifenbao'] > 0) { //注册送大于0时，发送明细
			unset ($info);
			$info['uid'] = $uid;
			$info['shijian'] = 1;
			$info['money'] = (float) $webset['user']['reg_money'];
			$info['jifenbao'] = (float) $webset['user']['reg_jifenbao'];
			$info['jifen'] = (int) $webset['user']['reg_jifen'];
			$mingxi_id = $duoduo->mingxi_insert($info);
			if (!$mingxi_id) {
				echo '插入明细失败';
				exit;
			}
		}

		if ($webset['user']['jihuo'] == 1) {
			jump(u('user', 'jihuo', array (
				'uid' => $uid
			)));
		}

		user_login($uid, $md5pwd);
		if ($from != '') {
			$goto = u('user', 'index');
		} else {
			$goto = u('user', 'index');
		}
		if (strpos($goto, 'http://') === false) {
			$goto = SITEURL . '/' . $goto;
		}
		if ($webset['phpwind']['open'] == 1) {
			$user['id'] = $uid;
			$user['name'] = $username;
			$user['password'] = $password;
			$user['email'] = $email;
			$user['cookietime'] = 1200;
			$goto = $duoduo->phpwind($user, $goto);
		}
		if ($webset['ucenter']['open'] == 1 && $ucid > 0 && AJAX == 0) {
			echo $ucsynlogin = uc_user_synlogin($ucid); //同步登陆代码
		}
		
		/*dd_session_start();
		if($_SESSION["avatar"]){
			function make_avatar_path($uid, $dir = '.') {
				$uid = sprintf("%010d", $uid);
				$dir1 = substr($uid, 0, 4);
				$dir2 = substr($uid, 4, 4);
				//$dir3 = substr($uid, 5, 2);
				!is_dir($dir.'/'.$dir1) && mkdir($dir.'/'.$dir1, 0777);
				!is_dir($dir.'/'.$dir1.'/'.$dir2) && mkdir($dir.'/'.$dir1.'/'.$dir2, 0777);
				return $dir.'/'.$dir1.'/'.$dir2.'/';
			}
			$save_pic_dir=make_avatar_path($uid,DDROOT.'/upload/avatar');
			include(DDROOT.'/comm/thumb.class.php');
			$avatar_data=file_get_contents($_SESSION["avatar"]);
			$picname=$save_pic_dir.'a'.$uid;
			file_put_contents($picname,$avatar_data);
			$picname=change_img($picname,'jpg');
	
			$uid = sprintf("%02d", $uid);
			$avatar_id=substr($uid, -2);
			
			$t = new ThumbHandler();
			$t->setSrcImg($picname);
			$t->setCutType(1);
			$t->setDstImg($save_pic_dir.$avatar_id."_avatar_small.jpg");
			$t->createImg(48,48);
			
			copy($picname,$save_pic_dir.$avatar_id."_avatar_middle.jpg");
			rename($picname,$save_pic_dir.$avatar_id."_avatar_big.jpg");

			unset($_SESSION["avatar"]);
		}*/
		
		jump($goto);
	} else {
		/**
		* @name 用户注册
		* @copyright duoduo123.com
		* @example 示例user_register();
		* @param $field 字段
		* @return $parameter 结果集合
		*/

		$apps = $duoduo->select_all('api', 'title,code', 'open=1 order by sort desc');

		if (isset ($_GET['url'])) {
			$url_from = $_GET['url'];
		}
		elseif (isset ($_GET['forward'])) {
			$url_from = $_GET['forward'];
		}
		elseif (isset ($_GET['from'])) {
			$url_from = $_GET['from'];
		}
		else {
			$url_from = $_SERVER['HTTP_REFERER'];
		}

		if ($webname != '') {
			$apireg = authcode($_POST['apireg'], 'DECODE', DDKEY);
			if ($apireg != 1) {
				error_html('参数错误！');
			}
			$default_name = $webname;
			if ($webset['user']['autoreg'] == 1) {
				$default_email = $webid . '@' . $web . '.com';
				$default_qq = 11111;
			}
			$default_pwd = dd_crc32(DDKEY . $webid);
			$default_pwd2 = $default_pwd;
		} else {
			$default_name = '';
			$default_pwd = '';
			$default_pwd2 = '';
			$default_email = '';
			$default_qq = '';
		}

		if ($webset['user']['autoreg'] == 1 && $web != '') {
			$auto_submit = 1;
			dd_session_start();
		} else {
			$auto_submit = 0;
		}

		if (count($apps) > 0) {
			$app_show = 1;
		} else {
			$app_show = 0;
		}
		unset($duoduo);
		$parameter['apps'] = $apps;
		$parameter['url_from'] = $url_from;
		$parameter['default_name'] = $default_name;
		$parameter['default_pwd'] = $default_pwd;
		$parameter['default_pwd2'] = $default_pwd2;
		$parameter['default_email'] = $default_email;
		$parameter['default_qq'] = $default_qq;
		$parameter['auto_submit'] = $auto_submit;
		$parameter['yinxiangma'] = $yinxiangma;
		$parameter['url_from'] = $url_from;
		$parameter['web'] = $web;
		$parameter['webid'] = $webid;
		$parameter['webname'] = $webname;
		$parameter['app_show'] = $app_show;
		$parameter['apps'] = $apps;
		$parameter['webset'] = $webset;
		return $parameter;
	}
}
?>
<?php
$parameter=act_user_reg();
extract($parameter);
$css[]=TPLURL."/inc/css/register.css";
include(TPLPATH."/inc/header.tpl.php");
?>

<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="<?=TPLURL?>/inc/js/jquery.emailmatch.js"></script>


<div class="mainbody" id=s-txt style="width:1000px; margin:0px auto;">
<div class="mainbody1000">
	<div class="register">
    <div class="register_left">
     <p class="title">免费注册<?=WEBNAME?>，网购省钱第一站</p>
     <form id="register_form" name="form" method="post" action="<?=u('user','register')?>">
<table width="680" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
		  <td height="55">常用邮箱 *</td>
		  <td><li id="emailMatch_list" style="*margin-left:15px"><input name="email" type="text" id="email" value="<?=$default_email?>" class="ddinput" autocomplete="off" style="*margin-left:-15px"/></li></td>
		  <td id="ckemail"><label class="field_notice">请务必填写正确，取回密码用</label><label id="checking_email" class="checking">检查中...</label></td>
		</tr>
		<tr>
		  <td width="15%" height="55" align="right">&nbsp;&nbsp;用户名 *&nbsp;&nbsp;</td>
		  <td><input name="username" type="text" id="username" class="ddinput" value="<?=$default_name?>" /></td>
		  <td width="50%" id="ckuser"><label class="field_notice">用户名长度3-15个字符（一个中文字2个字符）</label><label id="checking_user" class="checking">检查中...</label></td>
		</tr>
			<?php if($default_name!=''){?>
						<input type="hidden" name="password" id="password" value="<?=$default_pwd?>" />
						<?php }else{?>
		<tr>
		  <td height="55" align="right">&nbsp;&nbsp;密    码 *&nbsp;&nbsp;</td>
		  <td><input name="password" type="password" id="password" class="ddinput" value="<?=$default_pwd?>"/></td>
		  <td id="ckpass"><label class="field_notice">密码为长度 6 - 20 位</label></td>
		</tr>
		<tr>
		  <td height="55" align="right">确认密码 *&nbsp;&nbsp;</td>
		  <td><input name="password_confirm" type="password" id="password_confirm" class="ddinput" value="<?=$default_pwd2?>"/></td>
		  <td id="ckpass2"><label class="field_notice">请再次输入密码</label></td>
		</tr>
		 <?php }?>
		   <?php if($webset['user']['need_tbnick']==1&&TAOTYPE==1){?>
		<tr>
		  <td height="55" align="right" >订单号 *</td>
		  <td><input name="tbnick" type="text" id="tbnick"  value="<?php if($web=='tb'){echo $default_name;}?>"  class="ddinput"/></td>
		  <td><label class="field_notice">您常用的淘宝账号或订单号 <?php if($jiaocheng['tbnick']!=''){?><a href="<?=$jiaocheng['tbnick']?>" target="_blank" style="color:#F00">如何填？</a><?php }?></label><label id="checking_tbnick" class="checking">检查中...</label></td>
		</tr>
        <?php }?>
		
        <?php if($webset['user']['need_alipay']==1){?>
        <?php if($default_name=='' || $default_name!='' && $webset['user']['autoreg']==0){?>
        <tr>
		  <td height="55" align="right" >&nbsp;&nbsp;支付宝 *&nbsp;&nbsp;</td>
		  <td><input name="alipay" type="text" id="alipay" value="" onblur="if($('#email').val()==''){$('#email').val(this.value)}" class="ddinput"/></td>
		  <td id="ckalipay"><label class="field_notice"><font color="#FF0000">务必填写正确，提取申请用到</font></label><label id="checking_alipay" class="checking">检查中...</label></td>
		</tr>
        <?php }?>
        <?php }?>
        
	
        <?php if($webset['user']['need_qq']==1){?>
        <?php if($default_name=='' || $default_name!='' && $webset['user']['autoreg']==0){?> 
		<tr>
		  <td height="55" align="right" >&nbsp;&nbsp;QQ号码 *&nbsp;&nbsp;</td>
		  <td><input name="qq" type="text" id="qq"  onkeyup="value=value.replace(/[^\d]/g,'')" value="" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" onblur="var qq=$(this).val();if(qq=='') return false;qq=qq+'@qq.com';if($('#email').val()==''){$('#email').val(qq)}" class="ddinput"/></td>
		  <td id="ckqq2"><label class="field_notice">以便客服及时联系您</label></td>
		</tr>
        <?php }?>
        <?php }?>
        
       
          <?php if($webset['user']['need_tjr']==1){if(get_cookie("tjr")>0){$tjrname=$duoduo->select('user','ddusername','id="'.get_cookie("tjr").'"');}?>
		<tr>
		  <td height="55" align="right" >推荐人帐号<?php if($dd_tpl_data['tjr-kg']==1){?>* <?php }?> &nbsp;</td>
		  <td><input name="tjrname" type="text" id="tjrname"  value="<?=$tjrname?>"  class="ddinput"/></td>
		  <td><label class="field_notice"><font color="#FF0000">推荐人帐号/邮箱,<?php if($dd_tpl_data['tjr-kg']==1){?>没有请填写 <?=$dd_tpl_data['tjr-zh']?> <?php }else{?>没有可留空<?php }?></font></label><label id="checking_tjrname" class="checking">检查中...</label></td>
		</tr>
        <?php }?>
	       <?php if($webset['user']['need_captcha']==1){?>
        <?php if($auto_submit==0){?>
        <?php if($webset['yinxiangma']['open']==0){?>
		<tr>
		  <td height="55" align="right" >&nbsp;&nbsp;验证码 *&nbsp;&nbsp;</td>
		  <td><input name="captcha" type="text" id="captcha" size="6" maxlength="4" style="width:160px;" class="ddinput"/>&nbsp;&nbsp;<?=yzm()?></td>
		  <td id="ckyzm"><label class="field_notice">请填写验证码</label><label id="checking_captcha" class="checking">检查中...</label></td>
		</tr>
        
        <?php }else{?>
        <tr>
		  <td align="right">&nbsp;&nbsp;验 证 码 *&nbsp;&nbsp;</td>
		  <td colspan="2" id="yinxiangma" style="width:300px; overflow:hidden" ><?=$yinxiangma?></td>
		</tr>
        <?php }?>
        <?php }?>   <?php }?>	
		
		<tr>
		  <td height="55">&nbsp;</td>
		  <td colspan="2"><input name="agree" id="agree" type="checkbox" value="checkbox" checked="checked" /><span style="color:#999; font-size:12px">&nbsp;接受并同意<?=WEBNAME?>服务条款&nbsp;</span><span style="color:#FF0000;font-size:12px; cursor:pointer" id="fuwu">点击查看款</span></td>
	    </tr>
		<tr>
		  <td height="55">&nbsp;</td>
		  <td><input type="hidden" name="from" value="<?=$url_from?>" />
          <?php if(isset($web) && $web!=''){?>
          <input type="hidden" name="webid" value="<?=authcode($webid,'ENCODE',DDKEY);?>" /><input type="hidden" name="webname" value="<?=$webname?>" /><input type="hidden" name="web" value="<?=$web?>" />
          <?php }?>
          <input type="submit" name="sub" value="立即注册"  class="register_b c_bgcolor">
          </td>
		  <td></td>
		</tr>
	  </table>
      </form>
      <div style="clear:both"></div>
      </div>
      <div class="register_right">
           <div class="hezuo">
            <h3>已经有帐号？请直接登录</h3>
            <a href="<?=u('user','login')?>" class="register_b2" style="display:block; margin-top:20px; margin-bottom:20px">账号登录</a>
              </div>
               <?php if($app_show==1){?>
             <div class="hezuo">
         <h3>使用合作网站帐号登录</h3>
              <ul>
              <?php foreach($apps as $row){?>
			<li><a class="denglu <?=$row['code']?>" href="<?=u('api','do',array('code'=>$row['code'],'do'=>'go'))?>"><?=$row['title']?></a></li>
              <?php }?>              
              </ul>
          </div>
          <?php }?>
      </div>

    </div>
</div>
</div>
<div class="LightBox" id="LightBox"></div><div id="jumpbox" show="0" class="jumpbox" style="margin-bottom:15px;"><div class="top_left"></div><div class="top_center"></div><div class="top_right"></div><div class="middle_left"></div><div class="middle_center"><div class="close"><a></a></div><p class="title" style="text-align:center;font-weight:bold; color:#0099CC;font-size:18px; font-weight:normal;font-family:"微软雅黑";"></p><div class="contain" style="font-size:16px;font-weight:normal;font-family:"微软雅黑";  ">

      <p style="line-height:28px;">1、所有提供的所有商品均通过淘宝网和其他商城（如凡客，一号店）进行交易，本网站只提供相关的链接和推广，所以不承担商品的质量及售后服务。</p><br />

      <p style="line-height:28px;">2、本站不涉及网络支付等问题，所有商品购买最终都通过淘宝网及各大商城，故不存在账号泄露等问题，请买家放心。</p><br />

      <p style="line-height:28px;">3、所有通过本站购买商品的买家均可获得一定的返利，该返利来自<?=WEBNAME?>帮助商家推广的佣金，所以能保证返利部分的兑现。</p><br />
      <p style="line-height:28px;">最后，<?=WEBNAME?>祝大家购物愉快！</p>
</div></div><div class="middle_right"></div><div class="end_left"></div><div class="end_center"></div><div class="end_right"></div></div>

<script>
function emailMatchOver(){
	if($('#username').val()==''){
		var email=$('#email').val()
		var a=email.split('@');
		$('#username').val(a[0]);
	}
}

$(function(){
	
	$("#email").emailMatch({wrapLayer:"#emailMatch_list"});
	
    $('#register_form').validate({
        errorPlacement: function(error, element){
            var td = element.parents('td');
			var error_td = td.next('td');
            error_td.find('.field_notice').hide();;
            error_td.append(error);
			//td.find('input').css('border','red 1px dotted');
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
			<?php if($webset['user']['need_tjr']==1){?>
			tjrname : {
			<?php if($dd_tpl_data['tjr-kg']==1){?>
				required : true,
				<?php }?>
                byteRange: [3,50,'utf-8']
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
			<?php if($webset['user']['need_qq']==1 && $default_name==''){?>
            qq : {
                required : true,
                range:[1000,999999999999]
            },
			<?php }?>
			<?php if($auto_submit==0){?>
			captcha : {
                required : true,
                rangelength:[4,4],
				remote   : {
                    url :'index.php?mod=ajax&act=check_captcha',
                    type:'post',
                    data:{
                        captcha : function(){
                            return $('#captcha').val();
                        }
                    },
                    beforeSend:function(){
                        var _checking = $('#check_captcha');
                        _checking.prev('.field_notice').hide();
                        _checking.next('label').hide();
                        $(_checking).show();
                    },
                    complete :function(){
                        $('#check_captcha').hide();
                    }
                }
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
			<?php if($webset['user']['need_tjr']==1){?>
			tjrname : {
			<?php if($dd_tpl_data['tjr-kg']==1){?>
				required : '请填写推荐人帐号',
					<?php }?>
                byteRange: '用户名必须在3-15个字符之间',
				remote   : '推荐人不存在'
            },
			<?php }?>
			<?php if($webset['user']['need_tbnick']==1&&TAOTYPE==1){?>
			tbnick : {
				required : '您必须提供一个淘宝帐号',
                byteRange: '用户名位数错误',
				remote   : '淘宝账号异常,请填写淘宝订单号。'
            },
			<?php }?>
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
			<?php if($webset['user']['need_alipay']==1 && $default_name==''){?>
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
			<?php if($auto_submit==0){?>
            captcha : {
                required : '请输入右侧图片中的文字',
				rangelength    : '位数错误',
				remote   : '填写错误'
            },
			<?php }?>
            agree : {
                required : '您必须阅读并同意该协议'
            }
        }/*,
		submitHandler: function(form) {   
			ajaxPostForm(form,'<?=u('user','index')?>');
        } */
    });
	<?php if($auto_submit==1){?>
	//setTimeout("$('#register_form').submit();",5000);
	$('#register_form').submit();
	<?php }?>
});
</script>
<script type="text/javascript">
$(function(){
    $('#fuwu').jumpBox({  
	    title: '<?=WEBNAME?>服务条款',
		LightBox:'show',
		height:400,
		width:500
    });
});
</script>
<?php
include(TPLPATH."/inc/ft.tpl.php");
?>