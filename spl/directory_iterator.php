<?php

$files = new DirectoryIterator('./sample');

foreach ($files as $file) {
    if ($file->isDir()) {continue;}
    echo $file ."\n";
}

?>
