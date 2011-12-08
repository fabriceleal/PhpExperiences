<?php

require_once("HtmlObjectFramework.php");

class BruteText extends HtmlObjectFramework{
	
	private $text;
	
	public function __construct($text){
		$this->text = $text;
	}
	
	public function getCurrentHtml(){
		// TODO: Escape html
		return $this->text;
	}
}

?>