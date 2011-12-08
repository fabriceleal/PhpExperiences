<?php

require_once("framework/ContainerFramework.php");
require_once("linkedin/LinkedInApi.php");

class LinkedInSignIn extends ContainerFramework{
	
	public function __construct(){
		parent::__construct('pre');
		$inner = new ContainerFramework('script');
		$inner->addAttribute('type', 'in/Login');		
		$inner->addBruteText("Hello, <?js= firstName ?> <?js= lastName ?>.");
		
		$this->addHtmlObject($inner);
	}
	
}


?>