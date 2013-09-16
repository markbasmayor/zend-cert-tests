<?php

$movies = array('spiderman', 'xmen', 'scooby doo');

$ao = new ArrayObject($movies);
$ao->asort();

echo '<pre>';

// ArrayObject implements IteratorAggregate so we can iterate over the elements using a foreach loop
foreach ($ao as $obj) {
 var_dump($obj);
}

// ArrayObject implements Countable
echo "count: ".count($ao)."<br>";

// ArrayObject implements ArrayAccess
var_dump($ao[0]);

$ao[] = 'watchmen';
var_dump($ao[3]);


