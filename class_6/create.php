<?php
require 'config.php';

if(isset($_POST['create_std'])) {
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
        $stmt = $pdo->prepare("SELECT * FROM students WHERE email=?");
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result) {
            throw new Exception("Email already exist");
        }

        $statement = $pdo->prepare("INSERT INTO students (name, email, phone) VALUE(?,?,?)");
        $statement->execute([$name, $email, $phone]);

        $successMSg = "Nmae {$name}, Email: {$email}, Phone: {$phone} addedd successfully";
    } catch(Exception $e) {
        $erMessage = $e->getMessage();
    }
    
}

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
        <label for="name">Name</label><br> 
        <input type="text" name="name" id="name"><br>
        
        <label for="email">Email</label><br> 
        <input type="email" name="email" id="email"><br>

        <label for="phone">Phone</label><br> 
        <input type="text" name="phone" id="phone"><br><br>

        <button type="submit" name="create_std">Create Student</button>
    </form>
</body>
</html>