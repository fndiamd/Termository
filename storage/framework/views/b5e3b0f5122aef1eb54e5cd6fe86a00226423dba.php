<?php $__env->startSection('title'); ?>
  Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('admin/admin-createView')); ?>">
  <button type="button" class="btn btn-primary" style=" margin-left: 248px"> Create Order </button>
</a><br><br>
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
          <a href="<?php echo e(url('/admin/order-update/contohId')); ?>">
            <button class="btn btn-warning" name="button" style=" padding: 8px ">
              <i class="menu-icon icon-pencil"></i> Update
            </button>
          </a>
          <a href="<?php echo e(url('/admin/order-delete/contohId')); ?>">
            <button class="btn btn-danger" name="button" style=" padding: 8px; margin-left: 5px">
              <i class="menu-icon icon-trash"></i> Delete
            </button>
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