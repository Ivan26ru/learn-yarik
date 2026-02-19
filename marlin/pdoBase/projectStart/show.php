<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=base', 'root', '');
$sql = "SELECT * FROM users WHERE ID = :id";
$statement = $pdo->prepare($sql);
$statement->execute($_GET);
$user = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($user);
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
        имя пользователя: <?php echo $user['name'] ?>;
    </div>
</div>

<style>
