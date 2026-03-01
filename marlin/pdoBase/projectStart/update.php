<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=base', 'root', '');
$sql = "UPDATE users SET name=:name, surname=:surname, username=:username, email=:email WHERE id=:id";

$statement = $pdo->prepare($sql);
$statement->execute($_POST);
header("Location: /marlin/pdoBase/projectStart/");

?>
