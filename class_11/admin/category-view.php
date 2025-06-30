<?php include 'header.php' ?>
<?php include 'top-bar.php' ?>

<?php

$statement = $pdo->prepare("SELECT * FROM categories");
$statement->execute();
$categorys = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<?php

if ($_SESSION['admin']['role'] != 'Super Admin' && $_SESSION['admin']['role'] != 'Admin') {
    header('location: index.php');
    exit;
}

?>


<div class="right-part container-fluid">
    <div class="row">
        <?php include 'sidebar.php' ?>

        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 pb-3">

            <h1 class="page-heading">
                Category
                <a href="category-create.php" class="btn btn-primary btn-sm right"><i class="fas fa-plus"></i> Add New</a>
            </h1>
            <style>
                td img {
                    height: 100px;
                }
            </style>

            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Item Order</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($categorys as $category) {
                            $i++;
                        ?>

                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $category['name'] ?></td>
                                <td><img src="<?= $category['photo'] ?>" alt=""></td>
                                <td><?= $category['item_order'] ?></td>

                                <td>
                                    <a href="edit-category.php?id=<?= $category['id'] ?>" class="btn btn-warning btn-sm ">Edit</a>
                                    <a href="delete-category.php?id=<?= $category['id'] ?>" class="btn btn-danger btn-sm " onclick="return confirm('Are you sure you want to delete this user')">Delete</a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<?php include 'footer.php' ?>