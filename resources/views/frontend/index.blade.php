<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="">
        <link href="{{ asset('icon-fonts/flaticon.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('web-fonts/fonts.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/tab.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('fontawesome-free-5.3.1/css/all.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
        <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>
    </head>
    <body>
        @include('frontend.part.header')
        @yield('content')
        @include('frontend.part.footer')
    </body>
</html>