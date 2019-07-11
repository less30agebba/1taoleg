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
.sub{ background:#009933; font-size:14px; color:#FFFFFF; border:0; padding:5px 10px 5px 10px; height:33px}
</style>
<form action="<?=$action_url?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd" style="font-size:14px">
 <tr style="height:55px;">
        <td align="right" width="150px">首页引导教程开关：</td>
        <td>&nbsp;<?=html_radio($zhuangtai_arr,$tpl_data['index_jc'],'index_jc')?> </td>
    </tr>
	 <tr style="height:55px;">
        <td align="right" width="150px">首页登录框：</td>
        <td>&nbsp;<?=html_radio($zhuangtai_arr,$tpl_data['index_dl'],'index_dl')?> </td>
    </tr>
		 <tr style="height:55px;">
      <td align="right">商品列表样式：</td>
      <td>&nbsp;<?=select($bankuai_tpl_arr,$tpl_data['bankuai_tpl'],'bankuai_tpl')?> <span class="zhushi">商品显示的列表形式，具体可参考模板说明内解释</span>
    </td></tr>

     <tr style="height:55px;">
      <td align="right">每页商品数：</td>
      <td>&nbsp;<input name="pagesize" type="text" value="<?=$tpl_data['pagesize']!==''?$tpl_data['pagesize']:36?>" id="pagesize" style="width:300px; height:30px"  />（个）<span class="zhushi">默认模板建议设置3或者4的倍数</span></td>
    </tr>
     <tr style="height:55px;">
      <td align="right">每页加载数：</td>
      <td>&nbsp;<input name="ajax_load_num" type="text" value="<?=$tpl_data['ajax_load_num']!==''?$tpl_data['ajax_load_num']:5?>" id="pagesize" style="width:300px; height:30px"  />（次）<span class="zhushi">页面加载多少次后显示分页</span></td>
    </tr>
    <tr>
      <td width="115px" align="right">全站logo：</td>
      <td>&nbsp;</br>&nbsp;&nbsp;<input name="logo" type="text" value="<?=$tpl_data['logo']?$tpl_data['logo']:'images/logo.png'?>" id="logo" class="btn3" style="width:300px; height:30px" /> <input class="sub" type="button" value="上传logo" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'logo','sid'=>session_id()))?>','upload','450','350')" /> </br>&nbsp;</br><span class="zhushi">根据模版logo实际尺寸上传，格式不限。默认模板logo大小：250px*80px</span></br>&nbsp;</br></td>
    </tr> 
    <tr>
      <td align="right">预载图片：</td>
      <td>&nbsp;</br>&nbsp;</br>&nbsp;&nbsp;<input name="loading_img" type="text" value="<?=$tpl_data['loading_img']?$tpl_data['loading_img']:'images/lazy.gif'?>" id="loading_img" class="btn3" style="width:300px; height:30px" /> <input class="sub" type="button" value="上传预载图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'loading_img','sid'=>session_id()))?>','upload','450','350')" /></br>&nbsp;</br> <span class="zhushi">根据模版预载图片实际尺寸上传，格式不限。默认模板大小：285px*285px，可gif</span></br>&nbsp;</br>
    </td>  </tr>
    
	 <tr style="height:45px;">
        <td align="right">商品类型显示：</td>
        <td>&nbsp;&nbsp;<label>
<input <?php if($tpl_data['fanli-kg']['open']==0){?> checked="checked"<?php }?> name="fanli-kg[open]" type="radio" value="0"/>&nbsp;返利模式</label>
 &nbsp;<label><input <?php if($tpl_data['fanli-kg']['open']==1){?> checked="checked"<?php }?> name="fanli-kg[open]" type="radio" value="1"/>&nbsp;淘客模式</label> </td>
    </tr>
	
   <tr style="height:55px;">
    <td align="right" >首页淘宝频道：</td>
    <td >&nbsp;<input name="aitaobao" value="<?=$tpl_data['aitaobao']?$tpl_data['aitaobao']:''?>" style="width:400px; height:30px" />&nbsp;<span class="zhushi">去阿里妈妈获取爱淘宝频道推广地址 <a href="http://pub.alimama.com/myunion.htm?spm=a2320.7388781.a214tr8.d006.BWwkSl#!/promo/taobao/channel" target="_blank"><font size="+1">获取推广地址</font></a></span></td>
  </tr>
	
    
  
  <tr style="height:45px;">
    <td align="right" >客服QQ：</td>
    <td >&nbsp;&nbsp;<input name="qq" value="<?=$tpl_data['qq']?$tpl_data['qq']:''?>" style="width:300px; height:30px" />&nbsp;<span class="zhushi">客服QQ</span></td>
  </tr>
  <tr style="height:45px;">
    <td align="right" >联系电话：</td>
    <td >&nbsp;&nbsp;<input name="del" value="<?=$tpl_data['del']?$tpl_data['del']:''?>"style="width:300px; height:30px" />&nbsp;<span class="zhushi">客服联系电话</span></td>
  </tr>
   <tr style="height:45px;">
      <td align="right">备案号：</td>
      <td>&nbsp;&nbsp;<input name="icp" type="text" value="<?=$tpl_data['icp']!==''?$tpl_data['icp']:1?>" id="icp" style="width:300px; height:30px"  /><span class="zhushi">信息产业部备案号</span></td>
    </tr>
    <tr>
      <td align="right">网站统计代码：</td>
      <td> &nbsp;<br /> &nbsp;&nbsp;<textarea name="tongji" rows="4" class="btn3" id="tongji" style="width:400px"><?=$tpl_data['tongji']?>
  </textarea>&nbsp;&nbsp;<br />&nbsp;<br /> </td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td>&nbsp;<input type="submit" name="sub" class="sub" value=" 保 存 设 置 " /></td>
  </tr>
  </table>
</form>