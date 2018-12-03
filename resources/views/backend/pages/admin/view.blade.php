@extends('backend.index')
@section('title')
  admin
@endsection
@section('content')
<div class="container">
  <table id="myTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Email</th>
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
