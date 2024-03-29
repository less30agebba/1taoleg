<?php
class phplock{
	public $dir='';
	public $time_limit=30; //锁文件过期时间
	public $lock_file;
	public $status=0;
	public $type=1;
	function __construct($name){
		$this->dir='/data/temp/session/'.date('Ymd').'/lock/';
		create_dir(DDROOT.$this->dir);
		$this->lock($name);
	}

	function lock($name){
		$name.='.lock';
		$this->dir=DDROOT.$this->dir;
		$lock_file=$this->dir.$name;
		if(file_exists($lock_file)){
			$lock_time = file_get_contents($lock_file);
			if (TIME - $lock_time > $this->time_limit) { //重置过期锁文件
				$s=file_put_contents($lock_file, TIME,LOCK_EX);
			}
			else {
				$s=0;
			}
		}
		else{
			$s=file_put_contents($lock_file, TIME,LOCK_EX); //加锁文件
		}
		$this->lock_file=$lock_file;
		if($s>0){
			$this->status=1;
		}
		else{
			$this->status=0;
		}
		if(isset($_GET['f'])){
			sleep(5);
		}
	}

	function unlock(){
		if($this->lock_file!='' && $this->status==1){
			unlink($this->lock_file);
		}
	}

	function __destruct(){
	}
}
?>