@extends('frontend.layouts.profile')
@section('title')
    {{ Auth::user()->first_name }} {{  Auth::user()->last_name }} in Temository
@endsection
@section('content')
    <main class="page-content">
        <div class="container-fluid">
            <div class="modal fade" id="uploadFiles" tabindex="-1" role="dialog" arialabelledby="Upload Files" area-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Upload your files</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('profile/upload-files') }}" class="dropzone" id="my-awesome-dropzone" enctype="multipart/form-data">
                                <div class="fallback">
                                    <input type="file" name="file" multiple>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($files) == 0)
                <div class="row">
                    <div class="col-12 empty-repo">
                        <h1 class="text-center">
                            <i class="fa fa-hdd"></i>
                            <br><br>
                            Empty Repository 
                        </h1>
                    </div>
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
            
            Dropzone.options.myAwesomeDropzone  = [
                url : "{{ url('profile/upload-files') }}",
                paramName = "file", 
                maxFilesize = 50, 
                addRemoveLinks = true,    
            ];
        });


    </script>
@endsection