<?php include 'header.php' ?>


<?php

if (!get_session_data('user')) {
    header('location:'   . BASE_URL . 'index.php');
    exit;
}

// $id = $_REQUEST['id']; 

//     // SELECT * FROM users WHERE username='rakib' AND password='1234';
//     $statement = $pdo->prepare("SELECT * FROM admins WHERE id=?");
//     $statement->execute([$id]);


//     if(!$statement->rowCount()) {
//         header('location: admin-users.php');
//         exit;
//     } 


//     // If super admin, all persons will exit
//     $result = $statement->fetch(PDO::FETCH_ASSOC);
//     if($result['role'] == 'Super Admin') {
//         header('location: admin-users.php');
//         exit;
//     }


//     // Admin can not eit any admin data 
//     if($_SESSION['admin']['role'] == 'Admin') {
//         if($result['role'] == 'Admin') {
//             header('location: admin-users.php');
//             exit;
//         }
//     }


//     // Moderator  can not eit any admin or moderator data 
//     if($_SESSION['admin']['role'] == 'Moderator') {
//         if($result['role'] == 'Admin' || $result['role'] == 'Moderator') {
//             header('location: admin-users.php');
//             exit;
//         }
//     }





if (isset($_POST['update_form'])) {
    try {
        $name =  strip_tags($_POST['name']);
        $email =  strip_tags($_POST['email']);
        $phone =  strip_tags($_POST['phone']);
        $address =  strip_tags($_POST['address']);
        $password =  strip_tags($_POST['password']);

        if ($email == '') {
            throw new Exception('Please enter your Email');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please enter a valid email');
        }

        // if($password == '') {
        //     throw new Exception('Please enter your Password');
        // }

        if ($phone == '') {
            throw new Exception('Please enter your Phone');
        }


        // SELECT * FROM users WHERE username='rakib' AND password='1234';
        // $q = $pdo->prepare("SELECT * FROM users WHERE email=? AND id!=?");
        // $q->execute([$email, $id]);
        // if($q->rowCount()){
        //     throw new Exception('Email Already exist');
        // }

        // $result = $q->fetch(PDO::FETCH_ASSOC);

        if (empty($password)) {
            $current_pass =  $_SESSION['user']['password'];
        } else {
            $current_pass = password_hash($password, PASSWORD_DEFAULT);
        }


        print_r($_SESSION['user']);

        $statement = $pdo->prepare("UPDATE users SET name=?, email=?, phone=?, password=?, address=? WHERE id=?");
        $statement->execute([$name, $email, $phone, $current_pass, $address, $_SESSION['user']['id']]);
        // "UPDATE students SET name=?, email=?, phone=? WHERE id=?"




        // var_dump($q->rowCount());
        // var_dump($q->fetchAll());

        // $_SESSION['admin'] = $result;

        $_SESSION['success_message'] = 'Successfully Updated the user';
        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['email'] = $email;
        $_SESSION['user']['phone'] = $phone;
        $_SESSION['user']['password'] = $current_pass;
        $_SESSION['user']['address'] = $address;
        header("location: " . BASE_URL . "edit-profile.php");
        exit;
    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}



?>


<div class="container mt-5 mb-5">
    <h2>Dashboard</h2>

    <div class="row">
        <div class="col-4">
            <?php include 'dashbord-nav.php' ?>
        </div>

        <div class="col-8">
            <div class="row">

                <form action="" method="post">
                    <h1 class="page-heading">
                        Edit Profile
                    </h1>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['user']['name'] ?>">
                        </div>


                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo $_SESSION['user']['phone'] ?>">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $_SESSION['user']['address'] ?>">
                        </div>



                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary" name="update_form">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<?php include 'footer.php';


?>