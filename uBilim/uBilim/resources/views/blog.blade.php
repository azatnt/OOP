<!DOCTYPE html>
<html lang="en">
<head>
    <title>UBilim</title>
    <meta charset="UTF-8">
    <meta name="description" content="UBilim Education Template">
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
<div class="page-info-section set-bg" data-setbg="img/page-bg/3.jpg">
    <div class="container">
        <div class="site-breadcrumb">
            <a href="#">Home</a>
            <span>Blog</span>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- search section -->
<section class="search-section ss-other-page">
    <div class="container">
        <div class="search-warp">
            <div class="section-title text-white">
                <h2><span>Search your course</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <!-- search form -->
                    <form class="course-search-form">
                        <input type="text" placeholder="Course">
                        <input type="text" class="last-m" placeholder="Category">
                        <button class="site-btn btn-dark">Search Couse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search section end -->


<!-- Page  -->
<section class="blog-page spad pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- blog post -->
                <div class="blog-post">
                    @foreach($row as $row)

{{--                    <img src="img/blog/1.jpg" alt="">--}}
                        <img src="{{ asset('uploads/appsetting/' . $row->image) }}" alt="">

                    <h3>{{$row->name}}</h3>
                    <div class="blog-metas">
{{--                        <div class="blog-meta author">--}}
{{--                            <div class="post-author set-bg" data-setbg="img/authors/1.png"></div>--}}
{{--                            <a href="#">James Smith</a>--}}
{{--                        </div>--}}
                        <div class="blog-meta">
                            <a href="#">Development</a>
                        </div>
                        <div class="blog-meta">
                            <a href="#">{{ $row->created_at }}</a>
                        </div>
                        <div class="blog-meta">
                            <a href="#">{{ $row->amount }}</a>
                        </div>
                    </div>
                    <p>{{$row->description}} </p>
                    <a href="#" class="site-btn readmore">Read More</a>
                    @endforeach
                </div>
{{--                <!-- blog post -->--}}
{{--                <div class="blog-post">--}}
{{--                    <img src="img/blog/2.jpg" alt="">--}}
{{--                    <h3>5 Tips to make money from home</h3>--}}
{{--                    <div class="blog-metas">--}}
{{--                        <div class="blog-meta author">--}}
{{--                            <div class="post-author set-bg" data-setbg="img/authors/2.png"></div>--}}
{{--                            <a href="#">James Smith</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-meta">--}}
{{--                            <a href="#">Development</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-meta">--}}
{{--                            <a href="#">June 12, 2018</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-meta">--}}
{{--                            <a href="#">2 Comments</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. </p>--}}
{{--                    <a href="#" class="site-btn readmore">Read More</a>--}}
{{--                </div>--}}
{{--                <!-- blog post -->--}}
{{--                <div class="blog-post">--}}
{{--                    <img src="img/blog/3.jpg" alt="">--}}
{{--                    <h3>Why choose an online course?</h3>--}}
{{--                    <div class="blog-metas">--}}
{{--                        <div class="blog-meta author">--}}
{{--                            <div class="post-author set-bg" data-setbg="img/authors/3.png"></div>--}}
{{--                            <a href="#">James Smith</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-meta">--}}
{{--                            <a href="#">Development</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-meta">--}}
{{--                            <a href="#">June 12, 2018</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-meta">--}}
{{--                            <a href="#">2 Comments</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. </p>--}}
{{--                    <a href="#" class="site-btn readmore">Read More</a>--}}
                </div>
{{--                <div class="site-pagination">--}}
{{--                    <span class="active">01.</span>--}}
{{--                    <a href="#">02.</a>--}}
{{--                    <a href="#">03</a>--}}
{{--                </div>--}}
            </div>
            <div class="col-lg-3 col-md-5 col-sm-9 sidebar">
                <div class="sb-widget-item">
                    <form class="search-widget">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="sb-widget-item">
                    <h4 class="sb-w-title">Categories</h4>
                    <ul>
                        <li><a href="#">Developement</a></li>
                        <li><a href="#">Social Media</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Events & Lifestyle</a></li>
                        <li><a href="#">Uncategorizes</a></li>
                    </ul>
                </div>
                <div class="sb-widget-item">
                    <div class="add">
                        <a href="#"><img src="img/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
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
<footer class="footer-section spad pb-0">
    <div class="footer-top">
        <div class="footer-warp">
            <div class="row">
                <div class="widget-item">
                    <h4>Contact Info</h4>
                    <ul class="contact-list">
                        <li> IITU<br>JANDOSOVA MANASA</li>
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
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
