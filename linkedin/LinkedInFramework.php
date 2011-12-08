<?

require_once("framework/ContainerFramework.php");
require_once("linkedin/LinkedInApi.php");

class LinkedInFramework extends ContainerFramework{
	
	public function __construct($authorize = true, $onload = null){
		parent::__construct('script');
		$this->addAttribute('type', 'text/javascript');
		$this->addAttribute('src', 'http://platform.linkedin.com/in.js');
		$this->addBruteText(
			"\r\n"."  api_key: " . LinkedInApi::getKey()
			. ($onload? "\r\n"."  onLoad: " . $onload: "")
			. ($authorize? "\r\n"."  authorize: true": "")
		);
	}

}

?>