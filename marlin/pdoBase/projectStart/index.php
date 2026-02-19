<?php
$users = [
        [
                "id" => 1,
                "user" => "John",
                "surname" => "exler",
                "user_name" => "John Doe",
                "date_of_creation" => "12.2.2026",
        ],
        [
                "id" => 2,
                "user" => "jene",
                "surname" => "you",
                "user_name" => "John D",
                "date_of_creation" => "11.2.2026",
        ]
];
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
<a class="create__btn" href="create.php">Create</a>
<div>
    <div>
        <table>
            <thead>
            <th>id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>user name</th>
            <th>Дата создания</th>
            <th>Дата изменения</th>
            <th>Action</th>
            </thead>
            <tbody class="tbody">
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['surname'] ?></td>
                <td><?php echo $user['user_name'] ?></td>
                <td><?php echo $user['date_of_creation'] ?></td>
            <tr>
                <td>1</td>
                <td>имя</td>
                <td>Фамилия</td>
                <td>user_name</td>
                <td>20.01.2026</td>
                <td></td>
                <td>
                    <a class="btn__show" href="#">Show</a>
                    <a class="btn__edit" href="#">Edit</a>
                    <a class="btn__delete" href="#">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<style>

    .create__btn {
        padding: 10px;
        background: green;
        color: white;
    }

    a {
        text-decoration: none;
    }

    .btn__show {
        padding: 10px;
        background: blue;
        color: white;
    }

    .btn__edit {
        padding: 10px;
        background: orange;
        color: white;
    }

    .btn__delete {
        padding: 10px;
        background: red;
        color: white;
    }

    table {
        margin-top: 10px;
        border: 1px solid black;
    }

    td {
        padding: 10px;
    }

</style>
</body>
</html>