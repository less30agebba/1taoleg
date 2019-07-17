

<link rel="stylesheet" href="<?=TPLURL?>/vip/css/right.css" />
<div id="J_sidebar" class="side_right">
        <div class="side-box">
            <ul class="side-oper">
                <li class="normal side-user">
                    <a class="links" id="J_user" target="_blank" href="<?=u('user','index')?>">
                        <i class="normal-icon i-user"></i>
                    </a>
                    <div id="side-login" class="tab-tips tab-login">
                        <div class="user-box">     
						    <div class="pic"> 
						 <div class="dengluhou" style="display:none">
						<div class="us_top">
						<div class="us_topleft"><a href="<?=u('user','avatar')?>"><img src="<?=a($dduser['id'])?>" width="60" height="60" /></a></div>
						
						<div class="us_topright"><span class="mc"><?=$dduser['name']?></span><br /><a href="<?=u('user','avatar')?>"><font color="#666">换头像</font></a>&nbsp;&nbsp;&nbsp;<a href="<?=u('user','avatar')?>"><font color="#666">退出</font></a></div>
						</div><div class="clear"></div>
						 <?php if($dd_tpl_data['fanli-kg']['open']==0){?>
						 
						 <div class="wdjfb"><span class="bt">我的<?=TBMONEY?>:</span><span class="jifenbao ye"><?=$dduser['live_jifenbao']?></span>个</div>
						 <div class="wdjfb"><span class="bt">我的余额:</span><span class="money ye"><?=$dduser['live_money']?></span>元</div>
					<?php }else{?>
						 <div class="wdjfb"><span class="bt">我的积分:</span><span class="jifen ye"><?=$dduser['live_jifen']?></span>点</div>
						 <div class="wdjfb"><span class="bt">我的订单:</span><span class="level ye"><?=$dduser['level']?></span>件</div>
					
					 <?php }?>
				<div class="clear"></div>
							<a class="hydl" href="<?=u('user','index')?>">进入会员中心</a>
							</div>
							
							
							  <div class="dengluqian" style="display:none">
						<div class="us_top">
						<div class="us_topleft"><a href="<?=u('user','avatar')?>"><img src="<?=a($dduser['id'])?>" width="60" height="60" /></a></div>
						
						<div class="us_topright"><span>欢迎光临！</span><br /><font color="#666">您还没有登录会员哦！</font>&nbsp;&nbsp;&nbsp;</div>
						</div><div class="clear"></div>
						 <?php if($dd_tpl_data['fanli-kg']['open']==0){?>
						 <div class="wdjfb"><span class="bt">登录查看我的<?=TBMONEY?>..</div>
						 <div class="wdjfb"><span class="bt">登录看看我的余额吧..</div>
						 <?php }else{?>
						 <div class="wdjfb"><span class="bt">登录查看我的积分..</div>
						 <div class="wdjfb"><span class="bt">登录看看我的购物记录..</div>
					<?php }?>
				     <div class="clear"></div>
							<a class="hydl" href="<?=u('user','login')?>">会员登录</a>
							 
							</div>
							 
							 
							 
	<div class="toolbar-u-task">
		<div class="u-task-list">
			<div class="u-task-meta">
				<a href="/index.php?mod=user&act=index" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-home.png"><span>我的后台</span></a>
								<a href="/index.php?mod=user&act=index" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-sign.png "><span>我要签到</span></a>
								<a href="/index.php?mod=user&act=tradelist" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-tradelist.png"><span>我的订单</span></a>
				<a href="/index.php?mod=user&act=mingxi" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-detailed.png"><span>账户明细</span></a>
				<a href="/index.php?mod=user&act=info" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-authfield.png"><span>完善资料</span></a>
				<a href="/index.php?mod=user&act=info&do=apilogin" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-bind.png"><span>绑定账号</span></a>
				<a href="/index.php?mod=user&act=avatar" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-authavatar.png"><span>上传头像</span></a>
				<a href="/index.php?mod=user&act=yaoqing" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-invite.png"><span>邀请好友</span></a>
				<a href="/index.php?mod=user&act=msg&do=in" target="_blank"><img src="<?=TPLURL?>/vip/images/user/u-msg.png"><span>站内短信</span></a>
				
			</div>
		</div>
	</div>	
							</div>
                        </div>
                        <i class="close">×</i>
                    </div>
                </li>
                <li class="normal side-cart">
                    <a class="links links-cart" id="J_cart" href="/index.php?mod=user&act=tradelist">
                        <i class="normal-icon i-cart"></i>
                        <em class="num cartnum"><?=$dduser['level']?></em>
                    </a>
                    <div class="tab-tips tab-tag">
                        <div class="carttime"></div><div class="arr-icon">◆</div>
                    </div>
                   
                </li>
                <li class="normal side-love">
                    <a class="links" id="J_love" target="_blank" href="<?=u('user','favorite')?>">
                        <i class="normal-icon i-love"></i>
                    </a>
                    <div class="tab-tips">我的收藏<div class="arr-icon">◆</div> </div>
                </li>
                <li class="normal side-quan">
                    <a class="links" id="J_quan" target="_blank" href="<?=u('user','huan')?>">
                        <i class="normal-icon i-quan"></i>
                    </a>
                    <div class="tab-tips">我的礼品<div class="arr-icon">◆</div> </div>
                </li>
            </ul>
            <ul class="side-oper other">
             
				<li class="normal side-ad">
	                <a class="links links_ad" href="<?=$dd_tpl_data['adstop1url']?>"  target="_blank">
	                    <img src="<?=$dd_tpl_data['adstop1']?>">
	                </a>
	                <div class="tab-tips">
	                    <a href="<?=$dd_tpl_data['adstop1url']?>" target="_blank"><img src="<?=$dd_tpl_data['adstop2']?>" width="200" height="250px;"></a>
	                </div>
	            </li>  
                <li class="normal side-complain">
                    <a class="links" id="J_complain" target="_blank" href="/index.php?mod=user&act=msg&do=send">
                        <i class="normal-icon i-complain"></i>
                    </a>
                    <div class="tab-tips">意见反馈<div class="arr-icon">◆</div> </div>
                </li>
                <li class="normal side-code">
                    <a class="links" id="J_code" href="javascript:;">
                        <i class="normal-icon i-code"></i>
                    </a>
                    <div class="tab-tips">
                        <div class="code-box">
                            <p class="code"><img src="<?=$dd_tpl_data['app']?>" width="150px"></p>
                            <p class="txt">手机随时逛 及时抢</p>
                        </div>
                        <div class="arr-icon">◆</div>
                    </div>
                </li>
                <li class="normal side-backtop">
                    <a class="links" id="J_backtop" href="javascript:;">
                        <i class="normal-icon i-backtop"></i>
                    </a>
                    <div class="tab-tips">返回顶部<div class="arr-icon">◆</div> </div>
                </li>
            </ul>
        </div>
       
    </div>	
    <script src="<?=TPLURL?>/vip/js/right.js" type="text/javascript"></script>