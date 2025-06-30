<?php

require 'config.php';


// // "DELETE FROM students WHERE `students`.`id` = 9"
$statement = $pdo->prepare("DELETE FROM students WHERE id=?");
$statement->execute([$_REQUEST['id']]);

header('Location: http://localhost:8080/LWR/class_6/students.php?success=Student Delete Successfull');
exit;