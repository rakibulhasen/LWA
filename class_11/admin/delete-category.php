<?php

include 'header.php';

// Admin can not eit any admin data 
    if($_SESSION['admin']['role'] == 'Moderator') {
        header('location: category-view.php');
        exit;
    }



if (!isset($_REQUEST['id'])) {
    header('location: admin-users.php');
    exit;
}

if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    // if(!is_int($id)) {
    //     header('location: admin-users.php');
    //     exit;
    // }



    // SELECT * FROM users WHERE username='rakib' AND password='1234';
    $statement = $pdo->prepare("SELECT * FROM categories WHERE id=?");
    $statement->execute([$id]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$statement->rowCount()) {
        header('location: category-view.php');
        exit;
    }


    $statement = $pdo->prepare("SELECT * FROM products WHERE category_id=?");
    $statement->execute([$id]);
    if($statement->rowCount()) {
        $_SESSION['error_message'] = "Category can not be delete because it is assosiate with product";
        header('location: category-view.php?msg=category can not  be delete');
        exit;
    }


    // "DELETE FROM students WHERE `students`.`id` = 9"
    $statement = $pdo->prepare("DELETE FROM categories WHERE id=?");
    $statement->execute([$id]);
    $_SESSION['success_message'] = "User delete successfully";
    header('location: category-view.php');
    exit;
}

header('location: category-view.php');
exit;



include 'footer.php';
