<?php
namespace core;
class moockm{
	public static $classMap=array();
	public $assign;
	static public function run(){
		\core\lib\log::init();
		
		$route = new \core\lib\route();
		$ctrlClass = $route->ctrl;
		$action = $route->action;
		$ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
		$ctrlClass='\\app\ctrl\\'.$ctrlClass.'Ctrl';
		if(is_file($ctrlFile)){
			include $ctrlFile;
			$ctrl = new $ctrlClass();
			$ctrl->$action();
			\core\lib\log::log($ctrlClass.'--'.$action);
		}else{
			throw new \Exception("找不到控制器");
		}
	}
	static public function load($class){
		if(isset($classmap[$class])){
			return true;
		}else{
			$class = str_replace('\\', '/', $class);
			$file=MOOCKM.'\\'.$class.'.php';
			if(is_file($file)){
				include $file;
				self::$classMap[$class] = $class;
 			}else{
 				return false;
 			}
		}
	}

	public function assign($name,$value){
		$this->assign[$name]=$value;
	}
	public function display($file1){
		$file = APP.'/views/'.$file1;
		if(is_file($file)){
			\Twig_Autoloader::register();
			$loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
              'cache' => MOOCKM.'/log/twig',
              'debug' => DEBUG,
            ));
            $template = $twig->loadTemplate($file1);
			$template->display($this->assign?$this->assign:'');

		}
	}
}
?>