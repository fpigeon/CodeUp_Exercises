<?php
/*
CodeUp Day 4
Dev: Frank Pigeon
Date: May 8, 2014
*/

//variables
$a = 1;
$b = 10;
$c = '10';

//display output of variables
echo '$a is ' . $a . PHP_EOL;
echo '$b is ' . $b . PHP_EOL;
echo '$c is ' . $c . PHP_EOL;
echo '-------------' . PHP_EOL;
// Add an else clause to the next two statments
if ($a < $b)
{
    // output the appropriate result
    echo "$a is less than $b\n";
} //end of if
else
{
    echo "This is the else clause\n";
} // end of else

if ($b > $a)
{
    // output the appropriate result
    echo "$b is greater than $a\n";
} //end of if
else
{
    echo "This is the else clause\n";
} // end of else

// Shorten the next 2 statements into an if/else
if ($b >= $c)
{
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
} //end if
else
{
    // output the appropriate result
    echo "$b is less than or equal to $c\n";
} //end else

// combine the next 4 conditionals into
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b === $c)
{
    // output the appropriate result
    echo "$b is identical to $c\n";
} //end of identical
elseif ($b == $c) 
{
    // output the appropriate result
    echo "$b is equal (thanks PHP) to $c\n";
}//end of equal
elseif ($b !== $c) 
{
    // output the appropriate result
    echo "$b is not identical to $c\n";
} //end of not identical
else 
{
    // output the appropriate result
    echo "$b is not equal to $c\n";
}//end of not equal