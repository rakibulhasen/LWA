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

<main id="MainContent" class="content-for-layout">

<!-- slideshow start -->
<div class="slideshow-section position-relative">
    <div class="slideshow-active activate-slider" data-slick='{
        "slidesToShow": 1, 
        "slidesToScroll": 1, 
        "dots": true,
        "arrows": true,
        "responsive": [
            {
                "breakpoint": 768,
                "settings": {
                    "arrows": false
                }
            }
        ]
    }'>
        <div class="slide-item slide-item-bag position-relative">
            <img class="slide-img d-none d-md-block" src="<?php echo BASE_URL; ?>assets/img/slideshow/b1.jpg" alt="slide-1">
            <img class="slide-img d-md-none" src="<?php echo BASE_URL; ?>assets/img/slideshow/b1-m.jpg" alt="slide-1">
            <div class="content-absolute content-slide">
                <div class="container height-inherit d-flex align-items-center justify-content-end">
                    <div class="content-box slide-content py-4">
                        <p class="slide-text heading_24 animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp">
                            Top Branded
                        </p>
                        <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp">
                            Best Bags 2022
                        </h2>
                        <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                            href="<?php echo BASE_URL; ?>product.php"
                            data-animation="animate__animated animate__fadeInUp">SHOP
                            NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item position-relative">
            <img class="slide-img d-none d-md-block" src="<?php echo BASE_URL; ?>assets/img/slideshow/b2.jpg" alt="slide-2">
            <img class="slide-img d-md-none" src="<?php echo BASE_URL; ?>assets/img/slideshow/b2-m.jpg" alt="slide-2">
            <div class="content-absolute content-slide">
                <div class="container height-inherit d-flex align-items-center">
                    <div class="content-box slide-content py-4">
                        <p class="slide-text heading_24 animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp">
                            Top Branded
                        </p>
                        <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp">
                            Best Bags 2022
                        </h2>
                        <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                            href="<?php echo BASE_URL; ?>product.php"
                            data-animation="animate__animated animate__fadeInUp">SHOP
                            NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item position-relative">
            <img class="slide-img d-none d-md-block" src="<?php echo BASE_URL; ?>assets/img/slideshow/b3.jpg" alt="slide-3">
            <img class="slide-img d-md-none" src="<?php echo BASE_URL; ?>assets/img/slideshow/b3-m.jpg" alt="slide-3">
            <div class="content-absolute content-slide">
                <div class="container height-inherit d-flex align-items-center justify-content-end">
                    <div class="content-box slide-content py-4">
                        <p class="slide-text heading_24 animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp">
                            Top Branded
                        </p>
                        <h2 class="slide-heading heading_72 animate__animated animate__fadeInUp"
                            data-animation="animate__animated animate__fadeInUp">
                            Best Bags 2022
                        </h2>
                        <a class="btn-primary slide-btn animate__animated animate__fadeInUp"
                            href="<?php echo BASE_URL; ?>product.php"
                            data-animation="animate__animated animate__fadeInUp">SHOP
                            NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="activate-arrows"></div>
    <div class="activate-dots dot-tools"></div>
</div>
<!-- slideshow end -->



<!-- banner start -->
<div class="banner-section mt-100 overflow-hidden">
    <div class="banner-section-inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <a class="banner-item position-relative rounded" href="<?php echo BASE_URL; ?>product.php">
                        <img class="banner-img" src="<?php echo BASE_URL; ?>assets/img/banner/bag-1.jpg" alt="banner-1">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex align-items-center">
                                <div class="content-box banner-content p-4">
                                    <p class="heading_18 mb-3">Mini Backpack</p>
                                    <h2 class="heading_34">25% off on <br>all bags</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <a class="banner-item position-relative rounded" href="<?php echo BASE_URL; ?>product.php">
                        <img class="banner-img" src="<?php echo BASE_URL; ?>assets/img/banner/bag-2.jpg" alt="banner-2">
                        <div class="content-absolute content-slide">
                            <div class="container height-inherit d-flex align-items-center">
                                <div class="content-box banner-content p-4">
                                    <p class="heading_18 mb-3">New Year Sell</p>
                                    <h2 class="heading_34">25% off <br>for women</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- collection start -->
<div class="featured-collection mt-100 overflow-hidden">
    <div class="collection-tab-inner">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-heading">Popular Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-6">
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
                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">nike legend stripe</a></h3>
                            <div class="product-card-price">
                                <span class="card-price-regular">৳529</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="product-card">
                        <div class="product-card-img">
                            <a class="hover-switch" href="<?php echo BASE_URL; ?>product.php">
                                <img class="primary-img" src="<?php echo BASE_URL; ?>assets/img/products/bags/5.jpg"
                                    alt="product-img">
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
                <div class="col-lg-3 col-md-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-6">
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
                            <h3 class="product-card-title"><a href="<?php echo BASE_URL; ?>product.php">women large
                                    bag</a>
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
</div>
<!-- collection end -->





<div class="section-header text-center mt_100 mb_20">
    <h2 class="section-heading">Shop By Category</h2>
</div>
<div class="blog-page>
    <div class="blog-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="article-card bg-transparent p-0 shadow-none">
                        <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                            <img src="<?php echo BASE_URL; ?>assets/img/instagram/bag1.jpg" alt="" class="article-card-img rounded">
                        </a>
                        <h2 class="article-card-heading heading_18 text-center">
                            <a class="heading_18" href="<?php echo BASE_URL; ?>shop.php">
                                Women Bag
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="article-card bg-transparent p-0 shadow-none">
                        <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                            <img src="<?php echo BASE_URL; ?>assets/img/instagram/bag2.jpg" alt="" class="article-card-img rounded">
                        </a>
                        <h2 class="article-card-heading heading_18 text-center">
                            <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                Man Bag
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="article-card bg-transparent p-0 shadow-none">
                        <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                            <img src="<?php echo BASE_URL; ?>assets/img/instagram/bag3.jpg" alt="" class="article-card-img rounded">
                        </a>
                        <h2 class="article-card-heading heading_18 text-center">
                            <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                Travel Bag
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="article-card bg-transparent p-0 shadow-none">
                        <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                            <img src="<?php echo BASE_URL; ?>assets/img/instagram/bag4.jpg" alt="" class="article-card-img rounded">
                        </a>
                        <h2 class="article-card-heading heading_18 text-center">
                            <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                Children Bag
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- latest blog start -->
<div class="latest-blog-section bg-pink mt-100 pt-100 pb-100 overflow-hidden home-section">
    <div class="latest-blog-inner">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-heading">Latest blogs</h2>
            </div>
            <div class="article-card-container position-relative">
                <div class="common-slider" data-slick='{
                    "slidesToShow": 3, 
                    "slidesToScroll": 1,
                    "dots": false,
                    "arrows": true,
                    "responsive": [
                        {
                        "breakpoint": 1281,
                        "settings": {
                            "slidesToShow": 2
                        }
                        },
                        {
                        "breakpoint": 602,
                        "settings": {
                            "slidesToShow": 1
                        }
                        }
                    ]
                }'>
                    <div class="article-slick-item">
                        <div class="article-card">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/bag-1.jpg" alt="" class="article-card-img rounded">
                            </a>
                            <p class="article-card-published text_12">30 July 2022</p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    The fairycore trend is a 2022 fashion hit as fairies.
                                </a>
                            </h2>
                            <a class="article-card-read-more text_14 link-underline" href="<?php echo BASE_URL; ?>post.php">Read More</a>
                        </div>
                    </div>
                    <div class="article-slick-item">
                        <div class="article-card">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/bag-2.jpg" alt="" class="article-card-img rounded">
                            </a>
                            <p class="article-card-published text_12">30 July 2022</p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    TOP 10 most fahionable ladies bag on super sale!
                                </a>
                            </h2>
                            <a class="article-card-read-more text_14 link-underline" href="<?php echo BASE_URL; ?>post.php">Read More</a>
                        </div>
                    </div>
                    <div class="article-slick-item">
                        <div class="article-card">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/bag-3.jpg" alt="" class="article-card-img rounded">
                            </a>
                            <p class="article-card-published text_12">30 July 2022</p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Polish fashion, eco products and the national art seence.
                                </a>
                            </h2>
                            <a class="article-card-read-more text_14 link-underline"
                                href="<?php echo BASE_URL; ?>post.php">Read
                                More</a>
                        </div>
                    </div>
                    <div class="article-slick-item">
                        <div class="article-card">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/bag-2.jpg" alt="" class="article-card-img rounded">
                            </a>
                            <p class="article-card-published text_12">30 July 2022</p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Polish fashion, eco products and the national art seence.
                                </a>
                            </h2>
                            <a class="article-card-read-more text_14 link-underline"
                                href="<?php echo BASE_URL; ?>post.php">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
            </div>
        </div>
    </div>
</div>
<!-- latest blog end -->


<!-- faq start -->
<div class="faq-section mt-100 overflow-hidden">
    <div class="faq-inner">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-heading">Frequently Asked Question</h2>
                <p class="section-subheading">All your questions about Axion answered </p>
            </div>
            <div class="faq-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq1">
                                Is Bisum a safe investment?
                                <span class="faq-heading-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq2">
                                How do I set up a crypto wallet?
                                <span class="faq-heading-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq3">
                                Where and how do I buy Bisum?
                                <span class="faq-heading-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq4">
                                What often will results be reported?
                                <span class="faq-heading-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq5">
                                How can I get support?
                                <span class="faq-heading-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="faq-item rounded">
                            <h2 class="faq-heading heading_18 collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#faq6">
                                Is Axion available on a major Product exchange?
                                <span class="faq-heading-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse">
                                <p class="faq-body text_14">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                    Sit repellat
                                    quod facere illo esse cumque inventore veniam necessitatibus totam
                                    repudiandae. Hic rerum animi modi sed?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all text-center">
                    <a class="btn-primary" href="<?php echo BASE_URL; ?>faq.php">SEE MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq end -->

<!-- newsletter start -->
<div class="newsletter-section mt-100 overflow-hidden">
    <div class="newsletter-inner">
        <div class="container">
            <div class="newsletter-container bg-pink">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="newsletter-content newsltter-content-1">
                            <div class="newsletter-header">
                                <p class="newsletter-subheading colored-text heading_24">NewsLetter</p>
                                <h2 class="newsletter-heading heading_42">Subscribe to our newsletter</h2>
                            </div>
                            <div class="newsletter-form-wrapper">
                                <form action="#" class="newsletter-form d-flex align-items-center rounded">
                                    <input class="newsletter-input bg-transparent border-0" type="email"
                                        placeholder="Enter your e-mail" autocomplete="off">
                                    <button class="newsletter-btn rounded" type="submit">
                                        <i class="fas fa-arrow-right text-white"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="newsletter-image">
                            <img src="<?php echo BASE_URL; ?>assets/img/newsletter/1.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newsletter end -->


<!-- brand logo start -->
<div class="brand-logo-section mt-100">
    <div class="brand-logo-inner">
        <div class="container">
            <div class="brand-logo-container overflow-hidden">
                <div class="scroll-horizontal row align-items-center flex-nowrap">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <a href="<?php echo BASE_URL; ?>index.php" class="brand-logo d-flex align-items-center justify-content-center">
                            <img src="<?php echo BASE_URL; ?>assets/img/brand/1.png" alt="img">
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <a href="<?php echo BASE_URL; ?>index.php" class="brand-logo d-flex align-items-center justify-content-center">
                            <img src="<?php echo BASE_URL; ?>assets/img/brand/2.png" alt="img">
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <a href="<?php echo BASE_URL; ?>index.php" class="brand-logo d-flex align-items-center justify-content-center">
                            <img src="<?php echo BASE_URL; ?>assets/img/brand/3.png" alt="img">
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <a href="<?php echo BASE_URL; ?>index.php" class="brand-logo d-flex align-items-center justify-content-center">
                            <img src="<?php echo BASE_URL; ?>assets/img/brand/4.png" alt="img">
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <a href="<?php echo BASE_URL; ?>index.php" class="brand-logo d-flex align-items-center justify-content-center">
                            <img src="<?php echo BASE_URL; ?>assets/img/brand/5.png" alt="img">
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <a href="<?php echo BASE_URL; ?>index.php" class="brand-logo d-flex align-items-center justify-content-center">
                            <img src="<?php echo BASE_URL; ?>assets/img/brand/6.png" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand logo end -->
</main>

<?php include 'footer.php' ?>