<?php
// Должно вывести: Цена всех машин: 3500000

$prices = [1200000, 1500000, 800000];

foreach ($prices as $price) {
    $total = 0;
    $total = $total + $price;
}

echo "Цена всех машин: " . $total;
