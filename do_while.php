<?php
/*
CodeUp Day 4
Dev: Frank Pigeon
Date: May 8, 2014
Description:
1) After each step, commit your changes with a descriptive message and push to origin.
2) Create a do-while loop that will count by 2's starting with 0 and ending at 100. Follow each number with a newline.
3) Alter your loop to count backwards by 5's from 100 to -10.
4) Create a do-while loop that starts at 2, and displays the result $a * $a on each line while $a is less than 1,000,000. Output should equal:

2
4
16
256
65536
*/
//constants
define ('MAX', 1000000);

//variables
$test = 2;

//main
do
{
    echo "\$test is $test\n";
    $test = $test * $test; //multiply by itself
} while ($test <= MAX);