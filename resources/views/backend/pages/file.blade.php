@extends('backend.index')
@section('title')
  File
@endsection
@section('content')
<div class="container">
  <table id="myTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Kategori</th>
          <th>User</th>
          <th>Title</th>
          <th>Deskripsi</th>
          <th>Attachment</th>
          <th>Size</th>
          <th>Tipe</th>
          <th>Status</th>
          <th>Command</th>
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
