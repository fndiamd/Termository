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
          <th>Status</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user as $row)
      <tr>
        <td>{{$row['id_user']}}</td>
        <td>{{$row['first_name']}}</td>
        <td>{{$row['email']}}</td>
        <td>
          @if($row['gender'] == 1)
            Laki - Laki
          @else
            Perempuan
          @endif
        </td>
        <td>{{$row['phone']}}</td>
        <td>
          @if($row['status'] == 1)
          Aktif
          @else
          Non-aktif
          @endif
        </td>
        <td>
          <a href="{{url('/admin/user-updateView', $row['id_user'])}}">
            <button class="btn btn-primary" name="button" style="padding: 8px">
              <i class="menu-icon icon-magnifier"></i>Detail
            </button>
          </a>
          <a href="{{url('/admin/user-delete', $row['id_user'])}}">
            <button class="btn btn-danger" name="button" style=" padding: 8px; margin-left: 5px">
              <i class="menu-icon icon-trash"></i>Delete
            </button>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Status</th>
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
