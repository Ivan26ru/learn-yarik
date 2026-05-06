<?php

$dataPost = ["email" => "dfsjkl", "password" => "dfsjkl"];
$dataPost = $_POST;

$pdo = new PDO('mysql:host=MySQL-8.4;dbname=task_12', 'root', '');

$sqlSearch = "SELECT * FROM `task_12` WHERE email = :email";

$statement = $pdo->prepare($sqlSearch);
$statement->execute(['email' => $dataPost["email"]]);
$checkEmail = $statement->fetch(PDO::FETCH_ASSOC);

if ($checkEmail) {
    echo "Пользователь есть ";
}else{
    echo "Пользователя нет ";
}
var_dump($checkEmail);
//$sql = "INSERT INTO `task_12` (`email`,`password`) VALUES (:email,:password)";
//$statement = $pdo->prepare($sql);
//$statement->execute($dataPost);
//header("Location:/marlin/20tasks/task_12.php");