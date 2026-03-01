<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=base', 'root', '');
$sql = "SELECT * FROM users WHERE ID = :id";
$statement = $pdo->prepare($sql);
$statement->execute($_GET);
$user = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($user);
//$user=[
//        'name'=>'yarik',
//        'surname'=>'pisarenko',
//        'username'=>'yarik12',
//        'email'=>'arikpisarenko776@gmail.com',
//];
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
<h2>edit</h2>

<?php if(isset($_SESSION['text'])){ ?>
    <div><?php echo $_SESSION['text']; ?></div>
    <?php unset($_SESSION['text']) ?>
<?php }; ?>

<form action="store.php" method="post">
    <input placeholder="Введите имя" type="text" name="name" class="input" value="<?php echo $user['name'] ?>">
    <input placeholder="Введите фамилию" type="text" name="surname" class="input" value="<?php echo $user['surname'] ?>">
    <input placeholder="Введите имя пользователя" type="text" name="username" class="input"value="<?php echo $user['username'] ?>">
    <input placeholder="Введите ваш email" type="text" name="email" class="input"value="<?php echo $user['email'] ?>">
    <button type="submit">Обновить</button>
</form>
<div>
</div>

<style>

    .input{
        padding: 5px;
    }

    button{
        color: white;
        padding: 10px;
        background: blue;
        border: none;
    }

    .good{
        color: green;
    }

    .bad{
        color: red;
    }

</style>