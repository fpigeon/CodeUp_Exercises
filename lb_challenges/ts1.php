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
	private $landingPage = 'index.html';
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
	protected function isLandingPage($myUrl)
	{
		//get the last 10 of $myUrl to compare with $landingPage
		$file = substr($myUrl, -10);
		if ($file == $this->landingPage)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function showHighlight($requestedUrl)
	{
		//variables
		$dir1 = dirname($this->myUrl);
		$dir2 = dirname($requestedUrl);
		$file1_array = explode('/', $dir1);
		$file2_array = explode('/', $dir2);

		//determine if both URLs are in the same section
		foreach ($file1_array as $f1)
		{
			$match = false;
		 	foreach ($file2_array as $f2)
		 	{
		    	if ($f1 == $f2)
		     	$match = true;
		 	}
		}
		//Return true if $requestedUrl is the same as $myUrl
		if ($requestedUrl == $this->myUrl)
		{
			return true;
		}
		//Return true if $requestedUrl is located in the same section as $myUrl, but only if $myUrl is a landing page.
		//Return true if $myUrl is the landing page of a parent section to $requestedUrl.
		elseif (($match == true) && $this->isLandingPage($this->myUrl))
		{
			return true;

		}
		else
		{
			return false;
		}
	}
}
// test 1 true
$newWebPage1 = new Webpage('/section/index.html');
echo ($newWebPage1->showHighlight('/section/page.html') ? 'true' : 'false') . PHP_EOL;
// test 2 false
$newWebPage2 = new Webpage('/section/page.html');
echo ($newWebPage2->showHighlight('/section/other-page.html') ? 'true' : 'false') . PHP_EOL;
// test 3 true
$newWebPage3 = new Webpage('/section/index.html');
echo ($newWebPage3->showHighlight('/section/subsection/index.html') ? 'true' : 'false') . PHP_EOL;
// test 4 true
$newWebPage4 = new Webpage('/section/index.html');
echo ($newWebPage4->showHighlight('/section/subsection/page.html') ? 'true' : 'false') . PHP_EOL;
// test 5 false
$newWebPage5 = new Webpage('/section/subsection/index.html');
echo ($newWebPage5->showHighlight('/section/other/index.html') ? 'true' : 'false') . PHP_EOL;