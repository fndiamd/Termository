@extends('backend.index')
@section('title')
  Update Category
@endsection
@section('content')
<form>
  <div class="from-row">
    <div class="form-group">
      <label for="Kategori">Kategori</label>
      <input class="form-control" id="Kategori" placeholder="Kategori">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
@endsection
