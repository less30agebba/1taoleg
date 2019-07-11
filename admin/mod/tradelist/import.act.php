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
if (!defined('ADMIN')) {
    exit('Access Denied');
}
$key_dir='trade_'.md5(DDKEY);
create_dir(DDROOT.'/upload/'.$key_dir);

if ($_POST['sub'] != '') {
	//导入处理函数
    ini_set('memory_limit', '128M');
    set_time_limit(0);
    $max_file_size = 5000000; //上传文件大小限制, 单位BYTE
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!is_uploaded_file($_FILES["upfile"]['tmp_name'])) { //是否存在文件
            echo "<font color='red'>文件不存在,服务器里找打PHP.INI文件，不懂百度，然后搜索upload_max_filesize和post_max_size2个参数，后面的参数改成10然后保存重启服务器！</font>";
            exit;
        }
        $file = $_FILES["upfile"];
        if ($max_file_size < $file["size"]) {
            echo "<font color='red'>文件太大！</font>";
            exit;
        }
        function resetname($name) {
            $arr = explode('.', $name);
            return date('His') . rand(10000, 99999) . '.' . $arr[1];
        }
        $saved_upload_name = DDROOT . "/upload/".$key_dir."/" . resetname($_FILES['upfile']['name']);
        if (!move_uploaded_file($_FILES["upfile"]['tmp_name'], $saved_upload_name)) {
            echo "<font color='red'>服务器的临时目录没有移动文件权限，找空间商！</font>";
        } else {
            chmod($saved_upload_name, 0777);
        }
        $file_type = substr(strstr($file['name'], '.') , 1);
		$trade=fs('trade',$duoduo);
        if ($file_type == "csv") {
            $handle = fopen($saved_upload_name, "r");
            $kk = 1;
            while ($row = fgetcsv($handle, 1000, ',')) {
                $row = array_map("gbk2utf8", $row);
                foreach ($row as $key => $vo) {
                    $csv_arr[$kk][($key + 1) ] = $vo;
                }
                $kk++;
            }
            fclose($handle);
			$data=$csv_arr;
        }
        if ($file_type == "xls") {
			$trade=fs('trade',$duoduo);
			$data=$trade->excel2data($saved_upload_name,1);
        }
		$data=$trade->data2trade($data,1);
		$num=count($data);
		$data=dd_json_encode($data);
		$md5name=md5('admin'.TIME.DDKEY);
		$_SESSION['xlsfile']=DDROOT.'/data/trade_'.$md5name.'.json';
		$_SESSION['trade_chongfu']=DDROOT.'/data/trade_chongfu'.$md5name.'.json';
		file_put_contents($_SESSION['xlsfile'],$data);
		file_put_contents($_SESSION['trade_chongfu'],json_encode($trade->trade_chongfu));
		set_cookie('admin_xls_pagesize',$_GET['pagesize'],86400*365);
    }
    unlink($saved_upload_name);
	$jump_url=u('tradelist','list_temp',array('pagesize'=>$_GET['pagesize'],'do'=>'daoru'));
	PutInfo("此EXCEL一共".$num.'条数据需要处理，等待跳转，<br/><br/><img src="../images/wait2.gif" />',$jump_url,1);
} else {
}

?>