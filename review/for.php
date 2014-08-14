<?php
/*
Create a file named for.php in your exercises repo. Commit and push all changes after each step.

Prompt user for a starting number and ending number, then display all the numbers from the starting to ending using a for loop.
Refactor to allow user to choose increment. (count by 1, 2, 10, ...)
Default increment to 1 if no input.
Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/is_numeric.
*/

//user input
echo 'Enter a starting number: ';
$start = trim(fgets(STDIN));
echo 'Enter an ending number: ';
$end = trim(fgets(STDIN));
echo 'Enter an incrementor: ';
$incrementor = trim(fgets(STDIN));
if (empty($incrementor))
{
    $incrementor = 1;
}

if (!is_numeric($start) || !is_numeric($end) || !is_numeric($incrementor))
{
    echo 'Must use numeric numbers for this program.' . PHP_EOL;
    exit(1);
}
//loop
for ($i = $start; $i <= $end; $i+=$incrementor)
{
    echo $i . PHP_EOL;
}
?>