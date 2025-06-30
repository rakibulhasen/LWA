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
            <li>Blog</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="blog-page mt-100">
        <div class="blog-page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-1.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Decor</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Pure is the most furniture.
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-2.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Furniture</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Minimalism in your room.
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-3.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Kitchen</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Build up your kitchen.
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-4.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Furniture</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Pure is the most furniture.
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-5.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Furniture</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Minimalism in your room.
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-6.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Furniture</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Build up your kitchen.
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-7.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Furniture</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Pure is the most furniture.
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-8.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Furniture</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Minimalism in your room.
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="article-card bg-transparent p-0 shadow-none">
                            <a class="article-card-img-wrapper" href="<?php echo BASE_URL; ?>post.php">
                                <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-9.jpg" alt="img"
                                    class="article-card-img rounded">
                                <span class="article-tag article-tag-absolute rounded">Furniture</span>
                            </a>
                            <p class="article-card-published text_12 d-flex align-items-center">
                                <span class="article-date d-flex align-items-center">
                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                    <span class="ms-2">30 December, 2022</span>
                                </span>
                                <span class="article-author d-flex align-items-center ms-4">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                            </p>
                            <h2 class="article-card-heading heading_18">
                                <a class="heading_18" href="<?php echo BASE_URL; ?>post.php">
                                    Build up your kitchen.
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="pagination justify-content-center mt-100">
                    <nav>
                        <ul class="pagination m-0 d-flex align-items-center">
                            <li class="item disabled">
                                <a class="link">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="item"><a class="link" href="#">1</a></li>
                            <li class="item active"><a class="link" href="#">2</a></li>
                            <li class="item"><a class="link" href="#">3</a></li>
                            <li class="item"><a class="link" href="#">4</a></li>
                            <li class="item">
                                <a class="link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>            
    </div>            
</main>

        <!-- footer start -->
        <?php include 'footer.php' ?>