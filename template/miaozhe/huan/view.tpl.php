<?php
$parameter=act_huan_view();
extract($parameter);
$css[]=TPLURL.'/inc/css/duihuan.css';
include(TPLPATH."/inc/header.tpl.php");
?>
<script type="text/javascript" src="<?=TPLURL?>/js/tooltip.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<div class="jifendaohang" style="background:#FFFFFF">
<div class="tag_nav" >
			<ul>
			<li>商品分类:</li>
				<a href="<?=u('huan','list')?>"><li<?php if($cid==0){?> class="active"<?php }?>>全部</li></a>
				<?php foreach($huan_type as $catid=>$title){?>
				<a href="<?=u('huan','list',array('cid'=>$catid))?>"><li<?php if($cid==$catid){?> class="active"<?php }?>><?=$title?></li></a>
				<?php }?>
			</ul>
		</div></div>
<div class="mainbody">
<div class="mainbody1200">
<div class="jifenview" >
	<div class="tag_left2" style="width:853px">
		<div class="gift-detail">
				<h3 class="gift-name"><?=$good['title']?></h3>
			<div class="gift-img"><img src="<?=$good['img']?>" width="258" height="200" border="0" alt="<?=$good['title']?>" /></div>
			<div class="gift-info">
				<ul>
					<li>
						<strong>积分兑换：</strong>
						<?php if($good['jifen']>0){?>
						<span class="ex-price"><strong><?php echo $good['jifen'];?></strong>点</span>
						<?php }else{?>
						不参与
						<?php }?>
					</li>
					<li>
						<strong><?=TBMONEY?>兑换：</strong>
						<?php if($good['jifenbao']>0){?>
						<span class="ex-price"><strong><?=$good['_jifenbao']?></strong><?=TBMONEYUNIT?></span>
						<?php }else{?>
						不参与
						<?php }?>
					</li>
					<li>
						<strong>剩余数量：</strong><?php echo $good['num'];?> 份
						<span class="ex-already"><?php if($good['auto']>0){?><img src="<?=TPLURL?>/images/huan/zdfh.png" alt="该礼品支持自动发货，兑换成功后可以立即拿到卡号、密码或优惠劵号码" style="margin:11px 0;vertical-align:middle;" />自动发货<?php }?></span>
					</li>
					<?php if($good['sdate']>0){?>
					<li>
						<strong>开始时间：</strong><?php echo date('Y-m-d',$good['sdate']);?>
					</li>
					<?php }?>
					<?php if($good['edate']>0){?>
					<li>
						<strong>结束时间：</strong><?php echo date('Y-m-d',$good['edate']);?>
					</li>
					<?php }?>
					<li>
						<strong>兑换说明：</strong><?php if($good['limit']==0){?>每名会员每天<span style="color:#ED3D02;">不限制</span>兑换次数<?php }else{?>每名会员每天可兑换<span style="color:#ED3D02;"><?=$good['limit']?></span>次<?php }?>
					</li>
				</ul>
		<div class="dhbutton">
<?php if($dduser['name']!=''){?>
	<?php if($good['jifenbao']>0){?>
	<button class="money"  id="jifenbao" title="<?=$jifenbao_dh_msg?>" <?php if($jifenbao_dh_status==0){?> jinzhi="<?=$jifenbao_dh_msg?>"<?php }else{?>jinzhi="0"<?php }?>><?=TBMONEY?>兑换</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php }?>
	<?php if($good['jifen']>0){?>
	<button class="jifen"  id="jifen" title="<?=$jifen_dh_msg?>" <?php if($jifen_dh_status==0){?> jinzhi="<?=$jifen_dh_msg?>"<?php }else{?>jinzhi="0"<?php }?>>积分兑换</button>
	<?php }?>
<?php }else{?>
	<?php if($good['jifenbao']>0){?>
	<button class="money" onclick="alert('登陆后才可兑换商品！');window.location='<?=u('user','login')?>&url='+encodeURIComponent(window.location.href)" jinzhi="1"><?=TBMONEY?>兑换</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php }?>
	<?php if($good['jifen']>0){?>
	<button class="jifen" onclick="alert('登陆后才可兑换商品！');window.location='<?=u('user','login')?>&url='+encodeURIComponent(window.location.href)" jinzhi="1">积分兑换</button>
	<?php }?>
<?php }?>
</div></div>
		</div></div>
	
	<div class="tag_right" style="padding-top:30px">
		<?php include(TPLPATH."/huan/right.tpl.php");?>
		
		</div>
			<div class="jf_xx">
<h4 class="gift-title">礼品详情</h4>
		<div class="gift-content"><?php echo $good['content'];?></div>
	<h4 class="gift-title">注意事项</h4>
		<div class="gift-content">
			<ol style="font-size:14px; line-height:30px">
				<li>1. 所有礼品（除优惠券等外）在兑换后的1-2个工作日，本站将从合作商城购买，具体到货时间取决于合作商城发货情况。礼品发货后，我们将会发送站内信告知，请您留意；</li>
				<li>2. 若兑换礼品缺货或收货地址无法送达，我们会在1~2个工作日将相应返利或积分返还至您的账户中；</li>
				<li>3. 礼品兑换已包含快递费用；</li>
				<li>4. 只能使用购物返利或积分进行礼品兑换；</li>
				<li>5. 本礼品为本站从合作商城采购，为操作方便，下单后所产生的差价双方均无需承担；</li>
			</ol>
		</div>
		</div>
</div>
<script>
$(function(){	
    $('.dhbutton button').jumpBox({  
	    title: '<?=$good['title']?>',
		LightBox:'show',
		height:400,
		width:450,
		defaultContain:1,
		jsCode:'var jinzhi=$(this).attr("jinzhi");if(jinzhi!="0"){ if(jinzhi!=1){alert(jinzhi);}var jumpBoxStop=1;};if($(this).attr("id")=="money"){$("#form1 #mode").val(1)}if($(this).attr("id")=="jifen"){$("#form1 #mode").val(2)}'
    });
	$('#form1').validate({
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
			num : {
                required : true,
                range:[1,<?php echo $good['limit'];?>]
            },
            realname : {
                required : true
            },
            mobile : {
                required : true,
                mobile   : true
            },
			<?php if(empty($dduser['alipay'])){?>
			alipay : {
                alipay    : true
            },
			<?php }?>
            email : {
                required : true,
                email    : true
            },
            qq : {
                required : true,
                range:[1000,999999999999]
            }
        },
        messages : {
			num : {
                required : '填写您兑换数量',
                range:'数量最多兑换<?=$good['limit']?>件'
            },
			realname : {
                required : '填写姓名'
            },
            mobile  : {
                required : '填写手机号码',
                mobile: '手机号码格式错误'
            },
			<?php if(empty($dduser['alipay'])){?>
			alipay : {
                alipay    : '支付宝错误'
            },
			<?php }?>
            email : {
                required : '填写电子邮箱',
                email    : '邮箱错误'
            },
			qq : {
                required : '填写您的QQ号码',
                range:'QQ号码位数错误'
            }
        },
		submitHandler: function(form) {
            $form=$('#form1');
			$form.find('.ShiftClass').attr('disabled','disabled');
            var query=$form.serialize();//document.write(query);
	        var url=$form.attr('action');
	        $.ajax({
		        url: url,
		        data:query,
		        dataType:'jsonp',
				jsonp:"callback",
		        success: function(data){
			        if(data.s==0){
			            alert(errorArr[data.id]);
						$form.find('.ShiftClass').attr('disabled',false);
						jumpboxClose();
			        }
			        else if(data.s==1){
			            alert('兑换成功,等待管理员审核');
						location.replace(location.href);
			        }
					else if(data.s==2){
			            alert('兑换成功,请查收站内信领取');
						window.location.href='<?=u('user','msg')?>';
			        }
		        }
	        });
        } 
    });
});
</script>
<div id="dhFormHtml">
<div class="LightBox" id="LightBox"></div><div id="jumpbox" show="0" class="jumpbox"><div class="top_left"></div><div class="top_center"></div><div class="top_right"></div><div class="middle_left"></div><div class="middle_center"><div class="close"><a></a></div><p class="title"></p><div class="contain">
<form id="form1" name="form1" method="post" action="<?=u('ajax','huan')?>">
                        <table width="350" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="70" height="34" align="right">兑换数量：</td>
                            <td width="150" align="left"><input name="num" type="text" class="ddinput" value="1" id="num" style="width:60px;" /></td>
                            <td width="150" align="right"><label class="field_notice">最多兑换<?=$good['limit']?>件</label></td>
                          </tr>
                          <tr>
                            <td width="" height="34" align="right">姓名：</td>
                            <td width="150" align="left">
                            <?php if($dduser['realname']!=''){echo $dduser['realname'];}else{?>
                            <input name="realname" type="text" class="ddinput" value="<?=$dduser['realname']?>" id="realname" style="width:120px;" />
                            <?php }?>
                            </td>
                            <td width="150" align="right"><label class="field_notice">请填写收货人姓名</label></td>
                          </tr>
						  <tr>
                            <td width="" height="34" align="right">手机：</td>
                            <td align="left">
                            <?php if($tixian_sms_open==1 || $dduser['mobile']!=''){echo $dduser['mobile'];}else{?>
                            <input name="mobile" type="text" class="ddinput" value="<?=$dduser['mobile']?>" id="mobile" style="width:120px;" />
                            <?php }?>
                            </td>
                            <td width="" align="right"><label class="field_notice">请填写常用手机号码</label></td>
                          </tr>
						  <tr>
                            <td height="34" align="right">邮箱：</td>
                            <td align="left">
                            <?php if($dduser['email']!=''){?><div style="width:170px; overflow:hidden"><?=$dduser['email']?></div><?php }else{?>
                            <input name="email" type="text" class="ddinput" value="<?=$dduser['email']?>" id="email" style="width:120px;" />
                            <?php }?>
                            </td>
                            <td width="" align="right"><label class="field_notice">请填写您的邮箱</label></td>
                          </tr>
                          <tr>
                            <td width="" height="34" align="right">支付宝：</td>
                            <td align="left">
                            <?php if($dduser['alipay']!=''){echo $dduser['alipay'];}else{?>
                            <input name="alipay" type="text"  class="ddinput"  value="<?=$dduser['alipay']?>" id="alipay" style="width:120px;" />
                            <?php }?>
                            </td>
                            <td width="" align="right"><label class="field_notice">请填写您的支付宝</label></td>
                          </tr>
						  <tr>
                            <td width="" height="34" align="right">QQ：</td>
                            <td align="left">
                            <?php if($dduser['qq']!=''){echo $dduser['qq'];}else{?>
                            <input name="qq" type="text" class="ddinput" value="<?=$dduser['qq']?>" id="qq" style="width:120px;" />
                            <?php }?>
                            </td>
                            <td width="" align="right"><label class="field_notice">请填写您的QQ</label></td>
                          </tr>
                          <tr>
                            <td width="" height="34" align="right">地址：</td>
                            <td align="left"><input name="address" type="text" class="ddinput" value="" id="address" style="width:120px;" /></td>
                            <td width="" align="right"><label class="field_notice">请填写收货地址</label></td>
                          </tr>
						  <tr>
                            <td width="" height="34" align="right">备注：</td>
                            <td align="left"><textarea name="content" class="ddinput" id="content" style="width:140px;height:44px;line-height:22px;"></textarea></td>
                            <td width="" align="right"><label class="field_notice">请填写附加备注</label></td>
                          </tr>
						  <tr>
                            <td width="" height="40" align="right"></td>
                            <td align="left"><input type="hidden" id="mode" name="mode" value="1" /><input type="hidden" id="id" name="id" value="<?=$id?>" /><input type="submit" value="提 交" class="ShiftClass" /></td>
                            <td width="" align="left"><label class="field_notice"></label></td>
                          </tr>
      </table>
        </form>
</div></div><div class="middle_right"></div><div class="end_left"></div><div class="end_center"></div><div class="end_right"></div></div>
</div>
<?php include(TPLPATH."/inc/footer.tpl.php");?>