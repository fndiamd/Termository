@extends('backend.index')
@section('title')
  Update Fitur
@endsection
@section('content')
<div class="container">
  <form action="{{ url('admin/feature-update', $feature['id_feature']) }}" method="post">
    <div class="from-row">
      <div class="form-group">
        <label for="Title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="Price">Price</label>
        <input class="form-control" name="price" id="Price" placeholder="Price">
      </div>
      <div class="form-group">
        <label for="Storage">Storage</label>
        <input class="form-control" name="space" id="Storage" placeholder="Storage">
      </div>
      <div class="form-group">
        <label for="Deskripsi">Deskripsi</label><br>
        <textarea name="Deskripsi" class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
