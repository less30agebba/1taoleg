<div class="jf_tright">
    <?php if($dduser['name']!=NULL){?>
	<div class="userinfo" >
<div class="head"><img src="<?=a($dduser['id'])?>" width="48" height="48" border="0"/></div>
<div class="user">
您好 <span class="red12"><?=$dduser['name']?></span><br />
<a href="<?=u('user','huan')?>" class="blue_link" target="_blank">兑换历史记录>></a>
</div>
<div class="clear"></div>
<div class="other">
 <div class="ico_mb"></div>我的<?=TBMONEY?>:<span class="red12" id="my_score"><?=$dduser['jifenbao']?></span>&nbsp;<?=TBMONEYUNIT?><br />
</div>
<div style="font-size:16px">
 <div class="ico_money"></div>积分:<span class="red12" id="my_score"><?=$dduser['jifen']?></span>&nbsp;点
</div>
<br />

 	</div>

<div class="line"></div>
<div>
  
<div class="reg-box">   
	      <span class="font2"><a href="/index.php?mod=user&act=huan"><font color="#ff6699">兑换记录</font></a></span>
	     <span class="font2"><a href="/index.php?mod=user&act=mingxi&do=in">收入明细</a></span>
				 </div> 
</div>
<div class="clear"></div>
</div>

<div class="clear"></div>
	
    <?php }else{?>
      <div class="userlogin">
<div class="btn_login"><a href="<?=u('user','login')?>" style="cursor:pointer"><p></p></a></div>
<div class="reg"><a href="<?=u('user','register')?>" style="color:#009ED9;">免费注册</a></div>
<div class="clear"></div>
<div class="logintxt"> 欢迎来到<?=WEBNAME?><?=TBMONEY?>商城<br />
 </div>
 	</div>
<div class="line"></div>
<div>
  
 <div class="get-score"> </div>	 </div>	
   	  
  <div class="mb_info">
   <a href="<?=u('user','login')?>" style="cursor:pointer"><span class="font2">登录后可查看个人<?=TBMONEY?>信息</span></a>
  </div>
</div>
<div class="clear"></div>
	<div style="margin-top:3px"></div>
</div>

    <?php }?>
    </div>
	