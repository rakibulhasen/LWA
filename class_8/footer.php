       <!-- footer start -->
       <footer class="mt-100 overflow-hidden footer-style-2">
            <div class="footer-bottom bg-5">
                <div class="container">
                    <div
                        class="footer-bottom-inner d-flex flex-wrap justify-content-md-between justify-content-center align-items-center">
                        <ul class="footer-bottom-menu list-unstyled d-flex flex-wrap align-items-center mb-0">
                            <li class="footer-menu-item"><a href="privacy.html">Privacy policy</a></li>
                            <li class="footer-menu-item"><a href="terms.html">Terms & Conditions</a></li>
                        </ul>
                        <p class="copyright footer-text">Copyright © Morshedul Arefin. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->
        
        <!-- scrollup start -->
        <button id="scrollup">
            <i class="fas fa-chevron-up" style="color:#fff;"></i>
        </button>
        <!-- scrollup end -->


        <!-- drawer menu start -->
        <div class="offcanvas offcanvas-start d-flex d-lg-none" tabindex="-1" id="drawer-menu">
            <div class="offcanvas-wrapper">
                <div class="offcanvas-header border-btm-black">
                    <h5 class="drawer-heading">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 d-flex flex-column justify-content-between">
                    <nav class="site-navigation">
                        <ul class="main-menu list-unstyled">
                            <li class="menu-list-item nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="shop.html">Shop</a>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="menu-list-item nav-item has-dropdown">
                                <div class="mega-menu-header">
                                    <a class="nav-link active" href="about-us.html">
                                        Pages
                                    </a>
                                    <span class="open-submenu">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="submenu-transform submenu-transform-desktop">
                                    <div class="offcanvas-header border-btm-black">
                                        <h5 class="drawer-heading btn-menu-back d-flex align-items-center">
                                            <i class="fas fa-chevron-left mr_10"></i>
                                            <span class="menu-back-text">Pages</span>
                                        </h5>
                                    </div>
                                    <ul class="submenu list-unstyled">
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="about-us.html">About Us</a>
                                        </li>
                                        <li class="menu-list-item nav-item-sub">
                                            <a class="nav-link-sub nav-text-sub" href="faq.html">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-list-item nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="utility-menu list-unstyled">
                        <li class="utilty-menu-item">
                            <a class="announcement-text" href="tel:+8801912721070">
                                <span class="utilty-icon-wrapper">
                                    <i class="fas fa-phone"></i>
                                </span>
                                Call: +8801912721070
                            </a>
                        </li>
                        <li class="utilty-menu-item">
                            <a class="announcement-login announcement-text" href="login.html">
                                <span class="utilty-icon-wrapper">
                                    <i class="far fa-user"></i>
                                </span>
                                <span>User Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- drawer menu end -->


        <!-- all js -->
        <script src="assets/js/vendor.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/sweetalert.js"></script>



        <?php 
            if(isset($error_mssage)) {
                 // echo '<div class="alert alert-danger">'. $error_mssage .'</div>';
        
                ?>
                <script>
                    Swal.fire({
                        text: '<?= $error_mssage ?>',
                        icon: 'error',
                    })
                </script>
                <?php
            }

            if(isset($_SESSION['success_message'])) {
                // echo '<div class="alert alert-success">'. $_SESSION['success_message'] .'</div>';
                ?>
                <script>
                    Swal.fire({
                        text: '<?php echo $_SESSION['success_message']; ?>',
                        icon: 'success',
                    })
                </script>
                <?php
                unset($_SESSION['success_message']);
            }
        ?>
        
    </div>
</body>
</html>