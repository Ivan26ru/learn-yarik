<?php

$countries = [
    "strana" => "Amerika",
    "strana2" => "Egypt",
    "strana3" => "China",
    "strana4" => "Japan",
];
$pets = [
    "pet" => "dog",
    "pet2" => "cat",
    "pet3" => "hamster",
    "pet4" => "Raccoon",
];
$friends = [
        "friend" => "Maxim",
        "friend2" => "Gena",
        "friend3" => "Ahmed",
    ];
 echo $countries["strana"];
 echo "<br>";
 echo $countries["strana2"];
 echo "<br>";
  echo $countries["strana3"];
  echo "<br>";
   echo $countries["strana4"];
   echo "<br>";

   echo $pets["pet"];
   echo "<br>";
   echo $pets["pet2"];
   echo "<br>";
   echo $pets["pet3"];
   echo "<br>";
   echo $pets["pet4"];
   echo "<br>";
   echo $friends["friend"];
   echo "<br>";
   echo $friends["friend2"];
   echo "<br>";
   echo $friends["friend3"];
   echo "<br>";



   foreach ($countries as $country)
   {
       echo $country.PHP_EOL;
   }

   foreach ($pets as $pet)
{
    echo $pet .PHP_EOL;
}
    foreach ($friends as $friend)
{
    echo $friend.PHP_EOL;
}
