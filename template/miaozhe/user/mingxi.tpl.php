<?php
$parameter=act_user_mingxi($pagesize=15,$field='*',$field2='*');
extract($parameter);
$css[]=TPLURL."/inc/css/usercss.css";
include(TPLPATH."/inc/header.tpl.php");
?>
<style type="text/css">
table,table td,table th{border:1px solid #ddd;border-collapse:collapse; height:33px; font-size:16px}
</style>
<div class="mainbody">
	<div class="mainbody1200">
    <?php include(TPLPATH."/user/top.tpl.php");?>
    	<div class="adminmain">
        <div class="adminleft">
        	<?php include(TPLPATH."/user/left.tpl.php");?>
          </div>
        	<div class="adminright">
                <?php include(TPLPATH."/user/notice.tpl.php");?>
                <div class="userdaohang">
                    <ul>
                    <li id="in"><a href="<?=u('user','mingxi',array('do'=>'in'))?>">我的收入明细</a> </li>
                    <li id="out" ><a href="<?=u('user','mingxi',array('do'=>'out'))?>">我的提取明细</a> </li>
                    <li id="tui" ><a href="<?=u('user','mingxi',array('do'=>'tui'))?>">我的退款明细</a> </li>
                    <li id="kou" ><a href="<?=u('user','mingxi',array('do'=>'kou'))?>">我的扣除明细</a> </li>
                    </ul>
                    <script>
                    $(function(){
					    $('.userdaohang li#<?=$do?>').addClass('userdaohang_xz');
					})
                    </script>
              	</div>
                <div class="admin_table" style="border:none; padding:0">
                    <table width="928" border="0" cellpadding="0" cellspacing="1">
					 <tr>
					  	<td colspan="6" align="center" style="color:#E4393C;">亲！账户，积分，集分宝和余额变动都会出现在收入明细里面，请注意查收！</td>
                      </tr>
					 <?php if($do=='ba'){?>
                      <tr>
                        <th width="120" height="26">收入事件</th>
                        <th>收入说明</th>
                        <th width="60">金额</th>
                        <th width="60"><?=TBMONEY?></th>
                        <th width="60">积分</th>
                        <th width="200">成交时间</th>
                      </tr>
                      <?php foreach($mingxi as $r){?>
                      <tr>
                        <td height="33"><?=$mingxi_tpl[$r["shijian"]]['title']?></td>
                        <td><?=mingxi_content($r,$mingxi_tpl[$r["shijian"]]['content'])?></td>
                        <td><?=$r["money"]?></td>
                        <td><?=jfb_data_type($r["jifenbao"])?></td>
                        <td><?=$r["jifen"]?></td>
                        <td><?=$r["addtime"]?></td>
                      </tr>
                      <?php }?>
                     <?php }?>
                     
                    <?php if($do=='in'){?>
                      <tr bgcolor="#FBF7D5">
                        <th width="120" height="26">收入事件</th>
                        <th>收入说明</th>
                        <th width="60">金额</th>
                        <th width="60"><?=TBMONEY?></th>
                        <th width="60">积分</th>
                        <th width="150">成交时间</th>
                      </tr>
                      <?php foreach($mingxi as $r){?>
                      <tr>
                        <td height="33"><?=$mingxi_tpl[$r["shijian"]]['title']?></td>
                        <td style="text-align:left">&nbsp;&nbsp;&nbsp;<?=mingxi_content($r,$mingxi_tpl[$r["shijian"]]['content'])?></td>
                        <td><?=$r["money"]?></td>
                        <td><?=jfb_data_type($r["jifenbao"])?></td>
                        <td><?=$r["jifen"]?></td>
                        <td><?=$r["addtime"]?></td>
                      </tr>
                      <?php }?>
                     <?php }?>
                     
                     <?php if($do=='kou'){?>
                      <tr bgcolor="#FBF7D5">
                        <th width="120" height="26">扣除事件</th>
                        <th>扣除说明</th>
                        <th width="60">金额</th>
                        <th width="60"><?=TBMONEY?></th>
                        <th width="60">积分</th>
                        <th width="130">时间</th>
                      </tr>
                      <?php foreach($mingxi as $r){?>
                      <tr>
                        <td height="33"><?=$mingxi_tpl[$r["shijian"]]['title']?></td>
                        <td style="text-align:left"><?=mingxi_content($r,$mingxi_tpl[$r["shijian"]]['content'])?></td>
                        <td><?=$r["money"]?></td>
                        <td><?=jfb_data_type($r["jifenbao"])?></td>
                        <td><?=$r["jifen"]?></td>
                        <td><?=$r["addtime"]?></td>
                      </tr>
                      <?php }?>
                     <?php }?>
                      
                     <?php if($do=='tui'){?>
                      <tr bgcolor="#FBF7D5">
                        <th width="120" height="26">事件</th>
                        <th>说明</th>
                        <th width="60">金额</th>
                        <th width="60"><?=TBMONEY?></th>
                        <th width="60">积分</th>
                        <th width="130">时间</th>
                      </tr>
                      <?php foreach($mingxi as $r){?>
                      <tr>
                        <td height="33"><?=$mingxi_tpl[$r["shijian"]]['title']?></td>
                        <td style="text-align:left"><?=mingxi_content($r,$mingxi_tpl[$r["shijian"]]['content'])?></td>
                        <td><?=$r["money"]?></td>
                        <td><?=jfb_data_type($r["jifenbao"])?></td>
                        <td><?=$r["jifen"]?></td>
                        <td><?=$r["addtime"]?></td>
                      </tr>
                      <?php }?>
                     <?php }?>
                     
                     <?php if($do=='out'){?>
                      <tr bgcolor="#FBF7D5">
                        <th width="" height="26">收款工具</th>
                        <th width="12%">提集分宝额</th>
                        <th width="20%">提取状态</th>
                        <th width="15%">提取IP</th>
                        <th width="25%">提取时间</th>
                      </tr>
                      <?php foreach($mingxi as $r){?>
                      <tr>
                        <td height="33"><?=$tx_tool[$r["tool"]].'：'.$r["code"]?></td>
                        <td><?=$r["type"]==1?(jfb_data_type($r["money"]).' '.TBMONEY):$r["money"].' 元'?></td>
                        <td><?=$tixian_arr[$r["status"]]?></td>
                        <td><?=$r["ip"]?></td>
                        <td><?=date('Y-m-d H:i:s',$r["addtime"])?></td>
                      </tr>
                      <?php }?>
                     <?php }?>
                    </table>
                    <?php if($total==0){?>
                    <div align="center"><div class="wu" style="margin-top:25px; text-align:center">暂无数据</div> </div>
                    <?php }?>
              </div>
              <div class="page" style="clear:both"><?=pageft($total,$pagesize,u(MOD,ACT,array('do'=>$do)));?></div>
            </div>
    	</div>
  </div>
</div>

<?php include(TPLPATH."/inc/footer.tpl.php"); ?>