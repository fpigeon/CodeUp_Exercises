<?php
/*
The specs for the game are:
game picks a random number between 1 and 100.
prompts user to guess the number
if user's guess is less than the number, it outputs "HIGHER"
if user's guess is more than the number, it outputs "LOWER"
if a user guesses the number, the game should declare "GOOD GUESS!"
Hints:

Using conditionals and loops here is important
Random numbers can be made with the internal rand() function
If user is right, tell them they won
While they are wrong, give them hints and keep asking
Use exit(0) to end the game
If you get stuck in game, ctrl-c will exit.
*/
//constants
define('MIN', 1);
define('MAX', 10);
//variables
$random = rand(1, 10);
$guess_count = 0;
//loop
do {
    echo 'Guess a number from '. MIN . ' to ' . MAX . ': ';
    $guess = fgets(STDIN);
    if ($guess == $random)
    {
        echo 'Good Guess!' . PHP_EOL;
    }
    elseif ($guess > $random)
    {
        echo 'Lower'. PHP_EOL;
    }
    else
    {
        echo 'Higer' . PHP_EOL;
    }
    $guess_count++;
} while ($guess != $random);
echo "It took you $guess_count tries.\n"
?>