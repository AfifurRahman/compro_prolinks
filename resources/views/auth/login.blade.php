<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="{{ url('frontend/images/favicon.png') }}" type="image/x-icon" />
        <title>Login | Protemus Consulting</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <link href="{{ url('backend/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('backend/css/animate.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('backend/css/admin.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="login_page">
            <div class="login_content">
                <div class="panel-heading border">
                    <img src="{{ url('frontend/images/logo.png') }}">
                </div><br>
                <form role="form" class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success col-sm-10">
                        {{ __('Login') }}
                    </button>
                    <div style="clear: both;"></div>
                </form>
            </div>
        </div>
    </body>
</html>
