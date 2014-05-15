<?php
/*
CodeUp Day 8
Dev: Frank Pigeon
Date: May 15 2014
Description:
1. Fill in the // Add code here blocks to make each function echo the proper result.
2. Add code after functions that calls each function with real numbers.
3. Verify the output of each test.
4. Add a function modulus that finds the modulus of 2 numbers.
5. Add test code and verify the output of modulus.
Step2
6. Validate all the arguments, and display an error if the input is not numeric.
7. Validate divide by 0 errors, display error if attempts to divide by 0 are made.
8. Make the error messages show the values of the arguments.
9. Refactor the error messages into their own function, have the other functions use it for error messaging.
Step 3
10. Refactor each function to return the result, removing the echo.
11. Validate divide by 0 errors, return FALSE if divide by 0 is attempted.
*/

function error ($a, $b, $error_code){
	if($error_code === 1){
		return  "$a and/or $b are not numbers\n";
	}//end of error 1
	else {
		//return "$a is not divisble by zero\n";
		return FALSE;
	} // end error 2
} // end of error code

function add($a, $b) {
	//error check
	if(is_numeric($a) && is_numeric($b) ){
		return $a + $b . PHP_EOL;
	}//end of error check
	else{
		return error($a, $b, 1);
	} //default error message
    
} // end of add

function subtract($a, $b) {
//error check
	if(is_numeric($a) && is_numeric($b) ){
		return $a - $b . PHP_EOL;
	}//end of error check
	else{
		return error($a, $b, 1);
	} //default error message} 
} // end of subtract

function multiply($a, $b) {
 //error check
	if(is_numeric($a) && is_numeric($b) ){
		return $a * $b . PHP_EOL;
	}//end of error check
	else{
		return error($a, $b, 1);
	} //default error message
} //end of multiply

function divide($a, $b) {
    //error check
	if(is_numeric($a) && is_numeric($b) ){
		if ($b === 0){
			return error($a, $b, 999);
		} //check for div by 0
		else {
			return $a / $b . PHP_EOL;
		} //ok to divide
		
	}//end of error check
	else{
		return error($a, $b, 1);
	} //default error message
} // end of divide

function mod($a, $b) {
    //error check
	if(is_numeric($a) && is_numeric($b) ){
		return $a % $b . PHP_EOL;
	}//end of error check
	else{
		return error($a, $b, 1);
	} //default error message
} // end of mod

//function calls
echo add(10, 2);
echo subtract(10, 2);
echo multiply(10, 2);
echo divide(10, 0);
echo mod(10, 2);