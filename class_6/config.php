<?php

$dbhost = 'localhost';
$dbname = 'php_course';
$dbuser = 'root';
$dbpass = '';


try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection Problems : ". $e->getMessage();
}


