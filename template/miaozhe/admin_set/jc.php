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

if($_POST['sub']!=''){
	$moban_name='pc_'.$_GET['tpl'];
	unset($_POST['sub']);
	unset($_POST['tpl']);
	$tpl_data=(array)dd_unxuliehua($duoduo->select('tpl','data','title="'.$moban_name.'"'));
	foreach($_POST as $k=>$v){
		$tpl_data[$k]=$v;
	}
	$data=array('title'=>$moban_name,'data'=>dd_xuliehua($tpl_data));
	$tpl_id=(int)$duoduo->select('tpl','id','title="'.$moban_name.'"');
	if($tpl_id==0){
		$duoduo->insert('tpl',$data);
	}
	else{
		$duoduo->update('tpl',$data,'id="'.$tpl_id.'"');
	}
	
	dd_set_cache('tpl/'.$moban_name,$tpl_data);
	jump(-1,'设置完成');
}
else{
	$duoduo->update('tpl',array('title'=>'pc_default'),'title="default"');
	$moban_name='pc_'.MOBAN_NAME;
	$tpl_data=$duoduo->select('tpl','data','title="'.$moban_name.'"');
	$tpl_data=(array)dd_unxuliehua($tpl_data);
}
?>
<style type="text/css">
.STYLE1 {
	font-size: 16px;
	color: #009900;
}
</style>
<form action="<?=$action_url?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd" style="font-size:14px">

 <tr style="height:55px;">
        <td align="right" width="150px">APP专题扫描：</td>
        <td><a href="/index.php?mod=shouji&amp;act=index" target="_blank">&nbsp;&nbsp;&nbsp;<span class="STYLE1">查看专题页面 </span></a></td>
    </tr>
	
 <tr style="height:55px;">
        <td align="right" width="150px">淘宝返利教程：</td>
        <td><a href="/index.php?mod=help&amp;act=taobao" target="_blank">&nbsp;&nbsp;&nbsp;<span class="STYLE1">查看专题页面 </span></a></td>
    </tr>
  <tr style="height:55px;">
        <td align="right" width="150px">商城返利教程：</td>
        <td><a href="/index.php?mod=help&amp;act=mall" target="_blank">&nbsp;&nbsp;&nbsp;<span class="STYLE1">查看专题页面 </span></a></td>
    </tr>
 <tr style="height:55px;">
        <td align="right" width="150px">拍拍返利教程：</td>
        <td><a href="/index.php?mod=help&amp;act=paipai" target="_blank">&nbsp;&nbsp;&nbsp;<span class="STYLE1">查看专题页面 </span></a></td>
    </tr>
  <tr style="height:55px;">
        <td align="right" width="150px">手机返利教程：</td>
        <td><a href="/index.php?mod=help&amp;act=shouji" target="_blank">&nbsp;&nbsp;&nbsp;<span class="STYLE1">查看专题页面 </span></a></td>
    </tr>
  <tr style="height:55px;">
        <td align="right" width="150px">什么是集分宝：</td>
        <td><a href="/index.php?mod=help&amp;act=jifenbao" target="_blank">&nbsp;&nbsp;&nbsp;<span class="STYLE1">查看专题页面 </span></a></td>
    </tr>
 <tr style="height:55px;">
        <td align="right" width="150px">返利怎么来的：</td>
        <td><a href="/index.php?mod=help&amp;act=fanli" target="_blank">&nbsp;&nbsp;&nbsp;<span class="STYLE1">查看专题页面 </span></a></td>
    </tr>
 <tr style="height:55px;">
        <td align="right" width="150px">微信关注我们：</td>
        <td><a href="/index.php?mod=help&amp;act=weixin" target="_blank">&nbsp;&nbsp;&nbsp;<span class="STYLE1">查看专题页面 </span></a></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td>&nbsp;<input type="submit" name="sub" class="sub" value=" 保 存 设 置 " /></td>
  </tr>
  </table>
</form>