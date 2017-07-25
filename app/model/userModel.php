<?php 
namespace app\model;
use core\lib\model;
class userModel extends model{
	public $table = 'user';
	//medoo开发文档
	//http://medoo.lvtao.net/doc.php
	public function userName(){
		return $this->select($this->table,'user_name');
	}

	public function getOne($id){
		return $this->get($this->table,'*',array(
            'user_id'=>$id,
			));
	}

	public function setOne($id,$data){
		return $this->update($this->table,$data,array(
            'user_id'=>$id,
			));
	}

	public function addOne($data){
		return $this->update($this->table,$data);
	}
}
?>