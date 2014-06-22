<?php 
// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'frank', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Create the query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres FLOAT (9,2) NOT NULL,
    PRIMARY KEY (id)
)';
// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);

//create array and insert via foreach loop
$parks = [
    ['name' => 'Yellowstone', 'location' => 'Wyoming, Montana, Idaho', 'date_established' => '1872-03-01', 'area_in_acres' => 2219790.71 ],
    ['name' => 'Sequoia', 'location' => 'California', 'date_established' => '1890-09-25', 'area_in_acres' => 404051.17 ],
    ['name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890-10-01', 'area_in_acres' => 761266.19 ],
    ['name' => 'Mount Rainier', 'location' => 'Washington', 'date_established' => '1899-03-02', 'area_in_acres' => 235625.00 ],
    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => 183224.05 ],
    ['name' => 'Wind Cave', 'location' => 'South Dakota', 'date_established' => '1903-01-09', 'area_in_acres' => 28295.03 ],
    ['name' => 'Mesa Verde', 'location' => 'Colorado', 'date_established' => '1906-06-29', 'area_in_acres' => 52121.93 ],
    ['name' => 'Glacier', 'location' => 'Montana', 'date_established' => '1910-05-11', 'area_in_acres' => 1013572.41 ],
    ['name' => 'Rocky Mountain', 'location' => 'Colorado', 'date_established' => '1915-01-26', 'area_in_acres' => 265828.41 ],
    ['name' => 'Hawaii Volcanoes', 'location' => 'Hawaii', 'date_established' => '1916-08-01', 'area_in_acres' => 323431.38 ]
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}',
     '{$park['date_established']}', '{$park['area_in_acres']}' )";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
} //end of foreach