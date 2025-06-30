<?php include 'header.php' ?>

<?php include 'top-bar.php' ?>

<?php

if(!isset($_REQUEST['id'])) {
    header('location: admin-users.php');
    exit;
}

$id = $_REQUEST['id']; 

    // SELECT * FROM users WHERE username='rakib' AND password='1234';
    $statement = $pdo->prepare("SELECT * FROM admins WHERE id=?");
    $statement->execute([$id]);


    if(!$statement->rowCount()) {
        header('location: admin-users.php');
        exit;
    } 


    // If super admin, all persons will exit
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    if($result['role'] == 'Super Admin') {
        header('location: admin-users.php');
        exit;
    }


    // Admin can not eit any admin data 
    if($_SESSION['admin']['role'] == 'Admin') {
        if($result['role'] == 'Admin') {
            header('location: admin-users.php');
            exit;
        }
    }


    // Moderator  can not eit any admin or moderator data 
    if($_SESSION['admin']['role'] == 'Moderator') {
        if($result['role'] == 'Admin' || $result['role'] == 'Moderator') {
            header('location: admin-users.php');
            exit;
        }
    }





if(isset($_POST['update_form'])) {
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
    
        // if($password == '') {
        //     throw new Exception('Please enter your Password');
        // }

        if($role == '') {
            throw new Exception('Please enter your Role');
        }

        if($status == '') {
            throw new Exception('Please enter your Status');
        }

        // SELECT * FROM users WHERE username='rakib' AND password='1234';
        $q = $pdo->prepare("SELECT * FROM admins WHERE email=? AND id!=?");
        $q->execute([$email, $id]);
        if($q->rowCount()){
            throw new Exception('Email Already exist');
        }

        $q = $pdo->prepare("SELECT * FROM admins WHERE id=?");
        $q->execute([$id]);
        $result = $q->fetch(PDO::FETCH_ASSOC);

        if(empty($password)) {
            $current_pass =  $result['password'];
        } else {
            $current_pass = password_hash($password, PASSWORD_DEFAULT);
        }
        

    
        $statement = $pdo->prepare("UPDATE admins SET name=?, email=?, password=?, role=?, status=? WHERE id=?");
        $statement->execute([$name, $email, $current_pass, $role, $status, $id]);
        // "UPDATE students SET name=?, email=?, phone=? WHERE id=?"
        
        


        // var_dump($q->rowCount());
        // var_dump($q->fetchAll());

        // $_SESSION['admin'] = $result;

        $_SESSION['success_message'] = 'Successfully Updated the user';
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
                    <input type="text" class="form-control" name="name" value="<?php echo $result['name'] ?>">
                </div>
                
            
                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $result['email'] ?>">
                </div>
            
                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Role</label>
                    <select name="role" class="form-control">
                        <option value="Admin" <?php echo ($result['role'] == 'Admin') ? 'selected' : ''; ?>>Admin</option>
                        <option value="Moderator" <?php echo ($result['role'] == 'Moderator') ? 'selected' : ''; ?>>Moderator</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="" class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="Active" <?php echo ($result['status'] == 'Active') ? 'selected' : ''; ?>>Active</option>
                        <option value="Inactive" <?php echo ($result['status'] == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>
               
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary" name="update_form">Update</button>
                </div>
            </div>
           </form>

        </main>
    </div>
</div>

<?php include 'footer.php' ;


?>