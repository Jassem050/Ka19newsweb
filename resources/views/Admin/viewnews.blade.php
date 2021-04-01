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
                    <i class="fa fa-tachometer"></i> Dashboard </a>
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
                            <a class="dropdown-item" href="#!">Profile</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                   <div class="card">
                       <div class="card-header">News</div>
                       <div class="card-body">

                        @if(Session::has('success')) 
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{Session::get('success')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                            @endif
                            @if(Session::has('error'))
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{Session::get('error')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>    
                            @endif
                            @if(Session::has('warning'))
                              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{Session::get('warning')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>    
                            @endif
                          <div class="table table-responsive">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>Category</th>
                                       <th>Language</th>
                                       <th>Title</th>
                                       <th>Content</th>
                                       <th>Image</th>
                                       <th>Place</th>
                                       <th>Date/Time</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($news as $value)
                                   <tr>
                                       <td>{{ $value->category_name }}</td>
                                       <td>{{ $value->language_name }}</td>
                                       <td>{{ $value->news_title }}</td>
                                       <td>
                                          <div class="cscroll">{{ $value->news_content }}</div>
                                        </td>
                                       <td>
                                            <img src="{{ asset('admin/news/'.$value->news_image) }}" width="100" height="100"><br>
                                            <button class="btn btn-info" data-toggle="modal" data-target="#uploadpic" style="margin-left: 7%;margin-top: 1%;">Update</button>
                                        </td>
                                       <td>{{ $value->news_place }}</td>
                                       <td>{{ $value->news_date }}/{{ $value->news_time }}</td>
                                       <td>
                                            <a href="/editnews/{{ $value->news_id }}" class="btn btn-primary"> Edit </a>
                                            <a onclick="return confirm('Are you sure to delete?')" href="/delnews/{{ $value->news_id }}" class="btn btn-danger"> Delete </a>
                                        </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
                           </div>
                       </div>
                   </div>
                </div>
            </main>
        </div>
    </div>

     <!-- The Modal -->
        <div class="modal fade" id="uploadpic">
            <div class="modal-dialog">
                <div class="modal-content">
                
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload Image</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    @foreach($news as $value)
                    <h6 class="text-center"><img class="img-responsive" src="{{ asset('admin/news/'.$value->news_image) }}" id="profile-img-tag" width="295" height="200" /></h6>
                    @endforeach
                    <form method="post" action="/updatenewspic" class="form-group" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @foreach($news as $value)
                        <input type="hidden" name="nid" value="{{ $value->news_id }}">
                        <input type="hidden" name="news_img" value="{{ $value->news_image }}">
                        <label>Upload Photo</label>
                        <input type="file" name="photo" pattern="" class="form-control" id="profile-img" onchange="readURL(this);" required=""><br>
                        @endforeach
                        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                    </form>

                </div>    
                </div>
            </div>
        </div>
    <!-- End modal -->

    <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
 
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/spur.js') }}"></script>


    <script>
        window.setTimeout(function() {
        $(".alert").fadeTo(300, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag')
                    .attr('src', e.target.result)
                    .width(295)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

</body>

</html>