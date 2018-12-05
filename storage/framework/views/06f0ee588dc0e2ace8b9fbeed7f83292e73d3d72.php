<?php $__env->startSection('title'); ?>
  File
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <table id="adminView" class="table table-striped table-bordered">
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
          <a class="btn btn-primary" href="<?php echo e(url('/admin/file-update/{id}')); ?>" style="padding: 8px">
            <i class="icon-magnifier"></i> Detail
          </a>
          <a class="btn btn-danger" href="<?php echo e(url('/admin/file-delete/{id}')); ?>" style="padding: 8px">
            <i class="icon-trash"></i>  Delete 
          </a>
        </td>
      </tr>
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
        <th>Command</th>
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