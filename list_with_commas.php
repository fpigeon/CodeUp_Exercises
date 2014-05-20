<?php 
/*
CodeUp
Dev: Frank Pigeon
Date: May 20 ,2014
*/

// Converts array into list n1, n2, ..., and n3
function humanized_list($string) {
	$exploded = explode(', ', $string);
	$last_one = array_pop($exploded);
	$last_one = 'and ' . $last_one;
	array_push($exploded, $last_one);
	$imploded = implode(', ', $exploded);
	return $imploded;
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

//explode the string
//$famous_fake_physicists = explode(', ', $physicists_string);

//break off last one and add 'and' then add to array
//$last_physicists = array_pop($famous_fake_physicists);
//$last_physicists = 'and ' . $last_physicists;
//array_push($famous_fake_physicists, $last_physicists);
//$famous_fake_physicists = implode(', ', $famous_fake_physicists);
// Output sentence
echo "Original string is:\n$physicists_string\n";

echo "\n*********Formatted Output*************\n\n";
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";