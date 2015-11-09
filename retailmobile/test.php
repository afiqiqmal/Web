<?php
$chrome = 'https://www.google.com/chrome/browser/desktop';
if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || 
	   (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || 
	   (strpos($_SERVER['HTTP_USER_AGENT'], "Edge") == true)) {

		header('Location:'.$chrome);
}
else{
	// goto your page
	}

?>