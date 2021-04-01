<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">

    <!-- FontAwsome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fontawesome/css/font-awesome.min.css') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('admin/css/spur.css') }}">
    <script src="{{ asset('admin/js/chart-js-config.js') }}"></script>
    <title>KA19NEWS::ADMIN</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="{{ url('/AdminDash') }}" class="spur-logo"><i class="fa fa-newspaper-o"></i> <span>KA19NEWS</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="{{ url('/AdminDash') }}" class="dash-nav-item">
                    <i class="fa fa-tachometer"></i> Dashboard 
                </a>

                <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa fa-cogs"></i> Language </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="{{ url('/AddLanguage') }}" class="dash-nav-dropdown-item">Add Language</a>
                        <a href="{{ url('/ViewLanguage') }}" class="dash-nav-dropdown-item">View Language</a>
                    </div>
                </div>   

                <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa fa-cogs"></i> Category </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="{{ url('/AddCategory') }}" class="dash-nav-dropdown-item">Add Category</a>
                        <a href="{{ url('/ViewCategory') }}" class="dash-nav-dropdown-item">View Category</a>
                    </div>
                </div>    

                <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa fa-newspaper-o"></i> News </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="{{ url('/AddNews') }}" class="dash-nav-dropdown-item">Add News</a>
                        <a href="{{ url('/ViewNews') }}" class="dash-nav-dropdown-item">View News</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown ">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa fa-list"></i> Advertisement </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="{{ url('/AddAdv') }}" class="dash-nav-dropdown-item">Add</a>
                        <a href="{{ url('/ViewAdv') }}" class="dash-nav-dropdown-item">View</a>
                    </div>
                </div>

                <div class="dash-nav-dropdown ">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa fa-list"></i> Tags </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="{{ url('/AddTag') }}" class="dash-nav-dropdown-item">Add</a>
                        <a href="{{ url('/ViewTag') }}" class="dash-nav-dropdown-item">View</a>
                    </div>
                </div>

                <!-- <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-file"></i> Layouts </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html" class="dash-nav-dropdown-item">Blank</a>
                        <a href="content.html" class="dash-nav-dropdown-item">Content</a>
                        <a href="login.html" class="dash-nav-dropdown-item">Log in</a>
                        <a href="signup.html" class="dash-nav-dropdown-item">Sign up</a>
                    </div>
                </div> -->
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="tools">
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="{{ url('/alogout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-primary">
                                <h3 class="stats-title"> Sign ups </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">114</div>
                                        <div class="stats-change">
                                            <span class="stats-percentage">+25%</span>
                                            <span class="stats-timeframe">from last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-success ">
                                <h3 class="stats-title"> Revenue </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fa fa-cart-arrow-down"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">$25,541</div>
                                        <div class="stats-change">
                                            <span class="stats-percentage">+17.5%</span>
                                            <span class="stats-timeframe">from last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-danger">
                                <h3 class="stats-title"> Open tickets </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('admin/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
 
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/spur.js') }}"></script>
</body>

</html>