<?php

require("framework/FrameworkGlue.php");
require("linkedin/LinkedInGlue.php");
require("templates.php");

$page = new HtmlTag();

$page->getHead()
		->setTitle('Fab Framework Usage')
		->addHtmlObject(new LinkedInFramework(true, LinkedInAuthManager::ONLOAD))
		->addHtmlObject(new LinkedInAuthManager()); //

$page->getBody()
		->addBruteText('Clean text before the line break')
		->addLoneTag('br')
		->addBruteText('Clean text after the line break')
		->addLoneTag('br')->addBruteText('Sign in button:')
		->addHtmlObject(new LinkedInSignIn())
		->addLoneTag('br')->addBruteText('Simple manager:')
		->addHtmlObject(new DivTag(LinkedInAuthManager::DIV))
		->addLoneTag('br')->addBruteText('Full profile info:')
		->addHtmlObject(new HtmlLinkedInProfile());


?>
<?=$page->getCurrentHtml()?>