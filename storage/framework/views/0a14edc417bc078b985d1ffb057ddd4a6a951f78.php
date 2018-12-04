<!-- Preloader css -->
<div id="loading">
    <div class="lds-dual-ring"></div>
</div>
<!-- Preloader css -->
<!-- Start Header -->
<header id="header-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top sticky-hidden">
    <div class="container">
        <a class="navbar-brand logo-blue" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/normal/termository-blue.png')); ?>" alt="Footer Logo"></a>
        <a class="navbar-brand logo-light" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/normal/termository-light.png')); ?>" alt="Footer Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse main-menu navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link utrun-scroll" href="<?php echo e(url('/#banner-area')); ?>">Home <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(url('explore-files')); ?>" class="nav-link utrun-scroll">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="<?php echo e(url('/#about-section')); ?>">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="<?php echo e(url('/#amazing-features')); ?>">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="<?php echo e(url('/#pricing-table-section')); ?>">pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="<?php echo e(url('/#contact-section')); ?>">contact</a>
            </li>
            <?php if(Auth::guest('user')): ?>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="<?php echo e(url('sign-in')); ?>">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link download-list hvr-sweep-to-blue" href="<?php echo e(url('get-started')); ?>">Get Started</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="<?php echo e(url('profile')); ?>">
                    My Profile
                </a>
            </li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
    </nav>
    <!-- Navigation -->
</header>
<!-- End Header -->