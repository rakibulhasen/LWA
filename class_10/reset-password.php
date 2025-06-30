<?php include 'header.php' ?>

<?php
    // Email send 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
?>


<?php
// 8743b89517aad8c4e50a4f0340b6b4760ad9cae90a621ec0ba1c74d59b4a1ae35adccc8d3402adf6b258e793e4f32098732b



if(isset($_REQUEST['email']) && isset($_REQUEST['token'])) {
    
        $email =  strip_tags($_REQUEST['email']);
        $token =  strip_tags($_REQUEST['token']);

        $statement = $pdo->prepare("SELECT * FROM users WHERE email=? AND token=?");
        $statement->execute([$email, $token]);

        $result = $statement->rowCount();

        if(!$result) {
            $_SESSION['success_message'] = "Email and Token Not fount";
            header("location: login.php");
            exit;
        }
}  else {
    header("location: login.php");
    exit;
}








if(isset($_POST['reset_form'])) {
    try {
        $email =  strip_tags($_REQUEST['email']);
        $token =  strip_tags($_REQUEST['token']);
        $new_pass =  strip_tags($_REQUEST['new_pass']);
        $conferm_pass =  strip_tags($_REQUEST['conferm_pass']);
    
        if($new_pass == '') {
            throw new Exception('Please enter your New Password');
        }

        if($conferm_pass == '') {
            throw new Exception('Please enter your Conferm Password');
        }

        if($conferm_pass != $new_pass) {
            throw new Exception('Password does not match');
        }

    
        
        $q = $pdo->prepare("SELECT * FROM users WHERE email=? AND token=?");
        $q->execute([$email, $token]);

        if(!$q->rowCount()) {
            throw new Exception('User not exist');
        }

        // $result = $q->fetch(PDO::FETCH_ASSOC);

        $final_password = password_hash($new_pass, PASSWORD_DEFAULT);

        // "UPDATE students SET name=?, email=?, phone=? WHERE id=?"

        $q = $pdo->prepare("UPDATE users SET password=?, token=? WHERE email=?");
        $q->execute([$final_password,'', $email]);




        $link = BASE_URL.'login.php';
        $email_message = 'Please click on this link to login with your username and <br> password : ' .$new_pass.'<br>';
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
        $mail->Subject = 'Update Password';
        $mail->Body = $email_message;
    
        $mail->send();


        // if(!password_verify($password, $result['password'])) {}
       


        // var_dump($q->rowCount());
        // var_dump($q->fetchAll());

        // $token = time();
            

        $_SESSION['success_message'] = 'You have successfully updated your password';
        header("location: ".BASE_URL."login.php");
        exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}





















?>

<div class="container">
    <main class="form-signin w-100 m-auto">
        <form action="" method="post" class="login-form common-form mx-auto">
            <h1 class="text-center">Reset Password</h1>
            <div class="form-floating">
                <input type="password" name="new_pass" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
                <label for="floatingPassword">New Password</label>
            </div>
            <div class="form-floating">
                <input type="password" name="conferm_pass" class="form-control"  id="floatingPassword" placeholder="Retype Password" autocomplete="off">
                <label for="floatingPassword">Retype Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="reset_form">Submit</button>
        </form>
    </main>
</div>

<?php include 'footer.php' ?>