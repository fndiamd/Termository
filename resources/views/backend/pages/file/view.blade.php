@extends('backend.index')
@section('title')
  File
@endsection
@section('content')
<div class="container">
  <table id="adminView" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>User</th>
        <th>Title</th>
        <th>Deskripsi</th>
        <th>Attachment</th>
        <th>Size</th>
        <th>Tipe</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($file as $row)
      <tr>
        <td> {{$row['id_file']}} </td>
        <td> {{$row['id_category']}} </td>
        <td> {{$row['id_user']}} </td>
        <td> {{$row['title']}} </td>
        <td> {{$row['desc']}} </td>
        <td> {{$row['attachment']}} </td>
        <td> {{$row['size_file']}} </td>
        <td> {{$row['type_file']}} </td>
        <td> {{$row['status']}} </td>
        <td>
          <a class="btn btn-primary" href="{{url('/admin/file-updateView', $row['id_file'])}}" style="padding: 8px">
            <i class="icon-magnifier"></i> Detail
          </a>
          <a class="btn btn-danger" href="{{url('/admin/file-delete', $row['id_file'])}}" style="padding: 8px">
            <i class="icon-trash"></i>  Delete 
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
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
        <th>Action</th>
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

