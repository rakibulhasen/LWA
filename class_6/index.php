<?php

$dbhost = 'localhost';
$dbname = 'php_course';
$dbuser = 'root';
$dbpass = '';

try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Databash Connection successfull";
} catch (PDOException $e) {
 echo "Connection Error :" . $e->getMessage();
}

if(isset($_POST['contact'])) {
    $statement = $pdo->prepare("INSERT INTO students (name, email) VALUES (?,?)");
    $statement->execute([$_POST['name'], $_POST['email']]);
}

// UPDATE `students` SET `name` = 'Roni', `email` = 'roni@gmail.com' WHERE `students`.`id` = 2;

$statement = $pdo->prepare("UPDATE students SET name=?, email=? WHERE id=?");
$statement->EXECUTE(['Jannat', 'jannat@gmail.com', 9]);

// "DELETE FROM students WHERE `students`.`id` = 9"
$statement = $pdo->prepare("DELETE FROM students WHERE id=?");
$statement->execute([10])


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
    <label for="name">Name</label> <br> <br>
    <input type="text" name="name" id="name" value=""> <br> <br>
    <label for="email">Email</label> <br> <br>
    <input type="email" name="email" id="email" value=""> <br> <br>

    <button type="submit" name="contact">Submit</button>
</form>

<?php 



?>
    
</body>
</html>