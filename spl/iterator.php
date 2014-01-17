<?php

/*
|--------------------------------------------------------------------------
| create Books class that implements Iterator
|--------------------------------------------------------------------------
*/


$books = new Books(array(1,2,3,4));
foreach ($books as $book) {
	echo $book . "\n";
}