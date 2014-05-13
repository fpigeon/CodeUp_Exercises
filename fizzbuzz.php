<?php
/*
CodeUp Day 6
Dev: Frank Pigeon
Date: May 13 2014
Description:
Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.
*/

//constants
define('MIN', 1);
define('MAX', 100);
define('multThree', 'Fizz');
define('MultFive', 'Buzz');
define('MultFifteen', 'FizzBuzz');

//for loop
for ($index = MIN; $index <= MAX; $index++){
	$divBy3 = $index % 3 == 0;
	$divBy5 = $index % 5 == 0;
	$divBy15 = $index % 15 == 0;

	if ($index == $divBy15){
		echo MultFifteen . PHP_EOL;
	} //end of FizzBuzz
	elseif ($index == $divBy3) {
		echo multThree . PHP_EOL;
	} //end of Fizz
	elseif ($index == $divBy5) {
		echo MultFive . PHP_EOL;
	}//end of Buzz
	else{
		echo ($index .  PHP_EOL);	
	}//no flags
	
}//end of for loop