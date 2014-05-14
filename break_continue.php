<?php
/*
CodeUp Day 6
Dev: Frank Pigeon
Date: May 13 2014
Description:
Create a file named break_continue.php in your exercises directory. Commit and push to GitHub after each step.

1. Create a for loop that shows all even numbers between 1 and 100 using continue.

2. Create another for loop that counts from 1 to 100, but stops after 10 using break.
*/

for ($ii = 1; $ii <=100; $ii++) {
	echo $ii . PHP_EOL;
	if ($ii == 10){ //stop at 10
		break; //break out of the loop
	} //end of even
	
} // end of for loop