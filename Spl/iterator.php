<?php
namespace Spl;

class Cat
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }
}

class CatCollection implements \Iterator
{
    private $_pos;
    private $_collection;


    public function __construct($collection)
    {
        if (!is_array($collection)) {
            $this->_collection = array();
            $this->_collection[] = $collection;
        }
        $this->_collection = $collection;
    }

    /* iterator interface methods */

    public function current()
    {
        return $this->_collection[$this->_pos];
    }

    public function key()
    {
        return $this->_pos;
    }

    public function next()
    {
        $this->_pos++;
    }

    public function rewind()
    {
        $this->_pos = 0;
    }

    public function valid()
    {
        return isset($this->_collection[$this->_pos]);
    }
}


echo '<pre>';
$catCollection = new CatCollection(array(
    new Cat('Kitty'),
    new Cat('Furball'),
    new Cat('Felix'),
));

foreach ($catCollection as $cat) {
    print_r($cat);
}

