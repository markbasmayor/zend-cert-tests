<?php

class Stack implements Countable
{
    private $_items;

    public function __construct($items) {
        $this->_items = $items;
    }

    public function count() {
        return count($this->_items);
    }

}

$stack = new Stack(array(1,2,3));
echo count($stack);

