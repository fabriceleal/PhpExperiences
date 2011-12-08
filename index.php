<?php

require("framework/FrameworkGlue.php");
require("linkedin/LinkedInGlue.php");

$page = new HtmlFramework();

$page->getHead()
		->setTitle('Fab Framework Usage')
		->addHtmlObject(new LinkedInFramework());


$page->getBody()
		->addBruteText('Olá isto é texto limpo, antes do paragrafo')
		->addLoneTag('p')
		->addHtmlObject(new LinkedInSignIn())
		->addBruteText('Olá, isto é texto limpo depois do paragrafo');


?>
<?=$page->getCurrentHtml()?>