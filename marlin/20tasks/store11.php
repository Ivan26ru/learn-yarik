<?php
var_dump($_POST);
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=task_11', 'root', '');
$sql = "INSERT INTO `text` (`name`) VALUES (;username)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);
//header("Location: /marlin/pdoBase/projectStart/");
