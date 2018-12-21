@extends('backend.index') 
@section('title') 
    File Detail
@endsection 
@section('content')
<div class="container">
    <div class="form-row"> 
        <div class="form-group col-md-6"> 
            <label for="CategoryFile">Category</label>
            <input type="text" class="form-control" id="CategoryFile" value="{{$fileUpdate->category}}" readonly>
        </div>
        <div class="form-group col-md-6"> 
            <label for="UserFile">User</label> 
            <input type="text" class="form-control" id="UserFile" value="{{$fileUpdate->first_name}}" readonly>
        </div> 
    </div> 
    <div class="form-group"> 
        <label for="TitleFile">Title</label>
        <input type="text" class="form-control" id="TitleFile" value="{{$fileUpdate->title}}" readonly>
    </div> 
    <div class="form-group"> 
        <label for="DescFile">Desc</label>
        <input type="text" class="form-control" id="DescFile" value="{!! $fileUpdate->desc !!}" readonly>
    </div>
    <div class="form-group"> 
        <label for="AttachmentFile">Attachment</label>
        <input type="text" class="form-control" id="AttachmentFile" value="{{$fileUpdate->attachment}}" readonly>
    </div> 
    <div class="form-row"> 
        <div class="form-group col-md-4"> 
            <label for="SizeFile">Size</label> 
            <input type="text" class="form-control" id="StatusUser" value="{{$fileUpdate->size_file}}" readonly>
        </div>
        <div class="form-group col-md-4"> 
            <label for="TypeFile">Type</label> 
            <input type="text" class="form-control" id="TypeFile" value="{{$fileUpdate->type_file}}" readonly>
        </div>
        <div class="form-group col-md-4"> 
            <label for="StatusFile">Status</label> 
            @if($fileUpdate->status == 1)
            <input type="text" class="form-control" id="StatusFile" value="Public" readonly>
            @else
            <input type="text" class="form-control" id="StatusFile" value="Private" readonly>
            @endif
        </div>
    </div>
    <a href="{{url('/admin/file-view/')}}"><button type="submit" class="btn btn-primary">Back</button></a>
</div>
@endsection