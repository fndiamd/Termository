@extends('frontend.layouts.master')
@section('title')
    Explore files on Termository
@endsection
@section('content')
    <section class="bg-white default-space begin-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                <ul class="list-group">
                    @foreach($category as $cat)
                    <li class="list-group-item d-flex justify-content-left align-items-center">
                        <a href="{{ url('explore-files/category/'.$cat->category) }}">
                            <i class="{{ $cat->faicon }}"></i>
                            &nbsp{{ $cat->category }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-12">
                    <div class="row justify-content-end">
                        <div class="col-md-6 ">
                            <form action="{{ url('search') }}">
                                <div id="custom-search-input">
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control input-lg" placeholder="Search files" name="key"/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <!-- <div class="row" id="file-wrapper">
                        @foreach($files as $data)
                        @php
                            switch($data->id_category){
                                case 1:
                                    $logo = "1.png";
                                    break;
                                case 2:
                                    $logo = "2.png";
                                    break;
                                case 3:
                                    $logo = "3.png";
                                    break;
                                case 4:
                                    $logo = "4.png";
                                    break;
                                case 5:
                                    $logo = "6.png";
                                    break;
                            }
                        @endphp
                        <div class="col-2 frame-file" data-attachment="{{ $data->attachment }}" data-attrid="{{ $data->id_file }}">
                            <img src="{{ asset('assets/icon-category/'.$logo) }}" alt="">
                            <span>{{ substr($data->title, 0, 47) }}...</span>
                            <small>{{ number_format($data->size_file / 1024, 2) }} MB</small>
                        </div>
                        <div class="modal fade" id="fileModal-{{ $data->id_file }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">{{ $data->title }}</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @switch($data->id_category)
                                        @case (3)
                                            <audio controls style="width:450px;">
                                                <source src="{{ asset('repository-upload/music/'.$data->attachment) }}" type="audio/{{ $data->type_file }}">
                                                Your browser does not support the audio element.
                                            </audio>
                                            @break;
                                        @case (4)
                                            <img src="{{ asset('repository-upload/pictures/'.$data->attachment) }}" alt="{{ $data->attachment }}" style="margin:auto">
                                            @break;
                                        @case (5)
                                            <video width="450" height="260" controls>
                                                <source src="{{ asset('repository-upload/videos/'.$data->attachment) }}" type="video/mp4">
                                                <source src="{{ asset('repository-upload/videos/'.$data->attachment) }}" type="video/ogg">
                                                Not support format video player
                                            </video>
                                            @break;
                                        @default 
                                            You can download and open this file.
                                            @break;
                                    @endswitch
                                        
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade bd-example-modal-sm" id="detailFile-{{ $data->id_file }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title">{{ substr($data->title, 0, 50) }} Detail</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" value="{{ $data->title }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Type of file</label>
                                            <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" value="{{ $data->type_file }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Size</label>
                                            <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" value="{{ $data->size_file }}kb">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Created</label>
                                            <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" value="{{ $data->created_at }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Modified</label>
                                            <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" value="{{ $data->updated_at }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Access</label>
                                            <div class="col-sm-8">
                                                @if($data->status == 1)
                                                <input type="text" readonly class="form-control-plaintext" value="Public">
                                                @else
                                                <input type="text" readonly class="form-control-plaintext" value="Private">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> -->
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
                        <div class="row" id="file-wrapper">
                            @foreach($files as $data)
                            @php
                                switch($data->id_category){
                                    case 1:
                                        $logo = "1.png";
                                        break;
                                    case 2:
                                        $logo = "2.png";
                                        break;
                                    case 3:
                                        $logo = "3.png";
                                        break;
                                    case 4:
                                        $logo = "4.png";
                                        break;
                                    case 5:
                                        $logo = "6.png";
                                        break;
                                }
                            @endphp
                            <div class="col-2 frame-file" data-attachment="{{ $data->attachment }}" data-attrid="{{ $data->id_file }}">
                                <img src="{{ asset('assets/icon-category/'.$logo) }}" alt="">
                                <span>{{ substr($data->title, 0, 47) }}...</span>
                                <small>{{ number_format($data->size_file / 1024, 2) }} MB</small>
                            </div>
                            <div class="modal fade" id="fileModal-{{ $data->id_file }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title">{{ $data->title }}</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @switch($data->id_category)
                                            @case (3)
                                                <audio controls style="width:450px;">
                                                    <source src="{{ asset('repository-upload/music/'.$data->attachment) }}" type="audio/{{ $data->type_file }}">
                                                    Your browser does not support the audio element.
                                                </audio>
                                                @break;
                                            @case (4)
                                                <img src="{{ asset('repository-upload/pictures/'.$data->attachment) }}" alt="{{ $data->attachment }}" style="margin:auto">
                                                @break;
                                            @case (5)
                                                <video width="450" height="260" controls>
                                                    <source src="{{ asset('repository-upload/videos/'.$data->attachment) }}" type="video/mp4">
                                                    <source src="{{ asset('repository-upload/videos/'.$data->attachment) }}" type="video/ogg">
                                                    Not support format video player
                                                </video>
                                                @break;
                                            @default 
                                                You can download and open this file.
                                                @break;
                                        @endswitch
                                            
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade bd-example-modal-sm" id="detailFile-{{ $data->id_file }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title">{{ substr($data->title, 0, 50) }} Detail</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Title</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" value="{{ $data->title }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Type of file</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" value="{{ $data->type_file }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Size</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" value="{{ $data->size_file }}kb">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Created</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" value="{{ $data->created_at }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Modified</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly class="form-control-plaintext" value="{{ $data->updated_at }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Access</label>
                                                <div class="col-sm-8">
                                                    @if($data->status == 1)
                                                    <input type="text" readonly class="form-control-plaintext" value="Public">
                                                    @else
                                                    <input type="text" readonly class="form-control-plaintext" value="Private">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function() {
            $.contextMenu({
                selector: '.frame-file', 
                callback: function(key, options) {
                    var idFile = $(this).attr('data-attrid');
                    var file = $(this).attr('data-attachment');
                    switch(key){
                        case 'open' :
                            $("#fileModal-"+idFile).modal('show');
                            break;
                        case 'detail' : 
                            //console.log('Lihat detail file');
                            $("#detailFile-"+idFile).modal('show');
                            break;
                        case 'download' :
                            window.location.href="{{ url('downloads') }}/"+file;
                            break; 
                    }
                },
                items: {
                    "open" : {name : "Open"},
                    "detail" : {name : "Detail"},
                    "download" : {name : "Download"},
                    "sep1": "---------",
                    "quit": {name: "Quit", icon: function(){
                        return 'context-menu-icon context-menu-icon-quit';
                    }}
                }
            });

            $('.frame-file').on('click', function(e){
                console.log('clicked', this);
            })    
        });


    </script>
@endsection