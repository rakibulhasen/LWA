<?php include 'header.php' ?>
<?php include 'top-bar.php' ?>

<?php

$statement = $pdo->prepare("SELECT 
                                p.*,
                                c.name AS category_name 
                            FROM 
                                products p
                            JOIN   
                                categories c
                            ON
                                p.category_id = c.id

                            ");
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

// var_dump($products)

?>




<div class="right-part container-fluid">
    <div class="row">
        <?php include 'sidebar.php' ?>

        <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4 pb-3">

            <h1 class="page-heading">
                Product
                <a href="product-create.php" class="btn btn-primary btn-sm right"><i class="fas fa-plus"></i> Add New</a>
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
                            <th scope="col">Slug</th>
                            <th scope="col">Sale Price</th>
                            <th scope="col">Regular Price</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Category</th>
                            <th scope="col">Gallery</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($products as $product) {
                            $i++;
                        ?>

                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $product['name'] ?></td>
                                <td><img src="images/<?= $product['featured_photo'] ?>" alt=""></td>
                                <td><?= $product['slug'] ?></td>
                                <td><?= $product['sale_price'] ?></td>
                                <td><?= $product['regular_price'] ?></td>
                                <td><?= $product['quantity'] ?></td>
                                <td><?= $product['category_name'] ?></td>
                                <td>
                                    <a href="product-photo-gallery.php?id=<?= $product['id'] ?>" class="btn btn-success btn-sm ">Gallery</a>
                                </td>

                                <td>
                                    <a href="product-edit.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm ">Edit</a>
                                    <a href="product-delete.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm " onclick="return confirm('Are you sure you want to delete this user')">Delete</a>
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