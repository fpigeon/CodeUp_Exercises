<?php
/*
CodeUp
Dev: Frank Pigeon
Date: May 19 2014

Create a function that returns TRUE or FALSE if an array value is found.
Search for Tina and Bob in $names. Make sure it works as expected.

Create a function to compare 2 arrays that returns the number of values in common between the arrays.
 Use the 2 example arrays and make sure your solution uses array_search().
 */

function array_finder($search, $array){
	if(array_search($search, $array) !== FALSE){
		$found = TRUE;
	} //end of found
	else {
		$found = FALSE;
	} //not found
	
	return $found;

}//end of array_finder


// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//function calls
var_dump(array_finder('Tina', $names));
var_dump(array_finder('Bob', $names));
 

