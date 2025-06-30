<?php include 'header.php' ?>

<!-- header end -->

<!-- breadcrumb start -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled d-flex align-items-center m-0">
            <li><a href="">Home</a></li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li>Products</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<main id="MainContent" class="content-for-layout">
    <div class="collection mt-100">
        <div class="container">
            <div class="row flex-row-reverse">

            <?php 

                // if(!isset($_GET['category_id']) || !empty($_GET['category_id']) || !isset($_GET['name']) || !empty($_GET['name']) || !isset($_GET['availability']) || !empty($_GET['availability']) || !isset($_GET['min_price']) || !empty($_GET['min_price']) || !isset($_GET['max_price'])  || !empty($_GET['max_price']) ) {
                //     header('Location: ' . BASE_URL . 'shop.php?name=&category_id=&availability=&min_price=&max_price=');
                // }

                
                if(isset($_GET['category_id']) && $_GET['category_id'] != '') {
                    $c_category = 'AND category_id = ' .$_GET['category_id'];
                }else {
                    $c_category = '';
                }

                if(isset($_GET['name']) && $_GET['name'] != '') {
                    $c_name = " AND name LIKE '%". $_GET['name'] ."%'";
                } else {
                    $c_name = '';
                }

                if(isset($_GET['availability'])) {
                    if($_GET['availability'] == 1) {
                        $c_stock = " AND quantity >= 1";
                    } else if ($_GET['availability'] == 0){
                        $c_stock = " AND quantity < 1";
                    } else {
                        $c_stock = '';
                    }
                } else {
                    $c_stock = '';
                }

                // if(isset($_GET['min_price']) && $_GET['min_price'] != '') {
                //     $c_min = " AND sale_price >= ". $_GET['min_price'];
                // }else {
                //     $c_min = '';
                // }

                if((isset($_GET['min_price']) && $_GET['min_price'] != '') || (isset($_GET['max_price']) && $_GET['max_price'] != '')) {
                    $p_query = '';
                    if(isset($_GET['min_price']) && $_GET['min_price'] != '') {
                        if(isset($_GET['max_price']) && $_GET['max_price'] != '') {
                            $p_query = " AND sale_price  BETWEEN ". $_GET['min_price'] . " AND ". $_GET['max_price'];
                        } else {
                            $p_query = " AND sale_price >= ". $_GET['min_price'];
                        }
                    }

                    if(isset($_GET['max_price']) && $_GET['max_price'] != '') {
                        if(isset($_GET['min_price']) && $_GET['min_price'] != '') {
                            $p_query = " AND sale_price  BETWEEN ". $_GET['min_price'] . " AND ". $_GET['max_price'];
                        } else {
                            $p_query = " AND sale_price <= ". $_GET['max_price'];
                        }
                    }
                    
                }else {
                    $p_query = '';
                }

                // echo $category_id_by_filter;
                $per_page = 6;
                $query = $c_category . $c_name . $c_stock . $p_query;
                $stmt = $pdo->prepare("SELECT * FROM products WHERE 1=1 " . $query);
                $stmt->execute();

                
                
                $row_count = $stmt->rowCount();
                $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();
                $pages = ceil($row_count / $per_page);
                $arr_p = [];
            ?>

           
            

                <!-- product area start -->
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                        <div class="collection-title-wrap d-flex align-items-end">
                            <h2 class="collection-title heading_24 mb-0">All products</h2>
                            <p class="collection-counter text_16 mb-0 ms-2">(<?php echo $count; ?> items)</p>
                        </div>
                        <div class="filter-sorting">
                            <div class="filter-drawer-trigger mobile-filter d-flex align-items-center d-lg-none">
                                <span class="mobile-filter-icon me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-filter">
                                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                    </svg>
                                </span>
                                <span class="mobile-filter-heading">Filter and Sorting</span>
                            </div>
                        </div>
                    </div>
                    <div class="collection-product-container">


                    <?php 
                        
                        if(!isset($_REQUEST['p'])){
                            $start = 1;
                        }else{
                            $start = $per_page * ($_REQUEST['p'] - 1) + 1;
                        }
                        $j = 0;
                        $k = 0;
                        foreach($r as $ro) {
                            $j++;
                            if($j >= $start) {
                                $k++;
                                if($k > $per_page) {
                                    continue;
                                }
                                $arr_p[] = $ro['id'];
                            }
                            // echo $r['id'];
                        }   
                        ?>
                        <div class="row">



                            


                        <?php 
                        foreach($r as $product) {
                            if(in_array($product['id'], $arr_p)):
                            ?>
                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php?slug=<?php echo $product['slug'] ?>">
                                                <img class="primary-img" src="<?php echo ADMIN_URL; ?>images/<?php echo $product['featured_photo'] ?>" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php?slug=<?php echo $product['slug'] ?>"><?php echo $product['name'] ?></a>
                                            </h3>
                                            <div class="product-card-price">
                                                <?php if($product['regular_price'] > $product['sale_price'] && $product['sale_price'] != 0 ) : ?>
                                                    <span class="card-price-regular">৳<?php echo $product['sale_price']?></span>
                                                    <span class="card-price-compare text-decoration-line-through">৳<?php echo $product['regular_price']?></span>
                                                <?php else: ?>
                                                    <span class="card-price-regular">৳<?php echo $product['regular_price']?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endif;
                        }
                        ?>

                        </div>
                    </div>


                    <?php if($per_page < $row_count): ?>
                        <?php if(!isset($_REQUEST['p'])) $_REQUEST['p'] = 1; ?>
                    <div class="pagination justify-content-center mt-100">
                        <nav>
                            <ul class="pagination m-0 d-flex align-items-center">
                                <li class="item">
                                    <?php 
                                    
                                    $URL_PARAM = BASE_URL .'shop.php?name='.$_GET['name'].'&category_id='.$_GET['category_id'].'&availability='.$_GET['availability'].'&min_price='.$_GET['min_price'].'&max_price='.$_GET['max_price'].'' ;
                           
                                    if(isset($_REQUEST['p'])) {
                                        if($_REQUEST['p'] == 1) {
                                            ?>
                                            <a class="link" href="Javascript:void">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-left">
                                                    <polyline points="15 18 9 12 15 6"></polyline>
                                                </svg>
                                            </a>
                                            <?php
                                        } else {
                                            ?>
                                            <a class="link active" href="<?php echo $URL_PARAM;  ?>&p=<?php echo $_REQUEST['p'] - 1 ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-left">
                                                    <polyline points="15 18 9 12 15 6"></polyline>
                                                </svg>
                                            </a>
                                            <?php
                                        }
                                    } else { 
                                        ?>
                                        <a class="link" href="Javascript:void">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-left">
                                                    <polyline points="15 18 9 12 15 6"></polyline>
                                                </svg>
                                            </a>
                                        <?php
                                        
                                    }
                                    ?>
                                </li>
                                <?php 
                                for($i = 1; $i <= $pages; $i++) {
                                    $active = '';
                                    $link = $URL_PARAM."&p={$i}";
                                    
                                    if($_REQUEST['p'] == $i) {
                                        $active = ' active';
                                        $link = "Javascript:void";
                                    } 
                                    
                                    
                                    echo '<li class="item'. $active .' ">'."<a class='link' href='{$link}'>{$i}</a>".'</li>';
                                }

                                ?>
                              
                                <li class="item">
                                     <?php 
                                    if(isset($_REQUEST['p'])) {
                                        if($_REQUEST['p'] == $pages) {
                                            ?>
                                            <a class="link" href="Javascript:void">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-right">
                                                        <polyline points="9 18 15 12 9 6"></polyline>
                                                 </svg>
                                            </a>
                                            <?php
                                        } else {
                                            ?>
                                            <a class="link active" href="<?php echo BASE_URL ?>shop.php?p=<?php echo $_REQUEST['p'] + 1 ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-right">
                                                        <polyline points="9 18 15 12 9 6"></polyline>
                                                 </svg>
                                            </a>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <a class="link" href="Javascript:void">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-right">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                    
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <?php endif; ?>


                </div>
                <!-- product area end -->

                <!-- sidebar start -->
                <div class="col-lg-3 col-md-12 col-12">
                    <form action="http://localhost:8080/LWR/class_12/shop.php" method="get">
                        <div class="collection-filter filter-drawer">
                            <div class="filter-widget d-lg-none d-flex align-items-center justify-content-between">
                                <h5 class="heading_24">Filter By</h4>
                                    <button type="button" class="btn-close text-reset filter-drawer-trigger d-lg-none"></button>
                            </div>

                            <div class="filter-widget d-lg-none">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-mobile-sort">
                                    <span>
                                        <span class="sorting-title me-2">Sort by:</span>
                                        <span class="active-sorting">Featured</span>
                                    </span>
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom">
                                    Search
                                </div>
                                <div class="">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="text"  name="name" class="form-control" placeholder="Search" value="<?php echo (isset($_GET['name']) && $_GET['name'] != '')  ? $_GET['name'] : '' ?>" />
                                            </label>
                                        </li>
                                        
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-collection">
                                    Categories
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                          </svg>
                                    </span>
                                </div>
                                <div id="filter-collection" class="accordion-collapse collapse show">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                                <label class="filter-label">
                                                    <input type="checkbox" name="category_id" value=""   <?php if(isset($_GET['category_id'])){if($_GET['category_id'] == '') {echo 'checked';}} else { echo 'checked'; } ?>/>
                                                    <span class="filter-checkbox rounded me-2"></span>
                                                    All Categories
                                                </label>
                                            </li>
                                        <?php

                                        $q = $pdo->prepare("SELECT * FROM categories LIMIT 4");
                                        $q->execute();
                                        $result = $q->fetchAll(PDO::FETCH_ASSOC);

                                        

                                        foreach ($result as $row) {
                                           
                                        ?>

                                            <li class="filter-item">
                                                <label class="filter-label">
                                                    <input type="checkbox" name="category_id" value="<?php echo $row['id'] ?>"  <?php echo isset($_REQUEST['category_id']) ? (($_REQUEST['category_id'] == $row['id']) ? 'checked' : '') : '' ?> />
                                                    <span class="filter-checkbox rounded me-2"></span>
                                                    <?php echo $row['name'] ?>
                                                </label>
                                            </li>

                                        <?php
                                        }

                                        ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-availability">
                                    Availability
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-availability" class="accordion-collapse collapse show">
                                    <ul class="filter-lists list-unstyled mb-0">
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox" name="availability" value="1" <?php echo (isset($_GET['availability']) && $_GET['availability'] == 1) ? 'checked' : '' ?> />
                                                <span class="filter-checkbox rounded me-2"></span>
                                                <span class="filter-text">In Stock</span>
                                            </label>
                                        </li>
                                        <li class="filter-item">
                                            <label class="filter-label">
                                                <input type="checkbox" name="availability" value="0" <?php echo (isset($_GET['availability']) && $_GET['availability'] == 0) ? 'checked' : '' ?> />
                                                <span class="filter-checkbox rounded me-2"></span>
                                                Out of Stock
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                    data-bs-toggle="collapse" data-bs-target="#filter-price">
                                    Price
                                    <span class="faq-heading-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div id="filter-price" class="accordion-collapse collapse show">
                                    <div class="filter-price d-flex align-items-center justify-content-between">
                                        <div class="filter-field">
                                            <input class="field-input" name="min_price"  type="number" placeholder="৳0" min="0"
                                                max="2000.00" value="<?php if (isset($_GET['min_price']) && $_GET['min_price'] != '') {echo $_GET['min_price'];} ?>">
                                        </div>
                                        <div class="filter-separator px-3">To</div>
                                        <div class="filter-field">
                                            <input class="field-input" name="max_price" type="number" min="0" placeholder="৳595.00"
                                                max="2000.00" value="<?php if (isset($_GET['max_price']) && $_GET['max_price'] != '') {echo $_GET['max_price'];} ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <!-- Add this script at the end of your HTML -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Define all filter groups you want this behavior applied to
                                    const filterGroups = [
                                        '#filter-vendor',
                                        '#filter-price',
                                        '#filter-collection',
                                        '#filter-availability'
                                    ];

                                    // Loop through each group and apply the radio-like behavior
                                    filterGroups.forEach(group => {
                                        const checkboxes = document.querySelectorAll(`${group} input[type="checkbox"]`);

                                        checkboxes.forEach(checkbox => {
                                            checkbox.addEventListener('change', function() {
                                                if (this.checked) {
                                                    // Uncheck others in the same group
                                                    checkboxes.forEach(cb => {
                                                        if (cb !== this) cb.checked = false;
                                                    });
                                                }
                                            });
                                        });
                                    });
                                });
                            </script>




                        </div>
                    </form>
                </div>
                <!-- sidebar end -->
            </div>
        </div>
    </div>
</main>

<!-- footer start -->
<?php include 'footer.php' ?>