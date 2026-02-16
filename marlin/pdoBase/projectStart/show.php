<?php
$pdo = new PDO('mysql:host=localhost;dbname=learn_yarik', 'root', '');
$sql = "SELECT * FROM users WHERE ID = :id";
$statement = $pdo->prepare($sql);
$statement->execute($_GET);
$user = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Users</h1>
<div>
    <div>

    </div>
</div>

<style>
