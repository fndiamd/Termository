@extends('backend.index')
@section('title')
  Create Category
@endsection
@section('content')
<div class="container">
  <form action="{{ url('admin/category-create') }}" method="post">
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
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
@endsection
