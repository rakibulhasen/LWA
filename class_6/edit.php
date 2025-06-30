<?php
require 'config.php';

$id = isset($_REQUEST['id']) ? (int)$_REQUEST['id'] : 0;



// UPDATE `students` SET `name` = 'Roni', `email` = 'roni@gmail.com' WHERE `students`.`id` = 2;
if(empty($_REQUEST['id'])){
    header("Location: students.php");
    exit;
}

if(isset($_POST['update_std'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    try{
        

        if(empty($name)){
            throw new Exception("Nmae is not empty");
        }
        if(empty($email)){
            throw new Exception("Email is not empty");
        }

        // check if email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Email is not valid");
        }

        // check email already exist
        $stmt = $pdo->prepare("SELECT * FROM students WHERE email=? AND id!=?");
        $stmt->execute([$email, $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        if($result) {
            throw new Exception("Email already exist");
        }

        $statement = $pdo->prepare("UPDATE students SET name=?, email=?, phone=? WHERE id=?");
        $statement->execute([$_POST["name"], $_POST["email"], $_POST["phone"], $id]);

        $successMSg = "Nmae {$name}, Email: {$email}, Phone: {$phone} Updated successfully";
    } catch(Exception $e) {
        $erMessage = $e->getMessage();
    }
    
}

// $statement = $pdo->prepare("UPDATE students SET name=?, email=? WHERE id=?");
// $statement->EXECUTE(['Jannat', 'jannat@gmail.com', 2]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Students</title>
</head>
<body>
<?php
include 'header.php';
?>

    <h3>Create Student</h3>
    <P style="color: red">
    <?php
        if(isset($erMessage)){
           echo $erMessage;
        }
    ?>
    </P>

    <P style="color: green">
    <?php
        if(isset($successMSg)){
           echo $successMSg;
        }
    ?>
    </P>

    
    <form action="" method="post">

    <?php
        if(isset($id)) {
            $statement = $pdo->prepare("SELECT * FROM students WHERE id=?");
            $statement->execute([$id]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
        }
    ?>
        <label for="name">Name</label><br> 
        <input type="text" name="name" id="name" value="<?= $result['name'] ?? '' ?>"><br>
        
        <label for="email">Email</label><br> 
        <input type="email" name="email" id="email" value="<?= $result['email']  ?? '' ?>"><br>

        <label for="phone">Phone</label><br> 
        <input type="text" name="phone" id="phone" value="<?= $result['phone']  ?? '' ?>"><br><br>

        <button type="submit" name="update_std">Update Student</button>
    </form>
</body>
</html>