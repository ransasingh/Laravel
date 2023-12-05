<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{('assests/images/favicon.png')}}" type="image/x-icon">

    <title>Elaxi</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{('assests/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{('assests/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:500|Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{('assests/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{('assests/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section ">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="#">
                        <span>
                            Elaxi
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse ml-auto  " id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Why Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                        </ul>
                        <div class="user_option ">
                            <a href="/login" class="">
                                Login / signUp
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        @yield('home')

        <!-- info section -->
        <section class="info_section ">

            <div class="container">
                <div class="info_top ">
                    <div class="row ">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="info_detail">
                                <a href="index.html">
                                    <h4>
                                        Elaxi
                                    </h4>
                                </a>
                                <p>
                                    Soluta odit exercitationem rerum aperiam eos consectetur impedit delectus qui reiciendis, distinctio, asperiores fuga labore a? Magni natus.
                                </p>
                                <div class="social_box">
                                    <a href="">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
                            <h4>
                                Contact us
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                            </p>
                            <div class="contact_nav">
                                <a href="">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>
                                        Location
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        Call : +01 123455678990
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>
                                        Email : demo@gmail.com
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info_form">
                                <h4>
                                    SIGN UP TO OUR NEWSLETTER
                                </h4>
                                <form action="">
                                    <input type="text" placeholder="Enter Your Email" />
                                    <button type="submit">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </footer>
        <!-- footer section -->


        <script src="{{('assests/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{('assests/js/bootstrap.js')}}"></script>
        <script src="{{('assests/js/custom.js')}}"></script>

</body>

</html>