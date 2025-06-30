<?php include '../config/config.php'; ?>

<?php
    ob_start();
    session_start();
    

    // $cur_page = substr();
    // var_dump($_SERVER['SCRIPT_NAME']);
    // $script_name = $_SERVER['SCRIPT_NAME'];
    // $script_name = explode('/', $script_name);
    // $script_count = count($script_name);
    

    // var_dump($script_name[$script_count - 1]);


    $cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
    // var_dump( $cur_page);

    // var_dump(strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

    // var_dump(strrpos("rakihbul hasan", 'h')+1);


    // var_dump(substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/')+1));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="dist/css/select2.min.css">
    <link rel="stylesheet" href="dist/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/spacing.css">
    <link rel="stylesheet" href="dist/css/custom.css">

    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

</head>


<body class="<?php echo ($cur_page == 'login.php' || $cur_page == 'forget-password.php' || $cur_page == 'reset-password.php') ? 'body-login' : '' ?>">


<?php

// Get the current script name
$cur_page = basename($_SERVER['PHP_SELF']);

// Allow access to login and forget-password without session
$public_pages = ['login.php', 'forget-password.php', 'reset-password.php'];

if (!in_array($cur_page, $public_pages)) {
    // If admin session is not set, redirect to login
    $url = $_SERVER['PHP_SELF'];
    if (!isset($_SESSION['admin'])) {
        header("Location: login.php?url=".$url);
        exit;
    }
}
?>