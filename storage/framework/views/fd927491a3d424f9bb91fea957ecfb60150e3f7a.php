<?php $__env->startSection('title'); ?>
  Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('admin/category-createView')); ?>">
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
      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
       <td><?php echo e($row['id_category']); ?></td>
       <td><?php echo e($row['category']); ?></td>
       <td><?php echo e($row['faicon']); ?></td>
       <td>
         <a href="<?php echo e(url('admin/category-updateView', $row['id_category'])); ?>">
           <button class="btn btn-warning" name="button" style="padding: 8px">
             <i class="menu-icon icon-pencil"></i>Update
           </button>
         </a>
         <a href="<?php echo e(url('admin/category-delete', $row['id_category'])); ?>">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>