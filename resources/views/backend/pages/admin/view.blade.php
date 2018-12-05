@extends('backend.index')
@section('title')
  Admin
@endsection
@section('content')
<a href="{{url('admin/admin-createView')}}">
  <button type="button" class="btn btn-primary" style="margin-left: 248px"> Add Admin </button>
</a><br><br>
<div class="container">
  <table id="adminView" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Status</th>
        <th>Command</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Fauzi Makarim</td>
        <td>fauzimakarim123@gmail.com</td>
        <td>Tuna Asmara</td>
        <td>
          <a href="{{url('/admin/admin-updateView/{id}')}}">
            <button class="btn btn-warning" name="button" style="padding: 8px">
              <i class="menu-icon icon-pencil"></i>Update
            </button>
          </a>
          <a href="{{url('/admin/admin-delete/{id}')}}">
            <button class="btn btn-danger" name="button" style=" padding: 8px; margin-left: 5px">
              <i class="menu-icon icon-trash"></i>Delete
            </button>
          </a>
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Status</th>
        <th>Command</th>
      </tr>
    </tfoot>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#adminView').DataTable();
  });
</script>
@endsection
