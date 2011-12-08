<?php

require_once("framework/ContainerFramework.php");

class DivTag extends ContainerFramework{
	
	public function __construct($id){
		parent::__construct('div');
		$this->addAttribute('id', $id);
	}	
}

?>