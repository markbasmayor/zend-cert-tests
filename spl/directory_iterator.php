<?php
$path = './sample';

/*
|--------------------------------------------------------------------------
| instantiate directory iterator
|--------------------------------------------------------------------------
*/
$di = new DirectoryIterator($path);

/*
|--------------------------------------------------------------------------
| loop through items and echo if the file is not a directory
|--------------------------------------------------------------------------
*/