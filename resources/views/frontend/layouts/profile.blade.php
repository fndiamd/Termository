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
        <section class="bg-white begin-section" style="padding:0;">
            <div class="page-wrapper chiller-theme toggled">
                <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                    <i class="fas fa-bars"></i>
                </a>
                <!-- sidebar-wrapper  -->
                @include('frontend.part.profile-sidebar')
                @yield('content')
            </div>
        </section>
        <!-- Back to scroll  -->
        <div class="top-arrow">
            <span class="scroll-top-top">
            <i class="fas fa-arrow-up"></i>
            </span>
        </div>
        <!-- Back to scroll  -->
        <!--All Jquery Library Files -->
        <script src="{{ asset('vendor/sweetalert/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/jquery.easing.min.js') }}"></script>
        <!-- Bootstrap js  -->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Carousel js  -->
        <script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- aos Js -->
        <script src="{{ asset('vendor/bootstrap/js/aos.js') }}"></script>
        <!-- tab Js -->
        <script src="{{ asset('vendor/bootstrap/js/tab.js') }}"></script>
        <!-- main Js -->
        <script src="{{ asset('vendor/bootstrap/js/main.js') }}"></script>
        <script src="{{ asset('vendor/leaflet/leaflet.js') }}"></script>
        <script src="{{ asset('vendor/dropify/js/dropify.min.js') }}"></script>
        @if (session('notify'))
            <script type="text/javascript">
                $(document).ready(function() {
                    $.notify({
                        title: "<strong>{{ session('notify')['title'] }}</strong> ",
                        message: "{{ session('notify')['msg'] }}",
                    },{
                        type: "{{ session('notify')['type'] }}",
                        placement: {
                            from: "top",
                            align: "right",
                        },
                    });
                });
            </script>
        @endif
        @if(session('sweet-alert'))
            <script>
                swal({
                    type : "{{ session('sweet-alert')['type'] }}",
                    title : "{{ session('sweet-alert')['title'] }}",
                    text : "{{ session('sweet-alert')['text'] }}"
                });
            </script>
        @endif
    </body>
</html>