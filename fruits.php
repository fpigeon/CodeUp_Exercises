<?php
/*
CodeUp Day 6
Dev: Frank Pigeon
Date: May 13 2014
Description:
HW Exercises and CodeUp App
Fruit.php for GitHub
1) Create an array of fruits
   Write a loop that prints the fruits
   as a For and a forEach Loop
2) Modfy the fruit array so that you have fruit_name => color;
apple red , banana yellow
print out using a forEach loop
     Apples are Red
     Bananas are Yellow
*/

//variables
$fruits = [
    'apple' => [
        'color' => 'red'
    ],
    'banana' => [
        'color' => 'yellow'
    ],
    'carrot' => [
        'color' => 'orange'
    ],
    'grape' => [
        'color' => 'purple'
    ],
    'kiwi' => [
        'color' => 'green'
    ]
];//end of fruits array

//loop through all fruits
foreach ($fruits as $fruitName => $fruit)
{
    echo ucfirst($fruitName);
	foreach ($fruit as $color => $fruitInfo)
    {
        echo 's are ' . $fruitInfo . PHP_EOL;
	}//end of $fruitName foreach

}//end of $fruits foreach