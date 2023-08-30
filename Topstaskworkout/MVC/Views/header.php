<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sona | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->base_url; ?>css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <!-- <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div> -->
    <!-- <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">


                <span>Account<i class="fa fa-angle-down"></i></span>

                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>

                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="home">Home</a></li>
                <li><a href="rooms">Rooms</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="rooms">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="news">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
        </ul>
    </div> -->
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
                            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="#" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <i class="fa fa-user"></i>
                                <!-- <img src="<?php echo $this->base_url; ?>img/flag.jpg" alt=""> -->
                                <!-- <?php
                                if (isset($_SESSION['Userdata'])) {
                                    echo '<span>Admin <i class="fa fa-angle-down"></i></span>';
                                } 
                                else {

                                    echo '<span>Account <i class="fa fa-angle-down"></i></span>';
                                }

                                ?> -->

                                <?php
                                if (isset($_SESSION['Userdata'])) {
                                    echo   ' <div class="flag-dropdown">
                                    <ul>
                                        <!-- <li><a href="#">Zi</a></li> -->
                                        <li><a href="logout">Logout</a></li>
                                    </ul>
                                </div>';
                                } else {
                                    echo '<div class="flag-dropdown">
                                    <ul>
                                        <!-- <li><a href="#">Zi</a></li> -->
                                        <li><a href="login">Login</a></li>
                                    </ul>
                                </div>';
                                }
                                ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="home">Home</a></li>
                                    <li><a href="rooms">Rooms</a></li>
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="./pages.html">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="rooms">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="news">News</a></li>
                                    <li><a href="./contact">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->