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
            <li>Blog Details</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="article-page mt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="article-rte">
                        <div class="article-img">
                            <img src="<?php echo BASE_URL; ?>assets/img/blog/furniture-9.jpg" alt="img">
                        </div>
                        <div class="article-meta">
                            <h2 class="article-title">Delivering What Consumers Really Value?</h2>
                            <div class="article-card-published text_14 d-flex align-items-center">
                                <span class="article-author d-flex align-items-center">
                                    <i class="far fa-user" style="font-size:16px;"></i>
                                    <span class="ms-2">Lara Joe</span>
                                </span>
                                <span class="article-separator mx-3">|</span>
                                <a href="" class="article-date d-flex align-items-center">
                                    <span class="icon-publish">
                                        <i class="far fa-comment-alt"></i>
                                    </span>
                                    <span class="ms-2">3 Comments</span>
                                </a>
                                <span class="article-separator mx-3 d-none d-sm-block">|</span>
                                <a href="<?php echo BASE_URL; ?>post.php" class="article-date d-none d-sm-flex align-items-center">
                                    <span class="icon-tag">
                                        <i class="fas fa-th-large"></i>
                                    </span>
                                    <span class="ms-2">Furniture</span>
                                </a>
                            </div>
                        </div>

                        <div class="article-content">
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice hand, organizations have the need for integrating in IT departments new technologies.</p>

                            <p>A wonderful serenity has taken possssion of my entire souing like these sweet mornng spring with my whole heart I am alone, and feel the charm of existenceths spot whch was create of souls like mineing am so happy my dear frend so absori bed in the exquste sens of mere.</p>
                                
                            <p>A wonderful serenity has taken posseson of my entire soung like these sweet mornngs spring enjoy with my whole heart I am alone and feel the charm of exstenceths spot whch was created ouls like mineing am so happy my dear frend so absoribed in the exquste sense of mere tranquil that neglect my talentsr I should bye ncapable of drawng and single stroke at the A wonderful se taken possesson of my entre souing like.</p>
                        </div>

                        <div class="next-prev-article mt-5 d-flex align-items-center justify-content-between">
                            <a href="<?php echo BASE_URL; ?>post.php" class="article-btn prev-article-btn mt-2">PREV ARTICLE</a>
                            <a href="<?php echo BASE_URL; ?>post.php" class="article-btn next-article-btn active mt-2">NEXT ARTICLE</a>
                        </div>

                        <div class="comments-section mt-100 home-section overflow-hidden">
                            <div class="section-header">
                                <h2 class="section-heading">Comments - 03</h2>
                            </div>
                            <div class="comments-area">
                                <div class="d-flex comments-item">
                                    <div class="comments-img">
                                        <img src="<?php echo BASE_URL; ?>assets/img/people/1.jpg" alt="img">
                                    </div>
                                    <div class="comments-main">
                                        <div class="comments-main-content">
                                            <div class="comments-meta">
                                                <h4 class="commentator-name">Ralph Edwards</h4>
                                                <div class="comments-date article-date d-flex align-items-center">
                                                    <span class="icon-publish">
                                                        <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                                    </span>
                                                    <span class="ms-2">30 December, 2022</span>
                                                </div>
                                                <p class="comments">The second Bag is a corner room with double windows. The Bag has fabulous spa new appliances, and a laundry area. Other features include rich herringbone floors.</p>
                                            </div>
                                            <button type="button" class="btn-reply bg-transparent d-flex align-items-center">
                                                <span class="btn-reply-icon me-2">
                                                    <i class="fas fa-reply-all"></i>
                                                </span>
                                                <span class="btn-reply-text">Reply</span>
                                            </button>
                                        </div>
                                        <div class="comments-replied">
                                            <div class="d-flex comments-item">
                                                <div class="comments-img">
                                                    <img src="<?php echo BASE_URL; ?>assets/img/people/2.jpg" alt="img">
                                                </div>
                                                <div class="comments-main">
                                                    <div class="comments-meta">
                                                        <h4 class="commentator-name">Marvin McKinney</h4>
                                                        <div class="comments-date article-date d-flex align-items-center">
                                                            <span class="icon-publish">
                                                                <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                                            </span>
                                                            <span class="ms-2">30 December, 2022</span>
                                                        </div>
                                                        <p class="comments">The second Bag is a corner room with double windows. The Bag has fabulous spa new appliances, and a laundry area. Other features include rich herringbone floors.</p>
                                                    </div>
                                                    <button type="button" class="btn-reply bg-transparent d-flex align-items-center">
                                                        <span class="btn-reply-icon me-2">
                                                            <i class="fas fa-reply-all"></i>
                                                        </span>
                                                        <span class="btn-reply-text">Reply</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex comments-item">
                                    <div class="comments-img">
                                        <img src="<?php echo BASE_URL; ?>assets/img/people/3.jpg" alt="img">
                                    </div>
                                    <div class="comments-main">
                                        <div class="comments-main-content">
                                            <div class="comments-meta">
                                                <h4 class="commentator-name">Albert Flores</h4>
                                                <div class="comments-date article-date d-flex align-items-center">
                                                    <span class="icon-publish">
                                                        <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                                    </span>
                                                    <span class="ms-2">30 December, 2022</span>
                                                </div>
                                                <p class="comments">The second Bag is a corner room with double windows. The Bag has fabulous spa new appliances, and a laundry area. Other features include rich herringbone floors.</p>
                                            </div>
                                            <button type="button" class="btn-reply bg-transparent d-flex align-items-center">
                                                <span class="btn-reply-icon me-2">
                                                    <i class="fas fa-reply-all"></i>
                                                </span>
                                                <span class="btn-reply-text">Reply</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-form-area">
                                <div class="form-header">
                                    <h4 class="form-title">Leave A Reply</h4>
                                    <p class="form-subtitle">All fields marked with an asterisk (*) are required</p>
                                </div>
                                <form action="#" class="comment-form">
                                    <div class="name-email-field d-flex justify-content-between">
                                        <div class="field-item name-field">
                                            <input type="text" placeholder="Name *" required>
                                        </div>
                                        <div class="field-item email-field">
                                            <input type="email" placeholder="Email *" required>
                                        </div>
                                    </div>
                                    <div class="field-item textarea-field">
                                        <textarea cols="20" rows="6" placeholder="Comment *"></textarea>
                                    </div>
                                    <button type="submit" class="position-relative review-submit-btn mt-4">SUBMIT</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="filter-drawer blog-sidebar">
                        
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom">
                                Categories
                            </div>
                            <div class="accordion-collapse">
                                <ul class="filter-lists list-unstyled mb-0">
                                <li class="filter-item">
                                        <a class="filter-label" href="">
                                            <i class="fas fa-chevron-right mr_10"></i>
                                            Womens Bag
                                        </a>
                                    </li>
                                    <li class="filter-item">
                                        <a class="filter-label" href="">
                                            <i class="fas fa-chevron-right mr_10"></i>
                                            Bottles
                                        </a>
                                    </li>
                                    <li class="filter-item">
                                        <a class="filter-label" href="">
                                            <i class="fas fa-chevron-right mr_10"></i>
                                            Man Shoe
                                        </a>
                                    </li>
                                    <li class="filter-item">
                                        <a class="filter-label" href="">
                                            <i class="fas fa-chevron-right mr_10"></i>
                                            Toddler Dress
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center border-bottom">
                                Latest Post
                            </div>
                            <div class="filter-related">
                                <div class="related-item related-item-article d-flex">
                                    <div class="related-img-wrapper">
                                        <img class="related-img" src="<?php echo BASE_URL; ?>assets/img/blog/furniture-1.jpg" alt="img">
                                    </div>
                                    <div class="related-product-info">
                                        <h2 class="related-heading text_14">
                                            <a href="<?php echo BASE_URL; ?>post.php">Modern furniture in velvet</a>
                                        </h2>
                                        <p class="article-card-published text_12 d-flex align-items-center mt-2">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="related-item related-item-article d-flex">
                                    <div class="related-img-wrapper">
                                        <img class="related-img" src="<?php echo BASE_URL; ?>assets/img/blog/furniture-2.jpg" alt="img">
                                    </div>
                                    <div class="related-product-info">
                                        <h2 class="related-heading text_14">
                                            <a href="<?php echo BASE_URL; ?>post.php">Ultimate luxury furniture</a>
                                        </h2>
                                        <p class="article-card-published text_12 d-flex align-items-center mt-2">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="related-item related-item-article d-flex">
                                    <div class="related-img-wrapper">
                                        <img class="related-img" src="<?php echo BASE_URL; ?>assets/img/blog/furniture-3.jpg" alt="img">
                                    </div>
                                    <div class="related-product-info">
                                        <h2 class="related-heading text_14">
                                            <a href="<?php echo BASE_URL; ?>post.php">Small bedroom look bigger</a>
                                        </h2>
                                        <p class="article-card-published text_12 d-flex align-items-center mt-2">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="related-item related-item-article d-flex">
                                    <div class="related-img-wrapper">
                                        <img class="related-img" src="<?php echo BASE_URL; ?>assets/img/blog/furniture-4.jpg" alt="img">
                                    </div>
                                    <div class="related-product-info">
                                        <h2 class="related-heading text_14">
                                            <a href="<?php echo BASE_URL; ?>post.php">Update your living room</a>
                                        </h2>
                                        <p class="article-card-published text_12 d-flex align-items-center mt-2">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="related-item related-item-article d-flex">
                                    <div class="related-img-wrapper">
                                        <img class="related-img" src="<?php echo BASE_URL; ?>assets/img/blog/furniture-5.jpg" alt="img">
                                    </div>
                                    <div class="related-product-info">
                                        <h2 class="related-heading text_14">
                                            <a href="<?php echo BASE_URL; ?>post.php">Choose the right fabric</a>
                                        </h2>
                                        <p class="article-card-published text_12 d-flex align-items-center mt-2">
                                            <span class="article-date d-flex align-items-center">
                                                <span class="icon-publish">
                                                    <i class="far fa-calendar-alt" style="font-size:16px;"></i>
                                                </span>
                                                <span class="ms-2">30 December, 2022</span>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <div class="filter-header faq-heading heading_18 d-flex align-items-center justify-content-between border-bottom">
                                Popular Tags
                            </div>
                            <ul class="filter-tags list-unstyled">
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">Popular</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">Agency</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">Furniture</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">creative</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">design</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">modern</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">UX</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">web</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">bag</a></li>
                                <li class="tag-item"><a href="<?php echo BASE_URL; ?>post.php">shoe</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</main>

        <!-- footer start -->
<?php include 'footer.php' ?>