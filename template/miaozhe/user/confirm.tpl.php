<?php
$parameter=act_user_confirm();
extract($parameter);
$css[]=TPLURL."/inc/css/usercss.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<script>
function uploadCall(divId,imgUrl){
	$("#img_show").attr('src',imgUrl);
}
function openpic(url,name,w,h)
{
    window.open(url,name,"top=100,left=400,width=" + w + ",height=" + h + ",toolbar=no,menubar=no,scrollbars=yes,resizable=no,location=no,status=no");
}
</script>
<style type="text/css">
table,table td,table th{border:1px solid #e1e1e1;border-collapse:collapse; padding-left:15px; height:50px; font-size:16px}
</style>
<div class="mainbody">
	<div class="mainbody1200">
    	<div class="adminmain">
    <?php include(TPLPATH."/user/top.tpl.php");?>
        	<div class="adminleft">
                <?php include(TPLPATH."/user/left.tpl.php");?>
            </div>
        	<div class="adminright">
                <?php include(TPLPATH."/user/notice.tpl.php");?>
                <div class="userdaohang">
                    <ul>
                    <li id="taobao"><a href="<?=u('user','tradelist',array('do'=>'taobao'))?>">淘宝订单</a> </li>
                    <li id="mall"><a href="<?=u('user','tradelist',array('do'=>'mall'))?>">商城订单</a> </li>
                    <li id="chadan"><a href="<?=u('user','chadan')?>">认领订单</a> </li>
						 <?php if($webset['gametask']['status']==1){?>
                    <li id="gametask"><a href="<?=u('user','tradelist',array('do'=>'gametask'))?>">游戏订单</a> </li>
                    <?php }?>
                    <?php if($webset['task']['status']==1){?>
                    <li id="task"><a href="<?=u('user','tradelist',array('do'=>'task'))?>">任务订单</a> </li>
                    <?php }?>
                    </ul>
              	</div>
                <script>$('.userdaohang ul #chadan').addClass('userdaohang_xz');</script>
				
                      <div class="admin_table" style="border:none; padding:0">
      <form id="form2" name="form2" method="post" action="" onsubmit="return checkForm($(this))"  enctype="multipart/form-data">
        <table width="100%" border="0"  style="text-align:left" cellspacing="0" cellpadding="0" >
           <tr>
				  <?php if(TAOTYPE==1){?><td colspan="3" align="center" style="color:#E4393C; padding:15px; line-height:35px; text-align:left"> 注：未结算的订单不显示具体返利详情，请输入订单号进行确认，只要您输入的订单号与系统内的一致，这笔交易您就确认成功了。</td>   <?php }elseif(TAOTYPE==2){?>
				  <td colspan="5" align="center" style="color:#E4393C; padding:15px; line-height:35px; text-align:left">	注：如果您发现系统没有自动返利给您，可能是您购买商品的时候未登录，请输入订单号进行确认，只要您输入的订单号与系统内的一致，这笔交易您就确认成功了</td> <?php }?>
                      </tr>
        <?php if($do=='tao'){?>
          <tr style="">
            <td width="150" height="35" align="left"><div align="left">商品名称</div></td>
            <td colspan="2" align="left">&nbsp;
             <font color="#dd0000"><?php echo $trade['item_title'];?></font>
                  <input type="hidden" name="id" value="<?php echo $id;?>" />             </td>
          </tr>
		  <tr>
                          <td height="35" align="right"><div align="left">淘宝订单编号</div></td>
                          <td height="35" align="left">&nbsp;
                         <font color="#dd0000"><?php echo $trade['trade_id'];?></font></td>
                          <td width="350" rowspan="5" align="left">
							  <a href="https://buyertrade.taobao.com/trade/itemlist/list_bought_items.htm?spm=a21bo.7724922.1997525045.2.u4zD39" target="_blank"><font color="#FF0000" size="+1">去我的淘宝查看订单号</font></a>
						
                            <?php if($webset['taoapi']['trade_check']==1){?>
							 <div id="newPreview" style=" width:330px; height:79px; margin:20px 0; background:url(images/ddjt.jpg); border:#CCC 1px solid"></div>
                          <p align="left"><em style="font-style:normal;" id="ckup_pic"></em><input type="hidden" name="ddjt" id="ddjt" value=""/>
                          <input class="sharebtn" type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'ddjt','default_img'=>'images/ddjt.jpg','sid'=>session_id()))?>&picname=trade_<?=$trade['num_iid']?>'+DDUID,'upload','500','500')" /></p>
						  <?php }else{?>
						  <div style=" width:330px; margin:20px 0; background:url(images/ddjt.jpg); border:#CCC 1px solid"> <img src="<?=TPLURL?>/inc/images/user/chadan.png"/></div>
                         
                        
                            <?php }?>                          </td>
              </tr>
                        <tr>
                          <td height="35" align="right"><div align="left">商品成交单价</div></td>
                          <td height="35" align="left">&nbsp;
                         <font color="#dd0000"><?php echo $trade['pay_price'];?> ( 成交数量：<?php echo $trade['item_num'];?> )</font></td>
              </tr>
                          <?php if($trade['jifenbao']>0){?>
                        <tr>
                          <td height="35" align="right"><div align="left">返<?=TBMONEY?>数量</div></td>
                          <td height="35" align="left">&nbsp;
                          <font color="#dd0000">
                            <?=jfb_data_type($trade['jifenbao'])?><?=TBMONEY?>
                          </font></td>
              </tr>
                        <?php }?>
                          <td height="35" align="right" id="ckjyh"><div align="left"><font color="#FF0000">输入淘宝订单号</font></div></td>
                          <td width="239" height="35" align="left">
                            <div align="left">
                              <input name="trade_id" type="text" id="trade_id" class="ddinput required" num='y' style="width:210px;"/>
                            </div></td>
                          </tr>
                        <tr>
                          <td height="35" align="right" id="ckyzm"><div align="left">验证码</div></td>
                          <td height="35" align="left"><div align="left">
                          <input name="captcha" type="text" size="10" maxlength="4" class="ddinput required" style="width:100px;" />
                          &nbsp; 
                          <?=yzm()?>
                          </div></td>
                          </tr>
                        <tr>
                          <td height="35" colspan="3" align="right"> <p style="margin:20px 0 15px -180px"><input type="submit" name="sub" value="提交认领" class="bbtt2" />
                          </p></td>
                        </tr>
          </table>
          <?php }elseif($do=='paipai'){?>
        <table width="680" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="121" height="35" align="right"><div align="left">商品名称：</div></td>
            <td height="35" colspan="2" align="left">&nbsp;
              <div align="left"><font color="#dd0000"><?php echo $trade['commName'];?></font>
                  <input type="hidden" name="id" value="<?php echo $id;?>" />
              </div></td>
          </tr>
		  <tr>
                          <td height="35" align="right"><div align="left">拍拍订单号：</div></td>
                          <td height="35" align="left">&nbsp;
                          <div align="left"><font color="#dd0000"><?php echo $trade['dealId'];?></font></div></td>
              </tr>
                        <tr>
                          <td height="35" align="right"><div align="left">成交价：</div></td>
                          <td height="35" align="left">&nbsp;
                          <div align="left"><font color="#dd0000"><?php echo $trade['careAmount'];?> ( 成交数量：<?php echo $trade['commNum'];?> )</font></div></td>
              </tr>
                        <tr>
                          <td height="35" align="right"><div align="left">返利金额：</div></td>
                          <td height="35" align="left">&nbsp;
                          <div align="left"><font color="#dd0000"><?php echo $trade['fxje'];?></font></div></td>
              </tr>
                        <tr>
                          <td height="35" align="right" id="ckjyh"><div align="left">输入拍拍订单号：</div></td>
                          <td width="239" height="35" align="left">
                            <div align="left">
                              <input name="dealId" type="text" id="dealId" class="ddinput required" num='y' style="width:120px;"/>
                          </div></td>
              </tr>
                        <tr>
                          <td height="35" align="right" id="ckyzm"><div align="left">验证码：</div></td>
                          <td height="35" align="left"><div align="left">
                          <input name="captcha" type="text" size="10" maxlength="4" class="ddinput required" style="width:80px;" />
                          &nbsp; 
                          <?=yzm()?>
                          </div></td>
              </tr>
                        <tr>
                          <td height="35" align="right"><div align="left"></div></td>
                          <td height="35" colspan="2" align="left"><div class="img-button "><p align="left"><input type="submit" name="sub" value="找回订单" /></p></div></td>
                        </tr>
          </table>
          <?php }elseif($do=='mall'){?>
          <table width="300" border="0" cellspacing="0" cellpadding="0" style=" margin-left:150px">
          <tr>
                          <td width="121" height="35" align="right"><div align="left">下单商城：</div></td>
                          <td height="35" align="left">&nbsp;
                          <div align="left"><font color="#dd0000"><?php echo $trade['mall_name'];?></font></div></td>
              </tr>
		  <tr>
                          <td height="35" align="right"><div align="left">订单号：</div></td>
                          <td height="35" align="left">&nbsp;
                          <div align="left"><font color="#dd0000"><?php echo $trade['order_code'];?></font></div></td>
              </tr>
                        <tr>
                          <td height="35" align="right"><div align="left">单&nbsp;&nbsp;价：</div></td>
                          <td height="35" align="left">&nbsp;
                          <div align="left"><font color="#dd0000"><?php echo $trade['item_price'];?> ( 成交数量：<?php echo $trade['item_count'];?> )</font></div></td>
              </tr>
                        <tr>
                          <td height="35" align="right"><div align="left">返利金额：</div></td>
                          <td height="35" align="left">&nbsp;
                          <div align="left"><font color="#dd0000"><?php echo $trade['fxje'];?></font></div></td>
              </tr>
                        <tr>
                          <td height="35" align="right" id="ckjyh"><div align="left">输入订单号：</div></td>
                          <td width="239" height="35" align="left">
                            <div align="left">
                              <input name="order_code" type="text" id="order_code" class="ddinput required" style="width:120px;"/>
                          </div></td>
              </tr>
                        <tr>
                          <td height="35" align="right" id="ckyzm"><div align="left">验证码：</div></td>
                          <td height="35" align="left"><div align="left">
                          <input name="captcha" type="text" size="10" maxlength="4" class="ddinput required" style="width:80px;" />
                          &nbsp; 
                          <?=yzm()?>
                          </div></td>
              </tr>
                        <tr>
                          <td height="35" align="right"><div align="left"></div></td>
                          <td height="35" colspan="2" align="left"><div align="left">
                            <input type="hidden" name="id" value="<?php echo $id;?>" />
                          </div>                          <div class="img-button"><p align="left"><input type="submit" name="sub" value="找回订单"  class="bbtt"/></p></div></td>
                        </tr>
          </table>
          <?php }?>
        </form>
	  </div>
	</div>
</div>
    	</div>
  </div>
</div>

<?php include(TPLPATH."/inc/footer.tpl.php"); ?>