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
                                    <li class="list-inline-item"><i class="fa fa-home"><a href="{{ url('/') }}"></i>Home</a></li>
                                    <!-- <li class="list-inline-item"><a href="{{ url('/Advertise') }}">Advertise</a></li> -->
                                    <li class="list-inline-item"><a href="{{ url('/') }}">English</a></li>
                                    @foreach($lng as $llng)
                                    <li class="list-inline-item"><a href="/news/{{ $llng->language_id }}/{{ $llng->language_name }}">{{ $llng->language_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bar-social text-right">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/ka19news/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/ka19_news"><i class="fa fa-twitter" target="_blank"></i></a></li>
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
                            <a href="#"><img src="{{ asset('front/images/logo/LOGO.webp') }}" alt="" class="img-fluid web-logo"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="searchbar text-right">
                            <div class="clock text-right">
                                <span id="dg-clock"></span>
                            </div>
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

        <!-- About Area -->
        <section class="about">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-6">
        				<div class="owl-carousel about-slider">
                            <div class="slider-content">
                            	<img src="images/about-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="slider-content">
                            	<img src="images/about-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
    				</div>
    				<div class="col-lg-6">
    					<div class="img-content">
    						<h4>It is usually composed of several sentences that together develop one.</h4>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione autem neque voluptatibus voluptate voluptates debitis facere, aspernatur, eum harum, totam eius. Fuga perspiciatis consequuntur reiciendis totam natus recusandae debitis nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, quisquam. Natus debitis veniam cum placeat laborum voluptates. Quae voluptate quis, sed vel veritatis ipsum consequuntur distinctio. Doloremque iste temporibus id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus pariatur totam ipsum, similique impedit voluptates rem earum expedita, modi, ipsam distinctio quaerat corrupti soluta suscipit! Recusandae impedit architecto, quas hic.</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 col-sm-12">
    					<div class="about-box text-center">
    						<i class="fa fa-thumbs-up"></i>
    						<h6>Latest News</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, ad, ratione! Officia doloremque.</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 col-sm-12">
    					<div class="about-box text-center">
    						<i class="fa fa-cloud-download"></i>
    						<h6>Quick Upload</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, ad, ratione! Officia doloremque.</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 col-sm-12">
    					<div class="about-box text-center">
    						<i class="fa fa-question"></i>
    						<h6>Live Support</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, ad, ratione! Officia doloremque.</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 col-sm-12">
    					<div class="about-box text-center">
    						<i class="fa fa-star"></i>
    						<h6>News Rating</h6>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, ad, ratione! Officia doloremque.</p>
    					</div>
    				</div>
    				<div class="col-lg-6">
    					<div class="why-us">
    						<h4>WHY CHOOSE US</h4>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quas quam nihil porro error eum neque debitis ipsa architecto! Quae cum cupiditate, debitis et asperiores optio dolor eius nulla aliquid.</p>
    						<ul class="list-unstyled">
    							<li><i class="fa fa-check"></i>It is usually composed of several sentences.</li>
    							<li><i class="fa fa-check"></i>It is usually composed of several sentences.</li>
    							<li><i class="fa fa-check"></i>It is usually composed of several sentences.</li>
    							<li><i class="fa fa-check"></i>It is usually composed of several sentences.</li>
    							<li><i class="fa fa-check"></i>It is usually composed of several sentences.</li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-lg-6">
    					<div class="testimonial">
    						<h4>OUR CLIENTS OPINION</h4>
    						<div class="owl-carousel testimonial-slider">
                            	<div class="testimonial-content text-center">
                            		<img src="images/client-1.jpg" alt="">
                            		<h6>DAVID BRYAN</h6>
                            		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quas quam nihil porro error eum neque debitis ipsa architecto.</p>
                            	</div>
                            	<div class="testimonial-content text-center">
                            		<img src="images/client-2.jpg" alt="">
                            		<h6>ANGEL BRYAN</h6>
                            		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quas quam nihil porro error eum neque debitis ipsa architecto.</p>
                            	</div>
                            </div>
    					</div>
    				</div>
					<div class="col-md-12">
						<div class="team">
							<h4>OUR CORE TEAM MEMBER</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="team-member text-center">
							<img src="images/team-1.jpg" class="img-fluid" alt="">
							<div class="team-layer">
								<h6>DAVID BROWN</h6>
								<p>G. Manager</p>
								<ul class="list-unstyled list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="team-member text-center">
							<img src="images/team-2.jpg" class="img-fluid" alt="">
							<div class="team-layer">
								<h6>DAVID BROWN</h6>
								<p>G. Manager</p>
								<ul class="list-unstyled list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="team-member text-center">
							<img src="images/team-3.jpg" class="img-fluid" alt="">
							<div class="team-layer">
								<h6>DAVID BROWN</h6>
								<p>G. Manager</p>
								<ul class="list-unstyled list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="team-member text-center">
							<img src="images/team-4.jpg" class="img-fluid" alt="">
							<div class="team-layer">
								<h6>DAVID BROWN</h6>
								<p>G. Manager</p>
								<ul class="list-unstyled list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!-- End About Area -->

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
                                    <li><a href="{{ url('/') }}"><i class="fa fa-caret-right"></i>Home</a></li>
                                    <li><a href="{{ url('/about_us') }}"><i class="fa fa-caret-right"></i>About Us</a></li>
                                    <li><a href="{{ url('/Advertise') }}"><i class="fa fa-caret-right"></i>Advertise</a></li>
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

</html>