<?php
// Скидка положена детям до 14 лет включительно.
// Должно вывести: Ярику 11 — скидка есть. Маше 14 — скидка есть. Пете 15 — скидки нет.

function discount(string $name, int $age): string
{
    if ($age < 14) {
        return $name . " " . $age . " — скидка есть. ";
    } else {
        return $name . " " . $age . " — скидки нет. ";
    }
}

echo discount("Ярику", 11);
echo discount("Маше", 14);
echo discount("Пете", 15);
