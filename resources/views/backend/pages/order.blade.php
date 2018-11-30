@extends('backend.index')
@section('title')
  Order
@endsection
@section('content')
<div class="container">
  <table id="myTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Fitur</th>
          <th>User</th>
          <th>Order Date</th>
          <th>Payment</th>
          <th>Status</th>
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
