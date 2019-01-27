<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Geeky Social</title>
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
    <!--end of Home page level css-->
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
                    <li class="active">
                        <a href="/"> Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Services</a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#digital-contents">DIGITAL CONTENTS</a>
                            </li>
                            <li>
                                <a href="#social-media-marketing">SOCIAL MEDIA MARKETING</a>
                            </li>
                            <li>
                                <a href="#digital-products">DIGITAL PRODUCTS</a>
                            </li>
                            <li>
                                <a href="#video-marketing">VIDEO MARKETING</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('admin.login')}}">Admin</a>
                    </li>
                    @if (Auth::guest())
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="/register">Register</a>
                    </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('user.profile',Auth::user()->id) }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                <li><a href="{{ route('user.logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </header>
    <!-- //Header End -->
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        @foreach($sliders as $slider)
        <div class="item">
            <img src="{{ asset('uploads/slider/'.$slider->image) }}" alt="{{ $slider->title }}">
        </div>
        @endforeach
    </div>
    <!-- //Carousel End -->
    <!-- Container Start -->
    <!-- //Carousel End -->
    <!-- Container Start -->
    <div class="container">
        <!-- Service Section Start-->
        <div class="row">
            <!-- Responsive Section Start -->
            <div class="text-center">
                <h3 class="border-primary"><span class="heading_border bg-primary">Our Services</span></h3>
            </div>
            @foreach($services as $service)
            <div class="col-sm-6 col-md-3" id="{{ $service->slug }}">
                <div class="box">
                    <div class="box-icon">
                        <i class="livicon icon" data-name="{{ $icons[$loop->index] }}" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </div>
                    <div class="info">
                        <h3 class="success text-center" style="width: 220px;">{{ $service->title }}</h3>
                        <p>{{ str_limit($service->description, 250) }}</p>
                        <div class="text-right primary"><a href="{{ route('services',$service->id) }}">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- //Services Section End -->
    </div>
    <!-- Profiles Section End -->
    <div class="container">
        <div class="row">
            <!-- Profiles Start -->
            <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success">Profiles</span></h3>
            </div>
            <!-- Profiles End -->
            <div class="col-md-6 col-sm-12">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        @if (Auth::guest())
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                About </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                Profile </a>
                            </li>
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        @else
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                About </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                Profile </a>
                            </li>
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="media">
                                    <div class="media-left tab col-sm-12">
                                        <a href="#">
                                            @if($user->avatar > 0)
                                                <img class="media-object img-responsive" src="{{ asset('uploads/userprofile_pic/'.$user->avatar) }}" alt="image" style="width: 24%;">
                                            @else
                                                <img class="media-object img-responsive" src="{{ asset('uploads/userprofile_pic/default.jpg') }}" alt="image" style="width: 24%;">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <p style="text-align: justify;">
                                    {{ $user->about }}
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-8">
                                        <a href="#">
                                            @if($user->avatar > 0)
                                                <img class="media-object img-responsive" src="{{ asset('uploads/userprofile_pic/'.$user->avatar) }}" alt="image" style="width: 24%;">
                                            @else
                                                <img class="media-object img-responsive" src="{{ asset('uploads/userprofile_pic/default.jpg') }}" alt="image" style="width: 24%;">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="media-right media-middle tab col-sm-4">
                                        <strong>{{ $user->name }}</strong> <br>
                                        <strong>{{ $user->designation }}</strong>
                                    </div>
                                </div>
                                <br>
                                <p>
                                    <b>Email: </b>{{ $user->email }}<br>
                                    <b>Phone: </b>{{ $user->phone }}<br>
                                    <b>Address: </b>{{ $user->address }}
                                </p>
                            </div>
                        </div>
                        <!-- Tab-content End -->
                        @endif
                    </div>
                    <!-- //Tabbablw-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
        </div>
        <!-- //Profiles Section End -->
        <!-- What we are section Start -->
        <div class="row">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6">
                <div class="text-left">
                    <div>
                        <h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>
                    </div>
                </div>
                <img src="{{ asset('uploads/what_we_are/'.$settings->what_we_are_pic) }}" class="img-responsive">
                <p style="text-align: justify;">
                    {{ str_limit($settings->what_we_are, 250) }}
                </p>
                <p>
                    <div class="text-right primary"><a href="{{ route('what_we_are') }}">Read more</a></div>
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6" id="about">
                <div class="text-left">
                    <div>
                        <h4 class="border-success"><span class="heading_border bg-success">About Us</span></h4>
                    </div>
                </div>
                <img src="{{ asset('uploads/about/'.$settings->about_pic) }}" class="img-responsive">
                <p style="text-align: justify;">
                    {{ str_limit($settings->about, 250) }}
                </p>
                <p>
                    <div class="text-right primary"><a href="{{ route('about') }}">Read more</a>
                    </div>
                </p>
            </div>
            <!-- //About Us End -->
        </div>
        <!-- //What we are section End -->
    </div>
    <!-- //Container End -->
    <!-- Footer Section Start -->
    <footer>
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
    <!--page level js ends-->
</body>
</html>
