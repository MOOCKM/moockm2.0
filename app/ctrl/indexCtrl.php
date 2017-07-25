<?php
namespace app\ctrl;
use core\lib\model;
use app\model\userModel;
class indexCtrl extends \core\moockm{
	public function index(){
		//视图   -->https://twig.symfony.com/doc/2.x/templates.html
		$model = new userModel();
		$data = $model->userName();
		$this->assign('data',$data);
		$this->display('index.html');

		//模型   -->开发文档 http://medoo.lvtao.net/doc.php
		// $model = new userModel();
		// $data = $model->userName();
		// var_dump($data);
	}
}
?>