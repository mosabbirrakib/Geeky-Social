<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->

    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/vendors/icheck/skins/all.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/login.css') }}">
    <!--end of page level css-->
</head>

<body>
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX">
            <div class="box1">
            <img src="{{ asset('frontend/images/geeky-social-logo.png') }}" class="logo_position"" alt="logo" class="img-responsive mar">
            <h3 class="text-primary">Admin Login</h3>
            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="checkbox text-left">
                    <label>
                        <input type="checkbox">  Remember Password
                    </label>
                </div>
                <input type="submit" class="btn btn-block btn-primary" value="Login">
            </form>
            </div>
        <div class="bg-light animation flipInX">
            <a href="forgot.html">Forgot Password?</a>
        </div>
        </div>
    </div>
    <!-- //Content Section End -->
</div>
<!--global js starts-->
<script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!--global js end-->
<script type="text/javascript" src="{{ asset('frontend/vendors/icheck/icheck.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("input[type='checkbox']").iCheck({
            checkboxClass: 'icheckbox_minimal-blue'
        });
    });
</script>
</body>
</html>
