@extends('backend.index')
@section('title')
  Fitur Download
@endsection
@section('content')
<div class="container">
  <table id="myTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Price</th>
          <th>Available Storage</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#myTable').DataTable();
  });
</script>
@endsection
