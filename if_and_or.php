<?php
/*
CodeUp Day 4
Dev: Frank Pigeon
Date: May 8, 2014
*/

$x = 0;
$y = 5;
$z = 10;

// if $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
if ($x < $y && $y < $z) {
	 echo "{$x} < {$y} < {$z}\n";
} //end if


// OR EXAMPLES

// if $x is greater than 0 OR less than 10, echo the result as a sentence "$x is greater than 0 OR less than 10".
if ($x > 0 || $x < 10){
	echo "$x is greater than 0 OR less than 10\n";
} //end if

// repeat the if statement for $y and $z.
if ($y > 0 || $y < 10){
	echo "$y is greater than 0 OR less than 10\n";
} //end if

if ($z > 0 || $z < 10){
	echo "$z is greater than 0 OR less than 10\n";
} //end if


//AND Examples

// If $x is greater than 0 AND less than 10, echo the result as a sentence "$x is greater than 0 AND less than 10".
if ($x > 0 && $x < 10){
	echo "$x is greater than 0 AND less than 10\n";
} //end if


// repeat the if statement for $y and $z.
if ($y > 0 && $y < 10){
	echo "$y is greater than 0 AND less than 10\n";
} //end if

if ($z > 0 && $z < 10){
	echo "$z is greater than 0 AND less than 10\n";
} //end if}


