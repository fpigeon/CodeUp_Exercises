<?php
/*
CodeUp Day 5
Dev: Frank Pigeon
Date: May 12, 2014
Description:
The specs for the game are:
- game picks a random number between 1 and 100.
- prompts user to guess the number
- if user's guess is less than the number, it outputs "HIGHER"
- if user's guess is more than the number, it outputs "LOWER"
- if a user guesses the number, the game should declare "GOOD GUESS!"

Hints:
- Using conditionals and loops here is important
- Random numbers can be made with the internal rand() function
- If user is right, tell them they won
- While they are wrong, give them hints and keep asking
- Use exit(0) to end the game
- If you get stuck in game, ctrl-c will exit.
*/

//too few arguments
if ($argc < 3)
{
    echo 'Please enter two integers for min and max' . PHP_EOL;
    exit(1);
}
//not entering integers
elseif (!is_numeric($argv[1]) || !is_numeric($argv[2]) )
{
    echo "Please enter two numbers\n";
    exit(2);
}
else
{
    //constants
    define ('MIN', $argv[1]); //first argument
    define ('MAX', $argv[2]); //second argument
    define ('LOW_OUTOUT', 'HIGHER');
    define ('HIGH_OUTPUT', 'LOWER');
    define ('CORRECT', 'GOOD GUESS!');

    //variables
    $guess_count = 1; //initialize the number of guesses

    //create a random number
    $random_number = mt_rand(MIN, MAX);

    //user input
    fwrite(STDOUT, 'Guess a number between ' . MIN . ' and ' . MAX . ': ');
    $guess = (int) fgets(STDIN);

    //loop until right guesss
    while ($guess != $random_number)
    {
        if ($guess < $random_number)
        {
            fwrite(STDOUT, LOW_OUTOUT . PHP_EOL);
        } //end of less
        elseif ($guess > $random_number)
        {
            fwrite(STDOUT, HIGH_OUTPUT . PHP_EOL);
        }//end of high

        //user input
        fwrite(STDOUT, 'Guess a number between ' . MIN . ' and ' . MAX . ': ');
        $guess = (int) fgets(STDIN);
        $guess_count++; //increment guess count
    } //end of while

    //User has the correct answer!
    fwrite(STDOUT, CORRECT . " It took you $guess_count tries.\n");
    exit(0);
} //end of correct case