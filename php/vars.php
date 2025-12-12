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
    . "я учусь в " . $class . " классе <hr>";


function perimeter(int $a, int $b)

{
    $perimeter = ($a + $b) * 2;
    return $perimeter;
}
echo perimeter(3,8) . "<br>";
echo perimeter(2,5) . "<br>";
function plowabi (int $a, int $b)
{
  $plowabi = ($a * $b);
  return $plowabi;
}
echo plowabi(5,9) . "<br>";
 echo plowabi(9032,398);