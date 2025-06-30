<?php include 'header.php' ?>

<?php
    // Email send 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
?>


<?php



if(isset($_POST['create_form'])) {
    try {
        $name =  strip_tags($_POST['name']);
        $email =  strip_tags($_POST['email']);
        $password =  strip_tags($_POST['password']);
        $confirm_password =  strip_tags($_POST['confirm_password']);
    
        if($name == '') {
            throw new Exception('Please enter your Name');
        }

        if($email == '') {
            throw new Exception('Please enter your Email');
        }
    
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please enter a valid email');
        }
    
        if($password == '') {
            throw new Exception('Please enter your Password');
        }

        if($password != $confirm_password) {
            throw new Exception('Password does not match');
        }

        // SELECT * FROM users WHERE username='rakib' AND password='1234';
        $q = $pdo->prepare("SELECT * FROM users WHERE email=?");
        $q->execute([$email]);
        if($q->rowCount()){
            echo "email already has";
            throw new Exception('Email Already exist');
        }

        $final_password = password_hash($password, PASSWORD_DEFAULT);

        $token = bin2hex(random_bytes(50));

    
        $statement = $pdo->prepare("INSERT INTO users (name, email, password, token, status) VALUES (?,?,?,?,?)");
        $statement->execute([$name, $email, $final_password, $token, 'Inactive']);
        // INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `role`, `status`) VALUES (NULL, 'Rakibul hasan', 'rakibul@gmail.com', '=', NULL, 'Super Admin', 'Active');

        
        $link = BASE_URL.'verify-account.php?email='.$email.'&token='.$token;
        $email_message = 'Please click on this link to reset your password: <br>';
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
        $mail->Subject = 'Verify Your Email';
        $mail->Body = $email_message;
    
        $mail->send();



        // var_dump($q->rowCount());
        // var_dump($q->fetchAll());

        // $_SESSION['admin'] = $result;

        $_SESSION['success_message'] = 'Successfully Registered Please verify your account. Please check your email and active your account';
        header("location: ".BASE_URL."login.php");
        exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}



?>


    <div class="body-wrapper">


        <!-- announcement bar start -->
 
        <!-- header end -->

<!-- breadcrumb start -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled d-flex align-items-center m-0">
            <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li>Register</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="login-page mt-100">
        <div class="container">
            <form action="" class="login-form common-form mx-auto" method="post">
                <div class="section-header mb-3">
                    <h2 class="section-heading text-center">Register</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Name</label>
                            <input type="text" name="name">
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Email address</label>
                            <input type="email" name="email">
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Password</label>
                            <input type="password" name="password">
                        </fieldset>
                    </div>
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Confirm Password</label>
                            <input type="password" name="confirm_password">
                        </fieldset>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn-primary d-block mt-3 btn-signin" name="create_form">CREATE ACCOUNT</button>
                        <a href="<?php echo BASE_URL; ?>login.php" class="btn-secondary mt-2 btn-signin">GO TO LOGIN PAGE</a>
                    </div>
                </div>
            </form>
        </div>
    </div>            
</main>

        <!-- footer start -->
<?php include 'footer.php' ?>