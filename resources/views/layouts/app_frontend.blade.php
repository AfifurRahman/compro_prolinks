<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ url('frontend/images/logo/logo-prolinks.png') }}" type="image/x-icon" />
    <title>@yield('title', 'Prolinks')</title>

    <link href="{{ url('frontend/css/view.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="body-inner">
        <header id="header" data-transparent="true" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <div id="logo">
                        <a href="{{ route('home-frontend') }}">
                            <span class="logo-default"><img class="img-logo" src="{{ url('frontend/images/logo/logo-prolinks.png') }}"></span>
                            <span class="logo-dark"><img class="img-logo" src="{{ url('frontend/images/logo/logo-prolinks.png') }}"></span>
                        </a>
                    </div>
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li class="dropdown mega-menu-item"><a href="{{ route('home-advance') }}">Features</a></li>
                                    <li class="dropdown mega-menu-item"><a href="#">Resources</a></li>
                                    <li class="dropdown mega-menu-item"><a href="#">Pricing</a></li>
                                    <li class="dropdown mega-menu-item"><a href="#">Company</a></li>
                                    <li class="dropdown mega-menu-item"><a href="#">Contact us</a></li>
                                    <a href="" class="sign-in">Sign in</a>
                                    <a href="" class="sign-up">Sign Up</a>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget">
                                <a href="{{ route('home-frontend') }}">
                                    <img src="{{ url('frontend/images/logo/logo-prolinks.png') }}" class="img-footerlogo">
                                </a>
                                <div class="footer-contact">
                                    <p class="helper">Ask how Prolinks can help you.</p>
                                    <p class="contact-details">
                                    +6221 3972 6868<br>
                                    info@prolink.id
                                    </p>
                                </div>
                                <div class="footer-social-media">
                                    <a href=""><img src="{{ url('frontend/images/facebook.png') }}" class="social-media"></a>
                                    <a href=""><img src="{{ url('frontend/images/linkedin.png') }}" class="social-media"></a>
                                    <a href=""><img src="{{ url('frontend/images/instagram.png') }}" class="social-media"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-location">
                                <p class="footer-location-title">Location</p>
                                <p class="footer-location-details">
                                Ciputra International, Office Tower 3<br>
                                Floor 15 Unit 05<br>
                                Jl. Lingkar Luar Barat No. 101<br>
                                Jakarta 11740
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-link">
                                <p class="footer-link-title">Company</p>
                                <ul>
                                    <li><a href="" class="footer-link-item">About us</a></li>
                                    <li><a href="" class="footer-link-item">Contact support</a></li>
                                    <li><a href="" class="footer-link-item">Testimonial</a></li>
                                    <li><a href="" class="footer-link-item">Blog</a></li>
                                </ul>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="divider"></div>
                    <div class="end-footer">
                        <div class="text-left">
                            <p class="copyright-text">Copyright ©{{ date('Y') }} Prolinks</p>
                        </div>
                        <div class="text-right" >
                            <div class="policy-text">
                                <a href="" class="privacy-link">Privacy Policy</a>
                                <a href="" class="terms-link">Terms of use</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    @include('sweetalert::alert')
    <script src="{{ url('frontend/js/jquery.js') }}"></script>
    <script src="{{ url('frontend/js/plugins.js') }}"></script>
    <script src="{{ url('frontend/js/functions.js') }}"></script>
    <script src="{{ url('frontend/js/owl.carousel.js') }}"></script>
    @stack('scripts')
</body>
</html>