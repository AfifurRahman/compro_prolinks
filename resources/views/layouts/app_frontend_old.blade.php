@php
    use App\Models\InformationModel;
    use App\Models\ContentModel;
    use App\Models\ArtikelModel;

    $uri = Request::segment(1);
    $social_media = InformationModel::where('type_content', 3)->get();
    $contact = InformationModel::where('type_content', 2)->first();
    $industries = ContentModel::where('type_content', 2)->where('status', 1)->get();
    $new_insights = ArtikelModel::where('status', 1)->where('category_article_id', 1)->orderBy('id', 'DESC')->take(2)->get();

    $stickyNav = "dark submenu-light";
    if($uri != NULL){
        $stickyNav = "header-sticky sticky-active";
    }
@endphp

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ url('frontend/images/favicon.png') }}" type="image/x-icon" />
    <!-- <title>{{ config('app.name', 'Protemus Consulting') }}</title> -->
    <title>@yield('title', 'Protemus Consulting')</title>

    <!-- Scripts -->
    <link href="{{ url('frontend/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-582R11Q3LX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-582R11Q3LX');
    </script>
</head>
<body>
    <div class="body-inner">
        @if(\device::is_mobile())
            <header id="header" class="header-always-fixed">
                <div class="header-inner">
                    <div class="container">
                        <div id="logo">
                            <a href="{{ route('home-frontend') }}">
                                <span class="logo-default"><img src="{{ url('frontend/images/logo.png') }}"></span>
                                <span class="logo-dark"><img src="{{ url('frontend/images/logo.png') }}"></span>
                            </a>
                        </div>
                        <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                            <form class="search-form" action="{{ route('search') }}" method="get">
                                <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                                <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                            </form>
                        </div>
                        <div class="header-extras">
                            <ul>
                                <li>
                                    <a id="btn-search" href="#"> <i class="icon-search" style="color: #000;"></i></a>
                                </li>
                                @if(!\device::is_mobile())
                                    <li>
                                        <a class="btn btn-custom-consult" href="{{ route('contacts') }}"> Consult us</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div id="mainMenu-trigger">
                            <a class="lines-button x"><span class="lines"></span></a>
                        </div>
                        <div id="mainMenu">
                            <div class="container">
                                <nav>
                                    <ul>
                                        <li class="dropdown mega-menu-item"><a href="#">About us</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content" style="z-index: 999999;">
                                                    <div class="row">
                                                        @if(!\device::is_mobile())
                                                            <div class="col-lg-4">
                                                                <div class="menu-about-protemus">
                                                                    <h3>Protemus Consulting</h3>
                                                                    <p>At Protemus Consulting, we specialize in guiding international startups, mid-sized private equity firms, and growing companies through M&A, ensuring an exceptional journey in Indonesia.</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="col-lg-4">
                                                            <div class="menu-about-protemus">
                                                                <h3>About us</h3>
                                                                <ul>
                                                                    <a href="{{ route('about-us.overview') }}"><li>Overview</li></a>
                                                                    <a href="{{ route('about-us.key-values-principles') }}"><li>Key Values & Principles</li></a>
                                                                    <a href="{{ route('about-us.why-choose-us') }}"><li>Why Choose Us</li></a>
                                                                    <a href="{{ route('about-us.our-team') }}"><li>Our People & Leadership</li></a>
                                                                    <a href="{{ route('about-us.affiliation-partnership') }}"><li>Affiliation & Partnership</li></a>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="menu-about-featured {{ \device::is_mobile() ? 'boder-top-menu':'boder-left-menu' }}">
                                                                <h3 style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">Featured</h3>
                                                                @if(count($new_insights) > 0)
                                                                    @foreach($new_insights as $newsx)
                                                                        <div class="body-about-featured" style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">
                                                                            <a href="{{ route('detail-insights', $newsx->slug) }}">
                                                                                <p>
                                                                                    {!! strip_tags($newsx->judul) !!}<br>
                                                                                    <span>{{ date('F d', strtotime($newsx->created_at))}}, {{ date('Y', strtotime($newsx->created_at)) }}</span>
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown mega-menu-item"><a href="#">Industries</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="body-industries-protemus">
                                                                <h3>Industries</h3>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <ul class="menu-industries-protemus">
                                                                            <li><a href="{{ route('industries.all-industries') }}">All industries</a></li>
                                                                            @if(count($industries) > 0)
                                                                                @foreach($industries as $key => $industry)
                                                                                    @if($key <= 2)
                                                                                        <li><a href="{{ route('industries.detail-industries', $industry->slug) }}">{{ $industry->title }}</a></li>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="menu-industries-protemus">
                                                                            @if(count($industries) > 0)
                                                                                @foreach($industries as $key => $industry)
                                                                                    @if($key <= 6 && $key >= 3)
                                                                                        <li><a href="{{ route('industries.detail-industries', $industry->slug) }}">{{ $industry->title }}</a></li>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="menu-industries-protemus">
                                                                            @if(count($industries) > 0)
                                                                                @foreach($industries as $key => $industry)
                                                                                    @if($key >= 7 && $key <= 9)
                                                                                        <li><a href="{{ route('industries.detail-industries', $industry->slug) }}">{{ $industry->title }}</a></li>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="menu-about-featured {{ \device::is_mobile() ? 'boder-top-menu':'boder-left-menu' }}">
                                                                <h3 style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">Featured</h3>
                                                                @if(count($new_insights) > 0)
                                                                    @foreach($new_insights as $newsx1)
                                                                        <div class="body-about-featured" style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">
                                                                            <a href="{{ route('detail-insights', $newsx1->slug) }}">
                                                                                <p>
                                                                                    {!! $newsx1->judul !!}<br>
                                                                                    <span>{{ date('F d', strtotime($newsx1->created_at))}}, {{ date('Y', strtotime($newsx1->created_at)) }}</span>
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown mega-menu-item"><a href="#">Services</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="body-industries-protemus">
                                                                <h3>Services</h3>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <ul class="menu-industries-protemus">
                                                                            <li><a href="{{ route('services.all-services') }}">All services</a></li>
                                                                            <li><a href="{{ route('services.tas') }}">Transaction Advisory Services (TAS)</a></li>
                                                                            <li><a href="{{ route('services.due-diligence') }}">Due Diligence</a></li>
                                                                            <li><a href="{{ route('services.valuation') }}">Valuation</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <ul class="menu-industries-protemus">
                                                                            <li><a href="{{ route('services.debt-advisory') }}">Debt Advisory</a></li>
                                                                            <li><a href="{{ route('services.tax-advisory') }}">Tax Advisory</a></li>
                                                                            <li><a href="{{ route('services.technology-digital') }}">Technology & Digital Transformation Advisory</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="menu-about-featured {{ \device::is_mobile() ? 'boder-top-menu':'boder-left-menu' }}">
                                                                <h3 style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">Featured</h3>
                                                                @if(count($new_insights) > 0)
                                                                    @foreach($new_insights as $newsx2)
                                                                        <div class="body-about-featured" style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">
                                                                            <a href="{{ route('detail-insights', $newsx2->slug) }}">
                                                                                <p>
                                                                                    {!! $newsx2->judul !!}<br>
                                                                                    <span>{{ date('F d', strtotime($newsx2->created_at))}}, {{ date('Y', strtotime($newsx2->created_at)) }}</span>
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('insights') }}">Insights</a></li>
                                        @if(\device::is_mobile())
                                            <li>
                                                <a class="btn btn-custom-consult" href="{{ route('contacts') }}"> Consult us</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        @else
            <header id="header" data-transparent="{{ \device::is_mobile() ? 'false':'true' }}" data-fullwidth="true" class="{{ \device::is_mobile() ? '': $stickyNav }}">
                <div class="header-inner custom-gradient-header">
                    <div class="container">
                        <div id="logo">
                            <a href="{{ route('home-frontend') }}">
                                <span class="logo-default"><img src="{{ url('frontend/images/logo.png') }}"></span>
                                <span class="logo-dark"><img src="{{ url('frontend/images/logo.png') }}"></span>
                            </a>
                        </div>
                        <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                            <form class="search-form" action="{{ route('search') }}" method="get">
                                <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                                <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                            </form>
                        </div>
                        <div class="header-extras">
                            <ul>
                                <li>
                                    <a id="btn-search" href="#"> <i class="icon-search" style="color: #000;"></i></a>
                                </li>
                                @if(!\device::is_mobile())
                                    <li>
                                        <a class="btn btn-custom-consult" href="{{ route('contacts') }}"> Consult us</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div id="mainMenu-trigger">
                            <a class="lines-button x"><span class="lines"></span></a>
                        </div>
                        <div id="mainMenu">
                            <div class="container">
                                <nav>
                                    <ul>
                                        <li class="dropdown mega-menu-item"><a href="#">About us</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content" style="z-index: 999999;">
                                                    <div class="row">
                                                        @if(!\device::is_mobile())
                                                            <div class="col-lg-4">
                                                                <div class="menu-about-protemus">
                                                                    <h3>Protemus Consulting</h3>
                                                                    <p>At Protemus Consulting, we specialize in guiding international startups, mid-sized private equity firms, and growing companies through M&A, ensuring an exceptional journey in Indonesia.</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="col-lg-4">
                                                            <div class="menu-about-protemus">
                                                                <h3>About us</h3>
                                                                <ul>
                                                                    <a href="{{ route('about-us.overview') }}"><li>Overview</li></a>
                                                                    <a href="{{ route('about-us.key-values-principles') }}"><li>Key Values & Principles</li></a>
                                                                    <a href="{{ route('about-us.why-choose-us') }}"><li>Why Choose Us</li></a>
                                                                    <a href="{{ route('about-us.our-team') }}"><li>Our People & Leadership</li></a>
                                                                    <a href="{{ route('about-us.affiliation-partnership') }}"><li>Affiliation & Partnership</li></a>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="menu-about-featured {{ \device::is_mobile() ? 'boder-top-menu':'boder-left-menu' }}">
                                                                <h3 style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">Featured</h3>
                                                                @if(count($new_insights) > 0)
                                                                    @foreach($new_insights as $newsx)
                                                                        <div class="body-about-featured" style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">
                                                                            <a href="{{ route('detail-insights', $newsx->slug) }}">
                                                                                <p>
                                                                                    {!! strip_tags($newsx->judul) !!}<br>
                                                                                    <span>{{ date('F d', strtotime($newsx->created_at))}}, {{ date('Y', strtotime($newsx->created_at)) }}</span>
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown mega-menu-item"><a href="#">Industries</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="body-industries-protemus">
                                                                <h3>Industries</h3>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <ul class="menu-industries-protemus">
                                                                            <li><a href="{{ route('industries.all-industries') }}">All industries</a></li>
                                                                            @if(count($industries) > 0)
                                                                                @foreach($industries as $key => $industry)
                                                                                    @if($key <= 2)
                                                                                        <li><a href="{{ route('industries.detail-industries', $industry->slug) }}">{{ $industry->title }}</a></li>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="menu-industries-protemus">
                                                                            @if(count($industries) > 0)
                                                                                @foreach($industries as $key => $industry)
                                                                                    @if($key <= 6 && $key >= 3)
                                                                                        <li><a href="{{ route('industries.detail-industries', $industry->slug) }}">{{ $industry->title }}</a></li>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="menu-industries-protemus">
                                                                            @if(count($industries) > 0)
                                                                                @foreach($industries as $key => $industry)
                                                                                    @if($key >= 7 && $key <= 9)
                                                                                        <li><a href="{{ route('industries.detail-industries', $industry->slug) }}">{{ $industry->title }}</a></li>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="menu-about-featured {{ \device::is_mobile() ? 'boder-top-menu':'boder-left-menu' }}">
                                                                <h3 style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">Featured</h3>
                                                                @if(count($new_insights) > 0)
                                                                    @foreach($new_insights as $newsx1)
                                                                        <div class="body-about-featured" style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">
                                                                            <a href="{{ route('detail-insights', $newsx1->slug) }}">
                                                                                <p>
                                                                                    {!! $newsx1->judul !!}<br>
                                                                                    <span>{{ date('F d', strtotime($newsx1->created_at))}}, {{ date('Y', strtotime($newsx1->created_at)) }}</span>
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown mega-menu-item"><a href="#">Services</a>
                                            <ul class="dropdown-menu">
                                                <li class="mega-menu-content">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="body-industries-protemus">
                                                                <h3>Services</h3>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <ul class="menu-industries-protemus">
                                                                            <li><a href="{{ route('services.all-services') }}">All services</a></li>
                                                                            <li><a href="{{ route('services.tas') }}">Transaction Advisory Services (TAS)</a></li>
                                                                            <li><a href="{{ route('services.due-diligence') }}">Due Diligence</a></li>
                                                                            <li><a href="{{ route('services.valuation') }}">Valuation</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <ul class="menu-industries-protemus">
                                                                            <li><a href="{{ route('services.debt-advisory') }}">Debt Advisory</a></li>
                                                                            <li><a href="{{ route('services.tax-advisory') }}">Tax Advisory</a></li>
                                                                            <li><a href="{{ route('services.technology-digital') }}">Technology & Digital Transformation Advisory</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="menu-about-featured {{ \device::is_mobile() ? 'boder-top-menu':'boder-left-menu' }}">
                                                                <h3 style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">Featured</h3>
                                                                @if(count($new_insights) > 0)
                                                                    @foreach($new_insights as $newsx2)
                                                                        <div class="body-about-featured" style="margin-left: {{ \device::is_mobile() ? '0px':'64px' }}">
                                                                            <a href="{{ route('detail-insights', $newsx2->slug) }}">
                                                                                <p>
                                                                                    {!! $newsx2->judul !!}<br>
                                                                                    <span>{{ date('F d', strtotime($newsx2->created_at))}}, {{ date('Y', strtotime($newsx2->created_at)) }}</span>
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('insights') }}">Insights</a></li>
                                        @if(\device::is_mobile())
                                            <li>
                                                <a class="btn btn-custom-consult" href="{{ route('contacts') }}"> Consult us</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--end: Navigation-->
                    </div>
                </div>
            </header>
        @endif
        <div style="width: 100%;">
            @yield('content')
        </div>

        @if($uri != "contacts")
            <div class="data-block-help">
                <div class="body-block-help">
                    <h3>How can we help you?</h3>
                    <p>Get in touch with us or find an office closest to you.</p>
                    <div class="body-btn-block-help">
                        <a href="{{ route('contacts') }}" class="btn btn-custom-block-help">
                            Get in touch
                        </a>
                        <a href="{{ route('contacts') }}" class="btn btn-outline btn-dark noradius">
                            Our location
                        </a>
                    </div>
                </div>
            </div>
        @endif
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="widget">
                                <a href="{{ route('home-frontend') }}">
                                    <img src="{{ url('frontend/images/logo.png') }}">
                                </a>
                                <p class="custom-footer-size custom-footer-margin">
                                    Ciputra International, Office Tower 3 <br>
                                    Floor 15 Unit 05 <br>
                                    Jl. Lingkar Luar Barat No. 101 <br>
                                    Jakarta 11740
                                </p>
                                <p class="custom-footer-size custom-get-direction"><a href="https://maps.app.goo.gl/RqDHwW4y83JvF1Zw9" class="text-success" target="_blank"><i class="fa fa-map-marker"></i> Get direction</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title custom-widget-title">Contact Us</div>
                                <span class="custom-footer-size">Ask how Protemus Consulting can help you.</span>
                                <ul class="list custom-list">
                                    <li><i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="#" class="custom-contact-footer">{{ !empty($contact->value1) ? $contact->value1 : '' }}</a></li>
                                    <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="#" class="custom-contact-footer">{{ !empty($contact->value4) ? $contact->value4 : '' }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title custom-widget-title">Useful Links</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list custom-list-menu-footer">
                                            <li><a href="{{ route('home-frontend') }}">Home</a></li>
                                            <li><a href="{{ route('about-us.overview') }}">About us</a></li>
                                            <li><a href="{{ route('industries.all-industries') }}">Industries</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list custom-list-menu-footer">
                                            <li><a href="{{ route('services.all-services') }}">Services</a></li>
                                            <li><a href="{{ route('insights') }}">Insights</a></li>
                                            <li><a href="{{ route('contacts') }}">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="text-left footer-text">Copyright ©{{ date('Y') }} Protemus Consulting</div>
                </div>
            </div>
        </footer>
    </div>

    @include('sweetalert::alert')
    <script src="{{ url('frontend/js/jquery.js') }}"></script>
    <script src="{{ url('frontend/js/plugins.js') }}"></script>
    <script src="{{ url('frontend/js/functions.js') }}"></script>
    <script src="{{ url('frontend/js/owl.carousel.js') }}"></script>
    @stack('scripts')
</body>
</html>