<?php
declare(strict_types=1);

class Car
{
    public string $brand;
    public string $model;
    /**
     * Возможные значения без типа:
     * 3 - число (когда поставили int, тогда будет только число)
     * "3 года" - строка
     * [3, 11] - 3 года 11 месяцев - массив
     * false - булевое значение (например false - старая, true - новая)
     * Когда указываем тип, то вариантов становится меньше
     */
    public int $age;
    public int $price;
    public string $color;


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

    /**
     * Пример метода с типизацией
     */
    public function updateColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * Пример метода без типизации
     * (так лучше не делать)
     */
    public function updateAge($newAge)
    {
        $this->age = $newAge;
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

$yarikCar = new Car('Бмв ', 'x5m90', 1,  560000, 'черный');
$haval    = new Car('Haval','f7x',3,160000,'серый');

echo $yarikCar->infoCar();

$yarikCar->updateColor('Синий');
echo $yarikCar->infoCar();

$yarikCar->updateAge(5);
echo $yarikCar->infoCar();
