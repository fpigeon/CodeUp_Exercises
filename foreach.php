<?php
/*
CodeUp Day 6
Dev: Frank Pigeon
Date: May 13 2014
Description:
1. Create a file named foreach.php in you exercises directory. Commit each step and push to GitHub.

2. Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

3. Construct a loop that iterates through each value and outputs only values with a type that is scalar.

4. Create a loop that will echo out every value, including those nested in arrays. Output should look like this.
Sgt. Pepper
11

Array
3.14
12 + 7

11
*/

//variables
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
$index = 0;

foreach ($things as $thing){
	/*if (is_scalar($thing) ){
		echo ('Array index ' . $index . ' value is scalar');
	} //end of integer
	elseif (is_float($thing)) {
		echo ('Array index ' . $index . ' value is float');
	}//end of float
	elseif (is_bool($thing)) {
		echo ('Array index ' . $index . ' value is boolean');
	}//end of float
	elseif (is_array($thing)){
		echo ('Array index ' . $index . ' value is an array');
	}//end of array
	elseif (is_null($thing)){
		echo ('Array index ' . $index . ' value is an null');
	}//end of null
	elseif (is_string($thing)){
		echo ('Array index ' . $index . ' value is a string');
	}//end of string
*/

	if (is_array($thing)){
		echo "Array";
	}//internal array

	elseif (is_scalar($thing)){
		echo ($thing);
	} //scalar
	echo (PHP_EOL);
	
	$index++;
} //end of foreach