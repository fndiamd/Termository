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
      <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td>
          <a href="<?php echo e(url('/admin/order-updateView/{id}')); ?>">
            <button class="btn btn-primary" name="button" style="padding: 8px">
              <i class="menu-icon icon-magnifier"></i> Detail
            </button>
          </a>
          </a>
        </td>
      </tr>
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