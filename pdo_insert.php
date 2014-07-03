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
    description TEXT NOT NULL,
    PRIMARY KEY (id)
)';
// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);

//create array and insert via foreach loop
$parks = [
    ['name' => 'Yellowstone', 'location' => 'Wyoming, Montana, Idaho', 'date_established' => '1872-03-01', 'area_in_acres' => 2219790.71,
    'description' => "Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored
        hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring.
        The yellow-hued Grand Canyon of the Yellowstone River has a number of scenic waterfalls, and four mountain ranges run through the park.
        More than 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk, make this park one of the best wildlife viewing
        spots in the country." ],
    ['name' => 'Sequoia', 'location' => 'California', 'date_established' => '1890-09-25', 'area_in_acres' => 404051.17,
    'description' => "This park protects the Giant Forest, which boasts the world's largest tree, General Sherman, as well as four of the next nine.
        It also has over 240 caves, a scenic segment of the Sierra Nevada including the tallest mountain in the continental U.S., and Moro Rock,
        a photogenic granite dome"],
    ['name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890-10-01', 'area_in_acres' => 761266.19,
    'description' => "Among the earliest candidates for National Park status, Yosemite features towering granite cliffs, dramatic waterfalls,
        and old-growth forests at a unique intersection of geology and hydrology. Half Dome and El Capitan rise from the park's centerpiece,
        the glacier-carved Yosemite Valley, and from its vertical walls drop Yosemite Falls, North America's tallest waterfall.
        Three Giant Sequoia groves, along with a pristine wilderness in the heart of the Sierra Nevada, are home to an abundance of rare plant
        and animal species." ],
    ['name' => 'Mount Rainier', 'location' => 'Washington', 'date_established' => '1899-03-02', 'area_in_acres' => 235625.00,
    'description' => "Mount Rainier, an active stratovolcano, is the most prominent peak in the Cascades, and is covered by 26 named glaciers
        including Carbon Glacier and Emmons Glacier, the largest in the continental United States. The mountain is popular for climbing,
        and more than half of the park is covered by subalpine and alpine forests. Paradise on the south slope is one of the snowiest places in the world,
        and the Longmire visitor center is the start of the Wonderland Trail, which encircles the mountain." ],
    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => 183224.05,
    'description' => "Crater Lake lies in the caldera of an ancient volcano called Mount Mazama that collapsed 7,700 years ago. It is the deepest lake in
        the United States and is famous for its vivid blue color and water clarity. There are two more recent volcanic islands in the lake, and,
        with no inlets or outlets, all water comes through precipitation."],
    ['name' => 'Wind Cave', 'location' => 'South Dakota', 'date_established' => '1903-01-09', 'area_in_acres' => 28295.03,
    'description' => "Wind Cave is distinctive for its calcite fin formations called boxwork and needle-like growths called frostwork. The cave,
        which was discovered by a sound like that of wind coming from a hole in the ground, is the world's densest cave system. Above ground is a mixed-grass
        prairie with animals such as bison, black-footed ferrets, and prairie dogs, and Ponderosa pine forests home to cougars and elk." ],
    ['name' => 'Mesa Verde', 'location' => 'Colorado', 'date_established' => '1906-06-29', 'area_in_acres' => 52121.93,
    'description' => "This area constitutes over 4,000 archaeological sites of the Ancestral Puebloan people, who lived here and elsewhere in the Four Corners
        region for at least 700 years. Cliff dwellings built in the 12th and 13th centuries include the famous Cliff Palace, which has 150 rooms and 23 kivas,
        and the Balcony House, with its many passages and tunnels." ],
    ['name' => 'Glacier', 'location' => 'Montana', 'date_established' => '1910-05-11', 'area_in_acres' => 1013572.41,
    'description' => "The U.S. half of Waterton-Glacier International Peace Park, this park hosts 26 glaciers and 130 named lakes beneath a stunning canopy of
        Rocky Mountain peaks. There are historic hotels and a landmark road in this region of rapidly receding glaciers. The local mountains, formed by an overthrust,
        expose the world's best-preserved sedimentary fossils from the Proterozoic era." ],
    ['name' => 'Rocky Mountain', 'location' => 'Colorado', 'date_established' => '1915-01-26', 'area_in_acres' => 265828.41,
    'description' => "Bisected north to south by the Continental Divide, this portion of the Rockies has ecosystems varying from over 150 riparian lakes to montane
        and subalpine forests to treeless alpine tundra. Wildlife including mule deer, bighorn sheep, black bears, and cougars inhabit its igneous mountains and
        glacier valleys. Longs Peak, a classic Colorado fourteener, and the scenic Bear Lake are popular destinations, as well as the famous Trail Ridge Road,
        which reaches an elevation of more than 12,000 feet (3,700 m)." ],
    ['name' => 'Hawaii Volcanoes', 'location' => 'Hawaii', 'date_established' => '1916-08-01', 'area_in_acres' => 323431.38,
    'description' => "This park on the Big Island protects the famous Kīlauea and Mauna Loa volcanoes, two of the world's most active geological features.
        Diverse ecosystems range from tropical forests at sea level to barren lava beds at more than 13,000 feet (4,000 m)." ]
];
$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
                       VALUES (:name, :location, :date_established, :area_in_acres, :description)');
foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_INT);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);    

    $stmt->execute();

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
} //end of foreach