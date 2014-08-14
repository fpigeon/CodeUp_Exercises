<?php
// Create an array of numbers, 1-5, using array(), and assign it to a variable. Now var_dump() your variable. Now print_r() your variable.
// Repeat #1 using square brackets [] instead of array().
// Echo the element with the index of 3 from your array. The value should be 4. Do you see how array indices work?
// Create an associative array with keys (first_name, last_name, email, phone) and put a person in this array.
// Create a variable $test and make it a multidimensional array with the keys person1, person2, and person3 with your person array from last step, and 2 more people arrays, as values.

$numbers = array(1, 2, 3, 4, 5);
print_r($numbers);

$numbers2 = [1, 2, 3, 4, 5];
print_r($numbers2);

echo 'Index 3 is ' . $numbers[3] . PHP_EOL;

$person1 = [
    'first_name' => 'Frank',
    'last_name' => 'Pigeon',
    'email' => 'frank.pigeonjr@gmail.com',
    'phone' => '210-704-7443'
];
$person2 = [
    'first_name' => 'Johnny',
    'last_name' => 'Helper',
    'email' => 'jh@gmail.com',
    'phone' => '210-123-4567'
];
$person3 = [
    'first_name' => 'Suzy',
    'last_name' => 'Helper',
    'email' => 'sz@gmail.com',
    'phone' => '210-789-1234'
];
$test = [$person1, $person2, $person3];
print_r($test);
 ?>