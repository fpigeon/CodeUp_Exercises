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
    'apple' =>
        ['color' => 'red'],
    
    'banana' =>
        ['color' => 'yellow'],

    'carrot' =>
        ['color' => 'orange'],
    
    'grape' =>
        ['color' => 'purple'],
    
    'kiwi' =>
        ['color' => 'green']
];//end of fruits array

//as a for loop
for ($i = 0; $i < count($fruits); $i++) {
    $fruit = $fruits[$i];
    echo "The fruit's name is $fruit\n";
}//end of for loop

echo '' . PHP_EOL;
echo 'End of For Loop' . PHP_EOL;
echo '' . PHP_EOL;


//loop through all fruits
foreach ($fruits as $key => $fruit) {
	echo 'The fruit\'s name is ' . $key . PHP_EOL;

	foreach ($fruit as $key => $fruitInfo) {
		echo "and the $key is $fruitInfo\n";
	}//end of $fruit foreach
	
    //new line after book
	echo '' . PHP_EOL;
	
}//end of $fruits foreach