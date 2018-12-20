<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/css/vendor.bundle.base.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/vendors/css/vendor.bundle.addons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/DataTables/DataTables/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('backend/images/favicon.png')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>">

  <script src="<?php echo e(asset('backend/js/jquery-3.3.1.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/ChartJS/Chart.js')); ?>"></script>
</head>
<body>
  <div class="container-scroller">
    <?php echo $__env->make('backend.part.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container-fluid page-body-wrapper">
      <?php echo $__env->make('backend.part.sidemenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="main-panel">
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- content-wrapper ends -->
        <?php echo $__env->make('backend.part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo e(asset('backend/vendors/js/vendor.bundle.base.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/vendors/js/vendor.bundle.addons.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/misc.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/settings.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/todolist.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/js/dashboard.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/DataTables/DataTables/js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/DataTables/DataTables/js/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/ChartJS/Chart.js')); ?>"></script>
</body>
</html>
