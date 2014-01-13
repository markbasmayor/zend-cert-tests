<?php
namespace spl;
class Cars implements \IteratorAggregate
{
    public $_storage;

    public function __construct($cars)
    {
        $this->_storage = $cars;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->_storage);
    }
}

$cars = new Cars(array('toyota', 'honda', 'ford'));
foreach ($cars as $car) {
    echo $car . "\n";
}
