<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->

    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/vendors/icheck/skins/all.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/register.css') }}">
    <!--end of page level css-->
</head>

<body>
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX">
            <img src="{{ asset('frontend/images/geeky-social-logo.png') }}" class="logo_position"" alt="logo" class="img-responsive mar">
            <h3 class="text-primary">Register</h3>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus>
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="password" class="form-control" id="Password1" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="password" class="form-control" id="Password2" name="password_confirmation" placeholder="Conform Password" required>
                </div>
                <input type="submit" class="btn btn-block btn-primary" value="Sign up">
                Have account already? Please go to <a href="/login"> Sign In</a>
            </form>
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
        $("input[type='checkbox'],input[type='radio']").iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
    });
</script>
</body>
</html>
