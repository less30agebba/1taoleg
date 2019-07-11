<?php
$parameter=act_user_huan();
extract($parameter);
$css[]=TPLURL."/inc/css/usercss.css";
include(TPLPATH."/inc/header3.tpl.php");
?>
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
                    <li class="userdaohang_xz"><a>我的兑换商品</a> </li>
                    <li style="background:none;"><a target="_blank" href="<?=u('huan','list')?>"><font color="#FF0000">立即兑换礼品</font></a></li>
                    </ul>
              	</div>
                <div class="admin_table">
                <?php foreach($huan as $r){?>
                   <table width="900" border="0" cellspacing="0" cellpadding="0" class="admin_table_fx" style="padding-left:20px">
                      <tr>
                        <td width="105" height="90" align="center"><a target="_blank" href="<?=u('huan','view',array('id'=>$r['huan_goods_id']))?>"><img src="<?=$r['img']?>" alt="<?=$r['title']?>" /></a></td>
                        <td width="665">
                        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="27" colspan="4"><strong>商品名：</strong><a target="_blank" href="<?=u('huan','view',array('id'=>$r['huan_goods_id']))?>"><?=$r["title"]?></a></td>
                            <td width="200" height="27"><font color="#006600"><?=date('Y-m-d H:i:s',$r['addtime'])?></font></td>
                          </tr>
                          <tr>
                            <td width="150" height="34"><?php if($r['mode']==1){echo TBMONEY.'：'.jfb_data_type($r["spend"]);}else{echo '积分'.'：'.$r["spend"];}?>个 </td>
                            <td width="150">&nbsp;&nbsp;&nbsp;QQ：<?=$r['qq']?></td>
                            <td width="200">&nbsp;&nbsp;&nbsp;&nbsp;手机：<?=$r['mobile']?></td>
                            <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;状态：<?=$huan_status['status'][$r["status"]]?></td>
                          </tr>
                        </table></td>
                      </tr>
                </table>
                <?php }?>
                <?php if($total==0){?>
                    <div style="margin-top:25px; text-align:center">暂无数据</div>
                    <?php }?>
                <div class="megas512" style="clear:both"><?=pageft($total,$pagesize,u(MOD,ACT));?></div>
                </div>
            </div>
    	</div>
  </div>
</div>

<?php include(TPLPATH."/inc/footer.tpl.php"); ?>