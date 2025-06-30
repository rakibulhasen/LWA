<?php

require('config.php');

$statement = $pdo->prepare("SELECT * FROM students");
$statement->execute();
$students = $statement->fetchAll(PDO::FETCH_ASSOC);




//SELECT * FROM `students`
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    <style>
        tr {
            padding: 15px !important;
        }

        th {
            padding: 7px;
            background: gray;
        }

        td {
            padding: 8px 15px;
        }

        table {
            width: 100%;
            border: 1px;
        }
    </style>
</head>

<body>

    <?php
    include 'header.php';
    ?>

    <h2>CRUD Application</h2>

    <P style="color: green">
        <?php
        if (isset($_REQUEST['success'])) {
            echo $_REQUEST['success'];
        }
        ?>
    </P>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php


        foreach ($students as $student) {
        ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $student['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $student['id'] ?>">Delete</a>
                </td>
            </tr>

        <?php
        }


        ?>
    </table>
</body>

</html>