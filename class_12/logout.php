<?php

include 'header.php';

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    $_SESSION['success_message'] = "Logout Successfull";
    header('location: login.php');
}
