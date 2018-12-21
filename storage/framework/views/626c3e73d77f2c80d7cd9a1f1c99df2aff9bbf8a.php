<?php $__env->startSection('title'); ?>
  User
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
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
        </tr>
      </thead>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#myTable').DataTable();
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>