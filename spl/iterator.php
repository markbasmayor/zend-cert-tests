<?php
namespace spl;
class Books implements \Iterator
{
    private $_collection;
    private $_ptr;

    public function __construct($books)
    {
        $this->_collection = $books;
    }

    public function current()
    {
        return $this->_collection[$this->_ptr];
    }

    public function next()
    {
        $this->_ptr++;
    }

    public function key()
    {
        return $this->_ptr;
    }

    public function rewind()
    {
        $this->_ptr = 0;
    }

    public function valid()
    {
        return isset($this->_collection[$this->_ptr]);
    }
}

$books = new Books(array('book1', 'book2', 'book3'));

foreach ($books as $book) {
    echo $book ."\n";
}
