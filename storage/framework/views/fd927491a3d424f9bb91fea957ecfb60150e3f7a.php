<?php $__env->startSection('title'); ?>
  Kategori
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('/admin/category-createView')); ?>">
  <button type="button" class="btn btn-primary" style="margin-left: 248px"> Add Category </button>
</a><br><br>
<div class="container">
  <table id="adminView" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Kategori</th>
        <th>Command</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>wik wik wik</td>
        <td>
          <a href="<?php echo e(url('/admin/category-updateView/{id}')); ?>">
            <button class="btn btn-warning" name="button" style="padding: 8px">
              <i class="menu-icon icon-pencil"></i>Update
            </button>
          </a>
          <a href="<?php echo e(url('/admin/category-delete/{id}')); ?>">
            <button class="btn btn-danger" name="button" style=" padding: 8px; margin-left: 5px">
              <i class="menu-icon icon-trash"></i>Delete
            </button>
          </a>
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th>Id</th>
        <th>Kategori</th>
        <th>Command</th>
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