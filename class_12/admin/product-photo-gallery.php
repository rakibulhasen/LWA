<?php include 'header.php' ?>

<?php include 'top-bar.php' ?>

<?php

    $statement = $pdo->prepare("SELECT * FROM products WHERE id=?");
    $statement->execute([$_REQUEST['id']]);
    $result = $statement->rowCount();
    if(!$result) {
        header("location: product-view.php?id=".$_REQUEST['id']);
        exit;
    }

?>


<?php


if (isset($_POST['add_photo'])) {
    try {
        $file =  $_FILES['photo'];
        $path = $file['name'];
        $temp = $file['tmp_name'];

        if ($file['name'] == '') {
            throw new Exception('Please add product image');
        }

        if ($_FILES['photo']['size'] / 1024 > 100) {
            throw new Exception('Upload not posible');
        }

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $filename = 'product_' . time() . "." . $extension;

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $temp);

        if ($mime != 'image/png' && $mime != 'image/jpeg' && $mime != 'image/gif') {
            throw new Exception('Image type is not supported');
        }

        $dir = "images/" . $filename;

        move_uploaded_file($temp, $dir);

        $statement = $pdo->prepare("INSERT INTO product_photos (product_id, photo) VALUES (?,?)");
        $statement->execute([$_REQUEST['id'], $filename]);

        var_dump($_POST['add_photo']);

        $_SESSION['success_message'] = 'Successfully Added the Photo';
        header("location: " . ADMIN_URL . "product-photo-gallery.php?id=".$_REQUEST['id']);
        exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}



if (isset($_POST['update'])) {
    try {
        $file =  $_FILES['photo'];
        $path = $file['name'];
        $temp = $file['tmp_name'];

        if ($file['name'] == '') {
            throw new Exception('Please add product image');
        }

        if ($_FILES['photo']['size'] / 1024 > 100) {
            throw new Exception('Upload not posible');
        }

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $filename = 'product_' . time() . "." . $extension;

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $temp);

        if ($mime != 'image/png' && $mime != 'image/jpeg' && $mime != 'image/gif') {
            throw new Exception('Image type is not supported');
        }

        $stmt = $pdo->prepare("SELECT * FROM product_photos WHERE id=?");
        $stmt->execute([$_POST['product_photo_id']]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unlink("images/" . $result['photo']);

        $dir = "images/" . $filename;

        move_uploaded_file($temp, $dir);

        $statement = $pdo->prepare("UPDATE product_photos SET photo=? WHERE id=?");
        $statement->execute([$filename, $_POST['product_photo_id']]);

        var_dump($_POST['add_photo']);

        $_SESSION['success_message'] = 'Successfully Updated the Photo';
        header("location: " . ADMIN_URL . "product-photo-gallery.php?id=".$_REQUEST['id']);
        exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}


if (isset($_POST['delete'])) {
    try {
        
        $stmt = $pdo->prepare("SELECT * FROM product_photos WHERE id=?");
        $stmt->execute([$_POST['product_photo_id']]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unlink("images/" . $result['photo']);

      // DELETE FROM product_photos WHERE `product_photos`.`id` = 7
        $statement = $pdo->prepare("DELETE FROM product_photos WHERE id=?");
        $statement->execute([$_POST['product_photo_id']]);



        $_SESSION['success_message'] = 'Successfully deleted the Photo';
        header("location: " . ADMIN_URL . "product-photo-gallery.php?id=".$_REQUEST['id']);
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
            <h1 class="page-heading">
                    Photo of Product
                    <a href="<?php echo ADMIN_URL ?>product-view.php" class="btn btn-primary btn-sm right"><i class="fas fa-eye"></i> Show All</a>
                </h1>

            <div class="row">
                <div class="col-8">
                    <h1 class="page-heading">All Photos </h1>
                    <div class="table-responsive">
                        <table id="" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                $statement = $pdo->prepare("SELECT id, photo FROM product_photos WHERE product_id=? ORDER BY id ASC");
                                $statement->execute([$_REQUEST['id']]);
                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                $i = 0;
                                foreach ($result as $row) {
                                    $i++;
                                    ?>
                                        <tr>
                                        <td><?php echo $i ?></td>
                                        <td><img src="images/<?= $row['photo'] ?>" alt="" style="width: 70px;"></td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm " data-bs-toggle="modal" data-bs-target="#photoEdit<?php echo $i ?>" style="float:left; margin-right:5px">Edit</a>
                                            <form action="" method="post">
                                                <input type="hidden" name="product_photo_id" value="<?= $row['id'] ?>">
                                                <button type="submit" name="delete" href="#" class="btn btn-danger btn-sm " onclick="return confirm('Are you sure you want to delete this user')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="photoEdit<?php echo $i ?>" tabindex="-1" aria-labelledby="photoEdit<?php echo $i ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModal">Photo Edit</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="images/<?= $row['photo'] ?>" alt="" style="width: 70px;">
                                                        <div class="row">
                                                            <label for="">Choose Photo</label>
                                                            <input type="file" name="photo" id="" class="form-control">
                                                            <input type="hidden" name="product_photo_id" value="<?= $row['id'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- End Modal -->
                                    <?php
                                }
                            ?>

                                 

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="col-4">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h1 class="page-heading">Add Photo</h1>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="file" class="form-control" name="photo" >
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary" name="add_photo">Submit</button>
                    </form>
                </div>

            </div>

        </main>
    </div>
</div>

<?php include 'footer.php';

?>