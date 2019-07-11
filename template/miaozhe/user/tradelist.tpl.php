<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$parameter=act_user_tradelist();
extract($parameter);
$mall_status_arr=include(DDROOT.'/data/status_arr_mall.php');
$paipai_checked_arr=include(DDROOT.'/data/status_arr_paipai.php');
$tb_status_arr=include(DDROOT.'/data/status_arr.php');
$b_status_arr=array('已审核','拒绝','待审核');
$b_status_color_arr=array('color:green','color:red','');
$css[]=TPLURL.'/inc/css/usercss.css';
$css[]='css/qqFace.css';
include(TPLPATH.'/inc/header.tpl.php');
$shai_word=array(0=>'已晒单，请点击查看',2=>'等待客服审核');
$shai_title='点击晒单';
if($webset['baobei']['shai_jifen']>0){
	$shai_title.='，奖励'.$webset['baobei']['shai_jifen'].'积分';
}
if($webset['baobei']['shai_jifenbao']>0){
	$shai_title.='，奖励'.$webset['baobei']['shai_jifenbao'].TBMONEY;
}
if($webset['baobei']['shai_jifen']>0 || $webset['baobei']['shai_jifenbao']>0){
	$shai_t='-有奖';
}
?>
<script>
function checkTradelist(){
    var q=document.getElementById('q').value;
	if(q=='输入订单号' || q==''){
	    alert('订单号不能为空');
		return false;
	}
}
</script>
<style type="text/css">
table,table td,table th{border:1px solid #e1e1e1;border-collapse:collapse; height:50px; font-size:16px}
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
                <div class="admin_searchx">
                <form action="index.php" onsubmit="return checkTradelist()">
                <input type="hidden" name="mod" value="user" /><input type="hidden" name="act" value="tradelist" />
                  <input class="admin_searchx_input1" type="text" id="q" name="q" value=" 输入订单号" onclick="this.value=''" />
                 <select name="do"  class="xx"><option value="lost">淘宝订单</option><option value="malllost">商城订单</option></select><input class="admin_searchx_b" type="submit" value="找回订单" style="margin-left:10px; font-size:16px;font-weight:bold;" /></form>
                </div>
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
                <script>$('.userdaohang ul #<?=$do?>').addClass('userdaohang_xz');</script>
				
                    <div class="admin_table" style="border:none; padding:0">
                    <table width="928" border="0" cellpadding="0" cellspacing="1">
                     <?php if($do=='taobao'){?>
                      <tr>
                        <th width="150" height="26">订单号</th>
                        <th>宝贝名称</th>
                        <th width="73">金额</th>
                        <?php if(FANLI==1){?><th width="100">返利</th><?php }?>
                        <th width="120"><?php if(TAOTYPE==2){?>结算时间<?php }else{?>下单时间<?php }?></th>
                        <?php if(TAOTYPE==1){?><th width="80">状态</th><?php }?>
                      </tr>
                      <?php foreach ($dingdan as $r){?>
                      <?php if(TAOTYPE==2){?>
                      <tr>
                        <td height="33"><?=$r["trade_id"]?></td>
                        <td><div style="height:16px; overflow:hidden;" title="<?=$r["item_title"]?>"><?=$r["item_title"]?></div></td>
                        <td><?=$r["real_pay_fee"]?></td>
                        <?php if(FANLI==1){?><td><?=$r["jifenbao"]>0?jfb_data_type($r["jifenbao"]).TBMONEY:$r["fxje"].'元'?></td><?php }?>
                        <td><?=date('Y-m-d',strtotime($r["pay_time"]))?></td>
                        <?php if($r["pay_time"]>=$webset['baobei']['shai_s_time']){?>
							<?php if($r["baobei_id"]>0){?> 
                            <td trade_id='<?=$r["id"]?>' iid='<?=$r["num_iid"]?>' trade_title='<?=$r["item_title"]?>' userimg='<?=$r["baobei_userimg"]?>' cid='<?=$r["baobei_cid"]?>' comment='<?=$r["baobei_content"]?>' reason='拒绝原因：<?=$r["baobei_reason"]?>' title='<?=$r["baobei_status"]==1?$r["baobei_reason"]:$shai_word[$r["baobei_status"]]?>' style=" <?=$b_status_color_arr[$r['baobei_status']]?>"><?=$b_status_arr[$r['baobei_status']]?>&nbsp;<?php if($r["baobei_status"]==0){?><a href="<?=u('baobei','view',array('id'=>$r["baobei_id"]))?>" target="_blank">查看</a> <?php }elseif($r["baobei_status"]==1){?><b class="reshai" style="cursor:pointer;font-weight:normal">查看</b><?php }?></td>
                            <?php }else{?>
                            <td trade_id='<?=$r["id"]?>' iid='<?=$r["num_iid"]?>' trade_title='<?=$r["item_title"]?>' title='<?=$shai_title?>'><?=$shai_tip[$r["baobei_id"]?1:0]?></td>
                             <?php }?>
                        <?php }else{?>
                        <td><span style="color:#F00">待结算</span></td>
                        <?php }?>
                      </tr>
                      <?php }else{if($r["real_pay_fee"]==0){$r["real_pay_fee"]=$r["pay_price"];}?>
                      <tr>
                        <td height="33"><?=$r["trade_id_former"]?$r["trade_id_former"]:$r["trade_id"]?></td>
                        <td><div class="ddnowrap" style="width:230px" title="<?=$r["item_title"]?>"><?=$r["item_title"]?></div></td>
                        <td><?=$r["real_pay_fee"]>0?$r["real_pay_fee"]:'等待结算'?></td>
                        <?php if(FANLI==1){?>
						<?php if($r["status"]==4){?>
                        <td><span style="color:red">无</span></td>
                        <?php }elseif($r['addtime']>0){?>
                        <td><?=$r["jifenbao"]>0?jfb_data_type($r["jifenbao"]).TBMONEY:'等待结算'?></td>
                        <?php }else{?>
                        <td><?=$r["jifenbao"]>0?jfb_data_type($r["jifenbao"]).TBMONEY:$r["fxje"].'元'?></td>
                        <?php }?>
                        <?php }?>
                        <td><?=date('Y-m-d',strtotime($r["create_time"]>0?$r["create_time"]:$r["pay_time"]))?></td>
                        
                        <?php if(TAOTYPE==1){?><td><?=$tb_status_arr[$r["status"]]?></td><?php }?>
                        
                        <?php if($r["status"]==4){?>
                        <td>——</td>
                        <?php }elseif($r["pay_time"]>=$webset['baobei']['shai_s_time']){?>
                        	<?php if($r["checked"]==2){?>
								 <?php if($r["baobei_id"]>0){?> 
                                <td trade_id='<?=$r["id"]?>' iid='<?=$r["num_iid"]?>' trade_title='<?=$r["item_title"]?>' userimg='<?=$r["baobei_userimg"]?>' cid='<?=$r["baobei_cid"]?>' comment='<?=$r["baobei_content"]?>' reason='拒绝原因：<?=$r["baobei_reason"]?>' title='<?=$r["baobei_status"]==1?$r["baobei_reason"]:$shai_word[$r["baobei_status"]]?>' style=" <?=$b_status_color_arr[$r['baobei_status']]?>"><?=$b_status_arr[$r['baobei_status']]?>&nbsp;<?php if($r["baobei_status"]==0){?><a href="<?=u('baobei','view',array('id'=>$r["baobei_id"]))?>" target="_blank">查看</a> <?php }elseif($r["baobei_status"]==1){?><b class="reshai" style="cursor:pointer;font-weight:normal">查看</b><?php }?></td>
                                <?php }else{?>
                             
                                <?php }?>
                        	<?php }else{?>
                        	<td>待审核</td>
                        	<?php }?>
                         <?php }else{?>
                        <td><span style="color:#F00">待结算</span></td>
                        <?php }?>
                      </tr>
                      <?php }?>
                      <?php }?>
                    <?php }?>
                    
                    <?php if($do=='lost'){?>
                      <tr>
                        <th width="120" height="26">订单号</th>
                        <th>宝贝名称</th>
                        <?php if(TAOTYPE==1){?>
                        <th width="60">单价</th>
                        <th width="60">数量</th>
                        <?php }else{?>
                        <th width="60">金额</th>
                        <?php if(FANLI==1){?><th width="60">返</th><?php }?>
                        <?php }?>
                        <th width="80">下单时间</th>
                        <th width="80">找回订单</th>
                      </tr>
                      <?php foreach ($dingdan as $r){?>
                      <?php if(TAOTYPE==2){?>
                      <tr>
                        <td height="33"><?=$r["trade_id"]?></td>
                        <td><div style="height:16px; overflow:hidden;" title="<?=$r["item_title"]?>"><?=$r["item_title"]?></div></td>
                        <td><?=$r["real_pay_fee"]?></td>
                       <?php if(FANLI==1){?> <td><?=$r["jifenbao"]>0?jfb_data_type($r["jifenbao"]).TBMONEY:$r["fxje"].'元'?></td><?php }?>
                        <td><?=date('Y-m-d',strtotime($r["pay_time"]))?></td>
                        <td><a href="<?=u('user','confirm',array('do'=>'tao',id=>$r["id"]))?>" target="_blank"><img src="images/queren.gif" width="86" height="20" title="我要确认这份订单" border=0 /></a></td>
                      </tr>
                      <?php }else{?>
                      <tr>
                        <td height="33"><?=$r["trade_id_former"]?></td>
                        <td><?=$r["item_title"]?></td>
                        <td><?=$r["pay_price"]?></td>
                        <td><?=$r["item_num"];?></td>
                        <td><?=date('Y-m-d',strtotime($r["create_time"]>0?$r["create_time"]:$r["pay_time"]))?></td>
                        <?php if(in_array($r["id"],$ziguanlian)){?>
                        <td>同一购物车</td>
                        <?php }else{?>
                        <td><a href="<?=u('user','confirm',array('do'=>'tao',id=>$r["id"]))?>"><img src="images/queren.gif" width="86" height="20" title="我要确认这份订单" border=0 /></a></td>
                        <?php }?>
                      </tr>
                      <?php }?>
                      <?php }?>
                    <?php }?>
                    
                    <?php if($do=='checked'){?>
                      <tr>
                        <th width="120" height="26">订单号</th>
                        <th>宝贝名称</th>
                        <th width="60">金额</th>
                        <?php if(FANLI==1){?><th width="60">返</th><?php }?>
                        <th width="80">成交时间</th>
                      </tr>
                      <?php foreach ($dingdan as $r){?>
                      <?php if(TAOTYPE==2){?>
                      <tr>
                        <td height="33"><?=$r["trade_id"]?></td>
                        <td><div style="height:16px; overflow:hidden;" title="<?=$r["item_title"]?>"><?=$r["item_title"]?></div></td>
                        <td><?=$r["real_pay_fee"]?></td>
                        <?php if(FANLI==1){?><td><?=$r["jifenbao"]>0?jfb_data_type($r["jifenbao"]).TBMONEY:$r["fxje"].'元'?></td><?php }?>
                        <td><?=date('Y-m-d',strtotime($r["pay_time"]))?></td>
                      </tr>
                      <?php }else{?>
                      <tr>
                        <td height="33"><?=$r["trade_id_former"]?></td>
                        <td><?=$r["item_title"]?></td>
                        <?php if($r["status"]==5){?>
                        <td><?=$r["real_pay_fee"]?></td>
                        <?php if(FANLI==1){?><td><?=$r["jifenbao"]>0?jfb_data_type($r["jifenbao"]).TBMONEY:$r["fxje"]?></td><?php }?>
                        <?php }else{?>
                        <td>等待结算</td>
                        <td>等待结算</td>
                        <?php }?>
                        <td><?=date('Y-m-d',strtotime($r["pay_time"]))?></td>
                      </tr>
                      <?php }?>
                      <?php }?>
                    <?php }?>
                    
                    <?php if($do=='paipai'){?>
                      <tr>
                        <th width="120" height="26">订单号</th>
                        <th>宝贝名称</th>
                        <th width="73">状态</th>
                        <th width="73">金额</th>
                        <th width="43">数量</th>
                        <?php if(FANLI==1){?><th width="59">返利</th><?php }?>
                        <th width="80">成交时间</th>
                        
                      </tr>
                      <?php foreach ($dingdan as $r){?>
                      <tr>
                        <td height="33"><?=$r["dealId"]?></td>
                        <td><?=$r["commName"]?></td>
                        <td><?=$paipai_checked_arr[$r["checked"]]?></td>
                        <td><?=$r["careAmount"]?></td>
                        <td><?=$r["commNum"]?></td>
                        <?php if(FANLI==1){?><td><?=$r["fxje"]?></td><?php }?>
                        <td><?=date('Y-m-d',$r["chargeTime"])?></td>
                      </tr>
                      <?php }?>
                    <?php }?>
                    
                    <?php if($do=='paipailost'){?>
                      <tr>
                        <th width="120" height="26">订单号</th>
                        <th>宝贝名称</th>
                        <th width="60">金额</th>
                        <?php if(FANLI==1){?><th width="60">返利</th><?php }?>
                        <th width="80">成交时间</th>
                        <th width="80">找回订单</th>
                      </tr>
                      <?php foreach ($dingdan as $r){?>
                      <tr>
                        <td height="33"><?=$r["dealId"]?></td>
                        <td><?=$r["commName"]?></td>
                        <td><?=$r["careAmount"]?></td>
                        <?php if(FANLI==1){?><td><?=$r["fxje"]?></td><?php }?>
                        <td><?=date('Y-m-d',$r["chargeTime"])?></td>
                        <td><a href="<?=u('user','confirm',array('do'=>'paipai',id=>$r["id"]))?>"><img src="images/queren.gif" width="86" height="20" title="我要确认这份订单" border=0 /></a></td>
                      </tr>
                      <?php }?>
                    <?php }?>
                    
                    <?php if($do=='mall'){?>
                      <tr>
                        <th height="26">订货号</th>
                        <th width="120">下单商城</th>
                        <th width="60">数量</th>
                        <th width="60">单价</th>
                        <?php if(FANLI==1){?>
                        <th width="80">返利</th>
                        <th width="60">积分</th>
                        <?php }?>
                        <th width="150">成交时间</th>
                        <th width="100">交易状态 </th>
                      </tr>
                      <?php foreach ($dingdan as $r){?>
                      <tr>
                        <td height="33"><?=$r["order_code"]?></td>
                        <td><?=$r["mall_name"]?></td>
                        <td><?=$r["item_count"]?></td>
                        <td><?=$r["item_price"]?></td>
                        <?php if(FANLI==1){?>
                        <td><?=$r["fxje"]?></td>
                        <td><?=$r["jifen"]?></td>
                        <?php }?>
                        <td><?=date('Y-m-d H:i:s',$r["order_time"])?></td>
                        <td><a target="_blank" href="<?=$dd_tpl_data['jiaocheng']['mall_order']?>" title="点击查看说明"><?=$mall_status_arr[$r["status"]]?></a></td>
                      </tr>
                      <?php }?>
                    <?php }?>
                    
                    <?php if($do=='malllost'){?>
                      <tr>
                        <th height="26">订货号</th>
                        <th width="120">下单商城</th>
                        <th width="80">成交数量</th>
                        <th width="60">单价</th>
                        <?php if(FANLI==1){?><th width="120">返利</th><?php }?>
                        <th width="150">成交时间</th>
                        <th width="100">找回订单</th>
                      </tr>
                      <?php foreach ($dingdan as $r){?>
                      <tr>
                        <td height="33"><?=$r["order_code"]?></td>
                        <td><?=$r["mall_name"]?></td>
                        <td><?=$r["item_count"]?></td>
                        <td><?=$r["item_price"]?></td>
                        <?php if(FANLI==1){?><td><?=$r["fxje"]?></td><?php }?>
                        <td><?=date('Y-m-d H:i:s',$r["order_time"])?></td>
                        <td><a href="<?=u('user','confirm',array('do'=>'mall',id=>$r["id"]))?>"><img src="images/queren.gif" width="86" height="20" title="我要确认这份订单" border=0 /></a></td>
                      </tr>
                      <?php }?>
                    <?php }?>
                      <?php if($do=='task'){?>
                      <tr>
                        <th width="120" height="26">订单号</th>
                        <th>任务名称</th>
                        <th width="60">奖励</th>
                        <th width="120">订单时间</th>
                      </tr>
                      <?php foreach ($dingdan as $r){?>
                      <tr>
                        <td height="33"><?=$r["eventid"]?></td>
                        <td><?=$r["programname"]?></td>
                        <td><?=(float)$r["point"]?>元</td>
                        <td><?=$r["addtime"]?></td>
                      </tr>
                      <?php }?>
                      
                    <?php }?>
                    </table>
                   <?php if($total==0){?><div align="center"><div style="margin-top:105px; margin-bottom:40px; text-align:center"><img src="<?=TPLURL?>/inc/images/user/wu.jpg" border="0" /></div> </div>
                    <?php }?>
                </div>
                <div class="page" style="clear:both"><?=pageft($total,$pagesize,u(MOD,ACT,array('do'=>$do)));?></div>
                
               
                
                <?php if($do=='taobao' && ($webset['taoapi']['freeze']==2 || $webset['taoapi']['freeze']==1)){?>
                <?php if($webset['taoapi']['freeze_limit']>0){$w='返利大于'.$webset['taoapi']['freeze_limit'].TBMONEY;}?>
                <div class="adminright_yuye">
                    <div class="tishitubiao"></div>
                    <?php if($webset['taoapi']['freeze']==2){?>
                    <p>亲！16天内<?=$w?>的淘宝订单处于未核对状态。</p>
                    <?php }?>
                </div>
                <?php }?>
            </div>
    	</div>
  </div>
</div>
<?php
include(TPLPATH."/baobei/share.tpl.php");
include(TPLPATH."/inc/footer.tpl.php");
?>