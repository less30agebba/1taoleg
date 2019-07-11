<?php
$api_l=$duoduo->select_all('api','title,code','open=1 order by sort desc');
$user_api_l=$duoduo->sel_one_arr_sql('apilogin','web','uid="'.$dduser['id'].'"');
?>

<div id="left">
		<h1><a href="<?=u('user','index')?>">我的账户中心</a></h1>
		<ul id="left_nav">
			<li>
				<h3 class="lt1"><div class="icon money"></div>我的订单</h3>
				<ul>
					<li <?php if($do=='taobao'){?> class="current"<?php }?>><a href="<?=u('user','tradelist',array('do'=>'taobao'))?>">淘宝订单</a></li>
					<li <?php if($do=='mall'){?> class="current"<?php }?>><a href="<?=u('user','tradelist',array('do'=>'mall'))?>">商城订单</a></li>
					<?php if($dd_tpl_data['fanli-kg']['open']==0){?><li <?php if(ACT=='chadan'){?> class="current"<?php }?>><a href="<?=u('user','chadan')?>">认领订单</a></li><?php }?>
					<li <?php if(ACT=='huan'){?> class="current"<?php }?>><a href="<?=u('user','huan')?>">我的兑换</a></li>
					<li <?php if(ACT=='yaoqing'){?> class="current"<?php }?>><a href="<?=u('user','yaoqing')?>">邀请好友</a></li>
				</ul>
			</li>
			<li>
				<h3 class="lt3"><div class="icon profile"></div>我的账号</h3>
				<ul>
				     <li <?php if(ACT=='mingxi'){?> class="current"<?php }?>><a href="<?=u('user','mingxi',array('do'=>'in'))?>">我的收入明细</a></li>
				    <?php if($dd_tpl_data['fanli-kg']['open']==0){?> <li <?php if($do=='caiwu'){?> class="current"<?php }?>><a href="<?=u('user','info',array('do'=>'caiwu'))?>">提取账号</a></li><?php }?>
					<li <?php if($do=='tbnick'){?> class="current"<?php }?>><a href="<?=u('user','info',array('do'=>'tbnick'))?>">淘宝账号</a></li>
					<li <?php if($do=='apilogin'){?> class="current"<?php }?> ><a href="<?=u('user','info',array('do'=>'apilogin'))?>">账号绑定</a></li>
					<li <?php if(ACT=='msg'){?> class="current"<?php }?> ><a href="<?=u('user','msg',array('do'=>'in'))?>">站内信(<font color="#FF0000"><strong><?=$msgnum?></strong></font>)</a></li>
				</ul>
			</li>
			<li>
				<h3 class="lt4"><div class="icon help"></div>安全中心</h3>
				<ul>
					<li <?php if($do=='myinfo'){?> class="current"<?php }?> ><a href="<?=u('user','info',array('do'=>'myinfo'))?>">帐户资料</a></li>
					<li <?php if($do=='pwd'){?> class="current"<?php }?> ><a href="<?=u('user','info',array('do'=>'pwd'))?>">修改密码</a></li>
					<li <?php if(ACT=='info1'){?> class="current"<?php }?> ><a href="<?=u('user','exit')?>">安全退出</a></li>
					
				</ul>
			</li>
		</ul>
</div>

