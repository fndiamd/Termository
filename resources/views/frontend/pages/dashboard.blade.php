@extends('frontend.layouts.master')
@section('title')
    Termository | Best way to save and publish your files.
@endsection
@section('content')
    <!-- Banner Area -->
    <section id="banner-area">
        <div class="container">
        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-6">
            <div class="free-trial">
                <h1>Create Your App Page <br> With <span>Utrun</span></h1>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form.</p>
                <div class="trial-form">
                <form>
                    <input type="text" class="form-control" name="trial" placeholder="Search files in here" required="required">
                    <button type="button" class="btn hvr-sweep-to-blue btn-utrun btn-primary">SEARCH FILES<i class="flaticon-next"></i></button>
                </form>
                </div>
            </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-6 col-md-6">
            <div class="working-person">
                <img src="{{ asset('images/normal/person.png') }}" alt="">
            </div>
            </div>
            <!-- End Col -->
        </div>
        </div>
    </section>
    <!-- Banner Area -->
    <!-- Friendly Interface section -->
    <section id="about-section" class="bg-white defalut-space">
        <div class="container">
        <!--  Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="default-title text-center">
                    <h1>About Us</h1>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem commodi fugiat numquam voluptas ducimus sapiente nemo laborum ipsam similique, dolore ipsum corrupti animi quae non, reiciendis voluptatum? Explicabo, consequatur tempore!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, asperiores sunt omnis, accusantium nam laboriosam laborum reiciendis distinctio iure ullam eaque velit, quasi odit magnam voluptatibus. Suscipit quis amet eaque?
                    </p>
                </div>
            </div>
        </div>
        <!--  End Row -->
        </div>
    </section>
    <!-- Friendly Interface section -->
    <!-- Aamzing Features Section -->
    <section id="amazing-features" class="bg-gray defalut-space">
        <div class="container">
        <!--  Start Row -->
        <div class="row">
            <div class="col-lg-12">
            <div class="default-title text-center">
                <h1>Amazing Features</h1>
                <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec
                sodales<br> sagittis magna. Sed consequat, leo eget bibendum sodales, augue .</p>
            </div>
            </div>
        </div>
        <!--  End Row -->
        <!--  Start Row -->
        <div class="row">
            <!--  Start Col -->
            <div class="col-lg-8  col-md-8 offset-2">
            <div class="tab-features">
                <!-- Nav tabs -->
                <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#one" role="tab" aria-selected="true"><span><i
                        class="flaticon-bulb"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#two" role="tab" aria-selected="false"><span><i
                        class="flaticon-design"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#three" role="tab" aria-selected="false"><span><i
                        class="flaticon-search"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#four" role="tab" aria-selected="false"><span><i
                        class="flaticon-shield"></i></span></a>
                </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane container fade show active no-padding" id="one" role="tabpanel" aria-labelledby="pills-home-tab">
                    <!--  Start row -->
                    <div class="row">
                    <div class="col-lg-4 col-md-4 padding-left">
                        <div class="tab-thumb">
                        <img src="{{ asset('images/normal/tab-thumb.png') }}" alt="Tab-img">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="tab-info">
                        <h2>Best User Experience</h2>
                        <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                            nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue .</p>
                        </div>
                    </div>
                    </div>
                    <!--  End row -->
                </div>
                <div class="tab-pane container fade no-padding" id="two" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <!--  Start row -->
                    <div class="row">
                    <div class="col-lg-4 col-md-4 padding-left">
                        <div class="tab-thumb">
                        <img src="{{ asset('images/normal/tab-thumb.png') }}" alt="Tab-img">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="tab-info">
                        <h2>Amazing Features</h2>
                        <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                            nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue .</p>
                        </div>
                    </div>
                    </div>
                    <!--  End row -->
                </div>
                <div class="tab-pane container fade no-padding" id="three" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <!--  Start row -->
                    <div class="row">
                    <div class="col-lg-4 col-md-4 padding-left">
                        <div class="tab-thumb">
                        <img src="{{ asset('images/normal/tab-thumb.png') }}" alt="Tab-img">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="tab-info">
                        <h2>Best User Experience</h2>
                        <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                            nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue .</p>
                        </div>
                    </div>
                    </div>
                    <!--  End row -->
                </div>
                <div class="tab-pane container fade no-padding" id="four" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <!--  Start row -->
                    <div class="row">
                    <div class="col-lg-4 col-md-4 padding-left">
                        <div class="tab-thumb">
                        <img src="{{ asset('images/normal/tab-thumb.png') }}" alt="Tab-img">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="tab-info">
                        <h2>Best User Experience</h2>
                        <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                            nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue .</p>
                        </div>
                    </div>
                    </div>
                    <!--  End row -->
                </div>
                </div>
            </div>
            </div>
            <!--  End Col -->
        </div>
        <!--  End Row -->
        </div>
    </section>
    <!-- Aamzing Features Section -->
    <!-- Pricing Table Section -->
    <section id="pricing-table-section" class="bg-white defalut-space">
        <div class="container">
        <!--  Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="default-title text-center">
                    <h1>Pricing Plan</h1>
                    <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec
                    sodales <br> sagittis magna. Sed consequat, leo eget bibendum sodales, augue .</p>
                </div>
            </div>
        </div>
        <!--  End Row -->
        <!--  Start Row -->
        <div class="row ">
            <div class="cd-pricing-container cd-has-margins">
            <div class="cd-pricing-switcher">
                <p class="fieldset">
                <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
                <label for="monthly-2" class="active">Monthly</label>
                <input type="radio" name="duration-2" value="yearly" id="yearly-2">
                <label for="yearly-2">Yearly</label>
                <span class="cd-switch"></span>
                </p>
            </div> <!-- .cd-pricing-switcher -->
            <ul class="cd-pricing-list cd-bounce-invert">
                <li>
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header normal-bg1">
                        <div class="cd-price">
                        <h3> <span class="cd-value">$0</span>.00</h3>
                        </div>
                        <h2>Free</h2>
                    </header> <!-- .cd-pricing-header -->
                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                        <li><span><i class="flaticon-house"></i></span></li>
                        <li>1 Page UI Design</li>
                        <li>5 Screen App Design</li>
                        <li>Web App Design</li>
                        <li>Responsive Design</li>
                        <li>Web Development</li>
                        <li><button class="btn btn-default light-animate-btn  price-btn-defalut">Purchase<i class="flaticon-next"></i></button></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->
                    </li>
                    <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header normal-bg1">
                        <div class="cd-price">
                        <h3> <span class="cd-value">$50</span>.00</h3>
                        </div>
                        <h2>Basic</h2>
                    </header> <!-- .cd-pricing-header -->
                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                        <li><span><i class="flaticon-house"></i></span></li>
                        <li>1 Page UI Design</li>
                        <li>5 Screen App Design</li>
                        <li>Web App Design</li>
                        <li>Responsive Design</li>
                        <li>Web Development</li>
                        <li><button class="btn btn-default light-animate-btn  price-btn-defalut">Purchase<i class="flaticon-next"></i></button></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                    </li>
                </ul> <!-- .cd-pricing-wrapper -->
                </li>
                <li class="cd-popular">
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header normal-bg2">
                        <div class="cd-price">
                        <h3> <span class="cd-value">$48</span>.99</h3>
                        </div>
                        <h2>Starndard</h2>
                    </header> <!-- .cd-pricing-header -->
                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                        <li><span><i class="flaticon-house-1"></i></span></li>
                        <li>1 Page UI Design</li>
                        <li>5 Screen App Design</li>
                        <li>Web App Design</li>
                        <li>Responsive Design</li>
                        <li>Web Development</li>
                        <li><button class="btn btn-default light-animate-btn  price-btn-defalut">Purchase<i class="flaticon-next"></i></button></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->
                    </li>
                    <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header normal-bg2">
                        <div class="cd-price">
                        <h3> <span class="cd-value">$200</span>.99</h3>
                        </div>
                        <h2>Starndard</h2>
                    </header> <!-- .cd-pricing-header -->
                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                        <li><span><i class="flaticon-house-1"></i></span></li>
                        <li>1 Page UI Design</li>
                        <li>5 Screen App Design</li>
                        <li>Web App Design</li>
                        <li>Responsive Design</li>
                        <li>Web Development</li>
                        <li><button class="btn btn-default light-animate-btn  price-btn-defalut">Purchase<i class="flaticon-next"></i></button></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                    </li>
                </ul> <!-- .cd-pricing-wrapper -->
                </li>
                <li>
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header normal-bg1">
                        <div class="cd-price">
                        <h3> <span class="cd-value">$60</span>.99</h3>
                        </div>
                        <h2>Premium</h2>
                    </header> <!-- .cd-pricing-header -->
                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                        <li><span><i class="flaticon-house"></i></span></li>
                        <li>1 Page UI Design</li>
                        <li>5 Screen App Design</li>
                        <li>Web App Design</li>
                        <li>Responsive Design</li>
                        <li>Web Development</li>
                        <li><button class="btn btn-default light-animate-btn  price-btn-defalut">Purchase<i class="flaticon-next"></i></button></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->
                    </li>
                    <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header normal-bg1">
                        <div class="cd-price">
                        <h3> <span class="cd-value">$500</span>.99</h3>
                        </div>
                        <h2>Premium</h2>
                    </header> <!-- .cd-pricing-header -->
                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                        <li><span><i class="flaticon-house"></i></span></li>
                        <li>1 Page UI Design</li>
                        <li>5 Screen App Design</li>
                        <li>Web App Design</li>
                        <li>Responsive Design</li>
                        <li>Web Development</li>
                        <li><button class="btn btn-default light-animate-btn  price-btn-defalut">Purchase<i class="flaticon-next"></i></button></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->
                    </li>
                </ul> <!-- .cd-pricing-wrapper -->
                </li>
            </ul> <!-- .cd-pricing-list -->
            </div> <!-- .cd-pricing-container -->
        </div>
        <!--  End Row -->
        </div>
    </section>
    <!-- Pricing Table Section -->
    <!--  Wild wide User -->
    <section id="contact-section" class="bg-gray defalut-space">
        <div class="container">
            <!--  Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="default-title text-center">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    
                </div>
                <div class="col-lg-6 col-md-6">
                    
                </div>
            </div>
            <!--  End Row -->
        </div>
    </section>
    <!--  Wild wide User -->
@endsection
