<?php
namespace Spl;
class Store implements \IteratorAggregate
{

    private $_items;


    public function __construct($items)
    {
        $this->_items = $items;
    }


    public function getIterator()
    {
        // composition
        return new \ArrayIterator($this->_items);
    }
}


$store = new Store(array(
    'candy', 'soda', 'chips'
));

foreach ($store as $item) {
    echo($item).'<br>';
}
