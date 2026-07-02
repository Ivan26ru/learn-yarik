<?php
declare(strict_types=1);

class Car
{
    public string $brand;
    public string $model;
    public int $age;
    public int $price;
    public string $color;
    const ID = 6;


    public function __construct(
        string $brand,
        string $model,
        int $age,
        int $price,
        string $color
    )
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->age = $age;
        $this->price = $price;
        $this->color = $color;
    }

    public function infoCar(): string
    {
        return 'бренд автомобиля ' . $this->brand .
            ' модель ' . $this->model .
            ' возраст ' . $this->age .
            ' год '. $this->getYear().
            ' цена ' . $this->price .
            ' цвет ' . $this->color .
            '<br>';
    }
    public function getYear(): int{
        return 2026-$this->age;
    }
    public function sayYear(): string{
        return $this->getYear()."год " ;
    }
}

$yarik = new Car('Бмв ', 'x5m90', 1,  560000, 'черный');
$haval = new Car('Haval','f7x',3,160000,'серый');
echo $yarik->infoCar();
echo $haval->infoCar();
echo $haval->sayYear() ;
echo $yarik->getYear() +5;