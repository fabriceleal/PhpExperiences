<?php

require_once("framework/HtmlObjectFramework.php");


class LinkedInAuthManager extends ContainerFramework{
	const ONLOAD = "onLoadLI";
	const DIV = "results";
	
	public function __construct(){

		// Begin of javascript code
		$javascript=<<<EOD

	function onLoadLI(){
		document.getElementById('results').innerHTML = "<p>called onLoad</p>";
		onLoadPutMeOnDiv('results');		
	}
	
	function onLoadPutMeOnDiv(div){
		document.getElementById('results').innerHTML = "<p>called onLoadPutMeOnDiv</p>";
		IN.Event.on(IN, "auth", onAuth);
	}
	
	function onAuth(){
		document.getElementById('results').innerHTML = "<p>called onAuth</p>";
		IN.API.Profile("me").result(onResult);
 	}
 	
 	function onResult(profiles){
		document.getElementById('results').innerHTML = "<p>called onResult</p>";
		member = profiles.values[0];
		document.getElementById('results').innerHTML = "<p id=\"" + member.id + "\"> :D Hello " +  member.firstName + " " + member.lastName + "</p>";
	}

EOD;
		// End of javascript code
		parent::__construct('script');
		$this->addAttribute('type', 'text/javascript');
		$this->addBruteText($javascript);
	}	
}

?>