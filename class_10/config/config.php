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

define('BASE_URL', 'http://localhost:8080/LWR/class_10/');
DEFINE('ADMIN_URL', BASE_URL.'admin/');

define('SMTP_HOST', 'sandbox.smtp.mailtrap.io');
define('SMTP_FORM', 'contact@example.com');
define('SMTP_PORT', '587');
define('SMTP_USERNAME', '0240e41ea9be5b');
define('SMTP_PASSWORD', '5268b4cab3e27d');
define('SMTP_ENCRYPTION', 'tls');
