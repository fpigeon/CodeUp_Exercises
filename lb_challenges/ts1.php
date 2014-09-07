<?php
/*
Complete the function showHighlight() so that it returns a boolean. Return true if $requestedUrl is the same
as $myUrl. Return true if $requestedUrl is located in the same section as $myUrl, but only if $myUrl is a
landing page. Return true if $myUrl is the landing page of a parent section to $requestedUrl. Assume the
variables $myUrl and $requestedUrl contain valid absolute URL paths as strings. Assume that a root,
section, or subsection landing page always has "index.html" for its filename, and that any other page does
not. A sampling of values and their expected results is listed below.
*/

class Webpage {
	private $myUrl;
	protected $landingPage = 'index.html';
	function __construct($myUrl)
	{
		$this->setUrl($myUrl);
	}
	private function setUrl($myUrl)
	{
		if (is_string($myUrl))
		{
			//trim all leading and whitespace
			$this->myUrl = trim($myUrl);
		}
	}
	public function showHighlight($requestedUrl)
	{
		if($requestedUrl == $this->myUrl)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
}
//Return true if $requestedUrl is the same as $myUrl
$newWebPage = new Webpage('/section/index.html');
echo ($newWebPage->showHighlight('/section/index.html') ? 'true' : 'false') . PHP_EOL;

//Return true if $requestedUrl is located in the same section as $myUrl, but only if $myUrl is a landing page.
