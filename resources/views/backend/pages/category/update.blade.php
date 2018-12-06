@extends('backend.index')
@section('title')
  Update Category
@endsection
@section('content')
<div class="container">
  <form action="{{ url('admin/category-update', $category['id_category']) }}" method="post">
    @csrf
    <div class="from-row">
      <div class="form-group">
        <label for="Category">Category</label>
        <input type="text" class="form-control" name="category" id="inputCategory" placeholder="Category">
      </div>
      <div class="form-group">
        <label for="Faicon">Faicon</label>
        <input type="text" class="form-control" name="faicon" id="inputFaicon" placeholder="Faicon">
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
