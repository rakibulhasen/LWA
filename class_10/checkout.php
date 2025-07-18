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
            <li>Cart</li>
            <li class="ml_10 mr_10">
                <i class="fas fa-chevron-right"></i>
            </li>
            <li>Checkout</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="checkout-page mt-100">
        <div class="container">
            <div class="checkout-page-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                        <div class="section-header mb-3">
                            <h2 class="section-heading">Check out</h2>
                        </div>

                        <div class="shipping-address-area">
                            <div class="mb_30">
                                <a href="" style="color:#F0686E;text-decoration:underline;">Existing Customer? Login Here</a>
                            </div>
                            <h2 class="shipping-address-heading pb-1 mb_20">Customer Information</h2>
                            <div class="shipping-address-form-wrapper">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <input type="text" class="form-control" placeholder="Name" name="name">
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <input type="text" class="form-control" placeholder="Email" name="email">
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <input type="text" class="form-control" placeholder="Address" name="address">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <select name="area" id="area-select" class="form-select">
                                                <option value="">Select Area</option>
                                                <option value="60">Inside Dhaka City (2-3 Working Days - ৳60)</option>
                                                <option value="120">Outside Dhaka City (3-5 Working Days - ৳120)</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="shipping-address-area billing-area">
                            <h2 class="shipping-address-heading pb-1 mb_20">Payment</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <select name="payment_method" id="payment_method" class="form-select" onchange="togglePaymentFields()">
                                            <option value="">Select Payment Method</option>
                                            <option value="Cash on Delivery">Cash on Delivery</option>
                                            <option value="bKash">bKash</option>
                                            <option value="Nagad">Nagad</option>
                                        </select>
                                    </div>
                                    
                                    <div id="bkash" class="payment-fields" style="display: none;">
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="bKash Mobile Number" name="bkash_mobile">
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="bKash Transaction ID" name="bkash_transaction_id">
                                        </div>
                                    </div>
                                    
                                    <div id="nagad" class="payment-fields" style="display: none;">
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="Nagad Mobile Number" name="nagad_mobile">
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="Nagad Transaction ID" name="nagad_transaction_id">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="checkout-page-btn btn-primary mt_20">CONFIRM ORDER</button>
                                    <div class="mt_20">
                                        <a href="<?php echo BASE_URL; ?>cart.php" style="color:#F0686E;text-decoration:underline;">Back to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                        function togglePaymentFields() {
                            // Hide all payment fields first
                            document.querySelectorAll('.payment-fields').forEach(field => {
                                field.style.display = 'none';
                            });
                            
                            // Get selected payment method
                            const paymentMethod = document.getElementById('payment_method').value;
                            
                            // Show the relevant fields
                            if (paymentMethod === 'bKash') {
                                document.getElementById('bkash').style.display = 'block';
                            } else if (paymentMethod === 'Nagad') {
                                document.getElementById('nagad').style.display = 'block';
                            }
                            // For Cash on Delivery, no additional fields are shown
                        }

                        // Initialize on page load (in case there's a default selection)
                        document.addEventListener('DOMContentLoaded', function() {
                            togglePaymentFields();
                        });
                        </script>

                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                        <div class="cart-total-area checkout-summary-area">
                            <h3 class="d-none d-lg-block mb-0 text-center heading_24 mb-4">Order summary</h4>

                            <div class="minicart-item d-flex">
                                <div class="mini-img-wrapper">
                                    <img class="mini-img" src="<?php echo BASE_URL; ?>assets/img/products/furniture/1.jpg" alt="img">
                                </div>
                                <div class="product-info">
                                    <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a></h2>
                                    <p class="product-vendor">৳100 x 1</p>
                                </div>
                            </div>
                            <div class="minicart-item d-flex">
                                <div class="mini-img-wrapper">
                                    <img class="mini-img" src="<?php echo BASE_URL; ?>assets/img/products/furniture/2.jpg" alt="img">
                                </div>
                                <div class="product-info">
                                    <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a></h2>
                                    <p class="product-vendor">৳90 x 2</p>
                                </div>
                            </div>

                            <div class="cart-total-box mt-4 bg-transparent p-0">
                                <div class="subtotal-item subtotal-box">
                                    <h4 class="subtotal-title">Subtotals:</h4>
                                    <p class="subtotal-value">৳<span id="subtotal-amount">280.00</span></p>
                                </div>
                                <div class="subtotal-item shipping-box">
                                    <h4 class="subtotal-title">Shipping:</h4>
                                    <p class="subtotal-value">(+) ৳<span id="shipping-amount">0.00</span></p>
                                </div>
                                <div class="subtotal-item discount-box">
                                    <h4 class="subtotal-title">Discount:</h4>
                                    <p class="subtotal-value">(-) ৳<span id="discount-amount">20.00</span></p>
                                </div>
                                <hr />
                                <div class="subtotal-item total-box">
                                    <h4 class="subtotal-title">Total:</h4>
                                    <p class="subtotal-value">৳<span id="total-amount">260.00</span></p>
                                </div>

                                <div class="mt-4 checkout-promo-code">
                                    <input class="input-promo-code" type="text" placeholder="Promo code" />
                                    <a href="<?php echo BASE_URL; ?>checkout.php" class="btn-apply-code position-relative btn-secondary text-uppercase mt-3">
                                        Apply Promo Code
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const areaSelect = document.getElementById('area-select');
    const subtotalAmount = document.getElementById('subtotal-amount');
    const shippingAmount = document.getElementById('shipping-amount');
    const discountAmount = document.getElementById('discount-amount');
    const totalAmount = document.getElementById('total-amount');
    
    // Initial values
    const subtotal = 280.00;
    const discount = 20.00;
    let shipping = 0.00;
    let total = subtotal - discount + shipping;
    
    // Update the display
    function updateTotals() {
        subtotalAmount.textContent = subtotal.toFixed(2);
        shippingAmount.textContent = shipping.toFixed(2);
        discountAmount.textContent = discount.toFixed(2);
        totalAmount.textContent = total.toFixed(2);
    }
    
    // Handle area selection change
    areaSelect.addEventListener('change', function() {
        // Get selected shipping cost
        shipping = this.value ? parseFloat(this.value) : 0.00;
        
        // Calculate new total
        total = subtotal - discount + shipping;
        
        // Update the display
        updateTotals();
    });
    
    // Initialize on page load
    updateTotals();
});
</script>

        <!-- footer start -->
<?php include 'footer.php' ?>