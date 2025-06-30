<?php include 'header.php' ?>

<?php include 'top-bar.php' ?>

<?php 
// Admin can not eit any admin data 
    if($_SESSION['admin']['role'] == 'Moderator') {
        header('location: category-view.php');
        exit;
    }
?>

<?php

if (!isset($_REQUEST['id'])) {
    header('location: category-view.php');
    exit;
}

$id = $_REQUEST['id'];

// SELECT * FROM users WHERE username='rakib' AND password='1234';
$statement = $pdo->prepare("SELECT * FROM categories WHERE id=?");
$statement->execute([$id]);


if (!$statement->rowCount()) {
    header('location: category-view.php');
    exit;
}


// // If super admin, all persons will exit
// $result = $statement->fetch(PDO::FETCH_ASSOC);
// if ($result['role'] == 'Super Admin') {
//     header('location: admin-users.php');
//     exit;
// }


// // Admin can not eit any admin data 
// if ($_SESSION['admin']['role'] == 'Admin') {
//     if ($result['role'] == 'Admin') {
//         header('location: admin-users.php');
//         exit;
//     }
// }


// // Moderator  can not eit any admin or moderator data 
// if ($_SESSION['admin']['role'] == 'Moderator') {
//     if ($result['role'] == 'Admin' || $result['role'] == 'Moderator') {
//         header('location: admin-users.php');
//         exit;
//     }
// }

// SELECT CustomerName, City FROM Customers;
$statement = $pdo->prepare("SELECT * FROM categories WHERE id=?");
$statement->execute([$id]);
$result = $statement->fetch(PDO::FETCH_ASSOC);




if (isset($_POST['update_form'])) {
    try {
        $name =  strip_tags($_POST['name']);
        $file =  $_FILES['image'];
        $path = $file['name'];
        // $dir = "images/" . $filename;
        $temp = $file['tmp_name'];
        $item_order =  strip_tags($_POST['item_order']);

        // if ($filename == '') {
        //     throw new Exception('Please enter your file');
        // }

        if ($name == '') {
            throw new Exception('Please enter your Category Name');
        }

        // if ($phone == '') {
        //     throw new Exception('Please enter your Photo');
        // }



        if ($path == '') {
            $dir = $result['photo'];
        } else {
            $old_dir = $result['photo'];
            unlink($old_dir);
            // move_uploaded_file($temp, $dir);



            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $filename = time().".".$extension;

            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $temp);

            if($mime != 'image/png' && $mime != 'image/jpeg' && $mime != 'image/gif') {
                throw new Exception('Image type is not supported');
            }

            $dir = "images/" . $filename;

            move_uploaded_file($temp, $dir);
        }



        // UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;

        $statement = $pdo->prepare("UPDATE categories SET name=?, photo=?, item_order=? WHERE id=?");
        $statement->execute([$name, $dir, $item_order, $id]);


        // "UPDATE students SET name=?, email=?, phone=? WHERE id=?"




        // var_dump($q->rowCount());
        // var_dump($q->fetchAll());

        // $_SESSION['admin'] = $result;

        $_SESSION['success_message'] = 'Successfully Updated the category';
        header("location: " . ADMIN_URL . "category-view.php");
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

            <form action="" method="post" enctype="multipart/form-data">
                <h1 class="page-heading">
                    Edit Category
                    <a href="<?php echo ADMIN_URL ?>category-view.php" class="btn btn-primary btn-sm right"><i class="fas fa-eye"></i> Show All</a>
                </h1>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $result['name'] ?>">
                    </div>


                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Category Image</label>
                        <input type="file" class="form-control" name="image">
                        <img src=" <?php echo $result['photo'] ?>" alt="" width="140">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Order</label>
                        <input type="text" class="form-control" name="item_order" value="<?php echo $result['item_order'] ?>">
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" name="update_form">Update</button>
                    </div>
                </div>
            </form>

        </main>
    </div>
</div>

<?php include 'footer.php';


?>