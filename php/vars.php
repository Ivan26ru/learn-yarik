<?php

echo "Площадь прямоугольника <br> ";

$dlina = 7;
$shirina = 5;
$S = $dlina * $shirina;
echo "длина " . $dlina . "<br>";
echo "ширина" . $shirina . "<br>";
echo "площадь прямоугольника" . $S . "<br>";
$perimeter = ($dlina + $shirina) * 2;
echo "периметр прямоугольника" . $perimeter . "<br>";
echo "периметр прямоугольника с шириной " . $shirina
    . " и длиной " . $dlina . " равен " . $perimeter . "конец"
    . " а площадь равняется " . $S . "<br>";

$name = "Ярик";
$age = 10;
$class = 4;
echo " Привет " . $name
    . " мне " . $age . " лет "
    . "я учусь в " . $class . " классе";
