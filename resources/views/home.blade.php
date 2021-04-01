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

        <!-- Web Ticker -->
        <section class="top-news">
            <div class="container">
                <div class="news-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ticker d-flex justify-content-between">
                                <div class="news-head">
                                    <span>BREAKING NEWS<i class="fa fa-caret-right"></i></span>
                                </div>
                                <ul id="webTicker">
                                @foreach($breakingnews as $bn)
                                    @if((time() - strtotime($bn->news_time)) < 18000)                 
                                           <li><a href="/newsdetails/{{ $bn->news_id }}"><i class="fa fa-dot-circle-o"></i>{{ $bn->news_title }}</a></li>            
                                    @endif
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Web Ticker -->

        <!-- Slider Area -->
        <section class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 padding-fix-r">
                        <div class="owl-carousel owl-slider">
                        @foreach($rnews as $rnew)
                            <div class="slider-content">
                                <img src="{{ asset('admin/news/'.$rnew->news_image) }}" alt="" class="img-fluid rslider-image">
                                <div class="card-img-overlay">
                                    <p class="card-text text-white">{{ $rnew->news_date }}</p>
                                </div>
                                <div class="slider-layer">
                                    <p><a href="/newsdetails/{{ $rnew->news_id }}">{{ $rnew->news_title }}</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">{{ $rnew->category_name }}</li>
                                        <li class="list-inline-item">{{$rnew->created_at->diffForHumans()}}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 slider-fix">
                        <div class="slider-sidebar sidebar-o">
                            <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                                <div class="fb-page" data-href="https://www.facebook.com/ka19news" data-width="600" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ka19news"><a href="https://www.facebook.com/ka19news">ka19news</a></blockquote></div></div>
                        </div>
                        <div class="slider-sidebar">
                            
                           <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.instagram.com/ka19_news/" data-iframely-url="//cdn.iframe.ly/XqWz0ls"></a></div></div><script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
                           <br>

                          <a class="twitter-timeline" data-height="200" data-dnt="true" data-theme="light" href="https://twitter.com/ka19_news?ref_src=twsrc%5Etfw">Tweets by ka19_news</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Slider Area -->

        <!-- All News -->
        <section class="allnews">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="popular-top">
                            <h4>NEWS</h4>
                        </div>
                        <div class="owl-carousel popular-slider">
                            <div class="popular-item">
                                <div class="row">
                                @foreach($news as $new)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href="/newsdetails/{{ $new->news_id }}"><img src="{{ asset('admin/news/'.$new->news_image) }}" alt="" class="img-fluid nimage"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="/newsdetails/{{ $new->news_id }}">{{ str_limit($new->news_title, $limit = 50, $end = '...') }}</a></p>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">{{ $new->category_name }}</li>
                                                    <li class="list-inline-item">{{$new->created_at->diffForHumans()}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach    
                                </div>
                                {{ $news->onEachSide(3)->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="follow-widget">
                            <h4>ADVERTISEMENT</h4>
                            <ul class="list-unstyled clearfix">
                            @foreach($ads as $ad)
                                <li>
                                    <img class="img-fluid ad_image" src="{{ asset('admin/advertisement/'.$ad->ad_image) }}">
                                </li>
                            @endforeach    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End All News -->


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

    </body>
</html>