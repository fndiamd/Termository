@extends('backend.index')
@section('title')
  Create Fitur
@endsection
@section('content')
<form>
  <div class="from-row">
    <div class="form-group">
      <label for="Title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="Price">Price</label>
      <input class="form-control" id="Price" placeholder="Price">
    </div>
    <div class="form-group">
      <label for="Storage">Storage</label>
      <input class="form-control" id="Storage" placeholder="Storage">
    </div>
    <div class="form-group">
      <label for="Deskripsi">Deskripsi</label><br>
      <textarea name="Deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
