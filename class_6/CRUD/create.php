<?php
require 'config.php';


// INSERT INTO `students` (`id`, `first_name`, `last_name`, `email`, `age`, `date`, `city`) VALUES (NULL, 'Raki', 'Hasan', 'raki@gmail.com', '25', '2342141234', 'Dhaka');

if (isset($_POST['create_std'])) {
    $first_name = trim(htmlspecialchars(stripslashes($_POST['first_name'])));
    $last_name = trim(htmlspecialchars(stripslashes($_POST['last_name'])));
    $email = trim(htmlspecialchars(stripslashes($_POST['email'])));
    $age = trim(htmlspecialchars(stripslashes($_POST['age'])));
    $path = $_FILES['profile_pic']['name'];
    $path_tmp = $_FILES['profile_pic']['tmp_name'];
    $date = time();
    $city = trim(htmlspecialchars(stripslashes($_POST['city'])));

    echo "<pre>";
    print_r($_FILES['profile_pic']);
    echo "</pre>";




    try {

        if (empty($first_name) && empty($last_name) && empty($email) && empty($age) && empty($city)) {
            throw new Exception('Filed can\'t be emplty');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email is not valide");
        }

        $statement = $pdo->prepare("SELECT * FROM students WHERE email=? ");
        $statement->execute([$email]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            throw new Exception("Email Already Exist");
        }

        if($_FILES['profile_pic']['size']/1024 > 100) {
            throw new Exception('Upload is not possible');
        }

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $filename = time().".".$extension;

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path_tmp);

        if($mime != 'image/png' && $mime != 'image/jpeg' && $mime != 'image/gif') {
            throw new Exception('Image type is not supported');
        }

        move_uploaded_file($path_tmp, 'img/'.$filename);
   

        $statement = $pdo->prepare("INSERT INTO students (first_name, last_name, email, age, date, city, photo) VALUE(?,?,?,?,?,?,?)");
        $statement->execute([$first_name, $last_name, $email, $age, $date, $city, $filename]);


        $success_msg = "Data Insert Successfully";
    } catch (Exception $e) {
        $error_msg = $e->getMessage();
    }



    // $first_name = $_POST['first_name'];
    // $last_name = $_POST['last_name'];
    // $email = $_POST['email'];
    // $age = $_POST['age'];
    // $date = time();
    // $city = $_POST['city'];

    
}






require 'header.php';
?>






<div class="container">
    <div class="mt-5 mb-5 card p-5 w-50 mx-auto">


        <h2 class="mb-3">Create Student</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row">
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp">
                </div>

            </div>

            <div class="row">
                <div class="mb-3">
                    <label for="profile_pic" class="form-label">Profile Pic</label>
                    <input type="file" name="profile_pic" id="profile_pic" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="create_std">Submit</button>
        </form>

        <div class="message mt-4">
            <div class="err_msg text-danger">
                <?php
                if (isset($error_msg)) {
                    echo $error_msg;
                }
                ?>
            </div>

            <div class="err_msg text-success">
                <?php
                if (isset($success_msg)) {
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