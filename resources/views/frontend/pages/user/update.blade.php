@extends('frontend.layouts.profile')
@section('title')
    Update your file | Termository
@endsection
@section('content')
    <main class="page-content">
        <div class="container">
            <form action="{{ url('profile/file-update/'.$file->id_file) }}" id="zoneUpload" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" required class="form-control">
                        <option value="" disabled> Select Category </option>
                        @foreach($category as $data)
                            @if($file->id_category == $data->id_category)
                            <option value="{{ $data->id_category }}" selected>{{ $data->category }}</option>
                            @else
                            <option value="{{ $data->id_category }}">{{ $data->category }}</option>
                            @endif
                        @endforeach
                    </select>
                    @value($errors->first('category'))
                        <small class="text-danger">
                            {{ $errors->first('category') }}
                        </small>
                    @endvalue
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" class="form-control" name="title" required placeholder="Title for your file" value="{{ $file->title }}">
                    @value($errors->first('title'))
                        <small class="text-danger">
                            {{ $errors->first('title') }}
                        </small>
                    @endvalue
                </div>
                <div class="form-group">
                    <label for="dropify">Attachment</label>
                    @php
                        switch($file->id_category){
                            case 1:
                                $logo = "compressed";
                                break;
                            case 2:
                                $logo = "documents";
                                break;
                            case 3:
                                $logo = "music";
                                break;
                            case 4:
                                $logo = "pictures";
                                break;
                            case 5:
                                $logo = "videos";
                                break;
                        }
                    @endphp
                    <input type="file" name="uploadField" class="dropify" id="dropify" data-default-file="{{ asset('repository-upload/'.$logo.'/'.$file->attachment) }}">
                    @value($errors->first('uploadField'))
                        <small class="text-danger">
                            {{ $errors->first('uploadField') }}
                        </small>
                    @endvalue
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{ $file->desc }}</textarea>
                    @value($errors->first('description'))
                        <small class="text-danger">
                            {{ $errors->first('description') }}
                        </small>
                    @endvalue
                </div>
                <div class="form-group form-check">
                    @if($file->status == 0)
                    <input type="checkbox" class="form-check-input" name="private" id="private" checked value="1">
                    @else
                    <input type="checkbox" class="form-check-input" name="private" id="private" value="1">
                    @endif
                    <label class="form-check-label" for="private">Make this file private</label>
                    @value($errors->first('private'))
                        <small class="text-danger">
                            {{ $errors->first('private') }}
                        </small>
                    @endvalue
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </main>
    <script>
        jQuery(function ($) {
            $('.dropify').dropify();
            CKEDITOR.replace("description");
        });
    </script>
@endsection