<?php

include 'header.php';


if (!isset($_REQUEST['id'])) {
    header('location: product-view.php');
    exit;
}

if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    // if(!is_int($id)) {
    //     header('location: admin-users.php');
    //     exit;
    // }



    // SELECT * FROM users WHERE username='rakib' AND password='1234';
    $statement = $pdo->prepare("SELECT * FROM products WHERE id=?");
    $statement->execute([$id]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$statement->rowCount()) {
        header('location: product-view.php');
        exit;
    }


    // "DELETE FROM students WHERE `students`.`id` = 9"
    $statement = $pdo->prepare("DELETE FROM products WHERE id=?");
    $statement->execute([$id]);
    $_SESSION['success_message'] = "Product delete successfully";
    header('location: product-view.php');
    exit;
}

header('location: product-view.php');
exit;



include 'footer.php';
