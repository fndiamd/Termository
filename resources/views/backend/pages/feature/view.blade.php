@extends('backend.index')
@section('title')
  Feature
@endsection
@section('content')
<a href="{{url('admin/feature-createView')}}">
  <button type="button" class="btn btn-primary" style="margin-left: 248px"> Add Feature </button>
</a><br><br>
<div class="container">
  <table id="featureView" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Price</th>
        <th>Available Storage</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($feature as $row)
     <!-- TABEL MASTER -->
     <tr>
       <td>{{$row['id_feature']}}</td>
       <td>{{$row['title']}}</td>
       <td>{{$row['price']}}</td>
       <td>{{$row['available_storage']}}</td>
           <td>
             <a href="{{url('admin/feature-updateView', $row['id_feature'])}}">
               <button class="btn btn-warning" name="button" style="padding: 8px">
                 <i class="menu-icon icon-pencil"></i>Update
               </button>
             </a>
             <a href="{{url('admin/feature-delete', $row['id_feature'])}}">
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
        <th>Title</th>
        <th>Price</th>
        <th>Available Storage</th>
        <th></th>
      </tr>
    </tfoot>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#featureView').DataTable();
  });
</script>
@endsection
