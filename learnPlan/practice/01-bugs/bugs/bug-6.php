<?php
declare(strict_types=1);
// Должно вывести: Цвет машины: красный

class Car
{
    public string $color = 'белый';

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        $this->color;
    }
}

$car = new Car();
$car->setColor('красный');
echo "Цвет машины: " . $car->getColor();
