<?php

require_once("HeadTag.php");
require_once("ContainerFramework.php");

class HtmlFramework extends ContainerFramework{
	
	private $head;
	private $body;
	
	public function getHead(){
		return $this->head;		
	}
	
	public function getBody(){
		return $this->body;
	}
	
	public function __construct(){
		parent::__construct('html');
		$this->head = new HeadTag();
		$this->body = new ContainerFramework('body');
	}
		
	public function getCurrentHtml(){
		$html = "<". $this->getTag() .">";		
		$html .= $this->head->getCurrentHtml();
		$html .= $this->body->getCurrentHtml();
		$html .= "</". $this->getTag() .">";
		return $html;
	}	
}

?>