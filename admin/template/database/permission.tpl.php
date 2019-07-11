<?php 
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}


include(ADMINTPL.'/header.tpl.php');
$moren_time='2017-11-28 00:00:00';
?>

<style>
ul{ list-style:none; padding:0px; margin:0px; margin-top:20px}
ul li{ margin-bottom:5px; font-size:14px}
</style>
<div class="explain-col">根据淘宝联盟要求，不管商品实际佣金多少，都只能给会员固定的返利。此工具可按设置提升部分会员权限，按照实际佣金给会员对应的返利</div>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>" method="get" name="form1">
<input type="hidden" name="mod" value="<?=MOD?>" />
<input type="hidden" name="act" value="<?=ACT?>" />
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <tr>
    <td align="right" width="115px">会员注册时间：</td>
    <td>&nbsp;<input style="width:140px" name="reg_time" value="<?=$moren_time?>" id="sdatetime"/>&nbsp;<span class="zhushi">默认<?=$moren_time?>之前注册的会员有权限，<b style="color:#F00">可为空</b></span></td>
  </tr>
  <tr>
    <td align="right" width="115px">最近下单时间：</td>
    <td>&nbsp;<input style="width:140px" name="trade_time" value="<?=$moren_time?>" id="edatetime"/>&nbsp;<span class="zhushi">默认<?=$moren_time?>之前有过付款订单的会员有权限，<b style="color:#F00">可为空</b></span></td>
  </tr>
  <tr>
    <td align="right" width="115px">会员等级：</td>
    <td>&nbsp;<input style="width:140px" name="level" value="10" />&nbsp;<span class="zhushi">默认会员level>=10有权限，可自己设置</span></td>
  </tr>
  <tr>
    <td align="right" width="115px">每页运行数量：</td>
    <td>&nbsp;<input style="width:140px" name="size" value="100" />&nbsp;<span class="zhushi">默认会员100，可根据自己服务器设置</span></td>
  </tr>
  <tr>
     <td align="right">&nbsp;</td>
     <td>&nbsp;<input type="submit" name="sub" value=" 提 交 " /></td>
  </tr>
</table>
</form>
<?php include(ADMINTPL.'/footer.tpl.php');?>