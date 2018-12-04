<?php $__env->startSection('title'); ?>
  Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('admin/admin-createView')); ?>"><button type="button" class="btn btn-primary">Add Admin</button></a><br><br>
<div class="container">
  <table id="myTable" class="table table-striped table-bordered">
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
          <a href="#"><button class="btn btn-warning" name="button"><i class="menu-icon icon-pencil"></i>Update</button></a>
          <a href="#"><button class="btn btn-danger" name="button"><i class="menu-icon icon-trash"></i>Delete</button></a>
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
      $('#myTable').DataTable();
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>