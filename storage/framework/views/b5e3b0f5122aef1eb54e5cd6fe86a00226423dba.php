<?php $__env->startSection('title'); ?>
  Order View
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('/admin/order-create')); ?>"><button type="button" class="btn btn-primary"> Create Order </button></a>
<div class="container">
  <table id="orderView" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Fitur</th>
          <th>User</th>
          <th>Order Date</th>
          <th>Payment</th>
          <th>Status</th>
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
          <td>
            <a class="btn btn-warning" href="<?php echo e(url('/admin/order-update/contohId')); ?>">
              <i class="icon-pencil"></i> Update 
            </a>
            <a class="btn btn-danger" href="<?php echo e(url('/admin/order-delete/contohId')); ?>">
              <i class="icon-pencil"></i> Delete
            </a>
          </td>
        <tr>
      </tbody>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#orderView').DataTable();
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>