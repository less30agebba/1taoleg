<?php
$total1=$duoduo->count('user',"tjr='".$dduser["id"]."'");
$total2=$duoduo->sum('tgyj','money','tjrid="'.$dduser["id"].'"');
$dengji_img = "<img src='images/v".$dduser['type'].".gif' />";
?>
<div class="usertop">
        <div class="top-bar">
            <div class="user-panel">
                <div class="avatar">
                    <img src="<?=a($dduser['id'])?>" width="80" height="80" />
                </div>
                <div class="content">
                    <div class="name"><?=$dduser['name']?></div>
                    <div><a href="<?=u('user','avatar')?>"><font color="#0099FF">换个头像</font></a></div>
                    <em>我的等级：<?=$dengji_img?></em>
                </div>
            </div>
            <div class="status-bar">
                <div class="entry">
                    <div class="title">我的<?=TBMONEY?></div>
                    <div class="num"><?=$dduser['live_jifenbao']?>个</div>
                    <em>待结算<?=$dduser['freeze_jifenbao']?>个  已提<?=jfb_data_type($dduser['tbyitixian'])?>个</em>
                </div>
                <div class="entry">
                    <div class="title">我的余额 <?php if($webset['taoapi']['m2j']==1){?><a id="huanqian" style="cursor:pointer; background:#FF6600; color:#FFFFFF; font-size:12px;border-radius:2px; padding:1px 3px 1px 4px" title="余额兑换<?=TBMONEY?>">兑换</a><?php }?></div>
                    <div class="num"><?=$dduser['live_money']?>元</div>
                    <em>已提取<?=$dduser['yitixian']?>元</em>
                </div>
                <div class="entry">
                    <div class="title">我的积分</div>
                    <div class="num"><?=$dduser['jifen']?>点</div>
                    <em><a href="<?=u('user','huan')?>">我已兑换的礼品</a></em>
                </div>
               <?php if($webset['user']['shoutu']==1){?> <div class="entry">
                    <div class="title">总邀请奖励</div>
                    <div class="num"><?=$total2?>元</div>
                    <em>共邀请<?=$total1?>人</em>
                </div> <?php }?>
				<div class="entry">
                   <a href="<?=u('task','index')?>"><img src="<?=TPLURL?>/inc/images/user/rw.jpg" /></a>
                   <a href="<?=u('task','gametask')?>"><img src="<?=TPLURL?>/inc/images/user/yx.jpg" /></a>
                </div>
            </div>
        </div>
<script>
bl=<?=TBMONEYBL?>;
type=<?=TBMONEYTYPE?>;
function jsJfb(v){
	var jifenbao=dataType(v*bl,type);
	jifenbao=dataType(jifenbao/(1+<?=JFB_FEE?>),type);
	$('#js_jfb').html(jifenbao);
}

$(function(){
    $('#huanqian').jumpBox({  
	    title: '温馨提示：按照1比<?=TBMONEYBL?>的比例将人民币转换成<?=TBMONEY?>！<?php if(JFB_FEE>0){?><?=TBMONEY?>兑换需要额外支付<b style=" color:red"><?=JFB_FEE*100?>%</b>的手续费<?php }?>',
		titlebg:1,
		height:260,
		width:380,
		defaultContain:1
    });
	
	jsJfb(<?=$dduser['live_money']?>);
	
	$('#money').keyup(function(){
		var liveMoney=<?=$dduser['live_money']?>;
		var v=parseFloat($(this).val());
		if(v>liveMoney || isNaN(v)){
			alert('金额填写错误');
			$(this).focus().select();
		}
		else{
			jsJfb(v);
		}
	});
	
	$('#form1').submit(function(){
		$(this).find('.ShiftClass').attr('disabled','disabled');
		var v=$(this).find('#money').val();
		var action=$(this).attr('action');
		$.ajax({
	    	url: action,
			data:{money:v},
			dataType:'jsonp',
			jsonp:"callback",
			success: function(data){
		    	if(data.s==0){
			    	alert(errorArr[data.id]);
				}
				else if(data.s==1){
			    	alert('兑换成功');
					location.replace(location.href);
				}
			}
		});
		return false;
	});
});
</script>

<div class="LightBox" id="LightBox"></div><div id="jumpbox" show="0" class="jumpbox"><div class="top_left"></div><div class="top_center"></div><div class="top_right"></div><div class="middle_left"></div><div class="middle_center"><div class="close"><a></a></div><p class="title"></p><div class="contain">
<form id="form1" name="form1" autocomplete="off" method="post" action="<?=u('ajax','huanqian')?>" >
                        <table width="505" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="116" height="35" align="right">可转换金额：</td>
                            <td width="" height="35" align="left">&nbsp;&nbsp;<b class="bignum"><?=$dduser['live_money']?></b>元</td>
                            <td width="" align="right"></td>
                          </tr>
						  <tr>
                            <td width="" height="35" align="right">转换：</td>
                            <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;<input name="money" type="text" class="ddinput" value="<?=$dduser['live_money']?>" id="money" style="width:60px;" /><label class="field_notice">元 = <b id="js_jfb" class="bignum"></b><?=TBMONEY?></label></td>
                            <td width="" align="left"></td>
                          </tr>
						  <tr>
                            <td width="" height="35" align="right"></td>
                            <td align="left" colspan="2">&nbsp;&nbsp;<input type="submit" value="提 交" class="ShiftClass" /></td>
                          </tr>
      </table>
        </form>
</div></div><div class="middle_right"></div><div class="end_left"></div><div class="end_center"></div><div class="end_right"></div></div>