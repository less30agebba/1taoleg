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
  	<tr height="55"  bgcolor="#FFF3EE">
			<td align="right">邀请地址：</td>
			<td>&nbsp;&nbsp;&nbsp;<a target="_blank" href="/index.php?mod=yaoqing&act=index"><font color="#0066CC" style="font-size:14px">查看邀请演示</font></a></td>
			</tr>
		
	<tr style="height:55px;">
    <td align="right">推广LOGO：</td>
    <td> </br>
	  </br>&nbsp;<input name="yaoqinglogo" type="text" id="yaoqinglogo" value="<?=$tpl_data['yaoqinglogo']?$tpl_data['yaoqinglogo']:''?>" style="width:300px; height:30px" /> <input type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'yaoqinglogo','sid'=>session_id()))?>','upload','450','350')" /> 可直接添加网络地址，默认图片大小，250x80</br></br>
	</br>
	  </br>
	  </span></td>
	
  </tr>
     <tr style="height:55px;">
      <td align="right">返利累计发放：</td>
      <td>&nbsp;<input name="jine" type="text" value="<?=$tpl_data['jine']!==''?$tpl_data['jine']:5?>" id="pagesize" style="width:300px; height:30px"  />（元）<span class="zhushi">返利累计发放：例如：2,538,352</span></td>
    </tr>
     <tr style="height:55px;">
      <td align="right">邀请简介标题：</td>
      <td>&nbsp;<input name="jine2" type="text" value="<?=$tpl_data['jine2']!==''?$tpl_data['jine2']:5?>" id="pagesize" style="width:300px; height:30px"  /><span class="zhushi">如：补贴网返利</span></td>
    </tr>
	
     <tr style="height:55px;">
      <td align="right">JiaThis分享ID：</td>
      <td>&nbsp;<input name="fxid" type="text" value="<?=$tpl_data['fxid']!==''?$tpl_data['fxid']:0?>" id="pagesize" style="width:300px; height:30px"  /><span class="zhushi">可查看分享次数<a href="http://www.jiathis.com/" target="_blank" >注册或登录JiaThis</a>，在“设置”内即可看到用户ID</span></td>
    </tr>
	
	<tr style="height:55px;">
    <td align="right">分享推广图片：</td>
    <td> </br>
	  </br>&nbsp;<input name="shoujitg" type="text" id="shoujitg" value="<?=$tpl_data['shoujitg']?$tpl_data['shoujitg']:'/template/miaozhe/yaoqing/images/yaoqing.jpg'?>" style="width:300px; height:30px" /> <input type="button" value="上传图片" onclick="javascript:openpic('<?=u('fun','upload',array('uploadtext'=>'shoujitg','sid'=>session_id()))?>','upload','450','350')" /> 可直接添加网络地址，默认图片，自己修改</br></br>
	
	  </br>
	  </span></td>
	
  </tr>
  
				<tr height="55">
			<td align="right">邀请排行榜：</td>
			<td>&nbsp;
				 
				  <label>
          <input <?php if($tpl_data['paihangbang']['open']==1){?> checked="checked"<?php }?> name="paihangbang[open]" type="radio" value="1"/>
      虚拟数据</label>
        &nbsp;<label>
          <input <?php if($tpl_data['paihangbang']['open']==0){?> checked="checked"<?php }?> name="paihangbang[open]" type="radio" value="0"/>
            真实数据</label> 
        &nbsp;&nbsp;<font color="#FF0000">【说明】：</font><font color="#689200">如果开启虚拟数据请在下面填写虚拟的数据文件</font></td>
		</tr>
     <tr style="height:55px;">
      <td align="right">虚拟数据：</td>
      <td></br></br>
	  &nbsp;&nbsp;<font color="#FF0000">第一名：</font>&nbsp;用户名：&nbsp;<input name="shuju1" type="text" value="<?=$tpl_data['shuju1']!==''?$tpl_data['shuju1']:jieku123?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;返利奖励：&nbsp;<input name="shuju2" type="text" value="<?=$tpl_data['shuju2']!==''?$tpl_data['shuju2']:3350?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;邀请人数：&nbsp;<input name="shuju3" type="text" value="<?=$tpl_data['shuju3']!==''?$tpl_data['shuju3']:3984?>" id="pagesize" style="width:100px; height:30px"  /></br></br>
	  
	  &nbsp;&nbsp;<font color="#FF0000">第二名：</font>&nbsp;用户名：&nbsp;<input name="shuju4" type="text" value="<?=$tpl_data['shuju4']!==''?$tpl_data['shuju4']:mei25?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;返利奖励：&nbsp;<input name="shuju5" type="text" value="<?=$tpl_data['shuju5']!==''?$tpl_data['shuju5']:3120?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;邀请人数：&nbsp;<input name="shuju6" type="text" value="<?=$tpl_data['shuju6']!==''?$tpl_data['shuju6']:3751?>" id="pagesize" style="width:100px; height:30px"  /></br></br>
	  
	  &nbsp;&nbsp;<font color="#FF0000">第三名：</font>&nbsp;用户名：&nbsp;<input name="shuju7" type="text" value="<?=$tpl_data['shuju7']!==''?$tpl_data['shuju7']:坐享其成?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;返利奖励：&nbsp;<input name="shuju8" type="text" value="<?=$tpl_data['shuju8']!==''?$tpl_data['shuju8']:2975?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;邀请人数：&nbsp;<input name="shuju9" type="text" value="<?=$tpl_data['shuju9']!==''?$tpl_data['shuju9']:3259?>" id="pagesize" style="width:100px; height:30px"  /></br></br>
	  
	  &nbsp;&nbsp;<font color="#FF0000">第四名：</font>&nbsp;用户名：&nbsp;<input name="shuju10" type="text" value="<?=$tpl_data['shuju10']!==''?$tpl_data['shuju10']:网购大师?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;返利奖励：&nbsp;<input name="shuju11" type="text" value="<?=$tpl_data['shuju11']!==''?$tpl_data['shuju11']:2494?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;邀请人数：&nbsp;<input name="shuju12" type="text" value="<?=$tpl_data['shuju12']!==''?$tpl_data['shuju12']:2896?>" id="pagesize" style="width:100px; height:30px"  /></br></br>
	  
	  &nbsp;&nbsp;<font color="#FF0000">第五名：</font>&nbsp;用户名：&nbsp;<input name="shuju13" type="text" value="<?=$tpl_data['shuju13']!==''?$tpl_data['shuju13']:lijie520?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;返利奖励：&nbsp;<input name="shuju14" type="text" value="<?=$tpl_data['shuju14']!==''?$tpl_data['shuju14']:2865?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;邀请人数：&nbsp;<input name="shuju15" type="text" value="<?=$tpl_data['shuju15']!==''?$tpl_data['shuju15']:2765?>" id="pagesize" style="width:100px; height:30px"  /></br></br>
	  
	  &nbsp;&nbsp;<font color="#FF0000">第六名：</font>&nbsp;用户名：&nbsp;<input name="shuju16" type="text" value="<?=$tpl_data['shuju16']!==''?$tpl_data['shuju16']:leiyu99?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;返利奖励：&nbsp;<input name="shuju17" type="text" value="<?=$tpl_data['shuju17']!==''?$tpl_data['shuju17']:2553?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;邀请人数：&nbsp;<input name="shuju18" type="text" value="<?=$tpl_data['shuju18']!==''?$tpl_data['shuju18']:2678?>" id="pagesize" style="width:100px; height:30px"  /></br></br>
	  
	  &nbsp;&nbsp;<font color="#FF0000">第七名：</font>&nbsp;用户名：&nbsp;<input name="shuju19" type="text" value="<?=$tpl_data['shuju19']!==''?$tpl_data['shuju19']:fei08?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;返利奖励：&nbsp;<input name="shuju20" type="text" value="<?=$tpl_data['shuju20']!==''?$tpl_data['shuju20']:2484?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;邀请人数：&nbsp;<input name="shuju21" type="text" value="<?=$tpl_data['shuju21']!==''?$tpl_data['shuju21']:2594?>" id="pagesize" style="width:100px; height:30px"  /></br></br>
	  
	  &nbsp;&nbsp;<font color="#FF0000">第八名：</font>&nbsp;用户名：&nbsp;<input name="shuju22" type="text" value="<?=$tpl_data['shuju22']!==''?$tpl_data['shuju22']:liaotan668?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;返利奖励：&nbsp;<input name="shuju23" type="text" value="<?=$tpl_data['shuju23']!==''?$tpl_data['shuju23']:2135?>" id="pagesize" style="width:100px; height:30px"  />&nbsp;邀请人数：&nbsp;<input name="shuju24" type="text" value="<?=$tpl_data['shuju24']!==''?$tpl_data['shuju24']:2430?>" id="pagesize" style="width:100px; height:30px"  /></br></br>	  </td>
    </tr>
   
   <tr>
        <tr style="height:55px;"><td>&nbsp;</td>
      <td>&nbsp;<input type="submit" name="sub" class="sub" value=" 保 存 设 置 " /></td>
  </tr>
  </table>
</form>