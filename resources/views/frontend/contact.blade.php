<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact | Geeky Social</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">
    <!--end of global css-->
    <!--Home page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/aboutus.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!--end of Home page level css-->
    <style type="text/css">
        .about{
            height: 323px;
        }
        .footer-style{
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Header Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/GEEKYSMM/"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Sagorace"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCq_3LDhtuXEcdMedYPAH59w"> <i class="livicon" data-name="youtube" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/geeky"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li class="pull-right">
                        <ul class="list-inline icon-position">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="mailto:" class="text-white">{{ $settings->email }}</a></label>
                            </li>
                            <li>
                                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="tel:" class="text-white">{{ $settings->phone }}</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Start -->
        <nav class="navbar navbar-default container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> <i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ asset('frontend/images/geeky-social-logo.png') }}" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="/"> Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </header>
    <!-- //Header End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-md-6">
                <h2>Contact Form</h2>
                <form class="contact" action="{{ route('comment.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" name="email" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control input-lg no-resize" name="comment" rows="6" placeholder="Enter Comment"></textarea>
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- //Conatc Form Section End -->
        </div>
    </div>
    <!-- //Container End -->
    <!-- Footer Section Start -->
    <footer class="footer-style">
        <!-- Footer Container Start -->
        <div class="container footer-text">
            <!-- About Us Section Start -->
            <div class="col-sm-4">
                <h4>About Us</h4>
                <p style="text-align: justify;">
                    {{ $settings->about }}
                </p>
                <h4>Follow Us</h4>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/GEEKYSMM/"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Sagorace"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCq_3LDhtuXEcdMedYPAH59w"> <i class="livicon" data-name="youtube" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/geeky"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //About Us Section End-->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>{{ $settings->address }}</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone: {{ $settings->phone }}</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="success">
                        <a href="mailto:">{{ $settings->email }}</a></span>
                    </li>
                </ul>
            </div>
            <!-- //Contact Section End -->
            <!-- Recent post Section Start -->
            <div class="col-sm-4">
                <h4>Services</h4>
                @foreach($services as $service)
                <div class="media">
                    <div class="media-left media-top">
                        <a href="{{ route('services',$service->id) }}">
                            <img class="media-object" src="{{ asset('uploads/service/'.$service->image) }}" alt="{{ $service->title }}" style="height: 50px; width: 50px;">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">
                            {{ str_limit($service->description, 70) }}
                            <br />
                            <div class="pull-right"><i>{{ $service->title }}</i></div>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- //Recent Post Section End -->
        </div>
        <!-- Footer Container Section End -->
    </footer>
    <!-- //Footer Section End -->
    <!-- Copy right Section Start -->
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; Geeky Social, 2019</p>
        </div>
    </div>
    <!-- Copy right Section End -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/style-switcher.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/raphael.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/livicons-1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/josh_frontend.js') }}"></script>
    <!--global js end-->
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--page level js ends-->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script type="text/javascript">
                toastr.error('{{ $error }}');
            </script>
        @endforeach
    @endif
    {!! Toastr::message() !!}
</body>
</html>
