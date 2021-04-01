<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ka19News</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/logo/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('assets/logo/favicon.ico') }}" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/css/assets/bootstrap.min.css') }}">

        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="{{ asset('assets/css/assets/font-awesome.min.css') }}">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/assets/animate.css') }}">

        <!-- Mean Menu -->
        <link rel="stylesheet" href="{{ asset('assets/css/assets/meanmenu.min.css') }}">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('assets/css/assets/owl.carousel.min.css') }}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('assets/css/assets/magnific-popup.css') }}">

        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ asset('assets/css/assets/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/assets/responsive.css') }}">

    </head>
    <body>
        <!-- Pre-Loader -->
            <div id="page-preloader"><span class="spinner"></span></div>
        <!-- End Pre-Loader -->

        <!-- Top Bar -->
        <section class="top-bar">
        	<div class="container">
                <div class="bar-content">
            		<div class="row">
                        <div class="col-md-8">
                            <div class="bar-left">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-calendar-check-o"></i>{{ date('M') }}, {{ date('d') }}, {{ date('Y') }}</li>
                                    <li class="list-inline-item"><i class="fa fa-home"></i>Home</li>
                                    <li class="list-inline-item"><a href="#">Advertise</a></li>
                                    <li class="list-inline-item"><a href="#">About</a></li>
                                    <!-- <li class="list-inline-item"><a href="{{ url('/writeus') }}">Write Us</a></li> -->
                                </ul>
                            </div>
                        </div>
        				<div class="col-md-4">
                            <div class="bar-social text-right">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/ka19news/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" target="_blank"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/ka19_news/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
        				</div>
            		</div>
                </div>
        	</div>
        </section>
		<!-- End Top Bar -->

        <!-- Logo Area -->
        <section class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('assets/logo/LOGO.png') }}" alt="" class="img-fluid web-logo"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="searchbar text-right">
                            <form action="#">
                                <input placeholder="Search Here" type="text" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area -->

        <!-- Menu Area -->
        <section class="menu-area">
            <div class="container">
                <div class="menu-content">
                    <div class="row">
                        <div class="col-lg-10 col-md-12">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item active"><a href="{{ url('/') }}">HOME</a></li>
                                <!-- <li class="list-inline-item"><a>PAGES<i class="fa fa-angle-down"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="index-2.html">HOME</a></li>
                                        <li><a href="about.html">ABOUT</a></li>
                                        <li><a>CATAGORY<i class="fa fa-angle-right"></i></a>
                                            <ul class="list-unstyled">
                                                <li><a href="catagory-one.html">CATAGORY ONE</a></li>
                                                <li><a href="catagory-two.html">CATAGORY TWO</a></li>
                                            </ul>
                                        </li>
                                        <li><a>NEWS DETAILS<i class="fa fa-angle-right"></i></a>
                                            <ul class="list-unstyled">
                                                <li><a href="news-details-one.html">NEWS DETAILS ONE</a></li>
                                                <li><a href="news-details-two.html">NEWS DETAILS TWO</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">CONTACT</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="coming-soon.html">COMING SOON</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li> -->
                               @foreach($cat as $category)
                                <li class="list-inline-item"><a href="/category-news/{{ $category->category_id }}">{{ $category->category_name }}</a></li>
                               @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-12">
                            <div class="clock text-right">
                                <span id="dg-clock"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Area -->

        <!-- Mobile Menu -->
        <section class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <a href="#"><img src="{{ asset('assets/images/mobile-logo.png') }}" alt="" class="img-fluid"></a>
                                <a href="#"><i class="fa fa-home"></i></a>
                                <ul>
                                    <li class="list-inline-item"><a href="{{ url('/') }}">HOME</a></li>
                                    <!-- <li class="list-inline-item"><a href="#">PAGES</a>
                                        <ul class="list-unstyled">
                                            <li><a href="index-2.html">HOME</a></li>
                                            <li><a href="about.html">ABOUT</a></li>
                                            <li><a href="#">CATAGORY</a>
                                                <ul>
                                                    <li><a href="catagory-one.html">CATAGORY ONE</a></li>
                                                    <li><a href="catagory-two.html">CATAGORY TWO</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">NEWS DETAILS</a>
                                                <ul>
                                                    <li><a href="news-details-one.html">NEWS DETAILS ONE</a></li>
                                                    <li><a href="news-details-two.html">NEWS DETAILS TWO</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">CONTACT</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="coming-soon.html">COMING_SOON</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li> -->
                                    @foreach($cat as $category)
                                        <li class="list-inline-item"><a href="/category-news/{{ $category->category_id }}">{{ $category->category_name }}</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

        

        

         <!-- Coming Soon -->
        <section class="coming-soon text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cs-content">
                            <h1>WebPage is Under Construction.</h1>
                            <div class="countdown-timer">
                                <div id="timer-wrapper">
                                    <!-- Change Time In custom.js -->
                                </div>
                            </div>
                            <div class="news-subs">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Coming Soon -->


        <!-- Footer --> 
        <footer>
            <div class="container">
                <div class="footer-c">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-about">
                                <h4>ABOUT</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ex, ea. Mollitia consequuntur dolorum cum sed ea cupiditate nisi in quis animi. Accusantium magni impedit, magnam! Similique cumque labore illum.</p>
                                <ul class="list-unstyled list-inline">
                                   <li class="list-inline-item"><a href="https://www.facebook.com/ka19news/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" target="_blank"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/ka19_news/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-link">
                                <h4>ADDITIONAL</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Home</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>About Us</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Advertise</a></li>
                                    <!-- <li><a href="#"><i class="fa fa-caret-right"></i> Write Us</a></li> -->
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="footer-twitter">
                                <h4>Stay Updated With Us</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#"><img class="img-fluid google-logo" src="{{ asset('assets/logo/play-store.png') }}"></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-apple"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; {{ date('Y') }} <a href="#">KA19News</a>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="designer-text text-right">
                                <p>Powered <i class="fa fa-heart"></i> By <a href="https://www.amitzinfy.com/" target="_blank">AMITZINFY PVT LTD</a></p>
                            </div>
                            <div class="back-to-top">
                                <i class="fa fa-angle-double-up"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->         		
        
        <!-- =========================================
        JavaScript Files
        ========================================== -->

        <!-- jQuery JS -->
        <script src="{{ asset('assets/js/assets/vendor/jquery-1.12.4.min.js') }}"></script>
        
        <!-- Poppers Js -->
        <script src="{{ asset('assets/js/assets/popper.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('assets/js/assets/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Js -->
        <script src="{{ asset('assets/js/assets/jquery.sticky.js') }}"></script>

        <!-- WOW JS -->
        <script src="{{ asset('assets/js/assets/wow.min.js') }}"></script>

        <!-- Smooth Scroll -->
        <script src="{{ asset('assets/js/assets/smooth-scroll.js') }}"></script>

        <!-- Mean Menu -->
        <script src="{{ asset('assets/js/assets/jquery.meanmenu.min.js') }}"></script>

        <!-- News Ticker -->
        <script src="{{ asset('assets/js/assets/jquery.newsticker.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script src="{{ asset('assets/js/assets/owl.carousel.min.js') }}"></script>

        <!-- Magnific Popup -->
        <script src="{{ asset('assets/js/assets/jquery.magnific-popup.min.js') }}"></script>

        <!-- Syotimer -->
        <script src="{{ asset('assets/js/assets/jquery.syotimer.min.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

    </body>
</html>