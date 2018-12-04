<!-- Footer Top Area -->
<section id="footer-top" class=" defalut-space">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <!-- Start Widget -->
            <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="footer-widget-info">
                <div class="footer-logo">
                <img src="<?php echo e(asset('images/normal/termository-blue.png')); ?>" alt="Footer Logo">
                </div>
                <div class="widget-info">
                <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec
                    sodales sagittis magna. Sed consequat, leo eget bibos faucibus tincidunt. Duis leo. Sed fringilla
                    mauris.</p>
                <ul>
                    <li><a href="#"><span><i class="fab fa-facebook"></i></span></a></li>
                    <li><a href="#"><span><i class="fab fa-twitter"></i></span></a></li>
                    <li><a href="#"><span><i class="fab fa-pinterest"></i></span></a></li>
                    <li><a href="#"><span><i class="fab fa-vimeo"></i></span></a></li>
                </ul>
                </div>
            </div>
            </div>
            <!-- End Widget -->
            <!-- Start Widget -->
            <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="footer-widget">
                <h3>Company</h3>
                <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Press</a></li>
                </ul>
            </div>
            </div>
            <!-- End Widget -->
            <!-- Start Widget -->
            <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="footer-widget">
                <h3>Product</h3>
                <ul>
                <li><a href="#">Enterprice</a></li>
                <li><a href="#">Customer Service</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Why Utrun?</a></li>
                </ul>
            </div>
            </div>
            <!-- End Widget -->
            <!-- Start Widget -->
            <div class="pt-30 col-lg-2 col-md-6 col-sm-6">
            <div class="footer-widget">
                <h3>Support</h3>
                <ul>
                <li><a href="#">For Freelancer</a></li>
                <li><a href="#">For Employee</a></li>
                <li><a href="#">Help Desk</a></li>
                <li><a href="#">Security Help</a></li>
                </ul>
            </div>
            </div>
            <!-- End Widget -->
            <!-- Start Widget -->
            <div class="pt-30 col-lg-2 col-md-6 col-sm-6">
            <div class="footer-widget">
                <h3>Download App</h3>
                <ul>
                <li><a href="#">IOS App</a></li>
                <li><a href="#">Android App</a></li>
                <li><a href="#">Mobile App</a></li>
                <li><a href="#">Windows App</a></li>
                </ul>
            </div>
            </div>
            <!-- End Widget -->
        </div>
        <!-- End Row -->
    </div>
</section>
<!-- Footer Top Area -->

<!--  Footer Bottom Area -->
<footer id="footer-bottom">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <!-- Start Col -->
            <div class=" col-lg-6 col-md-6">
            <div class="copy-text text-left">
                <p>© 2018 Copyright, All Rights Reserved by <a href="https://themeforest.net/user/smartit-source/portfolio">Smartitsource</a></p>
            </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="pt-25 col-lg-6 col-md-6">
            <div class="footer-menu float-right">
                <ul>
                <li><a href="#">Privacy & Conditions </a></li>
                <li><a href="#"> Help </a></li>
                <li><a href="#">Blog</a></li>
                </ul>
            </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
</footer>
<!--  Footer Bottom Area -->

<!-- Back to scroll  -->
<div class="top-arrow">
            <span class="scroll-top-top">
            <i class="fas fa-arrow-up"></i>
            </span>
        </div>
        <!-- Back to scroll  -->
        <!--All Jquery Library Files -->
        <script src="<?php echo e(asset('js/sweetalert2.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.easing.min.js')); ?>"></script>
        <!-- Bootstrap js  -->
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/dropzone.js')); ?>"></script>
        <!-- Carousel js  -->
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
        <!-- aos Js -->
        <script src="<?php echo e(asset('js/aos.js')); ?>"></script>
        <!-- tab Js -->
        <script src="<?php echo e(asset('js/tab.js')); ?>"></script>
        <!-- main Js -->
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
        <?php if(session('notify')): ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    $.notify({
                        title: "<strong><?php echo e(session('notify')['title']); ?></strong> ",
                        message: "<?php echo e(session('notify')['msg']); ?>",
                    },{
                        type: "<?php echo e(session('notify')['type']); ?>",
                        placement: {
                            from: "top",
                            align: "right",
                        },
                    });
                });
            </script>
        <?php endif; ?>
        <?php if(session('sweet-alert')): ?>
            <script>
                swal({
                    type : "<?php echo e(session('sweet-alert')['type']); ?>",
                    title : "<?php echo e(session('sweet-alert')['title']); ?>",
                    text : "<?php echo e(session('sweet-alert')['text']); ?>"
                });
            </script>
        <?php endif; ?>
    </body>
</html>