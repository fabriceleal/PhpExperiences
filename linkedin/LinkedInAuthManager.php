<?php

require_once("framework/HtmlObjectFramework.php");

$javascript=<<<EOD

	function onLoad(){
		onLoad('results');
	}
	
	function onLoadPutMeOnDiv(div){
		
	     IN.Event.on(IN, "auth", function(){
			IN.API.Profile("me").result(function(profiles){
				member = profiles.values[0];
				document.getElementById(div).innerHTML = "<p id=\"" + member.id + "\">Hello " +  member.firstName + " " + member.lastName + "</p>";
			});
	     });
	
	}

EOD;

class LinkedInAuthManager extends HtmlObjectFramework{
	const ONLOAD = "onLoad";
	const DIV = "results";
	
	public function __construct(){
		parent::__construct('script');
		$this->addBruteText($javascript);
	}	
}

?>