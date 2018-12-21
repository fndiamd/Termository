@extends('backend.index')
@section('title')
  File
@endsection
@section('content')
<div class="container">
  <table id="adminView" style="overflow:scroll" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>User</th>
        <th>Title</th>
        <th>Size</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($files as $file)
      <tr>
        <td> {{ $file->id_file }} </td>
        <td> {{ $file->category }} </td>
        <td> {{ $file->first_name }}</td>
        <td> {{ $file->title }} </td>
        <td> {{ $file->size_file }} KB</td>
        <td> 
          @if($file->status == 1)
            Public
          @else
            Private
          @endif  
        </td>
        <td>
          <a class="btn btn-primary" href="{{url('/admin/file-updateView', $file->id_file)}}" style="padding: 8px">
            <i class="icon-magnifier"></i> Detail
          </a>
          <a class="btn btn-danger" href="{{url('/admin/file-delete', $file->id_file)}}" style="padding: 8px">
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
        <th>Size</th>
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

