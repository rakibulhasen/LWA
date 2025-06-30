<?php
require 'config.php';

require 'header.php';


$id = $_REQUEST['id'];

if(isset($_POST['update_std'])) {
    $id = $_REQUEST['id'];
}









if (isset($_POST['update_std'])) {
    $first_name = trim(htmlspecialchars(stripslashes($_POST['first_name'])));
    $last_name = trim(htmlspecialchars(stripslashes($_POST['last_name'])));
    $email = trim(htmlspecialchars(stripslashes($_POST['email'])));
    $age = trim(htmlspecialchars(stripslashes($_POST['age'])));
    $date = time();
    $city = trim(htmlspecialchars(stripslashes($_POST['city'])));

    try {

        if (empty($first_name) && empty($last_name) && empty($email) && empty($age) && empty($city)) {
            throw new Exception('Filed can\'t be emplty');
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email is not valide");
        }

        $statement = $pdo->prepare("SELECT * FROM students WHERE email=? AND id!=?");
        $statement->execute([$email, $id]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if($result){
            throw new Exception("Email Already Exist");
        }

   

        // "UPDATE students SET name=?, email=?, phone=? WHERE id=?"
        $statement = $pdo->prepare("UPDATE students SET first_name=?, last_name=?, email=?, age=?, city=? WHERE id = ?");
        $statement->execute([$first_name, $last_name, $email, $age, $city, $id]);
        

        $success_msg = "Data Insert Successfully";
    } catch (Exception $e) {
        $error_msg = $e->getMessage();
    }
}

    $statement = $pdo->prepare("SELECT * FROM students WHERE id=?");
    $statement->execute([$id]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        header("Location: index.php?er_msg=Student is not exist");
        exit;
    }





?>

<div class="container">
    <div class="mt-5 mb-5 card p-5 w-50 mx-auto">


        <h2 class="mb-3">Edit <?= $result['first_name']. ' ' . $result['last_name'] ?? 'Student' ?></h2>
        <form action="" method="POST">
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $result['first_name'] ?? '' ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $result['last_name'] ?? '' ?>">
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $result['email'] ?? '' ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="<?= $result['age'] ?? '' ?>">
                </div>
            </div>

            <div class="row">
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="<?= $result['city'] ?? '' ?>">
                </div>
     
            </div>

            <button type="submit" class="btn btn-primary" name="update_std">Submit</button>
        </form>

        <div class="message mt-4">
            <div class="err_msg text-danger">
                <?php
                    if(isset($error_msg)) {
                        echo $error_msg;
                    }
                ?>
            </div>

            <div class="err_msg text-success">
                <?php
                    if(isset($success_msg)) {
                        echo $success_msg;
                    }
                ?>
            </div>
        </div>
    </div>
</div>














<?php
 require 'footer.php';
?>