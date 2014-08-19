<?php
function search($needle, $haystack) {
    if (array_search($needle, $haystack) !== FALSE) {
        $is_found = TRUE;
    }
    else {
        $is_found = FALSE;
    }
    return $is_found;
}

function common_array_counter($array1, $array2) {
    $common_count = 0;
    foreach ($array1 as $value) {
        if ( search($value, $array2) ) {
            $common_count++;
        }
    }
    return $common_count;
}

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//function call
$count = common_array_counter($compare, $names);
echo 'The number of common values in the two arrays is ' . $count . PHP_EOL;