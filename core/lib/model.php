<?php
namespace core\lib;
use core\lib\config;
use Medoo\Medoo;
class model extends Medoo {
	public function __construct(){
		$tmp=config::all('db');
		parent::__construct($tmp);
	}
}
?>