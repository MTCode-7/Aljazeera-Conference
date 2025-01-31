<!DOCTYPE html>
<html lang="en">

<head>
    <title>Category Page v1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fontawesome-5.0.8/css/fontawesome-all.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->



    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">



    {{--     <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome-5.0.8/css/fontawesome-all.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================--> --}}
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="topbar">
                <div class="content-topbar container h-100">
                    <div class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>
                                New York, NY
                            </span>

                            <img class="m-b-1 m-rl-8" src="{{ asset('images/icons/icon-night.png') }}" alt="IMG">

                            <span>
                                HI 58° LO 56°
                            </span>
                        </span>

                        <a href="#" class="left-topbar-item">
                            About
                        </a>

                        <a href="#" class="left-topbar-item">
                            Contact
                        </a>

                        @guest
                            <a href="{{ route('register') }}" class="left-topbar-item">
                                Sing up
                            </a>

                            <a href="{{ route('login') }}" class="left-topbar-item">
                                Log in
                            </a>
                        @endguest
                    </div>

                    <div class="right-topbar">
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-youtube"></span>
                        </a>
                        @auth
                            @if (Auth::user()->utype == 'admin')
                                <a href="{{ route('admin.index') }}" class="btn btn-primary">
                                    Admin
                                </a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->
                <div class="logo-mobile">
                    {{-- <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a> --}}
                    <a href="index.html"><img src="{{ asset('images/2.jpg') }}" alt="IMG-LOGO" width="50"></a>
                </div>
                @auth
                    @if (Auth::user()->utype == 'admin')
                        <a href="{{ route('admin.index') }}" class="btn btn-primary">
                            Admin
                        </a>
                    @endif
                @endauth
                
                <p dir="rtl">موتمر الجزيرة</p>
                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>

            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="topbar-mobile">
                    <li class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>
                                New York, NY
                            </span>

                            <img class="m-b-1 m-rl-8" src="{{ asset('images/icons/icon-night.png') }}" alt="IMG">

                            <span>
                                HI 58° LO 56°
                            </span>
                        </span>
                    </li>

                    <li class="left-topbar">
                        <a href="#" class="left-topbar-item">
                            About
                        </a>

                        <a href="#" class="left-topbar-item">
                            Contact
                        </a>

                        @guest
                            <a href="{{ route('register') }}" class="left-topbar-item">
                                Sing up
                            </a>

                            <a href="{{ route('login') }}" class="left-topbar-item">
                                Log in
                            </a>
                        @endguest
                    </li>

                    <li class="right-topbar">
                        <a href="#">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-pinterest-p"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-vimeo-v"></span>
                        </a>

                        <a href="#">
                            <span class="fab fa-youtube"></span>
                        </a>
                    </li>
                </ul>

                <ul class="main-menu-m">
                    <li>
                        <a href="index.html">Home</a>
                        <ul class="sub-menu-m">
                            <li><a href="index.html">Homepage v1</a></li>
                            <li><a href="home-02.html">Homepage v2</a></li>
                            <li><a href="home-03.html">Homepage v3</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="category-01.html">News</a>
                    </li>

                    <li>
                        <a href="category-02.html">Entertainment </a>
                    </li>

                    <li>
                        <a href="category-01.html">Business</a>
                    </li>

                    <li>
                        <a href="category-02.html">Travel</a>
                    </li>

                    <li>
                        <a href="category-01.html">Life Style</a>
                    </li>

                    <li>
                        <a href="category-02.html">Video</a>
                    </li>

                    <li>
                        <a href="#">Features</a>
                        <ul class="sub-menu-m">
                            <li><a href="category-01.html">Category Page v1</a></li>
                            <li><a href="category-02.html">Category Page v2</a></li>
                            <li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
                            <li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
                            <li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
                            <li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
                            <li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>

                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>
                </ul>
            </div>

            <!--  -->
            <div class="wrap-logo container">
                <!-- Logo desktop -->
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('images/2.jpg') }}" alt="LOGO" width="80"></a>
                </div>

                <!-- Banner -->
                <div class="banner-header">
                    <a href="#"><img src="{{ asset('images/banner-01.jpg') }}" alt="IMG"></a>
                </div>
            </div>

            <!--  -->
            <div class="wrap-main-nav">
                <div class="main-nav">
                    <!-- Menu desktop -->
                    <nav class="menu-desktop">
                        <a class="logo-stick" href="index.html">
                            <img src="{{ asset('images/1.jpg') }}" alt="LOGO">
                        </a>

                        <ul class="main-menu">
                            <li class="mega-menu-item {{ Route::currentRouteName() == 'blog.index'  ? 'main-menu-active' : '' }}">
                                <a href="{{route('blog.index')}}">Home</a>
                            </li>

                            <li class="mega-menu-item {{ Route::currentRouteName() == 'about'  ? 'main-menu-active' : '' }}">
                                <a href="{{route('about')}}">About us</a>
                            </li>
                            <li class="mega-menu-item {{ Route::currentRouteName() == 'contact'  ? 'main-menu-active' : '' }}">
                                <a href="{{route('contact')}}">Contact us</a>
                            </li>

                            <li>
                                <a href="#">Features</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = session()->get('danger'))
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @endif

    @if ($message = session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif


    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="bg2 p-t-40 p-b-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <a href="index.html">
                                <img class="max-s-full" src="{{ asset('images/icons/logo-02.png') }}"
                                    alt="LOGO">
                            </a>
                        </div>

                        <div>
                            <p class="f1-s-1 cl11 p-b-16">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor magna eget
                                elit efficitur, at accumsan sem placerat. Nulla tellus libero, mattis nec molestie at,
                                facilisis ut turpis. Vestibulum dolor metus, tincidunt eget odio
                            </p>

                            <p class="f1-s-1 cl11 p-b-16">
                                Any questions? Call us on (+1) 96 716 6879
                            </p>

                            <div class="p-t-15">
                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-facebook-f"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-twitter"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-pinterest-p"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-vimeo-v"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-youtube"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <h5 class="f1-m-7 cl0">
                                Popular Posts
                            </h5>
                        </div>

                        <ul>
                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="images/popular-post-01.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Donec metus orci, malesuada et lectus vitae
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 17
                                    </span>
                                </div>
                            </li>

                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="images/popular-post-02.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Lorem ipsum dolor sit amet, consectetur
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 16
                                    </span>
                                </div>
                            </li>

                            <li class="flex-wr-sb-s p-b-20">
                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="images/popular-post-03.jpg" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            Suspendisse dictum enim quis imperdiet auctor
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        Feb 15
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <h5 class="f1-m-7 cl0">
                                Category
                            </h5>
                        </div>

                        <ul class="m-t--12">
                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    Fashion (22)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    Technology (29)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    Street Style (15)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    Life Style (28)
                                </a>
                            </li>

                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    DIY & Crafts (16)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg11">
            <div class="container size-h-4 flex-c-c p-tb-15">
                <span class="f1-s-1 cl0 txt-center">
                    Copyright © 2018

                    <a href="#"
                        class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>


    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
