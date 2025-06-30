

<?php include 'header.php' ?>





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

        // "UPDATE students SET name=?, email=?, phone=? WHERE id=?"
        $q = $pdo->prepare("UPDATE users SET status=?, token=? WHERE email=? AND token=?");
        $q->execute(['Active', '', $email, $token]);

        $_SESSION['success_message'] = 'Your account successfully Actived Please login';
        header('location: login.php?sms=updated');
        exit;

} else {
    header("location: login.php");
    exit;
}




include 'footer.php' ?>