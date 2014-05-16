<?php
/*
CodeUp Day 9
Dev: Frank Pigeon
Date: May 16 2014
Description:
1. Create the program to meet the criteria set by each comment.
2. Test and verify the output is as expected.
3. Update the 'is set' check on $something to see if it is 'empty'. What happens?
4. Revert previous change.
5. Before the first conditional, unset($nothing). What happens?
6. Find php.net function reference for the following groups: arrays, math, and strings. Familiarize yourself with the available options by reading the descriptions of each function in each list.
*/

//variables
$nothing = NULL;
$something = '';
$array = array(1,2,3);

function test($var){
	if (isset($var) ){
		echo "$var is SET\n";
	}//end of set

	if empty($var){
		echo "$var is EMPTY\n";
	}//end of empty
}//end of test

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results



