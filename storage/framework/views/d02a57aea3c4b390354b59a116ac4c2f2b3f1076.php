<?php $__env->startSection('title'); ?>
    Sign in to Termository
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="bg-white default-space begin-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sign In</h5>
                            <form class="form-signin" method="post" action="<?php echo e(url('request-signin')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
                                    <label for="inputEmail">Email address</label>
                                    <?php if (\Illuminate\Support\Facades\Blade::check('value', $errors->first('email'))): ?>
                                        <small class="text-danger">
                                            <?php echo e($errors->first('email')); ?>

                                        </small>
                                    <?php endif; ?>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                                    <label for="inputPassword">Password</label>
                                    <?php if (\Illuminate\Support\Facades\Blade::check('value', $errors->first('password'))): ?>
                                        <small class="text-danger">
                                            <?php echo e($errors->first('password')); ?>

                                        </small>
                                    <?php endif; ?>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase hvr-sweep-to-blue" type="submit">
                                    Sign in
                                </button>
                                <hr class="my-4">
                                <div class="form-label-group">
                                    New to Termository ? <a href="<?php echo e(url('/get-started')); ?>" class="text-blue">Create an account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>