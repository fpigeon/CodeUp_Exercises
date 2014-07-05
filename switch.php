<?php
/*
CodeUp Day 6
Dev: Frank Pigeon
Date: May 13 2014
Description:
1. Create a new file named switch.php in your exercises directory with the following code:
2. Test and verify the results before proceeding by creating a matching if block. The output should be identical.
*/
// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
// N is today
$day_of_week = date('N');

switch($day_of_week)
{
    case 1:
        echo 'Today is Monday';
        break;
    case 2:
        echo 'Today is Tuesday';
     break;
    case 3:
        echo 'Today is Wednesday';
     break;
    case 4:
        echo 'Today is Thursday';
     break;
    case 5:
        echo 'Today is Friday';
     break;
    case 6:
        echo 'Today is Saturday';
     break;
    case 7:
        echo 'Today is Sunday';
     break;
    default:
     echo 'Today is an unknown day?';
     break;
}//end of switch
echo PHP_EOL;