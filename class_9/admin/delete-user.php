<?php

include 'header.php';


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
    $statement = $pdo->prepare("SELECT * FROM admins WHERE id=?");
    $statement->execute([$id]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$statement->rowCount()) {
        header('location: admin-users.php');
        exit;
    }

    // Super admin can't  delete
    if ($result['role'] == 'Super Admin') {
        header('location: ' . ADMIN_URL . 'admin-users.php');
        exit;
    }

    // Admin can not eit any admin data 
    if ($_SESSION['admin']['role'] == 'Admin') {
        if ($result['role'] == 'Admin') {
            header('location: admin-users.php');
            exit;
        }
    }


    // Moderator  can not eit any admin or moderator data 
    if ($_SESSION['admin']['role'] == 'Moderator') {
        if ($result['role'] == 'Admin' || $result['role'] == 'Moderator') {
            header('location: admin-users.php');
            exit;
        }
    }


    // "DELETE FROM students WHERE `students`.`id` = 9"
    $statement = $pdo->prepare("DELETE FROM admins WHERE id=?");
    $statement->execute([$id]);
    $_SESSION['success_message'] = "User delete successfully";
    header('location: admin-users.php');
    exit;
}

header('location: admin-users.php');
exit;



include 'footer.php';
