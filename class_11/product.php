<?php include 'header.php' ?>


 <?php

    $q = $pdo->prepare("SELECT 
                    p.*,
                    c.name AS category_name 
                FROM 
                    products p
                JOIN
                    categories c
                ON
                    p.category_id = c.id
                WHERE 
                    slug=?
                ");
    $q->execute([$_REQUEST['slug']]);
    $product_data = $q->fetch(PDO::FETCH_ASSOC);
    // echo "<pre>";
    //     print_r($product_data);
    // echo "</pre>";
    
    ?>



<!-- header end -->

<!-- breadcrumb start -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled d-flex align-items-center m-0">
            <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li><?php echo $product_data['category_name']?></li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li><?php echo $product_data['name']; ?></li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="product-page mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-gallery product-gallery-vertical d-flex">
                        <div class="product-img-large">
                            <div class="img-large-slider common-slider" data-slick='{
                                "slidesToShow": 1, 
                                "slidesToScroll": 1,
                                "dots": false,
                                "arrows": false,
                                "asNavFor": ".img-thumb-slider"
                            }'>
                                <div class="img-large-wrapper">
                                    <a href="<?php echo ADMIN_URL; ?>images/<?php echo $product_data['featured_photo']?>" data-fancybox="gallery">
                                        <img src="<?php echo ADMIN_URL; ?>images/<?php echo $product_data['featured_photo']?>" alt="img">
                                    </a>
                                </div>

                                <?php

                                    $stmt = $pdo->prepare("SELECT * FROM product_photos WHERE product_id=?");
                                    $stmt->execute([$product_data['id']]);
                                    $product_photos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($product_photos as $photo) {
                                        ?>
                                        <div class="img-large-wrapper">
                                            <a href="<?php echo ADMIN_URL; ?>images/<?php echo $photo['photo']?>" data-fancybox="gallery">
                                                <img src="<?php echo ADMIN_URL; ?>images/<?php echo $photo['photo']?>" alt="img">
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>

                      
                            </div>
                        </div>
                        <div class="product-img-thumb">
                            <div class="img-thumb-slider common-slider" data-vertical-slider="true" data-slick='{
                                "slidesToShow": 5, 
                                "slidesToScroll": 1,
                                "dots": false,
                                "arrows": true,
                                "infinite": false,
                                "speed": 300,
                                "cssEase": "ease",
                                "focusOnSelect": true,
                                "swipeToSlide": true,
                                "asNavFor": ".img-large-slider"
                            }'>

                             <?php

                                    $stmt = $pdo->prepare("SELECT * FROM product_photos WHERE product_id=?");
                                    $stmt->execute([$product_data['id']]);
                                    $product_photos2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($product_photos2 as $photo1) {
                                        ?>
                                        <div>
                                            <div class="img-thumb-wrapper">
                                                <img src="<?php echo ADMIN_URL; ?>images/<?php echo $photo1['photo']?>" alt="img">
                                            </div>
                                        </div>
                                      
                                        <?php
                                    }
                                    ?>
                            
                            </div>
                            <div class="activate-arrows show-arrows-always arrows-white d-none d-lg-flex justify-content-between mt-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-details ps-lg-4">
                        <div class="mb-3">
                            <?php 
                                if($product_data['quantity'] > 0) :?>
                                    <span class="product-availability">In Stock</span>
                                <?php else: ?>
                                    <span class="product-unavailability">Out Of Stock</span>
                                <?php endif; ?>
                        </div>
                        <h2 class="product-title mb-3"><?php echo $product_data['name']; ?></h2>

                        <div class="product-price-wrapper mb-4">
                            <?php if($product_data['regular_price'] >= $product_data['sale_price'] && $product_data['sale_price'] != 0) : ?>
                                <span class="product-price regular-price">৳<?php echo $product_data['sale_price'] ?></span>
                                <del class="product-price compare-price ms-2">৳<?php echo $product_data['regular_price'] ?></del>
                            <?php else: ?>
                                <span class="product-price regular-price">৳<?php echo $product_data['regular_price'] ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="product-vendor product-meta mb-3">
                            <strong class="label">Category:</strong> <?php echo $product_data['category_name']?>
                        </div>

                        <div class="product-short-description">
                            <p>
                                <?php echo $product_data['short_description']; ?>
                            </p>
                        </div>

                        <div class="misc d-flex align-items-end justify-content-between mt-4">
                            <div class="quantity d-flex align-items-center justify-content-between">
                                <button class="qty-btn dec-qty"><img src="<?php echo BASE_URL; ?>assets/img/icon/minus.svg" alt="minus"></button>
                                <input class="qty-input" type="number" name="qty" value="1" min="0">
                                <button class="qty-btn inc-qty"><img src="<?php echo BASE_URL; ?>assets/img/icon/plus.svg" alt="plus"></button>
                            </div>
                        </div>

                        <form class="product-form" action="">
                            <div class="product-form-buttons d-flex align-items-center justify-content-between mt-4">
                                <button type="submit" class="position-relative btn-atc btn-add-to-cart loader">ADD TO CART</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product tab start -->
    <div class="product-tab-section mt-100" data-aos="fade-up" data-aos-duration="700">
        <div class="container">
            <div class="tab-list product-tab-list">
                <nav class="nav product-tab-nav">
                    <a class="product-tab-link tab-link active" href="#pdescription" data-bs-toggle="tab">Description</a>
                    <a class="product-tab-link tab-link" href="#pspecification" data-bs-toggle="tab">Specification</a>
                </nav>
            </div>
            <div class="tab-content product-tab-content">
                <div id="pdescription" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="desc-content">
                                <?php echo $product_data['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pspecification" class="tab-pane fade">
                    <div class="desc-content">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <?php 
                                if($product_data['sku']) : ?>
                                    <tr>
                                        <td>SKU</td>
                                        <td><?php echo $product_data['sku']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if($product_data['size']) : ?>
                                    <tr>
                                        <td>Size</td>
                                        <td><?php echo $product_data['size']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if($product_data['color']) : ?>
                                    <tr>
                                        <td>Color</td>
                                        <td><?php echo $product_data['color']?></td>
                                    </tr>
                                <?php endif; ?>
                                
                                <?php 
                                if(isset($product_data['pattern']) && $product_data['pattern']) : ?>
                                    <tr>
                                        <td>Pattern</td>
                                        <td><?php echo $product_data['pattern']?></td>
                                    </tr>
                                <?php endif; ?>
      
                                <?php 
                                if($product_data['capacity']) : ?>
                                    <tr>
                                        <td>Capacity</td>
                                        <td><?php echo $product_data['capacity']?></td>
                                    </tr>
                                <?php endif; ?>

                                 <?php 
                                if(isset($product_data['weight']) && $product_data['weight']) : ?>
                                    <tr>
                                        <td>Weight</td>
                                        <td><?php echo $product_data['weight']?></td>
                                    </tr>
                                <?php endif; ?>
                                
                                <?php 
                                if(isset($product_data['outer_fabric']) && $product_data['outer_fabric']) : ?>
                                    <tr>
                                        <td>Outer Fabric</td>
                                        <td><?php echo $product_data['outer_fabric']?></td>
                                    </tr>
                                <?php endif; ?>
                                
                                <?php 
                                if(isset($product_data['lining']) && $product_data['lining']) : ?>
                                    <tr>
                                        <td>Lining</td>
                                        <td><?php echo $product_data['lining']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if(isset($product_data['lining']) && $product_data['lining']) : ?>
                                    <tr>
                                        <td>Lining</td>
                                        <td><?php echo $product_data['lining']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if(isset($product_data['zippers']) && $product_data['zippers']) : ?>
                                    <tr>
                                        <td>Zippers</td>
                                        <td><?php echo $product_data['zippers']?></td>
                                    </tr>
                                <?php endif; ?>


                                <?php 
                                if(isset($product_data['lining']) && $product_data['lining']) : ?>
                                    <tr>
                                        <td>Lining</td>
                                        <td><?php echo $product_data['lining']?></td>
                                    </tr>
                                <?php endif; ?>

                                    
                                <?php 
                                if(isset($product_data['hardware']) && $product_data['lininghardware']) : ?>
                                    <tr>
                                        <td>Hardware</td>
                                        <td><?php echo $product_data['hardware']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if(isset($product_data['pockets']) && $product_data['pockets']) : ?>
                                    <tr>
                                        <td>Pockets</td>
                                        <td><?php echo $product_data['pockets']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if(isset($product_data['comfort']) && $product_data['comfort']) : ?>
                                    <tr>
                                        <td>Comfort</td>
                                        <td><?php echo $product_data['comfort']?></td>
                                    </tr>
                                <?php endif; ?>
                                
                                <?php 
                                if(isset($product_data['water_resistance']) && $product_data['water_resistance']) : ?>
                                    <tr>
                                        <td>Water Resistance</td>
                                        <td><?php echo $product_data['water_resistance']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if(isset($product_data['warranty']) && $product_data['warranty']) : ?>
                                    <tr>
                                        <td>Warranty</td>
                                        <td><?php echo $product_data['warranty']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if(isset($product_data['ideal_for']) && $product_data['ideal_for']) : ?>
                                    <tr>
                                        <td>Ideal For</td>
                                        <td><?php echo $product_data['ideal_for']?></td>
                                    </tr>
                                <?php endif; ?>

                                <?php 
                                if(isset($product_data['certifications']) && $product_data['certifications']) : ?>
                                    <tr>
                                        <td>Certifications</td>
                                        <td><?php echo $product_data['certifications']?></td>
                                    </tr>
                                <?php endif; ?>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product tab end -->

    <!-- you may also like start -->
     <?php 
        $q = $pdo->prepare("SELECT * FROM products WHERE category_id=? AND id!=?");
        $q->execute([$product_data['category_id'], $product_data['id']]);
        $r = $q->fetchAll(PDO::FETCH_ASSOC);
    if($q->rowCount()) :
    ?>
    <div class="featured-collection-section mt-100 home-section overflow-hidden">
        <div class="container">
            <div class="section-header">
                <h2 class="section-heading">You may also like</h2>
            </div>

            <div class="product-container position-relative">
                <div class="common-slider" data-slick='{
                "slidesToShow": 4, 
                "slidesToScroll": 1,
                "dots": false,
                "arrows": true,
                "responsive": [
                {
                    "breakpoint": 1281,
                    "settings": {
                    "slidesToShow": 3
                    }
                },
                {
                    "breakpoint": 768,
                    "settings": {
                    "slidesToShow": 2
                    }
                }
                ]
            }'>

            <?php 
                foreach($r as $row) {
                    ?>
                        <div class="new-item">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php?slug=<?php echo $row['slug']; ?>">
                                        <img class="primary-img" src="<?php echo ADMIN_URL; ?>images/<?php echo $row['featured_photo']; ?>" alt="">
                                    </a>

                                    <div class="product-card-action product-card-action-2">
                                        <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                    </div>

                                    <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                        <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                    </a>
                                </div>
                                <div class="product-card-details text-center">
                                    <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php?slug=<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a>
                                    </h3>
                                    <div class="product-card-price">
                                        <?php if($row['regular_price'] >= $row['sale_price'] && $row['sale_price'] != 0) : ?>
                                            <span class="card-price-regular">৳<?php echo $row['sale_price']?></span>
                                            <span class="card-price-compare text-decoration-line-through">৳<?php echo $row['regular_price']?></span>
                                        <?php else: ?>
                                            <span class="card-price-regular">৳<?php echo $row['regular_price']?></span>
                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
                    
                   
                </div>
                <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- you may also lik end -->
</main>

<!-- footer start -->
<?php include 'footer.php' ?>