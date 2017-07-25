<?php
namespace core\lib\drive\log;
use core\lib\config;
class file{
	public $path;
	public function __construct(){
		$this->path = config::conf('PATH','log');
	}
	public function log($msg,$file = 'log'){
		if(!is_dir($this->path.date('Ymd'))){
            mkdir($this->path.date('Ymd'),'0777',true);
		}
		$msg = $msg.date('Y-m-d H:i:s');
		return file_put_contents($this->path.date('Ymd').'/'.$file.'.php',json_encode($msg).PHP_EOL,FILE_APPEND);
	}
}
?>