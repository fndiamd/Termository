@extends('frontend.layouts.profile')
@section('title')
    {{ Auth::user()->name }} in Temository
@endsection
@section('content')
    <main class="page-content">
        <div class="container-fluid">
            @if(count($files) == 0)
                <div class="row">
                    <form action="/upload-files" class="dropzone" id="dropzone-upload">
                        <div class="col-12 empty-repo">
                            <h1 class="text-center">
                                <i class="fa fa-hdd"></i>
                                <br><br>
                                Empty Repository 
                            </h1>
                        </div>
                    </form>
                </div>
            @else
                ada
            @endif
        </div>
    </main>
    <!-- page-content" -->
    <script>
        jQuery(function ($) {
            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).parent().removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(200);
                    $(this).parent().addClass("active");
                }
            });

            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
            });
            
            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });
        });
    </script>
@endsection