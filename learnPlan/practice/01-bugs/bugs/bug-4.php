<?php
// Должно вывести три машины, каждую с новой строки, а потом: Всего машин: 3

$cars = [
    "cars1" => "Audi",
    "cars2" => "BMW",
    "cars3" => "Haval",
];

foreach ($cars as $car) {
    echo $car . "<br>";
}

echo "Всего машин: " . count($cars);
