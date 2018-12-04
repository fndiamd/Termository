@extends('backend.index')
@section('title')
  Fitur
@endsection
@section('content')
<div class="container">
  <a href="{{url('admin/fitur-createView')}}"><button type="button" class="btn btn-primary">Add Fitur</button></a><br><br>
  <table id="myTable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Available Storage</th>
        <th>Deskripsi</th>
        <th>Command</th>
      </tr>
    </thead>
    <tbody>
      <td>01</td>
      <td>ih ih ih</td>
      <td>3000M</td>
      <td>100TB</td>
      <td>ah ah ah ah ah</td>
      <td>
        <a href="#"><button class="btn btn-warning" name="button"><i class="menu-icon icon-pencil"></i>Update</button></a>
        <a href="#"><button class="btn btn-danger" name="button"><i class="menu-icon icon-trash"></i>Delete</button></a>
      </td>
    </tbody>
    <tfoot>
      <th>ID</th>
      <th>Title</th>
      <th>Price</th>
      <th>Available Storage</th>
      <th>Deskripsi</th>
      <th>Command</th>
    </tfoot>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#myTable').DataTable();
  });
</script>
@endsection
