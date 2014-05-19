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


function array_common_count($array1, $array2){
	$match_count = 0; //stores match counters
	
	foreach ($array1 as $value) {
		//if(array_search($array1[0], $array1) === array_search($array2[0], $array2))
		if (array_finder($value, $array2)) {
			$match_count++; //increment the count by 1
		}	//end of founf match
	} //end of loop
		return $match_count;
} //end of array_compare

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Adam', 'Snuffy', 'Amy', 'Michael'];

//function calls
var_dump(array_finder('Tina', $names));
var_dump(array_finder('Bob', $names));

$total_matches = array_common_count($names, $compare);
echo "You have $total_matches matches\n";

