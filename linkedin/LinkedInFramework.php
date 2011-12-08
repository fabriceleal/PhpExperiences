<?

require_once("framework/ContainerFramework.php");
require_once("linkedin/LinkedInApi.php");

class LinkedInFramework extends ContainerFramework{
	
	public function __construct(){
		parent::_construct('script');
		$this->addAttribute('type', 'text/javascript');
		$this->addAttribute('src', 'http://platform.linkedin.com/in.js');
		$this->addBruteText("api_key: " . LinkedInApi::getKey());
	}

}

?>