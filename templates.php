<?php

require("framework/FrameworkGlue.php");

class HtmlLinkedInProfile extends DivTag
{
	const ID = "LinkedInProfile_div";
	
	public function __construct(){
		parent::__construct(self::ID);
		
		$this->addHtmlObject(new DivTag('label_name'))
				->addHtmlObject(new DivTag('profile_name'))
				->addLoneTag('br')
				->addHtmlObject(new DivTag('label_last'))
				->addHtmlObject(new DivTag('profile_last'))
				->addLoneTag('br')
				->addHtmlObject(new DivTag('label_industry'))
				->addHtmlObject(new DivTag('profile_industry'))
				->addLoneTag('br');

		// TODO: add post load-auth scripts here ...
		
	}
	
}

?>