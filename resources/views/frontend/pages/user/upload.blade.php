@extends('frontend.layouts.profile')
@section('title')
    Upload your file | Termository
@endsection
@section('content')
    <main class="page-content">
        <div class="container">
            <form action="{{ url('profile/upload-files') }}" id="zoneUpload" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" required class="form-control">
                        <option value="" disabled selected> Select Category </option>
                        @foreach($category as $data)
                            <option value="{{ $data->id_category }}">{{ $data->category }}</option>
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
                    <input type="text" id="title" class="form-control" name="title" required placeholder="Title for your file">
                    @value($errors->first('title'))
                        <small class="text-danger">
                            {{ $errors->first('title') }}
                        </small>
                    @endvalue
                </div>
                <div class="form-group">
                    <label for="dropify">Attachment</label>
                    <input type="file" name="uploadField" class="dropify" id="dropify">
                    @value($errors->first('uploadField'))
                        <small class="text-danger">
                            {{ $errors->first('uploadField') }}
                        </small>
                    @endvalue
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="5" required></textarea>
                    @value($errors->first('description'))
                        <small class="text-danger">
                            {{ $errors->first('description') }}
                        </small>
                    @endvalue
                </div>
                @if(Auth::user()->status == 2)
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="private" id="private" value="1">
                    <label class="form-check-label" for="private">Make this file private</label>
                    @value($errors->first('private'))
                        <small class="text-danger">
                            {{ $errors->first('private') }}
                        </small>
                    @endvalue
                </div>
                @endif
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Upload</button>
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