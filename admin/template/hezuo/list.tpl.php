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
?>
<form name="form1" action="" method="get">
<table cellspacing="0" width="100%" style="border:1px  solid #DCEAF7; border-bottom:0px; background:#E9F2FB">
        <tr>
              <td class="bigtext">&nbsp;<img src="images/arrow.gif" width="16" height="22" align="absmiddle" />&nbsp;<a href="<?=u('shangjia','set')?>" class="link3">[设置]</a></td>
              <td align="right" class="bigtext">会员名：<input type="text" name="ddusername" value="<?=$_GET['ddusername']?>" />&nbsp;<input type="submit" value="搜索" />&nbsp;共有 <b><?php echo $total;?></b> 条记录&nbsp;&nbsp;</td>
            </tr>
      </table>
      <input type="hidden" name="mod" value="<?=MOD?>" />
      <input type="hidden" name="act" value="<?=ACT?>" />
      </form>
      <form name="form2" method="get" action="" style="margin:0px; padding:0px">
      <table id="listtable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
                    <tr>
                      <th width="50" ><input type="checkbox" onClick="checkAll(this,'ids[]')" /></th>
                      <th width="120">购买类型</th>
                      <th width="200">链接</th>
                      <th width="70">金额</th>
                       <th width="70">类型</th>
                      <th width="80">旺旺号</th>
                      <th width="80">手机号</th>
                        <th width="80">时间</th>
                      <th ></th>
                    </tr>
					<?php foreach ($hezuo as $r){?>
					  <tr>
                        <td><input type='checkbox' name='ids[]' value='<?=$r["id"]?>' id='content_<?=$r["id"]?>' /></td>
                        <td><?=$r["goumai"]?></td>
                        <td><?=$r["lianjie"]?></td>
                        <td><?=$r["taocan"]?></td>
                        <td><?=is_kong($r["leixing"])?></td>
						<td><?=$r["wangwang"]?></td>
                        <td><?=$r["shouji"]?></td>
						<td><?=$r["shijian"]?></td>
                        <td></td>
					  </tr>
					<?php }?>
                  </table>
        <div style="position:relative; padding-bottom:10px">
            <input type="hidden" name="mod" value="<?=MOD?>" /><input type="hidden" name="act" value="del" />
            <div style="position:absolute; left:5px; top:10px"><input type="submit" value="删除" onclick='return confirm("确认要删除转?")'/></div>
            <div class="megas512" style=" margin-top:15px;"><?=pageft($total,$pagesize,u(MOD,'list',$page_arr));?></div>
            </div>
       </form>
<?php include(ADMINTPL.'/footer.tpl.php');?>