<?php
function search($needle, $haystack){
    $result = array_search($needle, $haystack);
    if ($result == false){
        return false;
    }
    else {
        return true;
    }
}

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//function call
$search_result = search('Adam', $names);
var_dump($search_result);