<?php include 'header.php' ?>


<?php
    // Email send 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
?>

<?php

   


if(isset($_POST['forget_password'])) {
    try {
        $email =  strip_tags($_POST['email']);
    
        if($email == '') {
            throw new Exception('Please enter your Email');
        }
    
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please enter a valid email');
        }

        $q = $pdo->prepare("SELECT * FROM users WHERE email=? AND status=?");
        $q->execute([$email, 'Active']);

        if(!$q->rowCount()) {
            throw new Exception('Email is not fount');
        }

        $result = $q->fetch(PDO::FETCH_ASSOC);

        // "UPDATE students SET name=?, email=?, phone=? WHERE id=?"

        // $q = $pdo->prepare("UPDATE admins SET token=? WHERE email=?");


        // if(!password_verify($password, $result['password'])) {}
       


        // var_dump($q->rowCount());
        // var_dump($q->fetchAll());

        // $token = time();
        $token = bin2hex(random_bytes(50));

        $statement = $pdo->prepare("UPDATE users SET token=? WHERE email=?");
        $statement->execute([$token, $email]);

        $link = BASE_URL.'reset-password.php?email='.$email.'&token='.$token;
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
    
        $mail->setFrom(SMTP_FORM);
        $mail->addAddress($email);
        $mail->addReplyTo(SMTP_FORM);
        
        // $mail->addAttachment('uploads/plane.jpg', 'new_plane.jpg');

    
    
        $mail->isHTML(true);
        $mail->Subject = 'Reset Password';
        $mail->Body = $email_message;
    
        $mail->send();

        

        $_SESSION['success_message'] = 'We have send your reset password link Please check your mail spam folder too';
        header("location: ".BASE_URL."forget-password.php");
        exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}


?>


<!-- breadcrumb start -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled d-flex align-items-center m-0">
            <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li>Forget Password</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="login-page mt-100">
        <div class="container">
            <form action="" class="login-form common-form mx-auto" method="post">
                <div class="section-header mb-3">
                    <h2 class="section-heading text-center">Forget Password</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <fieldset>
                            <label class="label">Email address</label>
                            <input type="email" name="email">
                        </fieldset>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn-primary d-block btn-signin" name="forget_password">SUBMIT</button>
                        <a href="<?php echo BASE_URL; ?>login.php" class="text_14 d-block mt-4">Back to Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>            
</main>

        <!-- footer start -->
<?php include 'footer.php' ?>