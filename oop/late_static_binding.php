<?php
namespace oop;

class Animal
{
    static $className = 'animal';

    public static function getClassName()
    {
        return self::$className;
    }
}

class Cat extends Animal
{

    static $className = 'cat';

}

echo Cat::getClassName().'<br>';

## late static binding example

class Animal2
{
    static $className = 'animal';

    public static function getClassName()
    {
        return static::$className;
    }
}

class Cat2 extends Animal2
{

    static $className = 'cat';

}

echo Cat2::getClassName()."<br>";
