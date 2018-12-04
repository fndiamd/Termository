<?php $__env->startSection('title'); ?>
  User
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <a href="<?php echo e(url('/admin/user-create')); ?>"><button type="submit" class="btn btn-primary mb-2"> Create User </button></a>
  <table id="myTable" class="table table-striped table-bordered">
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
            <a class="btn btn-warning" href="<?php echo e(url('/admin/user-update/contohId')); ?>">
              <i class="icon-pencil"></i> Update 
            </a>
            <a class="btn btn-danger" href="<?php echo e(url('/admin/user-delete/contohId')); ?>">
              <i class="icon-pencil"></i> Delete 
            </a>
          </td>
        <tr>
      </tbody>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#myTable').DataTable();
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>