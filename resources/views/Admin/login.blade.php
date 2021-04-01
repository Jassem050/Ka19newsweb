<!DOCTYPE html>
<html>
<head>
    <title>KA19NEWS ADMIN LOGIN</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">

    <!-- FontAwsome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fontawesome/css/font-awesome.min.css') }}">
</head>
<body class="login-body">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 shadow p-3 mb-5 rounded login-card">
            <div class="card logincard">
                <img src="{{ asset('admin/images/icon/account.svg') }}" class="card-img-top login-icon" alt="...">
                <div class="card-body">
                    <form method="post" action="/adminlogin">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="uname" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                            </div>
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" name="login" class="btn btn-info btn-block" value="LOG-IN">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script type="text/javascript" src="{{ asset('admin/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
</html>