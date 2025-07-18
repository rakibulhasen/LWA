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
            <li>About Us</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="about-page">
        <!-- about hero start -->
        <div class="about-hero mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="about-hero-content">
                            <h2 class="about-hero-title">We Provide Expert Service and aim to have a long term with you</h2>
                            <p class="about-hero-subtitle">We provide a full range of front end mechanical repairs for all makes and models of cars, no matter</p>
                            <ul class="about-hero-action p-0">
                                <li class="action-item d-flex">
                                    <div class="action-count">01</div>
                                    <div class="action-content">
                                        <h4 class="action-title"><a href="#">Get A Quote</a></h4>
                                        <p class="action-subtitle">Through True Rich Attended does no end it his mother since real had half every.</p>
                                    </div>
                                </li>
                                <li class="action-item d-flex">
                                    <div class="action-count">02</div>
                                    <div class="action-content">
                                        <h4 class="action-title"><a href="#">Book An Appointment</a></h4>
                                        <p class="action-subtitle">Through True Rich Attended does no end it his mother since real.</p>
                                    </div>
                                </li>
                                <li class="action-item d-flex">
                                    <div class="action-count">03</div>
                                    <div class="action-content">
                                        <h4 class="action-title"><a href="#">Get Your Service Done</a></h4>
                                        <p class="action-subtitle">Ecstatic unsatiable saw his giving Remain expense you position concluded.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="about-hero-img">
                            <img src="<?php echo BASE_URL; ?>assets/img/about/about-hero.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about hero end -->

        <!-- about promotion start -->
        <div class="promotional-area mt-100">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="promotional-item overlay-blue">
                        <img src="<?php echo BASE_URL; ?>assets/img/about/p1.jpg" alt="img">
                        <div class="promotional-absolute">
                            <div class="promotional-content text-center">
                                <h2 class="promo-title">Serve our customers and always deliver the customer service</h2>
                                <p class="promo-subtitle">We provide a full range of front end mechanical repairs for all makes and models of cars, no matter the cause. This includes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="promotional-item overlay-black">
                        <img src="<?php echo BASE_URL; ?>assets/img/about/p2.jpg" alt="img">
                        <div class="promotional-absolute">
                            <div class="promotional-content text-center">
                                <h2 class="promo-title">To be the world’s most eader in automotive business solutions.</h2>
                                <p class="promo-subtitle">We provide a full range of front end mechanical repairs for all makes and models of cars, no matter the cause. This includes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="promotional-item overlay-yellow">
                        <img src="<?php echo BASE_URL; ?>assets/img/about/p3.jpg" alt="img">
                        <div class="promotional-absolute">
                            <div class="promotional-content text-center">
                                <h2 class="promo-title">We value the service we provide and our loyal returning customers </h2>
                                <p class="promo-subtitle">We provide a full range of front end mechanical repairs for all makes and models of cars, no matter the cause. This includes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about promotion end -->

        <!-- about service start -->
        <div class="about-service pt-100">
            <div class="container">
                <div class="section-header about-service-header text-center">
                    <h2 class="section-heading">Services we provide to our valued customers</h2>
                </div>
                <div class="about-service-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12 py-4">
                            <div class="about-service-inner text-center">
                                <div class="about-service-icon">
                                    <i class="fas fa-vector-square" style="font-size: 24px;"></i>
                                </div>
                                <div class="about-service-content">
                                    <h4 class="about-service-title">Convenient Service</h4>
                                    <p class="about-service-subtitle">Through True Rich Attended does no end it his mother since real had half every him end it his mother</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 py-4">
                            <div class="about-service-inner text-center">
                                <div class="about-service-icon">
                                    <i class="fas fa-user-cog" style="font-size: 24px;"></i>
                                </div>
                                <div class="about-service-content">
                                    <h4 class="about-service-title">Expert Mechanics</h4>
                                    <p class="about-service-subtitle">Through True Rich Attended does no end it his mother since real had half every him end it his mother</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 py-4">
                            <div class="about-service-inner text-center">
                                <div class="about-service-icon">
                                    <i class="fas fa-hand-holding-usd" style="font-size: 24px;"></i>
                                </div>
                                <div class="about-service-content">
                                    <h4 class="about-service-title">Transparent Pricing</h4>
                                    <p class="about-service-subtitle">Through True Rich Attended does no end it his mother since real had half every him end it his mother</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about service end -->
    </div>            
</main>

<?php include 'footer.php' ?>