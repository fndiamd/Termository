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
<div>
  <table id="formOrder" class="table table-striped table-bordered" style="align=center;">
    <tr>
      <h3> Test ini form </h3>
      <form>
      
      </form>
    </tr>
    <tr>
      <td><button id="createOrder">Create</button></td>
      <td><button id="updateOrder">Update</button></td>
      <td><button id="deleteOrder">Delete</button></td>
    </tr>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#myTable').DataTable();
  });
</script>
@endsection
