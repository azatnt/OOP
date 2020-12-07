<!DOCTYPE html>
<html lang="en">
<head>
    <title>UBilim</title>
    <meta charset="UTF-8">
    <meta name="description" content="UBilim">
    <meta name="keywords" content="UBilim, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="img/logo4.png" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/owl.carousel.css"/>
    <link rel="stylesheet" href="/css/style.css"/>


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
{{--                <a href="/login" class="site-btn header-btn">Log In</a>--}}

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


<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="img/bg.jpg">
    <div class="container">
        <div class="hero-text text-white">
            <h2>Online Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <div class="col-lg-9 offset-lg-5">
                <form class="intro-newslatter">
                    <button class="site-btn">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- categories section -->
<section class="categories-section spad">
    <div class="container">
        <div class="section-title">
            <h2>Our Course Categories</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="img/categories/1.jpg"></div>
                    <div class="ci-text">
                        <h5>IT Development</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>120 Courses</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="img/categories/2.jpg"></div>
                    <div class="ci-text">
                        <h5>Web Design</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>70 Courses</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="img/categories/3.jpg"></div>
                    <div class="ci-text">
                        <h5>Illustration & Drawing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>55 Courses</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="img/categories/4.jpg"></div>
                    <div class="ci-text">
                        <h5>Social Media</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>40 Courses</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="img/categories/5.jpg"></div>
                    <div class="ci-text">
                        <h5>Photoshop</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>220 Courses</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="img/categories/6.jpg"></div>
                    <div class="ci-text">
                        <h5>Cryptocurrencies</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>25 Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- categories section end -->


<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-0">
            <h2>Featured Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
    </div>
    <div class="course-warp">
        <ul class="course-filter controls">
            <li class="control active" data-filter="all">All</li>
            <li class="control" data-filter=".finance">Finance</li>
            <li class="control" data-filter=".design">Design</li>
            <li class="control" data-filter=".web">Web Development</li>
            <li class="control" data-filter=".photo">Photography</li>
        </ul>
        <div class="row course-items-area">
            <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/1.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>Art & Crafts</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/1.png"></div>
                            <p>Someone, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-4 col-sm-6 design">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/2.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/2.png"></div>
                            <p>Someone, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/3.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>Graphic Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/3.png"></div>
                            <p>Someone, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-4 col-sm-6 photo">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/4.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/4.png"></div>
                            <p>Someone, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/5.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/5.png"></div>
                            <p>Someone, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-4 col-sm-6 design">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/6.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>Social Media</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/6.png"></div>
                            <p>Someone, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/7.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/7.png"></div>
                            <p>Someone, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course -->
            <div class="mix col-lg-3 col-md-4 col-sm-6 photo">
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/8.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <h5>HTML 5</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <div class="students">120 Students</div>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/8.png"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- course section end -->


<!-- signup section -->
<section class="signup-section spad">
    <div class="signup-bg set-bg" data-setbg="img/signup-bg.jpg"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="signup-warp">
                    <div class="section-title text-white text-left">
                        <h2>Sign up to became a teacher</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                    </div>
                    <!-- signup form -->
                    <form class="signup-form">
                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Your E-mail">
                        <input type="text" placeholder="Your Phone">
                        <label for="v-upload" class="file-up-btn">Upload Course</label>
                        <input type="file" id="v-upload">
                        <button class="site-btn">Search Couse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signup section end -->


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
<footer class="footer-section spad pb-0">
    <div class="footer-top">
        <div class="footer-warp">
            <div class="row">
                <div class="widget-item">
                    <h4>Contact Info</h4>
                    <ul class="contact-list">
                        <li>IITU<br>JANDOSOVA MANASA</li>
                        <li>+7-747-433-56-09</li>
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
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/mixitup.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
