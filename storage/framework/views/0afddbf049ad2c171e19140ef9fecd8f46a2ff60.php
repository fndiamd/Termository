<?php $__env->startSection('title'); ?>
  User
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
          <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($row['id_user']); ?></td>
        <td><?php echo e($row['first_name']); ?></td>
        <td><?php echo e($row['email']); ?></td>
        <td><?php echo e($row['gender']); ?></td>
        <td><?php echo e($row['phone']); ?></td>
        <td><?php echo e($row['used_storage']); ?></td>
        <td><?php echo e($row['status']); ?></td>
        <td>
          <a href="<?php echo e(url('/admin/user-updateView', $row['id_user'])); ?>">
            <button class="btn btn-primary" name="button" style="padding: 8px">
              <i class="menu-icon icon-magnifier"></i>Detail
            </button>
          </a>
          <a href="<?php echo e(url('/admin/user-delete', $row['id_user'])); ?>">
            <button class="btn btn-danger" name="button" style=" padding: 8px; margin-left: 5px">
              <i class="menu-icon icon-trash"></i>Delete
            </button>
          </a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>