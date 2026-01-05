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
 echo plowabi(9032,398)."<br>" ;

 $oneyuslo = 356;
 $twoyuslo = 683;
 $primer = $oneyuslo + $twoyuslo;
 echo "первое число" . $oneyuslo . "<br>";
 echo "второе число" . $twoyuslo . "<br>";
 $primer = ($oneyuslo + $twoyuslo) / 2;
 echo "равен пример" . $primer . "<br>";

 $belimoe = 20;
 $belteli = 10;
 $yactnoe = $belimoe / $belteli;
 echo "делимое" . $belimoe . "<br>";
 echo "делитель" . $belteli . "<br>";
 $yactnoe = ($belimoe / $belteli);
 echo "частное равно " . $yactnoe . "<br>";

 $mnoxnteli1 = 18;
  $mnoxnteli2 = 10;
  $proizBudenie = $mnoxnteli1 * $mnoxnteli2;
  echo "множитель 1" . $mnoxnteli1 . "<br>";
  echo "множитель 2" . $mnoxnteli2 . "<br>";
  $proizBudenie = ($mnoxnteli1 * $mnoxnteli2);
  echo "произведение равно " . $proizBudenie . "<br>";

  $ymeniwaemoe = 1000;
  $Buiyutfemoe = 500;
   $raznosti = $ymeniwaemoe - $Buiyutfemoe;
   echo "уменьшаемое " . $ymeniwaemoe . "<br>";
   echo "вычитаемое " . $Buiyutfemoe . "<br>";
   $raznosti = ($ymeniwaemoe - $Buiyutfemoe);
   echo "равность ровна " . $raznosti . "<br>";


   $SLAGAEMOE1 =8000;
   $SLAGAEMOE2 =100000;
   $symma = $SLAGAEMOE1 + $SLAGAEMOE2;
   echo "слагаемо 1 " . $SLAGAEMOE1 . "<br>";
   echo "слагаемое 2 " . $SLAGAEMOE2 . "<br>";
   $symma  = ($SLAGAEMOE2 + $SLAGAEMOE1);
   echo "сумма " . $symma . "<br>";