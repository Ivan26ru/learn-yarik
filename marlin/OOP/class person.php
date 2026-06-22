<?php

class Person
{
    public string $name; // свойство с типом string
    public $age; // свойства
    public $telefon; // свойства
    public $address; // свойства
    const ID = 5; // константа, ее менять нельзя

    /**
     * Метод, который вызывается при создании класса,
     * То есть new Person(...) - вызовет метод __construct
     *
     * $name, $vozrast, $telefon, $address - это параметры
     * $this->name - это свойства класса (начинается с $this)
     */
    public function __construct($name, $vozrast, $telefon, $address)
    {
        // присваиваем параметры нашим свойствам
        // параметры и свойства могут назваться по разному
        // или присваиваться по разному
        $this->name = $name;
        $this->age = $vozrast;
        $this->telefon = $telefon;
        $this->address = $address;
    }

    // все строчки в которые есть function - это методы класса

    /**
     * Метод возвращает строку
     * поэтому стоит :string
     */
    public function sayHello(): string
    {
        return 'Привет я ' . $this->name
            . ' мне  ' . $this->sayAge()
            . ' мой номер телефона' . $this->telefon
            . 'мой адрес '. $this->address .'<br>';
    }

    /**
     * Метод ни чего не возвращает
     * поэтому стоит :void
     */
    public function setName($name): void
    {
        $this->name = $name; // Rahim
    }

    public function sayAge()
    {
        return $this->age;//14
    }
    public function setTelefon($telefon){
        $this->telefon = $telefon;
    }
    public function sayAll()
    {
       return 'Привет всем я ' .$this->name . '<br>';
    }
    public function setAddress($address){
        $this->address = $address;
    }

}



$yarik = new Person('Ярик', 10, 79064685555,'пушкино 23');
$maksim = new Person('Максим', 10, 79064685889,'ленина 239');
$gena = new Person('Гена', 10, 78063409,'ленина 4');
var_dump($yarik);
var_dump($maksim);
echo $yarik->sayHello() ;
echo $maksim->sayHello() ;
echo $gena->sayHello();
$gena->setName('гигиена');
echo $gena->sayHello();
$maksim->setTelefon('78907329');
echo $maksim->sayHello() ;
echo $gena->sayAll();
