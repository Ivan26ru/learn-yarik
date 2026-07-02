<?php

class Car
{
    public $brand;
    public $model;
    public $age;
    public $price;
    public $color;
    const ID = 6;


    public function __construct($brand, $model, $age, $price, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->age = $age;
        $this->price = $price;
        $this->color = $color;
    }

    public function infoCar()
    {
        return 'бренд автомобиля ' . $this->brand .
            ' модель ' . $this->model .
            ' возраст ' . $this->age .
            ' цена ' . $this->price .
            ' цвет ' . $this->color .
            '<br>';
    }
}

$yarik = new Car('Бмв ', 'x5m90', '1',  560000, 'черный');
echo $yarik->infoCar();