<?php $__env->startSection('title'); ?>
  Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('admin/category-createView')); ?>"><button type="button" class="btn btn-primary">Add Category</button></a><br><br>
<div class="container">
  <table id="myTable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Kategori</th>
        <th>Command</th>
      </tr>
    </thead>
    <tbody>
      <td>01</td>
      <td>wik wik wik</td>
      <td>
        <a href="#"><button class="btn btn-warning" name="button"><i class="menu-icon icon-pencil"></i>Update</button></a>
        <a href="#"><button class="btn btn-danger" name="button"><i class="menu-icon icon-trash"></i>Delete</button></a>
      </td>
    </tbody>
    <tfoot>
      <th>Id</th>
      <th>Kategori</th>
      <th>Command</th>
    </tfoot>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#myTable').DataTable();
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>