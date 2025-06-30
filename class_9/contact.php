<?php include 'header.php' ;


    // Email send 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

if(isset($_POST['contact_form'])) {
    try{

         $name = strip_tags($_POST['name']);
         $email = strip_tags($_POST['email']);
         $phone = strip_tags($_POST['phone']);
         $message = strip_tags($_POST['message'], '<br>');

         if($name == '') {
            throw new Exception('Please enter your name');
         }
         
         if($email == '') {
            throw new Exception('Please enter your email');
         }

         if($phone == '') {
            throw new Exception('Please enter your phone');
         }

         // Email validation
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please enter a valid email');
         }

         if($message == '') {
            throw new Exception('Please write your message');
         }



$mail = new PHPMailer(true);


	
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Port = SMTP_PORT;
    $mail->Username = SMTP_USERNAME;
    $mail->Password = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_ENCRYPTION;

    $mail->setFrom('contact@example.com');
    $mail->addAddress('rakibulhasancsebd@gmail.com');
    $mail->addReplyTo('contact@example.com');
    
    // $mail->addAttachment('uploads/plane.jpg', 'new_plane.jpg');

    $mail_message = '<h2>Visitor Information</h2>';
    $mail_message .= '<p style="color:red"><strong>Name: </strong>' . $name . '</p>';
    $mail_message .= '<p><strong>Email: </strong>' . $email . '</p>';
    $mail_message .= '<p><strong>Phone؛: </strong>' . $phone . '</p>';
    $mail_message .= '<p>'. nl2br($message) . '</p>';
    $mail_message .= '<pThanks you for contacting us. We will get back to you soon</p>';


    $mail->isHTML(true);
    $mail->Subject = 'Contact Form Message';
    $mail->Body = $mail_message;

    $mail->send();

	// $success_message =  'Message has been sent';
    unset($_POST['name']);
    unset($_POST['email']);
    unset($_POST['phone']);
    unset($_POST['message']);

    $_SESSION['success_message'] = 'Message has been sent';
    header('location: contact.php');
    exit;

    } catch (Exception $e) {
        $error_mssage = $e->getMessage();
    }
}


?>



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
            <li>Contact US</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->

<main id="MainContent" class="content-for-layout">
    <div class="contact-page">

        <!-- contact box start -->
        <div class="contact-box mt-100">
            <div class="contact-box-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope" style="font-size: 40px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h2 class="contact-title">Mail Address</h2>
                                    <a class="contact-info" href="mailto:info@example.com">info@example.com</a>
                                    <a class="contact-info" href="mailto:info2@example.com">info2@example.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-location-arrow" style="font-size: 40px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h2 class="contact-title">Office Location</h2>
                                    <p class="contact-info">2715 Ash Dr. San Jose, South Dakota 83475</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone" style="font-size: 40px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h2 class="contact-title">Phone Number</h2>
                                    <a class="contact-info" href="tel:(201) 555-0124">(201) 555-0124</a>
                                    <a class="contact-info" href="tel:(307) 555-0133">(307) 555-0133</a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
        <!-- contact box end -->

        <!-- about banner start -->
        <div class="contact-form-section mt-100">
            <div class="container">
                <div class="contact-form-area">
                    <div class="section-header mb-4">
                        <h2 class="section-heading">Drop us a line</h2>
                        <p class="section-subheading">We would like to hear from you.</p>
                    </div>
                    <div class="contact-form--wrapper">
                        
                        <form action="" method="post" class="contact-form">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="text" placeholder="Full Name *" name="name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : '' ?>">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="email" placeholder="Email Address *" name="email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : '' ?>">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <fieldset>
                                        <input type="text" placeholder="Phone Number *" name="phone" value="<?php echo (isset($_POST['phone'])) ? $_POST['phone'] : '' ?>">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <fieldset>
                                        <textarea cols="20" rows="6" placeholder="Message *" name="message"><?php echo (isset($_POST['message'])) ? $_POST['message'] : '' ?></textarea>
                                    </fieldset>
                                    <button type="submit" class="position-relative review-submit-btn contact-submit-btn" name="contact_form" >SEND MESSAGE</button>
                                </div>
                            </div>                                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- about banner end -->
    </div>            
</main>

<?php include 'footer.php' ?>
