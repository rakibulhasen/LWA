<?php include 'header.php' ?>
    <div class="body-wrapper">


        <!-- announcement bar start -->
        <div class="announcement-bar bg-3 py-1 py-lg-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="announcement-call-wrapper">
                            <div class="announcement-call">
                                <a class="announcement-text text-white" href="tel:+1-078-2376">Call: +8801912721070</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="announcement-text-wrapper d-flex align-items-center justify-content-center">
                            
                        </div>
                    </div>
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="announcement-meta-wrapper d-flex align-items-center justify-content-end">
                            <div class="announcement-meta d-flex align-items-center">
                                <a class="announcement-login announcement-text text-white" href="<?php echo BASE_URL; ?>login.php">
                                    <i class="far fa-user"></i>
                                    <span>User Login</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- announcement bar end -->



        <!-- header start -->
        <header class="border-btm-black header-1">
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-4">
                            <div class="header-logo">
                                <a href="<?php echo BASE_URL; ?>index.php" class="logo-main">
                                    <img src="<?php echo BASE_URL; ?>assets/img/logo.png" loading="lazy" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-lg-block d-none">
                            <nav class="site-navigation">
                                <ul class="main-menu list-unstyled justify-content-center">
                                    <li class="menu-list-item nav-item active">
                                        <a class="nav-link" href="<?php echo BASE_URL; ?>index.php">Home</a>
                                    </li>
                                    <li class="menu-list-item nav-item">
                                        <a class="nav-link" href="<?php echo BASE_URL; ?>shop.php">Shop</a>
                                    </li>
                                    <li class="menu-list-item nav-item">
                                        <a class="nav-link" href="<?php echo BASE_URL; ?>blog.php">Blog</a>
                                    </li>
                                    <li class="menu-list-item nav-item has-dropdown">
                                        <div class="mega-menu-header">
                                            <a class="nav-link" href="<?php echo BASE_URL; ?>about-us.php">
                                                Pages
                                            </a>
                                            <span class="open-submenu">
                                                <i class="fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="submenu-transform submenu-transform-desktop">
                                            <ul class="submenu list-unstyled">
                                                <li class="menu-list-item nav-item-sub">
                                                    <a class="nav-link-sub nav-text-sub" href="<?php echo BASE_URL; ?>about-us.php">About Us</a>
                                                </li>
                                                <li class="menu-list-item nav-item-sub">
                                                    <a class="nav-link-sub nav-text-sub" href="<?php echo BASE_URL; ?>faq.php">FAQ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-list-item nav-item">
                                        <a class="nav-link" href="<?php echo BASE_URL; ?>contact.php">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 col-md-8 col-8">
                            <div class="header-action d-flex align-items-center justify-content-end">
                                <a class="header-action-item header-search pt_5" href="javascript:void(0)">
                                    <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a class="header-action-item header-cart ms-4" href="<?php echo BASE_URL; ?>cart.php">
                                    <svg class="icon icon-cart" width="24" height="26" viewBox="0 0 24 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 0.000183105C9.25391 0.000183105 7 2.25409 7 5.00018V6.00018H2.0625L2 6.93768L1 24.9377L0.9375 26.0002H23.0625L23 24.9377L22 6.93768L21.9375 6.00018H17V5.00018C17 2.25409 14.7461 0.000183105 12 0.000183105ZM12 2.00018C13.6562 2.00018 15 3.34393 15 5.00018V6.00018H9V5.00018C9 3.34393 10.3438 2.00018 12 2.00018ZM3.9375 8.00018H7V11.0002H9V8.00018H15V11.0002H17V8.00018H20.0625L20.9375 24.0002H3.0625L3.9375 8.00018Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a class="header-action-item header-hamburger ms-4 d-lg-none" href="#drawer-menu"
                                    data-bs-toggle="offcanvas">
                                    <svg class="icon icon-hamburger" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-wrapper">
                    <div class="container">
                        <form action="#" class="search-form d-flex align-items-center">
                            <button type="submit" class="search-submit bg-transparent pl-0 text-start">
                                <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                                        fill="black" />
                                </svg>
                            </button>
                            <div class="search-input mr-4">
                                <input type="text" placeholder="Search your products..." autocomplete="off">
                            </div>
                            <div class="search-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-close">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
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


                <!-- product area start -->
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="filter-sort-wrapper d-flex justify-content-between flex-wrap">
                        <div class="collection-title-wrap d-flex align-items-end">
                            <h2 class="collection-title heading_24 mb-0">All products</h2>
                            <p class="collection-counter text_16 mb-0 ms-2">(237 items)</p>
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
                        <div class="row">



                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/1.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">black backpack</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳1529</span>
                                                <span class="card-price-compare text-decoration-line-through">৳1759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/2.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">lady handbag</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳529</span>
                                                <span class="card-price-compare text-decoration-line-through">৳759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/3.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">men travel bag</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳529</span>
                                                <span class="card-price-compare text-decoration-line-through">৳759</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/4.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">nike legend
                                                    stripe</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳529</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/5.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">nike legend
                                                    stripe</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳529</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/6.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">nike legend
                                                    stripe</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳529</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/7.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">women vanity
                                                    bag</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳529</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/8.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">women large bag</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳529</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-6">
                                <div class="new-item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/8.jpg" alt="">
                                            </a>

                                            <div class="product-card-action product-card-action-2">
                                                <a href="#" class="addtocart-btn btn-primary">ADD TO CART</a>
                                            </div>

                                            <a href="wishlist.html" class="wishlist-btn card-wishlist">
                                                <i class="far fa-heart" style="color:#000;font-size:20px;"></i>
                                            </a>
                                        </div>
                                        <div class="product-card-details text-center">
                                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">women large bag</a>
                                            </h3>
                                            <div class="product-card-price">
                                                <span class="card-price-regular">৳529</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="pagination justify-content-center mt-100">
                        <nav>
                            <ul class="pagination m-0 d-flex align-items-center">
                                <li class="item disabled">
                                    <a class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-left">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg>
                                    </a>
                                </li>
                                <li class="item"><a class="link" href="#">1</a></li>
                                <li class="item active"><a class="link" href="#">2</a></li>
                                <li class="item"><a class="link" href="#">3</a></li>
                                <li class="item"><a class="link" href="#">4</a></li>
                                <li class="item">
                                    <a class="link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                </div>
                <!-- product area end -->

                <!-- sidebar start -->
                <div class="col-lg-3 col-md-12 col-12">
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
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">Womens Bag</span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Bottles
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Men's Shoe
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Toddler Dress
                                        </label>
                                    </li>
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
                                            <input type="checkbox" />
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">In Stock</span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" />
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
                                        <input class="field-input" type="number" placeholder="৳0" min="0"
                                            max="2000.00">
                                    </div>
                                    <div class="filter-separator px-3">To</div>
                                    <div class="filter-field">
                                        <input class="field-input" type="number" min="0" placeholder="৳595.00"
                                            max="2000.00">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom"
                                data-bs-toggle="collapse" data-bs-target="#filter-vendor">
                                Brand
                                <span class="faq-heading-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                            <div id="filter-vendor" class="accordion-collapse collapse show">
                                <ul class="filter-lists list-unstyled mb-0">
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" name="brand" value="Bynd">
                                            <span class="filter-checkbox rounded me-2"></span>
                                            <span class="filter-text">Bynd</span>
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" name="brand" value="Huemor">
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Huemor
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" name="brand" value="Hubspot">
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Hubspot
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" name="brand" value="Infosolutions">
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Infosolutions
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" name="brand" value="Ideo">
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Ideo
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" name="brand" value="Codal">
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Codal
                                        </label>
                                    </li>
                                    <li class="filter-item">
                                        <label class="filter-label">
                                            <input type="checkbox" name="brand" value="Salesforce">
                                            <span class="filter-checkbox rounded me-2"></span>
                                            Salesforce
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        
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
                </div>
                <!-- sidebar end -->
            </div>
        </div>
    </div>
</main>

        <!-- footer start -->
        <?php include 'footer.php' ?>