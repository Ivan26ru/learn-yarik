<?php

class Person
{
    public $name;
    public $age;
    const ID = 5;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        return 'Hi I am' . $this->name . 'and I am ' . $this->sayAge();
    }

    public function setName($name)
    {
        $this->name = $name; // Rahim
    }

    public function sayAge()
    {
        return $this->age;//14
    }


}


$person = new Person('Rahim', 20);
var_dump($person);