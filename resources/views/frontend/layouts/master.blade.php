<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>
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
        <link rel="stylesheet" href="{{ asset('vendor/dropify/css/dropify.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/leaflet/leaflet.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/context-menu/jquery.contextMenu.min.css') }}">

        <script src="{{ asset('vendor/bootstrap/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap-notify.min.js') }}"></script>
        <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('vendor/context-menu/jquery.contextMenu.min.js') }}"></script>
        <script src="{{ asset('vendor/context-menu/jquery.ui.position.min.js') }}"></script>
        <script>
            $.ajaxSetup({
                headers : {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </head>
    <body>
        @include('frontend.part.header')
        @yield('content')
        @include('frontend.part.footer')
    </body>
</html>