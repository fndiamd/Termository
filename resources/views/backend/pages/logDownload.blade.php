@extends('backend.index')
@section('title')
  Log Download
@endsection
@section('content')
<div class="container">
  <table id="myTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>IP Address</th>
          <th>Time Download</th>
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
