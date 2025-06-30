<?php

include 'header.php';

if(isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
    $_SESSION['success_message'] = "Logout Successfull";
    header('location: login.php');
} 