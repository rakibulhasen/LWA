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
            <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li>Bag</li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li>Accesories Lather Bag</li>
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
                                    <a href="<?php echo BASE_URL; ?>assets/img/products/bags/39.jpg" data-fancybox="gallery">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/39.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="img-large-wrapper">
                                    <a href="<?php echo BASE_URL; ?>assets/img/products/bags/38.jpg" data-fancybox="gallery">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/38.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="img-large-wrapper">
                                    <a href="<?php echo BASE_URL; ?>assets/img/products/bags/37.jpg" data-fancybox="gallery">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/37.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="img-large-wrapper">
                                    <a href="<?php echo BASE_URL; ?>assets/img/products/bags/36.jpg" data-fancybox="gallery">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/36.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="img-large-wrapper">
                                    <a href="<?php echo BASE_URL; ?>assets/img/products/bags/34.jpg" data-fancybox="gallery">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/34.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="img-large-wrapper">
                                    <a href="<?php echo BASE_URL; ?>assets/img/products/bags/30.jpg" data-fancybox="gallery">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/30.jpg" alt="img">
                                    </a>
                                </div>
                                <div class="img-large-wrapper">
                                    <a href="<?php echo BASE_URL; ?>assets/img/products/bags/32.jpg" data-fancybox="gallery">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/32.jpg" alt="img">
                                    </a>
                                </div>
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
                                <div>
                                    <div class="img-thumb-wrapper">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/39.jpg" alt="img">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-thumb-wrapper">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/38.jpg" alt="img">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-thumb-wrapper">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/37.jpg" alt="img">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-thumb-wrapper">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/36.jpg" alt="img">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-thumb-wrapper">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/34.jpg" alt="img">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-thumb-wrapper">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/30.jpg" alt="img">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-thumb-wrapper">
                                        <img src="<?php echo BASE_URL; ?>assets/img/products/bags/32.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="activate-arrows show-arrows-always arrows-white d-none d-lg-flex justify-content-between mt-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-details ps-lg-4">
                        <div class="mb-3"><span class="product-availability">In Stock</span></div>
                        <h2 class="product-title mb-3">Accesories Lather bag</h2>
                        
                        <div class="product-price-wrapper mb-4">
                            <span class="product-price regular-price">৳24.00</span>
                            <del class="product-price compare-price ms-2">৳32.00</del>
                        </div>

                        <div class="product-vendor product-meta mb-3">
                            <strong class="label">Category:</strong> Women Bag
                        </div>

                        <div class="product-short-description">
                            <p>
                                Volumus aliquando sea te. Per partem perfecto appellantur ei. Legere volumus pri ne. Eu cum case etiam, dicat solet omittam ei ius. Usu novum accumsan ut, cu honestatis definitiones vim, vis rebum atqui saperet cu. At consul persius vel, id pri dignissim ullamcorper, duo cu invidunt mediocrem.
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
                                <p>
                                    Lorem ipsum dolor sit amet, vidit senserit pri ut, dolor eripuit detraxit et qui, mei duis graeco inermis in. Eligendi verterem voluptatibus ut vel. Vim periculis abhorreant constituto eu, aliquid laboramus ne per. An scripta erroribus cum, ne zril veritus pro, ne vis saepe quaeque ceteros.
                                </p>
                                <p>
                                    Ex cum impetus vidisse labitur, omnis noluisse ut pro. Indoctum patrioque assentior qui eu. An veri postulant honestatis pro, cu nihil saepe dicant sea, usu paulo dicunt inimicus ei. Exerci aeterno intellegam eu vix, eius admodum ne sed. Antiopam laboramus constituam est eu, vim affert oratio voluptaria in. Ex duo copiosae inimicus, ut est sonet quaeque.
                                </p>
                                <p>
                                    Id eam vitae soluta explicari, quo delectus reprimique complectitur ad. Quot debet quodsi ea vis, adolescens definiebas disputando nec et. Eam graecis accusam assentior in. Nam amet iriure eleifend at, cum soleat nominati an, nam mentitum percipit ut. Dicta iuvaret id sed, an mei graeci dissentias. Facer minim inciderint sit at, ad qui possim patrioque sententiae.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pspecification" class="tab-pane fade">
                    <div class="desc-content">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>SKU</td>
                                    <td>102</td>
                                </tr>
                                <tr>
                                    <td>Size</td>
                                    <td>20 Inch</td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>Red, Blue, White</td>
                                </tr>
                                <tr>
                                    <td>Pattern</td>
                                    <td>Solid Color + Reflective Stripes</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>30 Liters</td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td>1.8 lbs (0.8 kg)</td>
                                </tr>
                                <tr>
                                    <td>Outer Fabric</td>
                                    <td>600D Polyester (Recycled)</td>
                                </tr>
                                <tr>
                                    <td>Lining</td>
                                    <td>Nylon (Water-Resistant Coating)</td>
                                </tr>
                                <tr>
                                    <td>Zippers</td>
                                    <td>YKK® Anti-Theft Zippers</td>
                                </tr>
                                <tr>
                                    <td>Hardware</td>
                                    <td>Rust-Proof Metal Buckles</td>
                                </tr>
                                <tr>
                                    <td>Pockets</td>
                                    <td>5 Total (Including Hidden RFID Pocket)</td>
                                </tr>
                                <tr>
                                    <td>Comfort</td>
                                    <td>Padded Shoulder Straps + Breathable Back</td>
                                </tr>
                                <tr>
                                    <td>Water Resistance</td>
                                    <td>Light Rain-Resistant (Not Submersible)</td>
                                </tr>
                                <tr>
                                    <td>Warranty</td>
                                    <td>1-Year Manufacturing Defects</td>
                                </tr>
                                <tr>
                                    <td>Ideal For</td>
                                    <td>Travel, Hiking, Work Commute</td>
                                </tr>
                                <tr>
                                    <td>Certifications</td>
                                    <td>OEKO-TEX® Certified, PETA-Approved Vegan</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product tab end -->
    
    <!-- you may also like start -->
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
                <div class="activate-arrows show-arrows-always article-arrows arrows-white"></div>
            </div>
        </div>
    </div>
    <!-- you may also lik end -->
</main>

        <!-- footer start -->
        <?php include 'footer.php' ?>