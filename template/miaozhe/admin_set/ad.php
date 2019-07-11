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
        <td align="right" width="150px">大图广告开关：</td>
        <td>&nbsp;<?=html_radio($zhuangtai_arr,$tpl_data['ads-kg'],'ads-kg')?> </td>
    </tr>
	
  <tr style="height:55px;">
    <td align="right" >广告背景色：</td>
    <td >&nbsp;<input name="adsbg" value="<?=$tpl_data['adsbg']?$tpl_data['adsbg']:''?>" style="width:300px; height:30px" />&nbsp;<span class="zhushi">广告背景颜色，如：白色 #ffffff  不需要请留空</span></td>
	  <tr style="height:55px;">
      <td align="right">&nbsp;&nbsp;顶部大图广告：</td>
      <td>&nbsp;<input name="ads0" type="text" value="<?=$tpl_data['ads0']?$tpl_data['ads0']:'/template/lai95/inc/images/ad/1.jpg'?>" id="ads0" class="btn3" style="width:400px; height:30px" /> <input class="sub" type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'ads0','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">高度120px，宽度建议1920px</span></td>
    </tr>
   <tr style="height:55px;">
    <td align="right" >广告连接地址：</td>
    <td >&nbsp;<input name="ads0url" value="<?=$tpl_data['ads0url']?$tpl_data['ads0url']:'/'?>" style="width:400px; height:30px" />&nbsp;<span class="zhushi">填写广告连接地址</span></td>
  </tr>
    <tr style="height:25px;">
        <td colspan="2" align="left" width="150px">&nbsp;&nbsp;&nbsp;<font color="#FF0000">右侧固定边框广告</font></td>
    </tr>
	
	  <tr style="height:55px;">
      <td align="right">&nbsp;&nbsp;右侧邀请小图片：</td>
      <td>&nbsp;<input name="adstop1" type="text" value="<?=$tpl_data['adstop1']?$tpl_data['adstop1']:'/template/miaozhe/vip/images/style-nav.jpg'?>" id="adstop1" class="btn3" style="width:400px; height:30px" /> <input class="sub" type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'adstop1','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">大小：36px*100px</span></td>
    </tr>
	  <tr style="height:55px;">
      <td align="right">&nbsp;&nbsp;右侧邀请大图片：</td>
      <td>&nbsp;<input name="adstop2" type="text" value="<?=$tpl_data['adstop2']?$tpl_data['adstop2']:'http://s.juancdn.com/jpwebapp/images/pc-colour/style.png?v=swj423'?>" id="adstop2" class="btn3" style="width:400px; height:30px" /> <input class="sub" type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'adstop2','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">大小：200px*250px</span></td>
    </tr>
   <tr style="height:55px;">
    <td align="right" >广告连接地址：</td>
    <td >&nbsp;<input name="adstop1url" value="<?=$tpl_data['adstop1url']?$tpl_data['adstop1url']:'/'?>" style="width:400px; height:30px" />&nbsp;<span class="zhushi">填写广告连接地址</span></td>
  </tr>
    <tr style="height:25px;">
        <td colspan="2" align="left" width="150px">&nbsp;&nbsp;&nbsp;<font color="#FF0000">首页充值框下广告</font></td>
    </tr>
	
	  <tr style="height:55px;">
      <td align="right">&nbsp;&nbsp;充值框下广告图片：</td>
      <td>&nbsp;<input name="adscz1" type="text" value="<?=$tpl_data['adscz1']?$tpl_data['adscz1']:'/template/miaozhe/inc/img/ad/9.jpg'?>" id="adstop1" class="btn3" style="width:400px; height:30px" /> <input class="sub" type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'adscz1','sid'=>session_id()))?>','upload','450','350')" /> <span class="zhushi">大小：250px*120px</span></td>
    </tr>
   <tr style="height:55px;">
    <td align="right" >广告连接地址：</td>
    <td >&nbsp;<input name="adscz1url" value="<?=$tpl_data['adscz1url']?$tpl_data['adscz1url']:'/'?>" style="width:400px; height:30px" />&nbsp;<span class="zhushi">填写广告连接地址</span></td>
  </tr>
  
  
    <tr style="height:55px;">
      <td align="right">&nbsp;</td>
      <td>&nbsp;<input type="submit" name="sub" class="sub" value=" 保 存 设 置 " /></td>
  </tr>
  </table>
</form>