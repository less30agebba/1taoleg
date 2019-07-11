<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$parameter=act_wap_register();
extract($parameter);

include(TPLPATH.'/inc/header_2.tpl.php');
?>
<style>
body{
	display:inline-block;
	padding-bottom:12%;
}
.u-mid{
	display:inline-block;
}
</style>
<script>
<?php if(TAOTYPE==1 && $dduser['tbnick']==''){?>
var dayAlert=getCookie('dayAlert');
if(dayAlert!=1){
	ddAlert('请先提交订单。以便自动跟单！','<?=wap_l('user','tbnick')?>');
	setCookie('dayAlert',1,1 * 24 * 60 * 60 * 1000);
}
<?php }?>
<?php if($dduser['reg_from']!=''){?>
ddAlert('请先绑定邮箱','<?=wap_l('user','set_1',array('from'=>wap_l('user','index')))?>');
<?php }?>
</script>
<div class="t_top_bg">
    <div class="u-tx">
    	<div class="u_tx_postion">
    	<img src="<?=a($dduser['id'])?>" width="30%">
        <p><span><?=$dduser['name']?></span></p>
        </div>
    </div>    
</div>
<div class="u-mid-2">
	<ul >
	    <a href="<?=wap_l('user','mingxi',array('do'=>'in'))?>" style="color:#8e78d1;"><li><span><?=TBMONEY?>账户</span><h3><?=$dduser['jifenbao']?></h3></li></a>
        <a href="<?=wap_l('user','mingxi',array('do'=>'in'))?>" style="color:#8e78d1;"><li><span>现金账户（元）</span><h3><?=$dduser['money']?></h3></li></a>
        <a href="<?=wap_l('user','mingxi',array('do'=>'in'))?>" style="color:#8e78d1;"><li><span>我的积分</span><h3><?=$dduser['jifen']?></h3></li></a>
    </ul>
</div>
<?php if(empty($dduser['alipay'])||empty($dduser['realname'])){?>
<div class="u-mid-tips">
	<a href="<?=wap_l('user','set')?>" style="color:#34acf2;"><p>您的提现账户未设置，返利将<span>无法顺利到账！</span></p></a>
</div>
<?php }?>
<div class="u-mid">
	<ul>
	    <li>
        	<a href="<?=wap_l('user','order',array('do'=>'taobao'))?>" style="color:#FF4200;">
                <i class="icon iconfont_admin ">&#xe6ce;</i>
                <p>淘宝订单</p>
            </a>
        </li>
    	<li>
        	<a href="<?=wap_l('user','order',array('do'=>'mall'))?>" style="color:#b61d1d;">
                <i class="icon iconfont_admin ">&#xe74c;</i>
                <p>商城订单</p>
            </a>
        </li>
		 <li>
        	<a href="<?=wap_l('user','invite')?>" style="color:#FF4200;">
                <i class="icon iconfont_admin ">&#xe82d;</i>
                <p>邀请好友</p>
            </a>
        </li>
		<li>
        	<a href="<?=wap_l('user','msg',array('do'=>'list'))?>" style="color:#f78383;">
                <i class="icon iconfont_admin ">&#xe6d3;</i>
                <p>站内消息</p>
            </a>
        </li>
		<li>
        	<a href="<?=wap_l('user','mingxi',array('do'=>'out'))?>" style="color:#33a600;">
                <i class="icon iconfont_admin ">&#xe728;</i>
                <p>我的提现</p>
            </a>
        </li>
		<li>
        	<a href="<?=wap_l('user','set')?>" style="color:#34acf2;">
                <i class="icon iconfont_admin">&#xe709;</i>
                <p>账户设置</p>
            </a>
        </li>
        <li>
        	<a href="<?=wap_l('user','sign')?>" style="color:#ffc000;">
                <i class="icon iconfont_admin ">&#xe6bd;</i>
                <p>每日签到</p>
            </a>
        </li>
			<li>
        	<a href="<?=wap_l('user','tbnick')?>" style="color:#8e78d1;">
                <i class="icon iconfont_admin ">&#xe6d7;</i>
                <p>跟单设置</p>
            </a>
        </li>
    	<li>
        	<a href="<?=u('user','exit',array('from'=>wap_l()))?>" style="color:#ca55a2;">
                <i class="icon iconfont_admin ">&#xe6f2;</i>
                <p>退出账户</p>
            </a>
        </li>
    </ul>
</div>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>