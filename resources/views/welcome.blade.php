<!DOCTYPE html>
<html>
<head>
    <title>Ka19News</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>
<!-- Main Header -->
<header class="main-header shadow-lg bg-white rounded">
   <nav class="navbar navbar-expand-md navbar-dark bg-light">

<!--  Show this only on mobile to medium screens  -->
  <a class="navbar-brand d-lg-none" href="#"><img class="main-logo img-fluid" src="{{ asset('front/images/logo/LOGO.png') }}"></a>

  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!--  Use flexbox utility classes to change how the child elements are justified  -->
  <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@ka19news.com</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 9538895043</a>
      </li>
    </ul>
    
    
<!--   Show this only lg screens and up   -->
    <a class="navbar-brand d-none d-lg-block" href="#"><img class="main-logo img-fluid" src="{{ asset('front/images/logo/LOGO.png') }}"></a>
    
    
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      </li>
    </ul>
  </div>
</nav>
</header>

<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav text-center" style="margin-left: 2%;">
            @foreach($cat as $value)
                <a href="/category_news/{{ $value->category_id }}" class="nav-item nav-link text-white">{{ $value->category_name }}</a>
            @endforeach    
            </div>
        </div>
    </nav>
</div>  


<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="http://eskimo.egemenerd.com/wp-content/uploads/2018/05/product14-600x600.jpg">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <div class="news-content">
                                            <a href="#"><h2>A crowd walks on a New York street  </h2></a>
                                            <p>Hub because the aformentioned trio already offers its customers protections when dealing with the virtual currency.</p>
                                        
                                        </div>
                                        <div class="news-footer">
                                        <div class="news-author">
                                            <ul class="list-inline list-unstyled">
                                                <li class="list-inline-item text-secondary">
                                                    <i class="fa fa-user"></i>
                                                    Prashant Singh
                                                </li>
                                                <li class="list-inline-item text-secondary">
                                                    <i class="fa fa-user"></i>
                                                    Advice
                                                </li>
                                                <li class="list-inline-item text-secondary">
                                                    <i class="fa fa-eye"></i>
                                                    110 Views
                                                </li>
                                                <li class="list-inline-item text-secondary">
                                                    <i class="fa fa-calendar"></i>
                                                    26 June 2018
                                                </li>
                                            </ul>
                                        </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-md-12">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="http://eskimo.egemenerd.com/wp-content/uploads/2018/05/blog17.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{ asset('front/js/bootstrap.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>

</body>
</html>