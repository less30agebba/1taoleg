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
<form action="<?=$action_url?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd" style="font-size:14px">
    
    <tr style="height:55px;">
        <td align="right">优多APP开关：</td>
        <td>&nbsp;<?=html_radio($zhuangtai_arr,$tpl_data['foot_vipduo'],'foot_vipduo')?> </td>
    </tr>      
     <tr style="height:55px;">
        <td align="right">底部手机版开关：</td>
        <td>&nbsp;<?=html_radio($zhuangtai_arr,$tpl_data['foot_wap'],'foot_wap')?> </td>
    </tr>
  <tr bgcolor="#FFF3EE" style="height:15px">
      <td align="right"></td>
      <td>&nbsp;</td>
    </tr>
    <tr style="height:55px;">
      <td width="120px" align="right">微信二维码：</td>
      <td>&nbsp;<input name="erweima" type="text" value="<?=$tpl_data['erweima']?>" id="erweima" class="btn3" style="width:300px; height:30px" /> <input class="sub" type="button" value="上传二维码" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'erweima','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">可直接添加网络地址</span></td>
    </tr>
  <tr style="height:55px;">
    <td align="right" >微信号：</td>
    <td >&nbsp;<input name="weixinhao" value="<?=$tpl_data['weixinhao']?$tpl_data['weixinhao']:''?>" style="width:300px; height:30px" />&nbsp;<span class="zhushi">微信客服号</span></td>
  </tr>
  <tr style="height:15px" bgcolor="#FFF3EE">
      <td align="right"></td>
      <td>&nbsp;</td>
    </tr>
     <tr style="height:55px;">
      <td width="115px" align="right">手机WAP二维码：</td>
      <td>&nbsp;<input name="wap" type="text" value="<?=$tpl_data['wap']?>" id="wap" class="btn3" style="width:300px; height:30px" /> <input class="sub" type="button" value="上传二维码" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'wap','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">可直接添加网络地址</span></td>
    </tr>
  <tr> <tr style="height:15px">
      <td align="right"></td>
      <td>&nbsp;</td>
    </tr>
    <tr style="height:55px;" bgcolor="#FFF3EE">
      <td width="115px" align="right">手机APP二维码：</td>
      <td>&nbsp;<input name="app" type="text" value="<?=$tpl_data['app']?>" id="app" class="btn3" style="width:300px; height:30px" /> <input class="sub" type="button" value="上传二维码" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'app','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">可直接添加网络地址</span></td>
    </tr>
   <tr style="height:55px;">
    <td align="right" >安卓版下载地址：</td>
    <td >&nbsp;<input name="apkurl" value="<?=$tpl_data['apkurl']?$tpl_data['apkurl']:''?>" style="width:300px; height:30px" />&nbsp;<span class="zhushi">安卓app下载地址</span></td>
  </tr>
  <tr style="height:55px;">
    <td align="right" >苹果版下载地址：</td>
    <td >&nbsp;<input name="ipaurl" value="<?=$tpl_data['ipaurl']?$tpl_data['ipaurl']:''?>" style="width:300px; height:30px" />&nbsp;<span class="zhushi">苹果版app下载地址</span></td>
  </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td>&nbsp;<input type="submit" name="sub" class="sub" value=" 保 存 设 置 " /></td>
  </tr>
  </table>
</form>