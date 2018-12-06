@extends('backend.index')
@section('title')
  Category
@endsection
@section('content')
<a href="{{url('admin/category-createView')}}">
  <button type="button" class="btn btn-primary" style="margin-left: 248px"> Add Category </button>
</a><br><br>
<div class="container">
  <table id="categoryView" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Faicon</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($category as $row)
      <tr>
       <td>{{$row['id_category']}}</td>
       <td>{{$row['category']}}</td>
       <td>{{$row['faicon']}}</td>
       <td>
         <a href="{{url('admin/category-updateView', $row['id_category'])}}">
           <button class="btn btn-warning" name="button" style="padding: 8px">
             <i class="menu-icon icon-pencil"></i>Update
           </button>
         </a>
         <a href="{{url('admin/category-delete', $row['id_category'])}}">
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
        <th>Category</th>
        <th>Faicon</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#categoryView').DataTable();
  });
</script>
@endsection
