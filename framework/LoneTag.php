<?php

require_once("HtmlObjectFramework.php");

class LoneTag extends HtmlObjectFramework{
	private $tag;
	
	public function __construct($tag){
		$this->tag = $tag;
	}
	
	public function getCurrentHtml(){
		return "<".$this->getTag()." />";
	}
	
	public function getTag(){
		return $this->tag;			
	}
}
	
?>