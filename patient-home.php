<?php include 'connect.php';
session_start();

$user= $_SESSION['login_id']; 


$type= $_SESSION['username'];  
 ?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vetserve </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo2.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">

                                        <li><a href="patient-home.php">Home</a></li>
                                                       <li><a href="profile.php">My Profile</a></li>
                                            <li><a href="new-appoin.php">Take Appointment</a></li>

                                            <li><a href="appoin-history.php">Appointment History</a></li>
                                            <li><a href="med-history.php">Medical History </a></li>

                                            <li><a href="Fees.php">Invoice</a></li>
                                            <li><a href="logout.php">[ Logout &nbsp;<?php echo "$type";?> ]</a></li>

                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Slider Area Start-->
        <div class="slider-area">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <!-- Video icon -->

                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".3s">We help to groom your pet</span>
                                    <h1 data-animation="fadeInUp" data-delay=".3s">We Care Your Pets.</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sectetur adipisci.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <!-- Video icon -->
                                
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".3s">We help to groom your pet</span>
                                    <h1 data-animation="fadeInUp" data-delay=".3s">We Care Your Pets.</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s"></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider Social -->
            <div class="button-text d-none d-md-block">
                <span>Screll</span>
            </div>
        </div>
        <!-- Slider Area End -->
        <!--? Our Services Start -->
        
       
        <!--? About Area Start-->

        <!-- About Area End-->

        <!--? Team Start -->
        
        <!-- Team End -->
        

        <!-- contact-animal-owner End -->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding" id="about">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="assets/img/logo2.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor elit. </p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a><i class="fab fa-facebook-square"></i></a>
                                    <a><i class="fab fa-twitter-square"></i></a>
                                    <a class="fab fa-linkedin"></i>
                                    </a>
                                    <a i class="fab fa-pinterest-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="single-blog.html">Services</a></li>
                                    <li><a href="#">Cases</a></li>
                                    <li><a href="contact.html">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="#">Commercial Cleaning</a></li>
                                    <li><a href="#">Office Cleaning</a></li>
                                    <li><a href="#">Building Cleaning</a></li>
                                    <li><a href="#">Floor Cleaning</a></li>
                                    <li><a href="#">Apartment Cleaning</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Get in Touch</h4>
                                <ul>
                                    <li><a href="#">152-515-6565</a></li>
                                    <li><a href="#"> Demomail@gmail.com</a></li>
                                    <li><a href="#">New Orleans, USA</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Vetserve
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>