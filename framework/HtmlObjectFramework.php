<?php

abstract class HtmlObjectFramework{
	
	public function printMe(){
		print $this->getCurrentHtml();		
	}
	
	public abstract function getCurrentHtml();
}

?>