<?php
/*
Complete the function getBreadcrumbNavigation() so that it returns a string of HTML code. Assume the
variable $breadcrumbs contains an array of Webpage objects with valid values for its member variables.
The returned HTML code should be an ordered list of links. The last entry in the array is the current page
and should show the anchor text, but should not have an anchor tag around it.
*/
class Template {
	//$breadcrumbs contains an array of Webpage objects with valid values for its member variables.
	private $breadcrumbs = [
								'home' => '/index.html',
								'values' => '/values.html',
								'about' => '/about.html',
								'contact' => '/contact.html',
                                'connect' => '/connect.html',
                                'current' => '/here.html'
							];
	public function getBreadcrumbNavigation() {
		// return string of html code
		// he returned HTML code should be an ordered list of links. The last entry in the array is the current page
		// and should show the anchor text, but should not have an anchor tag around it.
        $current_page = array_pop($this->breadcrumbs);
        echo '<ol>' . PHP_EOL;
		foreach ($this->breadcrumbs as $page => $breadcrumb)
		{
            echo '<li>' . '<a href="' . $breadcrumb . '">' . $page . '</a>'. '</li>';
            echo PHP_EOL;
		}
        echo '<li>' . $current_page . '</li>' . PHP_EOL;
        echo '</ol>'. PHP_EOL;
	}
}
class Webpage {
	public $anchorText, $myUrl;
}

$newWebPageNav = new Template();
$newWebPageNav->getBreadcrumbNavigation();