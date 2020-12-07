<!DOCTYPE html>
<html lang="en">
<head>
    <title>UBilim</title>
    <meta charset="UTF-8">
    <meta name="description" content="UBilim">
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
<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
    <div class="container">
        <div class="site-breadcrumb">
            <a href="#">Home</a>
            <span>Courses</span>
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


<!-- course section -->
<section class="course-section spad pb-0">
    <div class="course-warp">
        <ul class="course-filter controls">
            <li class="control active" data-filter="all">All</li>
            <li class="control" data-filter=".finance">Finance</li>
            <li class="control" data-filter=".design">Design</li>
            <li class="control" data-filter=".web">Web Development</li>
            <li class="control" data-filter=".photo">Photography</li>
        </ul>
        <div class="row course-items-area">
            <!-- course -->
{{--            <div class="mix col-lg-3 col-md-4 col-sm-6 finance">--}}
{{--                <div class="course-item">--}}
{{--                    @foreach($row as $row)--}}
{{--                        <img src="{{ asset('uploads/appsetting/' . $row->image) }}" alt="">--}}

{{--                        <h3>{{$row->name}}</h3>--}}
{{--                        <div class="blog-metas">--}}
{{--                            <div class="blog-meta">--}}
{{--                                <a href="#">Development</a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-meta">--}}
{{--                                <a href="#">{{ $row->created_at }}</a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-meta">--}}
{{--                                <a href="#">{{ $row->price }}</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p>{{$row->description}} </p>--}}
{{--                        <a href="{{ route('get_course', $row->id)}}" class="site-btn readmore">Get course</a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="container">
            <div class="row">
                @foreach($row as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="categorie-item">
                            <img style="height: 350px;" src="{{ asset('uploads/appsetting/' . $row->image) }}" class="card-img-top" alt="">
                            <div class="ci-text">
                                <h5>{{$row->name}}</h5>
                                <p>{{$row->description}}</p>
                                <span>price: {{$row->price}}</span>
                                <div style="height: 20px;">

                                </div>
                             <a href="{{ route('get_course', $row->id)}}" class="site-btn readmore">Get course</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</section>
<!-- course section end -->


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
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
