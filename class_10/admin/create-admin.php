<?php include 'header.php' ?>

<?php include 'top-bar.php' ?>

<?php
    // Email send 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';
?>


<?php



if(isset($_POST['create_form'])) {
    try {
        $email =  strip_tags($_POST['email']);
        $name =  strip_tags($_POST['name']);
        $status =  strip_tags($_POST['status']);
        $role =  strip_tags($_POST['role']);
        $password =  strip_tags($_POST['password']);
    
        if($email == '') {
            throw new Exception('Please enter your Email');
        }
    
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please enter a valid email');
        }
    
        if($password == '') {
            throw new Exception('Please enter your Password');
        }

        if($role == '') {
            throw new Exception('Please enter your Role');
        }

        if($status == '') {
            throw new Exception('Please enter your Status');
        }

        // SELECT * FROM users WHERE username='rakib' AND password='1234';
        $q = $pdo->prepare("SELECT * FROM admins WHERE email=?");
        $q->execute([$email]);
        if($q->rowCount()){
            echo "email already has";
            throw new Exception('Email Already exist');
        }

        $final_password = password_hash($password, PASSWORD_DEFAULT);

    
        $statement = $pdo->prepare("INSERT INTO admins (name, email, password, role, status) VALUES (?,?,?,?,?)");
        $statement->execute([$name, $email, $final_password, $role, $status]);
        // INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `role`, `status`) VALUES (NULL, 'Rakibul hasan', 'rakibul@gmail.com', '=', NULL, 'Super Admin', 'Active');

        
        $link = ADMIN_URL.'login.php';
        $email_message = 'Please click on this link to Login with your <br> username : '.$email . 'and your password: '. $password.'<br>';
        $email_message .= '<a href="'.$link.'">';
        $email_message .= 'Click Here';
        $email_message .= '</a>';

        $mail = new PHPMailer(true);


	
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Port = SMTP_PORT;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION;
    
        $mail->setFrom($email);
        $mail->addAddress($email);
        $mail->addReplyTo($email);
        
        // $mail->addAttachment('uploads/plane.jpg', 'new_plane.jpg');

    
    
        $mail->isHTML(true);
        $mail->Subject = 'Reset Password';
        $mail->Body = $email_message;
    
        $mail->send();



        // var_dump($q->rowCount());
        // var_dump($q->fetchAll());

        // $_SESSION['admin'] = $result;

        $_SESSION['success_message'] = 'Successfully Added the user';
        header("location: ".ADMIN_URL."admin-users.php");
        exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}



?>


<div class="right-part container-fluid">
    <div class="row">
    <?php include 'sidebar.php' ?>

  

        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 pb-3">

           <form action="" method="post">
           <h1 class="page-heading">
                Form
                <a href="table.php" class="btn btn-primary btn-sm right"><i class="fas fa-eye"></i> Show All</a>
            </h1>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                
            
                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
            
                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Role</label>
                    <select name="role" class="form-control select2">
                        <option value="Admin">Admin</option>
                        <option value="Moderator">Moderator</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Status</label>
                    <select name="status" class="form-control select2">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
               
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary" name="create_form">Submit</button>
                </div>
            </div>
           </form>

        </main>
    </div>
</div>

<?php include 'footer.php' ;


?>

