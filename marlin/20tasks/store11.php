<?php
//$dataPost =["name"=>"dfsjkl"];
$dataPost = $_POST;
var_dump($dataPost);
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=task_11', 'root', '');
$sql = "INSERT INTO `text` (`name`) VALUES (:name)";
$statement = $pdo->prepare($sql);
$statement->execute($dataPost);
//header("Location: /marlin/pdoBase/projectStart/");
