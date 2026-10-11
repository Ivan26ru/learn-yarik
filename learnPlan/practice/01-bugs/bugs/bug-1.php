<?php
// Должно вывести: Средняя оценка: 4

$math = 5;
$russian = 4;
$english = 3;

$average = ($english + + $math + $russian) / 3;

echo "Средняя оценка: " . $average;
//ошибка была в том что нужно сначало всё сложить и разделить