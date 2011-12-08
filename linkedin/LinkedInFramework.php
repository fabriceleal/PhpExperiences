<?

require_once("framework/ContainerFramework.php");
require_once("linkedin/LinkedInApi.php");

class LinkedInFramework extends ContainerFramework{
	
	public function __construct($authorize = true){
		parent::__construct('script');
		$this->addAttribute('type', 'text/javascript');
		$this->addAttribute('src', 'http://platform.linkedin.com/in.js');
		$this->addBruteText(
			"api_key: " . LinkedInApi::getKey() . "\r\n"
			. ($authorize? "authorize: true": "")
		);
	}

}

?>