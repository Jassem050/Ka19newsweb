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
                        <div class="card-header">Add News</div>
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
                            <form method="post" action="/addnewsqry" class="form-group" enctype="multipart/form-data" style="width: 65%;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="admin" value="{{ Session()->get('admin') }}">
                                <label>Language</label>
                                <select name="lid" id="lid" class="form-control" required="">
                                    <option value="">Select</option>
                                    @foreach($lng as $item)
                                    <option value="{{ $item->language_id }}">{{ $item->language_name }}</option>
                                    @endforeach
                                </select><br>
                                <label>Category</label>
                                <select name="cat_id" id="cat_id" class="form-control" required="">
                                    <option value="">Select</option>
                                </select><br>
                                <label>News Title</label>
                                <input type="text" name="ntitle" class="form-control" required=""><br> 
                                <label>News Content</label>
                                <textarea name="content" id="summernote" class="form-control" required="" style="resize: none;"></textarea><br> 
                                <label>News Image &nbsp;&nbsp;<span><a href="https://webp-converter.com/" target="_blank">WebP Converter</a></span></label>
                                <input type="file" name="image" class="form-control" accept="image/webp" required=""><br>
                                <label>News Image Caption</label> 
                                <input type="text" name="imgcap" class="form-control" required=""><br>
                                <label>Place</label>
                                <input type="text" name="place" class="form-control" required=""><br> 
                                <label>Breaking New(Optional*)</label>
                                <select name="break" class="form-control" required="">
                                    <option value="">Select</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select><br>
                                <input type="submit" name="add" class="btn btn-info" value="Add News">
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Script -->
    <script src="{{ asset('admin/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
 
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/spur.js') }}"></script>

    <!-- Summer Note -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <!-- End -->

    <script>
         $(document).ready(function() {
        $('#lid').on('change', function() {
            var lID = $(this).val();
            if(lID) {
                $.ajax({
                    url: '/findCatID/'+lID,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                      if(data){
                        $('#cat_id').empty();
                        $('#cat_id').focus;
                        $('#cat_id').append('<option value="">-- Select Category --</option>'); 
                        $.each(data, function(key, value){
                        $('select[name="cat_id"]').append('<option value="'+ value.category_id +'">' + value.category_name+ '</option>');
                    });
                  }else{
                    $('#cat_id').empty();
                  }
                  }
                });
            }else{
              $('#cat_id').empty();
            }
        });
    });


      $('#summernote').summernote({
        placeholder: 'News Content',
        tabsize: 2,
        height: 160
      });    
    </script>

</body>

</html>