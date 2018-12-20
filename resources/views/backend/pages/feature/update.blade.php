@extends('backend.index')
@section('title')
  Update Fitur
@endsection
@section('content')
<div class="container">
  <form action="{{ url('admin/feature-update', $feature['id_feature']) }}" method="post">
    @csrf
    <div class="from-row">
      <div class="form-group">
        <label for="Title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
        @value($errors->first('title'))
            <small class="text-danger">
                {{ $errors->first('title') }}
            </small>
        @endvalue
      </div>
      <div class="form-group">
        <label for="Price">Price</label>
        <input class="form-control" name="price" id="Price" placeholder="Price">
        @value($errors->first('price'))
            <small class="text-danger">
                {{ $errors->first('price') }}
            </small>
        @endvalue
      </div>
      <div class="form-group">
        <label for="Storage">Storage</label>
        <input class="form-control" name="available_storage" id="Storage" placeholder="Storage">
        @value($errors->first('available_storage'))
            <small class="text-danger">
                {{ $errors->first('available_storage') }}
            </small>
        @endvalue
      </div>
      <div class="form-group">
        <label for="Deskripsi">Deskripsi</label><br>
        <textarea name="Deskripsi" class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
        @value($errors->first('description'))
            <small class="text-danger">
                {{ $errors->first('description') }}
            </small>
        @endvalue
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
