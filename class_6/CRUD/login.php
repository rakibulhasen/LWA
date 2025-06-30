<?php

require 'config.php';

// Header 
include 'header.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $statement = $pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $statement->execute([$username, $password]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    try {

        if (empty($username) && empty($password)) {
            throw new Exception('Filed can\'t be emplty');
        }

        if (!$result['username'] == $username || !$result['username'] == $password) {
            throw new Exception("Username and Password Incorrent");
        }
        
        if ($result['username'] == $username && $result['password'] == $password) {
            $scs_msg = "Login Successfull";
            setcookie("username", $result['username'], time() + 86400, "/");
            setcookie("password", $result['password'], time() + 86400, "/");
            header("Location: dashboard.php");
        }
        
        

        echo "<pre>";
        print_r($result);
        echo "</pre>";
    } catch (Exception $e) {
        $e_msg = $e->getMessage();
    }
}

?>

<div class="container p-4">
    <div class="w-50 mx-auto">
        <div class="card p-5">

        <?php
            if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])) :
                ?>
                
               <div class="text-center">
               <p class="pb-3">You are already loggedin.</p>

                <p>Please <a href="logout.php">Log Out</a></p>
               </div>


            <?php
             else :
        ?>
            <h2>Login Form</h2>
            <form action="" method="POST">
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <?php
                if (isset($e_msg)) {
                ?>
                    <div class="text-danger">
                        <?php
                        echo $e_msg;
                        ?>
                    </div>
                <?php
                } elseif (isset($scs_msg)) {
                ?>
                    <div class="text-success">
                        <?php
                        echo $scs_msg;
                        ?>
                    </div>
                <?php
                }
                ?>
            </form>

            <?php endif; ?>
        </div>
    </div>
</div>

<?php

// Footer
include 'footer.php'

?>