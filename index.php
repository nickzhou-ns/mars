<?php
$the_page = 1;
$base_email = "kenny@marsmigration.com.au";
$base_phone = "+61 426 610 301";
$base_logo_url = "resources/images/Mars Migration Logo.png";
$base_brand = "Mars Migration And Migration";
$base_about = "At Mars Education and Migration, we are a team of experienced Registered Migration Agents (RMA) and Education Agents (QEAC) dedicated to assisting clients with all types of visa and education applications in Australia. With our broad expertise in immigration services, we facilitate a seamless and successful migration process for our clients.";
$base_address = "Lv45/680 George St, Sydney, NSW 2000, Australia";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title><?php echo $base_brand; ?></title>


    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <!-- header area -->
    <header class="header">

        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <div class="header-top-list">
                            <ul>
                                <li><a href="tel:<?php echo $base_phone; ?>"><i class="far fa-phone-volume"></i> <?php echo $base_phone; ?></a>
                                </li>
                                <li><a href="#"><i class="far fa-alarm-clock"></i> Mon - Fri: 08:00 AM – 10:00 PM (AEST/AEDT)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-lang">
                            <div class="dropdown">
                                <a href="#" class="top-lang dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fal fa-globe"></i> Eng</a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Simplified Chinese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- navbar -->
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="javascript:void(0);">

                        <img src="<?php echo $base_logo_url; ?>" alt="logo">

                    </a>
                    <div class="mobile-menu-right">
                        <div class="mobile-menu-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i
                                    class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a href="javascript:void(0);" class="offcanvas-brand" id="offcanvasNavbarLabel">
                                <img src="<?php echo $base_logo_url; ?>" alt="">

                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                                    class="far fa-xmark"></i></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">About</a></li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">Country</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Contact</a></li>
                            </ul>
                            <!-- nav-right -->
                            <div class="nav-right">
                                <div class="search-btn">
                                    <button type="button" class="nav-right-link search-box-outer"><i
                                            class="far fa-search"></i></button>
                                </div>
                                <div class="nav-btn">
                                    <a href="#partner" class="theme-btn">Let's Talk<i
                                            class="fas fa-circle-arrow-right"></i></a>
                                </div>
                                <button type="button" class="sidebar-btn nav-right-link" data-bs-toggle="offcanvas"
                                    data-bs-target="#sidebarPopup">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end-->

    </header>
    <!-- header area end -->
    <?php
    include 'inc/index/inc_index_sidebar_popup.php';
    ?>



    <main class="main">

        <?php
        include 'inc/index/inc_index_hero_area.php';
        include 'inc/index/inc_index_about_area.php';
        include 'inc/index/inc_index_process.php';
        include 'inc/index/inc_index_skill_area.php';
        // $the_page = 'index';
        include 'inc/index/inc_index_partner_area.php';
        include 'inc/index/inc_index_quote_area.php';
        ?>



    </main>

    <?php
    include 'inc/common/inc_index_footer.php';
    ?>



    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>