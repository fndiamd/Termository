<?php $__env->startSection('title'); ?>
  File
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
      <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td> <?php echo e($row['id_file']); ?> </td>
        <td> <?php echo e($row['id_category']); ?> </td>
        <td> <?php echo e($row['id_user']); ?> </td>
        <td> <?php echo e($row['title']); ?> </td>
        <td> <?php echo e($row['desc']); ?> </td>
        <td> <?php echo e($row['attachment']); ?> </td>
        <td> <?php echo e($row['size_file']); ?> </td>
        <td> <?php echo e($row['type_file']); ?> </td>
        <td> <?php echo e($row['status']); ?> </td>
        <td>
          <a class="btn btn-primary" href="<?php echo e(url('/admin/file-updateView', $row['id_file'])); ?>" style="padding: 8px">
            <i class="icon-magnifier"></i> Detail
          </a>
          <a class="btn btn-danger" href="<?php echo e(url('/admin/file-delete', $row['id_file'])); ?>" style="padding: 8px">
            <i class="icon-trash"></i>  Delete 
          </a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>