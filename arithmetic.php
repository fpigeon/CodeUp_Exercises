<?php
/*
CodeUp Day 6
Dev: Frank Pigeon
Date: May 13 2014
Description:
1. Fill in the // Add code here blocks to make each function echo the proper result.
2. Add code after functions that calls each function with real numbers.
3. Verify the output of each test.
4. Add a function modulus that finds the modulus of 2 numbers.
5. Add test code and verify the output of modulus.
*/

function add($a, $b) {
    echo $a + $b . PHP_EOL;
} // end of add

function subtract($a, $b) {
	echo $a - $b . PHP_EOL;    
} // end of subtract

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
} //end of multiply

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
} // end of divide

// function mod($a, $b) {
//     echo $a % $b . PHP_EOL;
// } // end of divide

add(10, 2);
subtract(10, 2);
multiply(10, 2);
divide(10, 2);