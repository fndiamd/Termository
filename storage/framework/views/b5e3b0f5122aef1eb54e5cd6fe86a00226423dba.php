<?php $__env->startSection('title'); ?>
  Order
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
      <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td> <?php echo e($row['id_order']); ?> </td>
        <td> <?php echo e($row['id_feature']); ?> </td>
        <td> <?php echo e($row['id_user']); ?> </td>
        <td> <?php echo e($row['order_date']); ?> </td>
        <td> <?php echo e($row['payment']); ?> </td>
        <td> <?php echo e($row['status']); ?> </td>
        <td>
          <a href="<?php echo e(url('/admin/order-updateView', $row['id_order'])); ?>">
            <button class="btn btn-primary" name="button" style="padding: 8px">
              <i class="menu-icon icon-magnifier"></i> Detail
            </button>
          </a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Fitur</th>
        <th>User</th>
        <th>Order Date</th>
        <th>Payment</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>
<script>
  $(document).ready( function () {
      $('#orderView').DataTable();
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>