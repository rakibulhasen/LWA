<?php include 'header.php' ?>
<?php // include '../config/config.php'; ?>

<?php


$current_email = '';

if(isset($_POST['form_login'])) {
    try {
        $email =  strip_tags($_POST['email']);
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
    
        $q = $pdo->prepare("SELECT * FROM admins WHERE email=? AND status=?");
        $q->execute([$email, 'Active']);

        if(!$q->rowCount()) {
            throw new Exception('Email is not fount');
        }

        $result = $q->fetch(PDO::FETCH_ASSOC);

        // if(!password_verify($password, $result['password'])) {}
        if(!password_verify($password, $result['password'])) {
            $current_email = $email;
            throw new Exception('Password does not match');
        }


        // var_dump($q->rowCount());
        // var_dump($q->fetchAll());

        $_SESSION['admin'] = $result;

        $_SESSION['success_message'] = 'You have successfully logged in';
        header("location: ".ADMIN_URL."index.php");
        exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}

?>

<div class="container-login">
    <main class="form-signin w-100 m-auto">
        <h1 class="text-center">Admin Login</h1>
        <form action="" method="post">
            <div class="form-floating">
                <input type="text" name="email" class="form-control"  id="floatingInput" placeholder="name@example.com" autocomplete="off" value="<?php echo $current_email ?>">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="form_login">Login</button>
        </form>
        <div class="login-forget-password">
            <a href="<?php echo ADMIN_URL; ?>forget-password.php">Forget Password</a>
        </div>
    </main>
</div>

<?php include 'footer.php' ?>   