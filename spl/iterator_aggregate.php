<?php

/*
|--------------------------------------------------------------------------
| create class that implements iterator aggregate
|--------------------------------------------------------------------------
*/

$books = new Books(array(1,2,3,4));
foreach ($books as $book) {
	echo $book . "\n";
}