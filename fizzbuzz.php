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
define('MULTIPLE_THREE', 'Fizz');
define('MULTIPLE_FIVE', 'Buzz');
define('MULTIPLE_FIFTEEN', 'FizzBuzz');

//for loop
for ($index = MIN; $index <= MAX; $index++)
{
    $divisibleBy3 = $index % 3 == 0;
    $divisibleBy5 = $index % 5 == 0;

    if ($divisibleBy3 && $divisibleBy5)
    {
        echo MULTIPLE_FIFTEEN . PHP_EOL;
    } //end of FizzBuzz
    elseif ($divisibleBy3)
    {
        echo MULTIPLE_THREE . PHP_EOL;
    } //end of Fizz
    elseif ($divisibleBy5)
    {
        echo MULTIPLE_FIVE . PHP_EOL;
    }//end of Buzz
    else
    {
        echo ($index .  PHP_EOL);
    }//no flags
}//end of for loop