<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ url('frontend/images/favicon.png') }}" type="image/x-icon" />
    <title>{{ config('app.name', 'Protemus Admin Panel') }}</title>

    <!-- Scripts -->
    <link href="{{ url('backend/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/css/admin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/css/jquerysctipttop.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('backend/plugins/data-tables/DT_bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('backend/plugins/advanced-datatable/css/demo_table.css') }}" rel="stylesheet">
    <link href="{{ url('backend/plugins/advanced-datatable/css/demo_page.css') }}" rel="stylesheet">
</head>
<body class="light_theme  fixed_header left_nav_fixed">
    <div class="wrapper">
        <div class="header_bar">
            <div class="brand">
              <div class="logo" style="display:block"><span class="theme_color"><img src="{{ url('frontend/images/logo.png') }}" width="120" height="40"></div>
              <div class="small_logo" style="display:none"><img src="{{ url('backend/images/s-logo.png') }}" width="50" height="47" alt="s-logo" /> <img src="{{ url('backend/images/r-logo.png') }}" width="122" height="20" alt="r-logo" /></div>
            </div>
            <div class="header_top_bar">
                <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
                <div class="top_right_bar">
                    <div class="user_admin dropdown"> 
                        <a href="javascript:void(0);" data-toggle="dropdown"><img src="{{ url('backend/images/user.png') }}" /><span class="user_adminname">
                            @guest
                            @else
                                {{ Auth::user()->name }}</span> <b class="caret"></b>
                            @endguest
                        </a>
                      <ul class="dropdown-menu">
                        <div class="top_pointer"></div>
                        <li> <a href="{{ route('profile') }}"><i class="fa fa-user"></i> Profile</a> </li>
                        <li> 
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                         </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
        @php
            $uri = Request::segment(2);
            $headerInformation = "";
            $activeInformation = "";
            $displayInformation = "";
            $headerContent = "";
            $activeContent = "";
            $displayContent = "";
            $headerServices = "";
            $activeServices = "";
            $displayServices = "";
            $headerIndustries = "";
            $activeIndustries = "";
            $displayIndustries = "";
            $headerTestimonial = "";
            $headerQuestions = "";
            if($uri != NULL){
                if(in_array($uri, array("about", "team","contact","social-media", "create-team", "edit-team", "create-social-media", "edit-social-media", "vision-mission", "homepage"))){
                    $headerInformation = "left_nav_active";
                    $activeInformation = "opened";
                    $displayInformation = "block";
                }

                if(in_array($uri, array("slider", "home-banner","top-banner","artikel", "create-slider", "edit-slider", "create-artikel", "edit-artikel", "why-choose-us", "create-why-choose-us", "edit-why-choose-us", "what-makes-us-uniq", "create-what-makes-us-uniq", "edit-what-makes-us-uniq"))){
                    $headerContent = "left_nav_active";
                    $activeContent = "opened";
                    $displayContent = "block";
                }

                if(in_array($uri, array("accounting-services","tax-services","finance-services","badan-usaha","create-accounting-services", "edit-accounting-services","create-tax-services","edit-tax-services","create-finance-services","edit-finance-services","create-badan-usaha","edit-badan-usaha"))){
                    $headerServices = "left_nav_active";
                    $activeServices = "opened";
                    $displayServices = "block";
                }

                if(in_array($uri, array("industries","create-industries","edit-industries"))){
                    $headerIndustries = "left_nav_active";
                    $activeIndustries = "opened";
                    $displayIndustries = "block";
                }

                if(in_array($uri, array("testimonial","create-testimonial", "edit-testimonial"))){
                    $headerTestimonial = "left_nav_active";
                }

                if(in_array($uri, array("questions","detail-questions"))){
                    $headerQuestions = "left_nav_active";
                }
            }
        @endphp 
        <div class="inner">
            <div class="left_nav">
                <div class="left_nav_slidebar" style="margin-top: 10px;">
                    <ul>
                        <li> 
                            <a href="{{ route('home') }}"> <i class="fa fa-home"></i> DASHBOARD</a>
                        </li>
                        <li class="{{ $headerInformation }}"> 
                            <a href="javascript:void(0);"> <i class="fa fa-folder-open"></i> INFORMATION <span class="plus"><i class="fa fa-plus"></i></span></a>
                            <ul class="{{ $activeInformation }}" style="display: {{ $displayInformation }};">
                                <li> <a href="{{ route('homepage') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'homepage' ? 'theme_color':'' }}">Homepage</b> </a> </li>
                                <li> <a href="{{ route('about') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'about' ? 'theme_color':'' }}">About Us</b> </a> </li>
                                <li> <a href="{{ route('vision-mission') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'vision-mission' ? 'theme_color':'' }}">Vision & Mission</b> </a> </li>
                                <li> <a href="{{ route('homepage') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'homepage' ? 'theme_color':'' }}">Key Values</b> </a> </li>
                                <li> <a href="{{ route('homepage') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'homepage' ? 'theme_color':'' }}">Why Choose Us</b> </a> </li>
                                <li> <a href="{{ route('team') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'team' || $uri == 'create-team' || $uri == 'edit-team' ? 'theme_color':'' }}">Team</b> </a> </li>
                                <li> <a href="{{ route('contact') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'contact' ? 'theme_color':'' }}">Contact</b> </a> </li>
                                <li> <a href="{{ route('social-media') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'social-media' || $uri == 'create-social-media' || $uri == 'edit-social-media' ? 'theme_color':'' }}">Social Media</b> </a> </li>
                            </ul>
                        </li>
                        <li class="{{ $headerContent }}"> 
                            <a href="javascript:void(0);"> <i class="fa fa-edit"></i> CONTENT <span class="plus"><i class="fa fa-plus"></i></span></a>
                            <ul class="{{ $activeContent }}" style="display: {{ $displayContent }};">
                                <li> <a href="{{ route('slider') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'slider' || $uri == 'create-slider' || $uri == 'edit-slider' ? 'theme_color':'' }}">Slider</b> </a> </li>
                                <li> <a href="{{ route('artikel') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'artikel' || $uri == 'create-artikel' || $uri == 'edit-artikel' ? 'theme_color':'' }}">Insights</b> </a> </li>
                            </ul>
                        </li>
                        <li class="{{ $headerIndustries }}"> 
                            <a href="javascript:void(0);"> <i class="fa fa-list-alt"></i> INDUSTRIES <span class="plus"><i class="fa fa-plus"></i></span></a>
                            <ul class="{{ $activeIndustries }}" style="display: {{ $displayIndustries }};">
                                <li> <a href="{{ route('industries') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'industries' || $uri == 'create-industries' || $uri == 'edit-industries' ? 'theme_color':'' }}">Industries</b> </a> </li>
                            </ul>
                        </li>
                        <li class="{{ $headerServices }}"> 
                            <a href="javascript:void(0);"> <i class="fa fa-cog"></i> SERVICES <span class="plus"><i class="fa fa-plus"></i></span></a>
                            <ul class="{{ $activeServices }}" style="display: {{ $displayServices }};">
                                <li> <a href="{{ route('accounting-services') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'accounting-services' || $uri == 'create-accounting-services' || $uri == 'edit-accounting-services' ? 'theme_color':'' }}">Accounting Services</b> </a> </li>
                                <li> <a href="{{ route('tax-services') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'tax-services' || $uri == 'create-tax-services' || $uri == 'edit-tax-services' ? 'theme_color':'' }}">Tax Services</b> </a> </li>
                                <li> <a href="{{ route('badan-usaha') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'badan-usaha' || $uri == 'create-badan-usaha' || $uri == 'edit-badan-usaha' ? 'theme_color':'' }}">Badan Usaha</b> </a> </li>
                                <li> <a href="{{ route('finance-services') }}"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="{{ $uri == 'finance-services' || $uri == 'create-finance-services' || $uri == 'edit-finance-services' ? 'theme_color':'' }}">Finance Service</b> </a> </li>
                            </ul>
                        </li>
                        <li class="{{ $headerTestimonial }}">
                            <a href="{{ route('testimonial') }}"> <i class="fa fa-heart"></i> TESTIMONIAL</a>
                        </li>
                        <li class="{{ $headerQuestions }}"> 
                            <a href="{{ route('questions') }}"> <i class="fa fa-question"></i> QUESTIONS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contentpanel">
                <div class="pull-left breadcrumb_admin clear_both">
                    <div class="pull-left page_title theme_color">
                      <h6 style="padding-top: 10px;">Admin Panel Protemus</h6>
                    </div>
                </div>
                <div class="container clear_both padding_fix">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    @include('sweetalert::alert')
    <script src="{{ url('backend/js/jquery-2.1.0.js') }}"></script>
    <script src="{{ url('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('backend/js/common-script.js') }}"></script>
    <script src="{{ url('backend/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('backend/js/jquery.sparkline.js') }}"></script>
    <script src="{{ url('backend/js/sparkline-chart.js') }}"></script>
    <script src="{{ url('backend/js/graph.js') }}"></script>
    <script src="{{ url('backend/js/edit-graph.js') }}"></script>
    <script src="{{ url('backend/js/jPushMenu.js') }}"></script> 
    <script src="{{ url('backend/js/side-chats.js') }}"></script>
    <script src="https://ckeditor.com/latest/ckeditor.js"></script>
    <script src="{{ url('backend/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('backend/plugins/data-tables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('backend/plugins/data-tables/dynamic_table_init.js') }}"></script>
    @stack('scripts')
    <script>
        /* upload image */
        function readURL(input) { 
            if (input.files && input.files[0]) {
            var reader = new FileReader(); 

            reader.onload = function (e) { 
                $(".preview_image") 
                .attr("src", e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
            }
        }

        $(".upload").change(function() {
           readURL(this); 
        });

        /* upload image */
        function readURLVision(input) { 
              if (input.files && input.files[0]) {
              var reader = new FileReader(); 

              reader.onload = function (e) { 
                  $(".preview_image_vision") 
                  .attr("src", e.target.result)
              };

              reader.readAsDataURL(input.files[0]);
              }
        }

        function readURLMission(input) { 
              if (input.files && input.files[0]) {
              var reader = new FileReader(); 

              reader.onload = function (e) { 
                  $(".preview_image_mission") 
                  .attr("src", e.target.result)
              };

              reader.readAsDataURL(input.files[0]);
              }
        }

        $(".upload-vision").change(function() {
           readURLVision(this); 
        });

        $(".upload-mission").change(function() {
           readURLMission(this); 
        });
    </script>
</body>
</html>
