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
        <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>
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
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <!-- Bootstrap js  -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/dropzone.js') }}"></script>
        <!-- Carousel js  -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- aos Js -->
        <script src="{{ asset('js/aos.js') }}"></script>
        <!-- tab Js -->
        <script src="{{ asset('js/tab.js') }}"></script>
        <!-- main Js -->
        <script src="{{ asset('js/main.js') }}"></script>
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