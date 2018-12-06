@extends('backend.index')
@section('title')
  User
@endsection
@section('content')
<div class="container">
  <table id="userView" class="table table-striped table-bordered">
    <thead>
      <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Used Storage</th>
          <th>Status</th>
          <th>Command</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>  </td>
        <td>
          <a href="{{url('/admin/user-updateView/{id}')}}">
            <button class="btn btn-primary" name="button" style="padding: 8px">
              <i class="menu-icon icon-magnifier"></i>Detail
            </button>
          </a>
          <a href="{{url('/admin/user-delete/{id}')}}">
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
          <th>Gender</th>
          <th>Phone</th>
          <th>Used Storage</th>
          <th>Status</th>
          <th>Command</th>
          <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#userView').DataTable();
  });
</script>
@endsection
