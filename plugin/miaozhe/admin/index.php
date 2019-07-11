<?php 
/**
 * ============================================================================
 * 版权所有 2008-2012 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}

/*if(isset($_POST['sub'])){
	//添加逻辑代码
	//jump(-1,'设置完成');
}*/
?>
<style type="text/css">
<!--
.STYLE2 {
	color: #0066CC;
	font-size: 16px;
}
-->
</style>

<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>&do=<?=$do?>&plugin_id=<?=$plugin_id?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
  <?php include(ADMINROOT.'/template/plugin/dd_set.tpl.php');?>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;<span class="STYLE2"><a href="http://bbs.duoduo123.com/read-1-1-212489.html" target="_blank">说明教程</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php?mod=template&act=admin_set&title=%E4%BC%98%E5%A4%9A%E5%95%86%E5%9F%8Ev1%E6%A8%A1%E6%9D%BF&tpl=miaozhe&tpl_type=pc">设置模板</a></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="submit" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>