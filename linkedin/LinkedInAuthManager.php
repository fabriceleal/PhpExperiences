<?php

require_once("framework/HtmlObjectFramework.php");


class LinkedInAuthManager extends ContainerFramework{
	const ONLOAD = "onLoadLI";
	const DIV = "results";
	
	public function __construct(){

		// Begin of javascript code
		$javascript=<<<EOD

	function onLoadLI(){		
		onLoadPutMeOnDiv('results');		
	}
	
	function onLoadPutMeOnDiv(div){
		// On Load
		document.getElementById(div).innerHTML = "<p>called onLoadPutMeOnDiv</p>";
		IN.Event.on(IN, "auth", function (){
			// On Auth
			document.getElementById(div).innerHTML = "<p>called onAuth</p>";
			
			// Retrieve profile data
			IN.API.Profile("me")
				.fields("firstName", "lastName", "industry")
				.result(function (profiles){
					// On Load
					document.getElementById(div).innerHTML = "";	
					var members = profiles.values;
					for (var member in members) {
						document.getElementById('results').innerHTML += 
								"<p> :D Hello " + 
								members[member].firstName + " " + 
								members[member].lastName + "</p>";
					}
				})
				.error(function(err){
					// On error
					// notify user and log error
					document.getElementById(div).innerHTML = "<p>Oops! on profile ...</p>";
  					console.log(error);
				});
			
			// Retrieve connections
			IN.API.Connections("me")
			    .fields("firstName", "lastName", "industry")
    			.result(function (connections){
    				// on Connections
    				
    			})
    			.error(function(err){
					// On error
					// notify user and log error
					document.getElementById(div).innerHTML = "<p>Oops! on connections ...</p>";
  					console.log(error);
				});
			
 		});
	}
	
	
 	


EOD;
		// End of javascript code
		parent::__construct('script');
		$this->addAttribute('type', 'text/javascript');
		$this->addBruteText($javascript);
	}	
}

?>