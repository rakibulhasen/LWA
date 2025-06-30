<?php

$hostname = 'localhost';
$dbname = 'ecommerce_project';
$dbuser = 'root';
$dbpass = '';

// mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass
try {

    $pdo = new PDO("mysql:host={$hostname};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Connection Problems : " . $e->getMessage();

}