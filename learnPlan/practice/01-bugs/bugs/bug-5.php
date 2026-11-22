<?php
// Должно вывести: Цена всех машин: 3500000

$prices = [1200000, 1500000, 800000];
$total = 0;
foreach ($prices as $price) {

    $total += $price;
}

echo "Цена всех машин: " . $total;
