<?php
/*
Description:
Create a new directory in your vagrant-lamp directory named todo_list with a file named todo.php containing the code above. Use git init to initialize a new local repository in that directory and commit your code. Create a new remote repository on GitHub called CLI_Todo_List and add the remote to your local repository so you can push your code.

After each exercise item, commit and push changes to your GitHub repository.

Update the code to allow upper and lowercase inputs from user for all menu items. Test adding, removing, and quitting.

Update the program to start numbering the list with 1 instead of 0. Make sure remove still works as expected.
*/
// Create array to hold list of todo items
// List array items formatted for CLI
 function list_items($items)
 {
    $list_string = '';
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        $key = $key + 1;
        $list_string .= '[' . $key . '] ' . $item . PHP_EOL;
    }
    return $list_string;
 }

 // Get STDIN, strip whitespace and newlines,
 // and convert to uppercase if $upper is true
 function get_input($input, $upper = FALSE)
 {
    // Return filtered STDIN input
    if ($upper) {
        $input = strtoupper($input);
    }

    return $input = trim($input);
 }
function sort_menu ($sort_option, &$array)
{
    if ($sort_option == 'A'){
        asort($array);
    }
    elseif ($sort_option == 'Z') {
        arsort($array);
    }
    elseif ($sort_option == 'O') {
        ksort($array);
    }
    else {
        krsort($array);
    }
}

$items = array();

// The loop!
do {
    echo list_items($items);
    // Show the menu options
    echo '(O)pen, (N)ew item, (R)emove item, (S)ort, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(fgets(STDIN), TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo '(B)eginning or (E)nd: ';
        $location = get_input(fgets(STDIN), TRUE);

        echo 'Enter item: ';
        $new_todo = get_input(fgets(STDIN));

        if ($location =='B') {
            array_unshift($items, $new_todo);
        }
        else{
            array_push($items, $new_todo);
        }
        // Add entry to list array
        //OLD $items[] = get_input(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key - 1]);
    } elseif ($input == 'S') {
        do {
            echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered: ";
            $sort_option = get_input(fgets(STDIN), TRUE);
        } while ($sort_option != 'A' && $sort_option != 'Z' && $sort_option != 'O' && $sort_option != 'R');
        sort_menu($sort_option, $items);
    } elseif ($input == 'F'){
        array_shift($items);
    } elseif ($input == 'L'){
        array_pop($items);
    } elseif ($input == 'O') {
        $filename = 'data/list.txt';
        $handle = fopen($filename, "r");
        $contents = fread($handle, filesize($filename));
        $contents_array = explode("\n", $contents);
        fclose($handle);

        //add to todo list
        $items = array_merge($items, $contents_array);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);