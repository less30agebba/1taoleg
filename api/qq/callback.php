<?php
include('../../comm/dd.config.php');
if($_GET['code']!=''){
	jump(SITEURL.'/index.php?mod=api&act=qq&do=back&code='.urlencode($_GET['code']).'&state='.urlencode($_GET['state']));
}
?>