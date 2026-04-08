<?php
$dataPost =["email"=>"dfsjkl","password"=>"dfsjkl"];
$dataPost = $_POST;
var_dump($dataPost);
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=task_12', 'root', '');
$sql = "INSERT INTO `task_12` (`email`,`password`) VALUES (:email,:password)";
$statement = $pdo->prepare($sql);
$statement->execute($dataPost);
//header("Location: /marlin/20tasks/task_12.php");