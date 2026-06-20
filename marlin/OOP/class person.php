<?php

class Person
{
    public $name;
    public $age;
    public $telefon;
    const ID = 5;

    public function __construct($name, $age, $telefon)
    {
        $this->name = $name;
        $this->age = $age;
        $this->telefon = $telefon;
    }

    public function sayHello()
    {
        return 'Привет я ' . $this->name
            . ' мне  ' . $this->sayAge()
            . ' мой номер телефона' . $this->telefon;
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


$yarik = new Person('Ярик', 10, 79064685555);
$maksim = new Person('Максим', 10, 79064685889);
$gena = new Person('Гена', 10, 78063409);
var_dump($yarik);
var_dump($maksim);
echo $yarik->sayHello() . '</br>';
echo $maksim->sayHello() . '</br>';
echo $gena->sayHello();