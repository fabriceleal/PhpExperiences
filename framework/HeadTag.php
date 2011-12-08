<?php

require_once('ContainerFramework.php');

class HeadTag extends ContainerFramework{
	
	public function __construct(){
		parent::__construct('head');		
	}

	public function setTitle($title){
		$this->addRetrieveContentTag('title')->addBruteText($title);
		
		return $this;
	}
}

?>