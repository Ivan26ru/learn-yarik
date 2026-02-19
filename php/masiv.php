<?php

$person = [
    "strana" => "Amerika",
    " strana2" => "Egypt",
    " strana3" => "China",
    " strana4" => "Japan",
];
$person2 = [
    "pet" => "dog",
    "pet2" => "cat",
    "pet3" => "hamster",
    "pet4" => "Raccoon",
];
$person3 = [
        "friend" => "Maxim",
        "friend2" => "Gena",
        "friend3" => "Ahmed",
    ];
 echo $person["strana"];
 echo "<br>";
 echo $person[" strana2"];
 echo "<br>";
  echo $person[" strana3"];
  echo "<br>";
   echo $person[" strana4"];
   echo "<br>";

   echo $person2["pet"];
   echo "<br>";
   echo $person2["pet2"];
   echo "<br>";
   echo $person2["pet3"];
   echo "<br>";
   echo $person2["pet4"];
   echo "<br>";
   echo $person3["friend"];
   echo "<br>";
   echo $person3["friend2"];
   echo "<br>";
   echo $person3["friend3"];
   echo "<br>";



   foreach ($person as $person)
   {
       echo $person.PHP_EOL;
   }
   foreach ($person2 as $person2)
{
    echo $person2.PHP_EOL;
}
    foreach ($person3 as $person3)
{
    echo $person3.PHP_EOL;
}
