<?php include 'header.php' ?>

<?php include 'top-bar.php' ?>

<?php 

$stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$_REQUEST['id']]);
$result = $stmt->rowCount();

$product = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($result);
if(!is_numeric($_REQUEST['id']) || !isset($_REQUEST['id']) || !$result){
    header("location: product-view.php");
    exit;
}




?>



<?php


if (isset($_POST['product_edit'])) {
    try {
        $name =  strip_tags($_POST['name']);
        $file =  $_FILES['featured_photo'];
        $path = $file['name'];
        $temp = $file['tmp_name'];
        $slug =  strip_tags($_POST['slug']);
        $category_id =  strip_tags($_POST['category_id']);
        $quantity =  strip_tags($_POST['quantity']);
        $regular_price =  strip_tags($_POST['regular_price']);
        $sale_price =  strip_tags($_POST['sale_price']);
        $short_description =  strip_tags($_POST['short_description']);
        $description =  $_POST['description'];
        $sku =  strip_tags($_POST['sku']);
        $size =  strip_tags($_POST['size']);
        $color =  strip_tags($_POST['color']);
        $capacity =  strip_tags($_POST['capacity']);
        $weight =  strip_tags($_POST['weight']);
        $pocket =  strip_tags($_POST['pocket']);
        $water_resistance =  strip_tags($_POST['water_resistance']);
        $warranty =  strip_tags($_POST['warranty']);

        if ($name == '') {
            throw new Exception('Please enter Product Name');
        }

        if ($slug == '') {
            throw new Exception('Please enter slug');
        }

       

         if (!is_numeric($regular_price)) {
            throw new Exception('Regular Price must be a number');
        }

        if ($regular_price == '') {
            throw new Exception('Please enter Regular Price');
        }

        if ($sale_price != '') {

            if (!is_numeric($sale_price)) {
                throw new Exception('Sale Price must be a number');
            }

            if($regular_price < $sale_price) {
                throw new Exception('Sale price must be lese then regular price');
            }
        }

         if (!is_numeric($quantity)) {
            throw new Exception('Quantity must be a number');
        }

        if ($quantity == '') {
            throw new Exception('Please enter quantity');
        }

        if ($short_description == '') {
            throw new Exception('Please enter short description');
        }

        if ($description == '') {
            throw new Exception('Please enter description');
        }

        if ($file['name'] == '') {
            $filename = $product['featured_photo'];
        } else {

            if ($_FILES['featured_photo']['size'] / 1024 > 100) {
                throw new Exception('Upload not posible');
            }

            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $filename = 'product_f_' . time() . "." . $extension;

            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $temp);

            if ($mime != 'image/png' && $mime != 'image/jpeg' && $mime != 'image/gif') {
                throw new Exception('Image type is not supported');
            }

            $dir = "images/" . $filename;

            unlink("images/".$product['featured_photo']);

            move_uploaded_file($temp, $dir);

        }
        

        

        // UPDATE `products` SET `description` = '<p>This a description for product</p>' WHERE `products`.`id` = 1;

        

        // $statement = $pdo->prepare("INSERT INTO products (name, category_id, featured_photo, slug, quantity, regular_price, sale_price, short_description, description, sku, size, color, capacity, weight, pocket, water_resistance, warranty) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        // $statement->execute([$name, $category_id, $filename, $slug, $quantity, $regular_price, $sale_price, $short_description, $description, $sku, $size, $color, $capacity, $weight, $pocket, $water_resistance, $warranty]);

        $statement = $pdo->prepare("UPDATE products SET  name = ?, category_id = ?, featured_photo = ?, slug = ?, quantity = ?, regular_price = ?, sale_price = ?, short_description = ?, description = ?, sku = ?, size = ?, color = ?, capacity = ?, weight = ?, pocket = ?, water_resistance = ?, warranty = ? WHERE id=?");
        $statement->execute([$name, $category_id, $filename, $slug, $quantity, $regular_price, $sale_price, $short_description, $description, $sku, $size, $color, $capacity, $weight, $pocket, $water_resistance, $warranty, $_REQUEST['id']]);


        var_dump($_POST['product_edit']);

        $_SESSION['success_message'] = 'Successfully Added the Product';
        header("location: " . ADMIN_URL . "product-view.php");
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
                    Product
                    <a href="<?php echo ADMIN_URL ?>product-view.php" class="btn btn-primary btn-sm right"><i class="fas fa-eye"></i> Show All</a>
                </h1>

                <div class="row">
                    <div class="col-md-2 mb-3">
                        <img src="images/<?php echo $product['featured_photo'] ?>" alt="">
                        
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Product Image</label>
                        <input type="file" class="form-control" name="featured_photo" >
                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $product['name'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" value="<?php echo $product['slug'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Regular Price</label>
                        <input type="text" class="form-control" name="regular_price" value="<?php echo $product['regular_price'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Sale Price</label>
                        <input type="text" class="form-control" name="sale_price" value="<?php echo $product['sale_price'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Category</label>
                        <!-- <option value="1">Category</option> -->
                            
                        <select name="category_id" id="" class="form-select">
                            <?php 
                                $statement = $pdo->prepare("SELECT * FROM categories ORDER BY item_order ASC");
                                $statement->execute();
                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                
                                foreach($result as $row) {
                                    ?>
                                        <option value="<?= $row['id'] ?>" <?php echo ($row['id'] == $product['category_id']) ? 'selected' : '' ?>><?= $row['name'] ?></option>
                                    <?php
                                }
                               
                                
                            ?>

                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Quantity</label>
                        <input type="text" name="quantity" id="" class="form-control" rows="4" value="<?php echo $product['quantity'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Short Description</label>
                        <textarea name="short_description" id="" class="form-control" rows="5"><?php echo $product['short_description'] ?></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-control editor">
                            <?php echo $product['description'] ?>
                        </textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">SKU</label>
                        <input type="text" name="sku" id="" class="form-control " value="<?php echo $product['sku'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Size</label>
                        <input type="text" name="size" id="" class="form-control" rows="4" value="<?php echo $product['size'] ?>">
                    </div>

                </div>

                <div class="row">


                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Color</label>
                        <input type="text" name="color" id="" class="form-control" value="<?php echo $product['color'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Capacity</label>
                        <input type="text" name="capacity" id="" class="form-control" rows="4" value="<?php echo $product['capacity'] ?>">
                    </div>

                </div>

                <div class="row">


                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Weight</label>
                        <input type="text" name="weight" id="" class="form-control" value="<?php echo $product['weight'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Pocket</label>
                        <input type="text" name="pocket" id="" class="form-control" rows="4" value="<?php echo $product['pocket'] ?>">
                    </div>

                </div>

                <div class="row">


                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Water Resistance</label>
                        <input type="text" name="water_resistance" id="" class="form-control" value="<?php echo $product['water_resistance'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Warranty</label>
                        <input type="text" name="warranty" id="" class="form-control" value="<?php echo $product['warranty'] ?>">
                    </div>
                </div>


                 <button type="submit" class="btn btn-primary" name="product_edit">Submit</button>
            </form>

        </main>
    </div>
</div>

<?php include 'footer.php';

?>