<!doctype html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Page Title -->
        <title>@yield('title')</title>
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="">
        <!-- Flat icon Fonts css-->
        <link href="{{ asset('icon-fonts/flaticon.css') }}" rel="stylesheet" media="screen">
        <!-- Costom Web Fonts css-->
        <link href="{{ asset('web-fonts/fonts.css') }}" rel="stylesheet" media="screen">
        <!-- Bootstrap css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <!-- Animate Tab css -->
        <link href="{{ asset('css/tab.css') }}" rel="stylesheet" media="screen">
        <!--Wow Animate css -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" media="screen">
        <!-- Font Awesome icon css-->
        <link href="{{ asset('fontawesome-free-5.3.1/css/all.min.css') }}" rel="stylesheet" media="screen">
        <!-- Carousel css -->
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="screen">
        <!-- Carousel default css -->
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" media="screen">
        <!-- Style css -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!--Modernizr Js-->
        <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    </head>
    <body>
        @include('frontend.part.header')
        @yield('content')
        @include('frontend.part.footer')
    </body>
</html>