<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="shortcut icon" href="">
        <link href="<?php echo e(asset('icon-fonts/flaticon.css')); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('web-fonts/fonts.css')); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('css/tab.css')); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('fontawesome-free-5.3.1/css/all.min.css')); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>" rel="stylesheet" media="screen">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/sweetalert2.min.css')); ?>">
        <script src="<?php echo e(asset('js/vendor/jquery-3.3.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/vendor/modernizr-3.6.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap-notify.min.js')); ?>"></script>
    </head>
    <body>
        <?php echo $__env->make('frontend.part.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('frontend.part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>