<?php
$parameter=act_user_confirm();
extract($parameter);
$webtitle='找回订单';
include(TPLPATH.'/inc/header_2.tpl.php');
?>
<style>
.shopBody .info dl dd {
    padding-left: 30px;
    padding-top: 10px;
}
</style>
<form id="form2" name="form2" method="post" action="" onsubmit="return checkForm($(this))"  enctype="multipart/form-data">
<div class="shopBody">
  <div class="info" style="border-top:none;"> 
		<dl>
		 <dd>商品名称</dd>     
		 <dd style="width:203px;padding-left:0px">&nbsp;<font color="#dd0000"><?php echo $trade['item_title'];?></font><input type="hidden" name="id" value="<?php echo $id;?>" /></dd>
		</dl>
		<dl>
		 <dd>订单号</dd>
		 <dd style="width:203px;padding-left:0px">&nbsp;<font color="#dd0000"><?php echo $trade['trade_id'];?></font></dd>
		</dl>
		<dl>
		 <dd>单&nbsp;&nbsp;价</dd>          
		 <dd style="width:203px;padding-left:0px">&nbsp;<font color="#dd0000"><?php echo $trade['pay_price'];?> ( 成交数量：<?php echo $trade['item_num'];?> )</font></dd>
		</dl>
		<?php if($trade['jifenbao']>0){?>
		<dl>
		  <dd>返<?=TBMONEY?></dd>
		  <dd style="width:203px;padding-left:0px">&nbsp;<font color="#dd0000"><?=jfb_data_type($trade['jifenbao'])?></font></dd>
		</dl>
		<?php }?>
		<dl>
		  <dd>淘宝订单编号：</dd>
		  <dt>  <input name="trade_id" type="text" id="trade_id" class="ddinput required" num='y' style="width:120px;"/></dt>
		</dl>
		<dl>
		  <dd>验证码：</dd>
		  <dt><input name="captcha" type="text" size="10" maxlength="4" class="ddinput required" style="width:80px;" />&nbsp; <?=yzm()?></dt>
		</dl>	        
		<div style="text-align:center; margin:10px 0px; line-height:20px; font-size:16px;">
			  <input type="submit" name="sub" value="找回订单" class="submit" /></div>           
		</div>	
   </div>
</div>
</form>
<?php
 include(TPLPATH.'/inc/footer.tpl.php');
?>