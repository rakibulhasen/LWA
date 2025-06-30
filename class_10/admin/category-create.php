<?php include 'header.php' ?>

<?php include 'top-bar.php' ?>



<?php


if (isset($_POST['create_category'])) {
    try {
        $name =  strip_tags($_POST['name']);
        $file =  $_FILES['image'];
        $filename = $file['name'];
        $dir = "images/" . $filename;
        $temp = $file['tmp_name'];
        $item_order =  strip_tags($_POST['item_order']);

        if ($name == '') {
            throw new Exception('Please enter your Category Name');
        }

        // if ($phone == '') {
        //     throw new Exception('Please enter your Photo');
        // }

        move_uploaded_file($temp, $dir);

        $statement = $pdo->prepare("INSERT INTO category (name, photo, item_order) VALUES (?,?,?)");
        $statement->execute([$name, $dir, $item_order]);


        $_SESSION['success_message'] = 'Successfully Added the Category';
        header("location: " . ADMIN_URL . "category-view.php");
        exit;

        var_dump($_POST['create_category']);
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
                    Category
                    <a href="<?php echo ADMIN_URL ?>category-view.php" class="btn btn-primary btn-sm right"><i class="fas fa-eye"></i> Show All</a>
                </h1>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>


                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Category Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Order</label>
                        <input type="text" class="form-control" name="item_order">
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" name="create_category">Submit</button>
                    </div>
                </div>
            </form>

        </main>
    </div>
</div>

<?php include 'footer.php';

?>