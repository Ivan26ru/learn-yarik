<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=base', 'root', '');
$sql = "INSERT INTO users (name,surname,username,email) VALUES (:name, :surname, :username, :email)";
$statement = $pdo->prepare($sql);
//var_dump($_POST);
$statement->execute($_POST);
header("Location: /marlin/pdoBase/projectStart/");