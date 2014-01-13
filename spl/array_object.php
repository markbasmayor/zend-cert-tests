<?php
namespace spl;

$ao = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
$ao[] = 10;
$ao[] = 20;
$ao[] = 30;
$ao[] = 60;
$ao[] = 50;
// var_dump($ao);
$ao->var0 = 1;
$ao->var1 = 2;
$ao->var2 = 3;
$ao->var3 = 4;
$ao->var4 = 5;
// var_dump($ao);

echo "count: ".$ao->count()."\n";
$ao->asort();

foreach ($ao as $arr) {
    echo $arr . "\n";
}
