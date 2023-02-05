<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FT5VZ68F39"></script>
    <meta name="monetag" content="7c0a4ee7f183dfb4038983c92a42c6b0">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FT5VZ68F39');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5856356654304665" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="author" content="ASAN Webs Development">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <link rel="shortcut icon" href="{{ asset('landing/assets/svg/favi.svg') }}">
    <title>{{ env('APP_NAME') }} | {{ env('APP_DESC') }}</title>
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/materialdesignicons.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/colors/theme01.css') }}" id="option-color">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">
            <div class="menu-overlay"></div>
            <div class="menu-close-btn"><i class="mdi mdi-close-circle-outline"></i></div>
            <a class="navbar-brand brand-logo mr-4" href="index-2.html">
                <h2 class="text-white">{{ env('APP_NAME') }}</h2>
            </a>
            <div class="navbar-collapse collapse justify-content-center" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="{{ route('index') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Sign In</a>
                    </li>
                </ul>

            </div>
            <div class="contact_btn">
                <a href="{{ route('register') }}" class="btn btn-sm">Open Account Today</a>
                <button class="navbar-toggler ml-2 p-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
        </div>

    </nav>

    <!-- End Navbar -->
    <!-- Home Start-->
    <section class="theme-bg overflow-hidden home-section" id="home">
        <div id="particles-js">
        </div>
        <div class="waves-bg-img home-bg">
            <div class="container">
                <div class="owl-carousel owl-theme main-slider">
                    <div class="item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-fadeInUp">
                                    <h2 class="heading">
                                        TEMP EMAIL
                                    </h2>
                                    <p class="para-txt">
                                        Make Profits Unaffected by Market Fluctuations
                                    </p>
                                    <div class="learn-more">
                                        <a href="{{ route('register') }}" class="btn btn-white rounded-pill text-white">Create Account</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="img-fadeInRight">
                                    <img src="{{ asset('assets/images/football.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')

    <footer class="footer theme-bg overflow-hidden pb-4">
        <div class="container footer-bottom">
            <div class="row">
                <div class="col-12">
                    <div class="mb-30">
                        <div class="text-center">
                            <h2 class="text-white">{{ env('APP_NAME') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="foot_desc mt-4 pt-4">
                        <p class="mb-0 text-center">{{ date('Y') }} &copy; <span class="text-white font-weight-bold">{{ env('APP_NAME') }}.</span> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"></i></a>
    <script src="{{ asset('landing/js/jquery.js') }}"></script>
    <script src="{{ asset('landing/js/popper.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('landing/js/wow.js') }}"></script>
    <script src="{{ asset('landing/js/particles.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>
    <x-alert />
</body>

</html>