<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=learn_yarik', 'root', '');
$sql = "DELETE FROM users WHERE ID = :id";
$statement = $pdo->prepare($sql);
$statement->execute($_GET);
$user = $statement->fetch(PDO::FETCH_ASSOC);