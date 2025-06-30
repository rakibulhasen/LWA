<?php
require 'config.php';


$id = $_REQUEST['id'];

// 
$stm = $pdo->prepare("SELECT * FROM students WHERE id=?");
$stm->execute([$id]);
$result = $stm->fetch(PDO::FETCH_ASSOC);

 // "DELETE FROM students WHERE `students`.`id` = 9"
$stmt = $pdo->prepare("DELETE FROM students WHERE id=?");
$stmt->execute([$id]);

header("Location: index.php?er_msg={$result['first_name']} {$result['last_name']} Delete Successfull");
exit;