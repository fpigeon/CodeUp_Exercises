<?php
/*
Complete the function getBreadcrumbNavigation() so that it returns a string of HTML code. Assume the
variable $breadcrumbs contains an array of Webpage objects with valid values for its member variables.
The returned HTML code should be an ordered list of links. The last entry in the array is the current page
and should show the anchor text, but should not have an anchor tag around it.
*/
class Template {
	private $breadcrumbs;
	public function getBreadcrumbNavigation() {
	}
}
class Webpage {
	public $anchorText, $myUrl;
}