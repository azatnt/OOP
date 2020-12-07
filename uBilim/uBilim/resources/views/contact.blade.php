<!DOCTYPE html>
<html lang="en">
<head>
    <title>UBilim</title>
    <meta charset="UTF-8">
    <meta name="description" content="UBilim ">
    <meta name="keywords" content="UBilim, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="img/logofinal.png" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-logo">
                    <img src="img/logofinal.png" alt="">
                </div>
                <div class="nav-switch">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                @if( auth()->check() )
                    <div style="display:flex; margin-left: 450px; justify-content: space-between; list-style-type: none">
                        <li class="nav-item">
                            <a class="site-btn header-btn" href="#">Hello {{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="site-btn header-btn">Log Out</a>
                        </li>
                    </div>
                @else
                    <div class="" style="display: flex; margin-left: 450px; justify-content: space-between; list-style-type: none;">
                        <li class="nav-item">
                            <a href="/login" class="site-btn header-btn">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="site-btn header-btn" href="/register">Register</a>
                        </li>
                    </div>

                @endif
                <nav class="main-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="/courses">Courses</a></li>
                        <li><a href="/blog">News</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/my_courses">My courses</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->


<!-- Page info -->
<div class="page-info-section set-bg" data-setbg="img/page-bg/4.jpg">
    <div class="container">
        <div class="site-breadcrumb">
            <a href="#">Home</a>
            <span>Contact</span>
        </div>
    </div>
</div>
<!-- Page info end -->

<!-- Page -->
<section class="contact-page spad pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">
                    <div class="section-title text-white text-left">
                        <h2>Get in Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </p>
                    </div>
                    <form action="{{ route('contact_form') }}" method="post" class="contact-form">
                            @csrf
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="text" name="email" placeholder="Your E-mail">
                        <input type="text" name="subject" placeholder="Subject">
                        <input type="text" name="message" placeholder="Message">
                        <button type="submit" class="site-btn">Sent Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-area">
                    <div class="section-title text-left p-0">
                        <h2>Contact Info</h2>
                        <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendi sse cursus faucibus finibus.</p>
                    </div>
                    <div class="phone-number">
                        <span>Direct Line</span>
                        <h2>+7-747-433-56-09</h2>
                    </div>
                    <ul class="contact-list">
                        <li>IITU<br>JANDOSOVA MANASA</li>
                        <li>87474335609</li>
                        <li>IITU@gmail.com</li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="map-canvas" class="map-responsive">
            <style>
                .map-responsive{
                    overflow:hidden;
                    padding-bottom:56.25%;
                    position:relative;
                    height:0;
                }
                .map-responsive iframe{
                    left:0;
                    top:0;
                    height:100%;
                    width:100%;
                    position:absolute;
                }

            </style>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10283.909708631503!2d76.90820894278781!3d43.23598179630206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2426740f56437e63!2z0JzQtdC20LTRg9C90LDRgNC-0LTQvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDQuNC90YTQvtGA0LzQsNGG0LjQvtC90L3Ri9GFINGC0LXRhdC90L7Qu9C-0LPQuNC5!5e0!3m2!1sru!2skz!4v1603107800019!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">

            </iframe>
        </div>
    </div>
</section>
<!-- Page end -->


<!-- banner section -->
<section class="banner-section spad">
    <div class="container">
        <div class="section-title mb-0 pb-2">
            <h2>Join Our Community Now!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="text-center pt-5">
            <a href="#" class="site-btn">Register Now</a>
        </div>
    </div>
</section>
<!-- banner section end -->


<!-- footer section -->
<footer class="footer-section spad pb-0" >

    <div class="footer-top">
        <div class="footer-warp">
            <div class="row">
                <div class="widget-item">
                    <h4>Contact Info</h4>
                    <ul class="contact-list">
                        <li>IITU <br>MANASA JANDOSOVA</li>
                        <li>87474335609</li>
                        <li>IITU@gmail.com</li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Engeneering</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Graphic Design</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Development</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Newsletter</h4>
                    <form class="footer-newslatter">
                        <input type="email" placeholder="E-mail">
                        <button class="site-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-warp">
            <ul class="footer-menu">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
            <div class="copyright">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->


<!-- Javascripts & Jquery -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>





</body>
</html>
