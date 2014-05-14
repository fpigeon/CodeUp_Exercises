<?php
/*
CodeUp Day 6
Dev: Frank Pigeon
Date: May 13 2014
Description:
1. Create a file named foreach_books.php in you exercises directory. Commit each step and push to GitHub.

2. Construct a loop that iterates through each book and then each book's keys and values. Have it output the book's title, then list the key value pairs for the data about each book.

3. Update your loop to only show books that were written after 1950.
*/

//variables
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

//loop
foreach ($books as $key => $book) {
	//books only after 1950
	if($book['published'] > 1950){
		echo 'The book\'s title is ' . $key . PHP_EOL;
	
		foreach ($book as $key2 => $bookInfo) {
			echo "$key2 $bookInfo\n";
		}//end of $book foreach
		//new line after book
		echo '' . PHP_EOL;
	} // end of books after 1950
		
}//end of $books foreach