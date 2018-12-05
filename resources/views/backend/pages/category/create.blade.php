@extends('backend.index')
@section('title')
  Create Category
@endsection
@section('content')
<div class="container">
  <form>
    <div class="from-row">
      <div class="form-group">
        <label for="Kategori">Kategori</label>
        <input class="form-control" id="Kategori" placeholder="Kategori">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>  
@endsection
