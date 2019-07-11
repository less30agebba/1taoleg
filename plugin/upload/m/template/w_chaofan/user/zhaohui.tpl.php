<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$webtitle='订单找回';
include(TPLPATH.'/inc/header_2.tpl.php');
?>

<div class="shopBody">
<div class="info" style="border-top:none;">	
	<form onSubmit="return checkForm($(this),cbCheckForm)" action="">
    <dl style="">
		<dd style=" width:5.5em; font-size:1em; height:1em; display:inline-block;">淘宝订单号</dd>          
		<dt><input name="q" type="text" value="" style=" width:10em; padding:0 0.5em; margin-left:0.5em;" placeholder="淘宝订单号"></dt>
	</dl>
        <div style="text-align:center; margin:10px 0px; line-height:20px; font-size:16px;">
        <input type="hidden" name="mod" value="user" /><input type="hidden" name="act" value="order" /><input type="hidden" name="do" value="lost" />		  
        <input type="submit" value="订单找回" id="sub" class="submit"></div>     
    </form>
</div>


</div>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>

</body>
</html>