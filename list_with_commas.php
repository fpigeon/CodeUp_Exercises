<?php
/*
CodeUp
Dev: Frank Pigeon
Date: May 20 ,2014
*/

// Converts array into list n1, n2, ..., and n3
// if $alpha is set to TRUE will sort alphabetically
function humanized_list($string, $alpha = FALSE)
{
    //turn string into an array
    $exploded = explode(', ', $string);
    //sort alphabetical
    if ($alpha === TRUE)
    {
        sort($exploded);
    } //end of sort alphabetical

    //add a 'and ' to the last index in the array
    $last_one = 'and '. array_pop($exploded);
    //add to the end of the array
    array_push($exploded, $last_one);
    // turn back into a string
    $imploded = implode(', ', $exploded);
    return $imploded;
}//end of function humanized list

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize the list
$famous_fake_physicists = humanized_list($physicists_string, TRUE);

// Output
echo "Original string is:\n$physicists_string\n";
echo "Formatted Output:\n";
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";