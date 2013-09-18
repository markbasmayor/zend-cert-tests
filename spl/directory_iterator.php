<?php

$di = new DirectoryIterator('.');

echo '<pre>';

foreach($di as $dir) {
    if($dir->isDir()) {
        continue;
    }
    echo $dir->getFilename() .'<br>';
}
