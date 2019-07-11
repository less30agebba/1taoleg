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
.STYLE1 a:hover{ text-decoration:none
}
.STYLE3 {font-size: 16px; color: #FF0000; }

</style>
<form action="<?=$action_url?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd" style="font-size:14px">

	 <tr style="height:55px;">
        <td align="right" width="150px">推荐人字段：</td>
        <td>&nbsp;&nbsp;<?=html_radio($zhuangtai_arr,$tpl_data['tjr-kg'],'tjr-kg')?> <font color="#FF0000">如果开启了，那么注册页推荐人是必填项哦！</font></td>
    </tr>
  <tr style="height:45px;">
    <td align="right" >默认推荐人账号：</td>
    <td >&nbsp;&nbsp;<input name="tjr-zh" value="<?=$tpl_data['tjr-zh']?$tpl_data['tjr-zh']:''?>" style="width:300px; height:30px" />&nbsp;<span class="zhushi">如果开启必须选项那必须填写一个默认推荐人账号</span></td>
  </tr>

	 <tr style="height:55px;">
	  <td align="right">搜索框下关键词No.1：</td>
	  <td>&nbsp;
	    <input style="width:200px; height:30px" type="text" name="seo_1" value="<?=$tpl_data["seo_1"]?>" />&nbsp;&nbsp;跳转关键词链接
	  </td>
	</tr>
	 <tr style="height:55px;">
	  <td align="right">搜索框下关键词No.2：</td>
	  <td>&nbsp;
	    <input style="width:200px; height:30px" type="text" name="seo_2" value="<?=$tpl_data["seo_2"]?>" />&nbsp;&nbsp;跳转关键词链接
	  </td>
	</tr>
	 <tr style="height:55px;">
	  <td align="right">搜索框下关键词No.3：</td>
	  <td>&nbsp;
	    <input style="width:200px; height:30px" type="text" name="seo_3" value="<?=$tpl_data["seo_3"]?>" />&nbsp;&nbsp;跳转关键词链接
	  </td>
	</tr>
	 <tr style="height:55px;">
	  <td align="right">搜索框下关键词No.4：</td>
	  <td>&nbsp;
	    <input style="width:200px; height:30px" type="text" name="seo_4" value="<?=$tpl_data["seo_4"]?>" />&nbsp;&nbsp;跳转关键词链接
	  </td>
	</tr>
	 <tr style="height:55px;">
	  <td align="right">搜索框下关键词No.5：</td>
	  <td>&nbsp;
	    <input style="width:200px; height:30px" type="text" name="seo_5" value="<?=$tpl_data["seo_5"]?>" />&nbsp;&nbsp;跳转关键词链接
	  </td>
	</tr>
	 <tr style="height:55px;">
	  <td align="right">搜索框下关键词No.6：</td>
	  <td>&nbsp;
	    <input style="width:200px; height:30px" type="text" name="seo_6" value="<?=$tpl_data["seo_6"]?>" />&nbsp;&nbsp;跳转关键词链接
	  </td>
	</tr>
	<tr>
      <td align="right">&nbsp;</td>
      <td>&nbsp;<input type="submit" name="sub" class="sub" value=" 保 存 设 置 " /></td>
  </tr>
  </table>
</form>