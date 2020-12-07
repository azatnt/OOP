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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>

<body>

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
                    <div style="display:flex; margin-left: 420px; justify-content: space-between; list-style-type: none">
                        <li class="nav-item">
                            <a style="text-decoration: none" class="site-btn header-btn" href="#">Hello {{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a style="text-decoration: none" href="/logout" class="site-btn header-btn">Log Out</a>
                        </li>
                    </div>
                @else
                    <div class="" style="display: flex; margin-left: 420px; justify-content: space-between; list-style-type: none;">
                        <li class="nav-item">
                            <a style="text-decoration: none" href="/login" class="site-btn header-btn">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a style="text-decoration: none" class="site-btn header-btn" href="/register">Register</a>
                        </li>
                    </div>

                @endif
                <nav class="main-menu">
                    <ul>
                        <li><a style="text-decoration: none" href="/">Home</a></li>
                        <li><a style="text-decoration: none" href="#">About us</a></li>
                        <li><a style="text-decoration: none" href="/courses">Courses</a></li>
                        <li><a style="text-decoration: none" href="/blog">News</a></li>
                        <li><a style="text-decoration: none" href="/contact">Contact</a></li>
                        <li><a style="text-decoration: none" href="/my_courses">My courses</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>


<section class="hero-section set-bg" style="background-image: url('https://wallpaperaccess.com/full/1151629.jpg')" >
</section>


<div class="container">

<div class="hero-text text-black">
    <h2>Welcome to course {{$course->name}}</h2>
    <p>{{$course->description}}</p>
</div>



                            <video style="margin-top: 90px; margin-left: 180px;" width="820" height="740" controls>
                                <source src="{{URL::asset("/uploads/appsetting/$course->video")}}" type="video/mp4">

                            </video>

    <div style="height: 200px;">

    </div>

</div>

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
</body>
