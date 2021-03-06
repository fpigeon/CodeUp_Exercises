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

unset($nothing);

function test($var)
{
    if (isset($var))
    {
        echo "variable is SET\n";
    }//end of set

    if (empty($var))
    {
        echo "variable is EMPTY\n";
    }//end of empty
}//end of function test

test($array);