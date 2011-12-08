<?php

require_once("ContainerFramework.php");

class SeriousContainerFramework extends ContainerFramework{
	private $attribute_validator;
	private $content_validator;
	
	public function __construct($tag, $attribute_validator, $content_validator){
		parent::__constuct($tag);
		
		$this->attribute_validator = $attribute_validator;
		$this->content_validator = $content_validator;
	}
	
	
}

?>