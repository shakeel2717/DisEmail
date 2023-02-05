<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta name="monetag" content="7c0a4ee7f183dfb4038983c92a42c6b0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FT5VZ68F39"></script>
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
    <link rel="shortcut icon" href="{{ asset('assets/svg/favi.svg') }}">
    <title>{{ env('APP_NAME') }} | {{ env('APP_DESC') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.1.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.1.0') }}">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    @livewireStyles
    @powerGridStyles
</head>

<body class="nk-body bg-white npc-default has-aside ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="{{ route('user.dashboard.index') }}" class="logo-link">
                                    <h2 class="text-dark">{{ env('APP_NAME') }}</h2>
                                </a>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <!-- <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-lg-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ auth()->user()->name }}</span>
                                                        <span class="sub-text">{{ auth()->user()->email }}</span>
                                                    </div>
                                                    <div class="user-action">
                                                        <a class="btn btn-icon me-n2" href="{{ route('user.profile.index') }}"><em class="icon ni ni-setting"></em></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('user.profile.index') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="{{ route('user.profile.index') }}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="{{ route('user.security.index') }}"><em class="icon ni ni-activity-alt"></em><span>Change Password</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#" onclick="document.getElementById('logout').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                    <form action="{{ route('logout') }}" id="logout" method="POST">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-lg-none mobile-nav-menu">
                                        <a href="#" class="toggle nk-quick-nav-icon me-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-aside content-active" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                                <div class="nk-sidebar-menu" data-simplebar>
                                    @if(auth()->user()->role == 'admin')
                                    <x-admin.nav />
                                    @elseif(auth()->user()->role == 'user')
                                    <x-nav />
                                    @endif
                                </div>
                                <div class="nk-aside-close">
                                    <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                                </div>
                            </div>
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    @yield('head')
                                    @yield('content')
                                </div>
                                <div class="nk-footer">
                                    <div class="container wide-xl">
                                        <div class="nk-footer-wrap g-2">
                                            <div class="nk-footer-copyright"> &copy; 2022 {{ env('APP_NAME') }}. All Rights Reserved.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-alert />
    <script src="{{ asset('assets/js/bundle.js?ver=3.1.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.1.0') }}"></script>
    <script src="{{ asset('assets/js/charts/gd-default.js?ver=3.1.0') }}"></script>
    @livewireScripts
    @powerGridScripts
    @yield("footer")

</body>

</html>