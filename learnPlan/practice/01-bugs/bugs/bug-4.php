<?php
// Должно вывести три машины, каждую с новой строки, а потом: Всего машин: 3

$cars = ['BMW', 'Audi', 'Haval'];

foreach ($cars as $cars) {
    echo $cars . "<br>";
}

echo "Всего машин: " . count($cars);
