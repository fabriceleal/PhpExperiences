<?php

require_once("framework\HtmlObjectFramework.php");

class JavascriptFunctionObject extends HtmlObjectFramework{
	
	private $name;
	private $body;
	private $parameterDef;
	
	public function __construct($name, $body, $parameterDef = null){
		$this->name = $name;
		$this->body = $body;
		$this->parameterDef = $parameterDef;
	}
	
	public function getCurrentHtml(){
		$html = "function ". $this->name;
		if($parameterDef){
			$html = "(". $parameterDef .")";
		}else{
			$html = "()";
		}
		
		$html .= "{";
		$html .= $this->body;
		$html .= "}";

		return $html;		
	}
	
}

?>