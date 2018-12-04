<?php $__env->startSection('title'); ?>
  File
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <a href="<?php echo e(url('/admin/file-create')); ?>"><button type="submit" class="btn btn-primary mb-2"> Create File </button></a>
  <table id="myTable" class="table table-striped table-bordered">
      <thead>
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
          <td>  </td>
          <td>  </td>
          <td>
            <a class="btn btn-warning" href="<?php echo e(url('/admin/file-update/contohId')); ?>">
              <i class="icon-pencil"></i> Update 
            </a>
            <a class="btn btn-danger" href="<?php echo e(url('/admin/file-delete/contohId')); ?>">
              <i class="icon-trash"></i>  Delete 
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