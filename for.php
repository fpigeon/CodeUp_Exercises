<?php
/*
CodeUp Day 6
Dev: Frank Pigeon
Date: May 13 2014
Description:
1. Prompt user for a starting number and ending number, then display all the numbers from the starting to ending using a for loop.
2. Refactor to allow user to choose increment. (count by 1, 2, 10, ...)
3. Default increment to 1 if no input.
4. Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/is_numeric.
*/

//prompt user for starting, ending number, and incrementor
echo 'Please enter a starting number: ';
$start_num = trim(fgets(STDIN));
echo 'Please enter an ending number: ';
$end_num = trim(fgets(STDIN));
echo 'Please enter an incrementor: ';
$incrementor = trim(fgets(STDIN));

//only allow numbers
if ( !is_numeric($start_num) || !is_numeric($end_num) )
{
    echo 'You must enter numeric values' . PHP_EOL;
    exit(1);
} //end of if

//default incrementor = 1 if no input
if ($incrementor == "\n")
{
    $incrementor = 1; //default incrementor
}//end of default incrementor

//for loop
for ($index = $start_num; $index <= $end_num; $index += $incrementor)
{
    echo ($index . PHP_EOL);
} //end of for loop