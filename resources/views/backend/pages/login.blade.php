<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Signin | Termository</title>
        <link rel="shortcut icon" href="">
        <link href="{{ asset('vendor/icon-fonts/flaticon.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/web-fonts/fonts.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/bootstrap/css/tab.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/bootstrap/css/animate.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('vendor/bootstrap/css/style.css') }}" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/dropify/dropify.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/leaflet/leaflet.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/main.css') }}">

        <script src="{{ asset('vendor/bootstrap/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap-notify.min.js') }}"></script>
        <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
        
    </head>
    <body style="background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);">
        <div class="container">
            <br>
            <br>
            <br>
            <img src="{{ asset('assets/images/normal/termository-light.png') }}" style="margin:auto">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Admin | Sign In</h5>
                            <form class="form-signin" method="post" action="{{ url('admin/request-login') }}">
                                @csrf
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
                                    <label for="inputEmail">Email address</label>
                                    @value($errors->first('email'))
                                        <small class="text-danger">
                                            {{ $errors->first('email') }}
                                        </small>
                                    @endvalue
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                                    <label for="inputPassword">Password</label>
                                    @value($errors->first('password'))
                                        <small class="text-danger">
                                            {{ $errors->first('password') }}
                                        </small>
                                    @endvalue
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase hvr-sweep-to-blue" type="submit">
                                    Sign in
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

