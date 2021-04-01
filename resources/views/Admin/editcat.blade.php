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
                       <div class="card-header">Update Category</div>
                       <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                               <form method="post" action="/editcatqry" class="form-group" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    @foreach($cat as $value)
                                    <input type="hidden" name="cat_id" value="{{ $value->category_id }}">
                                    <label>Category</label>
                                    <input type="text" name="cat" class="form-control" value="{{ $value->category_name }}" required=""><br>
                                    <label>Language</label>
                                    <select name="lid" id="lid" class="form-control" required="" style="resize: none;">
                                        <option value="{{ $value->language_id }}">{{ $value->language_name}}</option>
                                        <option disabled="">-------------------------------------</option>
                                        <option disabled="">-------------------------------------</option>
                                        @foreach($lng as $items)
                                        <option value="{{ $items->language_id }}">{{ $items->language_name }}</option>
                                        @endforeach
                                    </select><br>
                                    <input type="hidden" name="lnid" id="lnid" value="{{ $value->language_name }}" class="form-control">
                                    @endforeach
                                    <input type="submit" name="Add" class="btn btn-info" value="Update">
                                </form>
                           </div>
                           <div class="col-md-4" style="margin-left: 10%;">
                                <h5>Category Image</h5>
                                @foreach($cat as $item)
                                <img src="{{ asset('admin/category/'.$item->category_image) }}" width="200" height="200">
                                @endforeach
                                <br>
                                <button class="btn btn-info" data-toggle="modal" data-target="#uploadpic" style="width:64%;">Upload & Update</button>
                           </div>
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
                    <h6 class="text-center"><img class="img-responsive" src="{{ asset('admin/category/'.$item->category_image) }}" id="profile-img-tag" width="295" height="200" /></h6>
                    <form method="post" action="/updatecategorypic" class="form-group" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="cid" value="{{ $item->category_id }}">
                        <input type="hidden" name="cat_img" value="{{ $item->category_image }}">
                        <label>Upload Photo</label>
                        <input type="file" name="photo" pattern="" class="form-control" id="profile-img" onchange="readURL(this);" required=""><br>
                        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                    </form>

                </div>    
                </div>
            </div>
        </div>
    <!-- End modal -->


    <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
 
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/spur.js') }}"></script>
     <script>
         $(document).ready(function() {
        $('#lid').on('change', function() {
            var lID = $(this).val();
            if(lID) {
                $.ajax({
                    url: '/findLngName/'+lID,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
                    success:function(data) {
                        //console.log(data);
                      if(data){
                        $('#lnid').empty();
                        $('#lnid').focus;
                        // $('#lnid').append('<option value="">-- Select Category --</option>'); 
                        $.each(data, function(key, value){
                            // alert(value.language_name);
                        $('#lnid').val(value.language_name);
                    });
                  }else{
                    $('#lnid').empty();
                  }
                  }
                });
            }else{
              $('#lnid').empty();
            }
        });
    });  
    </script>
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