<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Digitco</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/css_files/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css_files/bootstrap-rtl.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/css_files/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/css_files/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href=" {{ asset('css/css_files/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <script src="{{ asset('js/js_files/html5shiv.min.js')}}"></script>
    <script src="{{ asset('js/js_files/respond.min.js')}}"></script>
</head>
<!-- body -->
<body class="main-layout">
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>

<header>
    <div class="head-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="email"> <a href="#">نشانی ایمیل : demo@gmail.com</a> </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="icon"> <i> <a href="#"><img src="icon/facebook.png"></a></i> <i> <a href="#"><img src="icon/Twitter.png"></a></i> <i> <a href="#"><img src="icon/linkedin.png"></a></i> <i> <a href="#"><img src="icon/google+.png"></a></i> </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="contact"> <a href="#">تماس با ما : +980000000</a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="#"></a> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <div class="menu-area">
                    <div class="limit-box">
                        <nav class="main-menu">
                            <ul class="menu-area-main">
                                <li class="{{request()->is('/')         ? 'active' : ''}}"> <a href="{{route('index')}}"    >خانه</a> </li>
                                <li class="{{request()->is('about')     ? 'active' : ''}}"> <a href="{{route('aboutus')}}"  >درباره ما</a> </li>
                                <li class="{{request()->is('currency')  ? 'active' : ''}}"> <a href="{{route('currency')}}" > مسائل مالی</a> </li>
                                <li class="{{request()->is('team')      ? 'active' : ''}}"> <a href="{{route('team')}}"     >همکاری با تیم ما</a> </li>
                                <li class="{{request()->is('contact')   ? 'active' : ''}}"> <a href="{{route('contact')}}"  >تماس با ما</a> </li>
                                <li> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>

@yield('content')

<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Contact">
                        <h3>تماس با ما</h3>
                        <ul class="contant_icon">
                            <li> <a href="#"><img src="{{ asset('icon/location.png')}}"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/tellephone.png')}}"></a></li>
                            <li> <a href="#"><img src=" {{ asset('icon/email.png')}}"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="Social">
                        <h3>شبکه های اجتماعی</h3>
                        <ul class="socil_link">
                            <li><a href="#"><img src="{{ asset('icon/fb.png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('icon/Tw.png')}}"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/lin.png')}}"></a></li>
                            <li> <a href="#"><img src="{{ asset('icon/insta.png')}}"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="newsletter">
                        <h3>خبرنامه</h3>
                        <input class="new" placeholder="آدرس ایمیل خود را وارد کنید" type="Enter your email" >
                        <button class="subscribe">اشتراک گذاری</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>Copyright 2019 All Right Reserved By <a href="http://html.design">Free html Templates</a></p>
        </div>
    </div>
</footer>

<script src="{{ asset('js/js_files/jquery.min.js')}}"></script>
<script src="{{ asset('js/js_files/popper.min.js')}}"></script>
<script src="{{ asset('js/js_files/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/js_files/jquery-3.0.0.min.js')}}"></script>
<script src="{{ asset('js/js_files/lugin.js')}}"></script>

<script src="{{ asset('js/js_files/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('js/js_files/custom.js')}}"></script>
</body>
</html>
