@extends('backend.index')
@section('title')
  Order
@endsection
@section('content')
<div class="container">
  <table id="orderView" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Fitur</th>
        <th>User</th>
        <th>Order Date</th>
        <th>Payment</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($order as $row)
      <tr>
        <td> {{$row['id_order']}} </td>
        <td> {{$row['id_feature']}} </td>
        <td> {{$row['id_user']}} </td>
        <td> {{$row['order_date']}} </td>
        <td> {{$row['payment']}} </td>
        <td> {{$row['status']}} </td>
        <td>
          <a href="{{url('/admin/order-updateView', $row['id_order'])}}">
            <button class="btn btn-primary" name="button" style="padding: 8px">
              <i class="menu-icon icon-magnifier"></i> Detail
            </button>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Fitur</th>
        <th>User</th>
        <th>Order Date</th>
        <th>Payment</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#orderView').DataTable();
  });
</script>
@endsection
