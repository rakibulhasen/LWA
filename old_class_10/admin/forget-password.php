<?php include 'header.php' ?>




<?php
    // Email send 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';
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

        $q = $pdo->prepare("SELECT * FROM admins WHERE email=? AND status=?");
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

        $statement = $pdo->prepare("UPDATE admins SET token=? WHERE email=?");
        $statement->execute([$token, $email]);

        $link = ADMIN_URL.'reset-password.php?email='.$email.'&token='.$token;
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
        header("location: ".ADMIN_URL."forget-password.php");
        exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}


?>

<div class="container-login">
    <main class="form-signin w-100 m-auto">
        <form action="" method="post">
            <h1 class="text-center">Forget Password</h1>
        
            <div class="form-floating">
                <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
                <label for="floatingInput">Email address</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="forget_password">Submit</button>
        </form>
        <div class="login-forget-password">
            <a href="login.php">Back to Login Page</a>
        </div>
    </main>
</div>

<?php include 'footer.php' ?>