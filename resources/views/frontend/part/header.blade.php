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
        <a class="navbar-brand logo-blue" href="{{ url('/') }}"><img src="{{ asset('images/normal/logo.png') }}" alt="Footer Logo"></a>
        <a class="navbar-brand logo-light" href="{{ url('/') }}"><img src="{{ asset('images/normal/logo-light.png') }}" alt="Footer Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse main-menu navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link utrun-scroll" href="{{ url('/#banner-area') }}">Home <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="{{ url('/#about-section') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="{{ url('/#amazing-features') }}">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="{{ url('/#pricing-table-section') }}">pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="{{ url('/#contact-section') }}">contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link utrun-scroll" href="{{ url('sign-in') }}">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link download-list hvr-sweep-to-blue" href="{{ url('get-started') }}">Get Started</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- Navigation -->
</header>
<!-- End Header -->