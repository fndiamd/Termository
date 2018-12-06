@extends('backend.index')
@section('title')
  Create Fitur
@endsection
@section('content')
<div class="container">
  <form action="{{ url('admin/feature-create') }}" method="post">
    @csrf
    <div class="from-row">
      <div class="form-group">
        <label for="Title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="Price">Price</label>
        <input type="number" class="form-control" name="price" id="Price" placeholder="Price">
      </div>
      <div class="form-group">
        <label for="Storage">Available Storage</label>
        <input type="number" class="form-control" name="available_storage" id="Storage" placeholder="Storage">
      </div>
      <div class="form-group">
        <label for="Deskripsi">Deskripsi</label><br>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
@endsection
