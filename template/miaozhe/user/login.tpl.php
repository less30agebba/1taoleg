<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
网站地址: http://soft.duoduo123.com；
----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
使用；不允许对程序代码以任何形式任何目的的再发布。
============================================================================
 */

if (!defined('INDEX')) {
	exit('Access Denied');
} 
/**
* @name 用户登陆
* @copyright duoduo123.com
* @example 示例user_login();
* @return $parameter 结果集合
*/
function act_user_login2($field= 'id,ddpassword'){
	global $duoduo;
	$webset = $duoduo->webset;
	$dduser = $duoduo->dduser;
	$errorData = $duoduo->errorData;
	$ip=$_SERVER['REMOTE_ADDR'];
	$show_yzm=login_error('check');
	
	if (isset($_POST['sub']) && $_POST['sub'] != '') {
		if (limit_ip('user_limit_ip')) {
			jump(-1, 54); //禁用IP
		} 
	
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$remember = trim($_POST['remember'])?trim((int)$_POST['remember']):0;
		$md5pwd = md5($password);
		$from = trim($_POST['from']);
	
		$errorid = 0;
		
		if ($webset['ucenter']['open'] == 1) {
			include DDROOT . '/comm/uc_define.php';
			include_once DDROOT . '/uc_client/client.php';
			$uc_name = iconv("utf-8", "utf-8", $username);
			list ($ucid, $uc_name, $pwd, $email) = uc_user_login($uc_name, $password); //第一次查询用户名
			
			if ($ucid == -1) { // 如果失败在查询邮箱
				list ($ucid, $uc_name, $pwd, $email) = uc_user_login($username, $password, 2);
			} 
			if ($ucid > 0) {
				$duser = $duoduo -> select('user',$field, 'ddusername="' . $username . '" or email="' . $username . '" and del=0');
				$id = $duser['id'];
				if (!$id) { // 不存在就插入多多
					$info['ddusername'] = $username;
					$info['ddpassword'] = $md5pwd;
					$info['email'] = $email;
					$info['regtime'] = SJ;
					$info['regip'] = get_client_ip();
					$info['lastlogintime'] = SJ;
					$info['loginnum'] = 1;
					$info['money'] = (float)$webset['user']['reg_money'];
					$info['jifen'] = (int)$webset['user']['reg_jifen'];
					$info['jifenbao'] = (float)$webset['user']['reg_jifenbao'];
					$info['ddpassword'] = $md5pwd;
					$info['tjr'] = 0;
					$info['ucid'] = $ucid;
					$info['jihuo'] = 1;
	
					$uid = $duoduo -> insert('user', $info, 0); //插入会员
					if ($uid <= 0) {
						echo '插入会员失败' . mysql_error();
						exit;
					} 
	
					if ($webset['user']['reg_money'] > 0 || $webset['user']['reg_jifen'] > 0) { // 注册送大于0时，发送明细和站内信
						unset ($info);
						$info['uid'] = $uid;
						$info['shijian'] = 1;
						$info['money'] = $webset['user']['reg_money'];
						$info['jifen'] = $webset['user']['reg_jifen'];
						$info['jifenbao'] = $webset['user']['reg_jifenbao'];
						$mingxi_id = $duoduo -> mingxi_insert($info);
						if (!$mingxi_id) {
							echo '插入明细失败';
							exit;
						} 
					} 
	
					$tg = $webset['tgbl'];
					unset($data);
					$data['uid'] = $uid;
					$data['username'] = $username;
					$data['tg'] = $tg;
					$data['webnick'] = $webset['webnick'];
					$data['email'] = $email;
					$duoduo -> msg_insert($data, 1); //1号站内信
				} elseif ($duser['ddpassword'] != md5($password)) { // 存在该会员，更新密码
					$data = array('ddpassword' => md5($password));
					$duoduo -> update('user', $data, 'id="' . $id . '"');
				}
			} else {
				login_error('insert');
				jump(-1, 4); //账号密码错误
			} 
		} 
	
		$shield_arr = dd_get_cache('no_words'); //屏蔽词语
		
		$username_pass = reg_name($username, 3, 30, $shield_arr);
		if ($username_pass == -1) {
			jump(-1, 1); //用户名不合法
		} elseif ($username_pass == -2) {
			jump(-1, 2); //包含非法词汇
		} 
	
		$password_pass = reg_password($password);
		if ($password_pass == 0) {
			jump(-1, 3); //密码位数错误
		} 
	
		$dduser = $duoduo -> select('user', 'id,ddusername,email,jihuo', "(ddusername='" . $username . "' or email='" . $username . "') and ddpassword='" . $md5pwd . "' and del=0");
		$uid = $dduser['id'];
		if ($uid > 0) { // 如果会员存在
			$id = $dduser['id'];
			$username = $dduser['ddusername'];
			$email = $dduser['email'];
			$jihuo = $dduser['jihuo'];
			if ($jihuo == 0 && $webset['user']['jihuo']==1) {
				jump(u('user', 'jihuo', array('uid' => $id)), '您的账号需要激活！');
			} 
	
			if ($remember == 1) {
				$life = 3600 * 24 * 100;
			} else {
				$life = '';
			} 
			user_login($uid, $md5pwd, $life); //登陆状态
			$set_con_arr = array(array('f' => 'ddpassword', 'v' => $md5pwd), array('f' => 'lastlogintime', 'v' => SJ), array('f' => 'loginnum', 'e' => '+', 'v' => 1), array('f' => 'logip', 'e' => '=', 'v' => get_client_ip()));
			$duoduo -> update('user', $set_con_arr, 'id="' . $uid . '"');
			if ($webset['ucenter']['open'] == 1 && $ucid > 0 && AJAX == 0) {
				echo $ucsynlogin = uc_user_synlogin($ucid); //同步登陆代码
			} 
			if ($from != '') {
				$goto = $from;
			} else {
				$goto = u('user', 'index');
			} 
			if (strpos($goto, 'http://') === false) {
				$goto = SITEURL . '/' . $goto;
			} 
	
			if ($webset['phpwind']['open'] == 1 && AJAX == 0) {
				$user['id'] = $uid;
				$user['name'] = $username;
				$user['password'] = $md5pwd;
				$user['email'] = $email;
				$user['cookietime'] = $life;
				$goto = $duoduo -> phpwind($user, $goto);
			}
			jump($goto);
		} else {
			login_error('insert');
			jump(-1, 4); //账号密码错误
		} 
	} else {
		if (isset($_GET['url'])) {
			$url_from = $_GET['url'];
		} elseif (isset($_GET['forward'])) {
			$url_from = $_GET['forward'];
		} elseif (isset($_GET['from'])) {
			$url_from = $_GET['from'];
		} else {
			$url_from = $_SERVER['HTTP_REFERER'];
			/*$a=array($url_from);
			StopAttack($a);
			$url_from=$a[0];*/
		}
	} 
	unset($duoduo);
	$parameter['url_from']=$url_from;
	$parameter['show_yzm']=$show_yzm;
	return $parameter;
}
?>
<?php
$parameter=act_user_login2();
extract($parameter);
$css[]=TPLURL."/inc/css/register.css";
include(TPLPATH."/inc/header.tpl.php");
?>
<script charset="utf-8" type="text/javascript" src="js/jquery.validate.js" ></script>
<script>
$(function(){
	$('#username').focus(function(){
	    $(this).next('div').show();
	});

    $('#login_form').validate({
        errorPlacement: function(error, element){
            var error_td = element.parents('td').next('td');
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
                byteRange: [3,30,'utf-8']
            },
            password : {
                required : true,
                minlength: 6
            }<?php if($show_yzm==1){?>,
			captcha : {
                required : true,
                rangelength:[4,4]/*,
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
                }*/
            }
			<?php }?>
        },
        messages : {
            username : {
                required : '账号必填',
                byteRange: '账号长度错误'
            },
            password  : {
                required : '密码必填',
                minlength: '密码长度错误'
            }<?php if($show_yzm==1){?>,
			 captcha : {
                required : '请输入右侧图片中的文字',
				rangelength    : '位数错误'/*,
				remote   : '填写错误'*/
            }
			<?php }?>
        }
		/*,
		submitHandler: function(form) {   
			ajaxPostForm(form,'<?=u('user','index',array('start'=>1))?>');
        } */
    });
});
</script>

<div class="login">
<div class="loginindex">
<div class="loginindex2">

 <div class="login-box">
 <form id="login_form" name="login_form" method="post" action="<?=u('user','login')?>">
                <div class="login-title">
                    用户登录
                </div>
                <div class="login-from">
                    <div>
                        <label  class="label-username label-icon"></label>
                        <input class="fix-autofill-bg form-input" type="text" value="" name="username" placeholder="请输入您的用户名" autocomplete="off">
                    </div>
					<div class="p10"></div>
                    <div class="pt-10">
                        <label class="label-password label-icon"></label>
                        <input  name="password" type="password" id="password" class="fix-autofill-bg form-input" placeholder="请输入您的用户密码" autocomplete="off">
                    </div>
                    <div class="p10"></div>
                    <div class="cl">
                        <label class="remember" for="J_loginPage_chkAutoLogin">
                         <input name="remember" id="remember" type="checkbox" checked="checked" value="1" />
                            在此计算机上记住密码
                            <div class="Input_button hide"><input type="hidden" name="adds323sdsdsad" value="3546234134sadsa233" ></div>
                        </label>
                        <a href="<?=u('user','getpassword')?>" class="forget-pwd">忘记密码？</a>
                    </div>
                    <div class="cl">
					<input type="hidden" name="from" value="<?=$url_from?>" />
					<input type="submit" name="sub" value="会员登录"  class="g-blue-btn">
                    </div>
                    <div class="pt-10">
                        还没有账号？
                        <a class="free-reg" href="<?=u('user','register')?>">免费注册</a>
                    </div>
                    <div class="login-form-links">
                        <p>合作网站账号登录</p>
						  <?php foreach($apps as $row){?>
			<a href="<?=u('api','do',array('code'=>$row['code'],'do'=>'go'))?>" class="<?=$row['code']?>-icon link-icon" title="<?=$row['title']?>"></a>
              <?php }?>            
						 
                    </div>
                </div>
          </form>
        </div>



</div>
</div>
</div>

<?php
include(TPLPATH."/inc/ft.tpl.php");
?>