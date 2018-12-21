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
                <h1>The best way to save and publish your files <br> With <span>Termository</span></h1>
                <p>Free for you 150 MB Spaces</p>
                <div class="trial-form">
                <form action="{{ url('search') }}">
                    <input type="text" class="form-control" name="key" placeholder="Search files in here" required="required">
                    <button type="submit" class="btn hvr-sweep-to-blue btn-utrun btn-primary">SEARCH FILES<i class="flaticon-next"></i></button>
                </form>
                </div>
            </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-6 col-md-6">
            <div class="working-person">
                <img src="{{ asset('assets/images/normal/person.png') }}" alt="">
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
                    <div class="container">
                    <h1>ABOUT US</h1>
                    <p>
                    Termository - The best way to save and publish your files. 
                    also brings teams together to work through problems, move ideas forward, and learn from each other along the way.
                    Termository is the storage of scripts,scientific documents,paper,research,thesis,images, video, audio, and others
                    resulted by academic community in order to be used by all users who are concerned or care with the development of education.
                    </p>
                    </div>
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
                <p></p>
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
                </ul>
                <!-- Tab panes -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane container fade show active no-padding" id="one" role="tabpanel" aria-labelledby="pills-home-tab">
                        <!--  Start row -->
                        <div class="row">
                        <div class="col-lg-4 col-md-4 padding-left">
                            <div class="tab-thumb">
                            <img src="{{ asset('assets/images/normal/tab-thumb.png') }}" alt="Tab-img">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tab-info">
                            <h2>Manage your chaos</h2>
                            <p>
                                Take a deep breath. On Termository, project management happens in Issues and Project , right a long side your code. All you have to do is mention a teammate to get them involved.
                            </p>
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
                            <img src="{{ asset('assets/images/normal/tab-thumb.png') }}" alt="Tab-img">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tab-info">
                            <h2>Free 150 MB space disk</h2>
                            <p>Free for a small teams under 5 and priced to scale with Standart or Premium plans</p>
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
                            <img src="{{ asset('assets/images/normal/tab-thumb.png') }}" alt="Tab-img">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tab-info">
                            <h2>Secure yur files</h2>
                            <p>
                                You can secure your files by storing them as a private
                            </p>
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
    <!-- <section id="pricing-table-section" class="bg-white defalut-space">
        <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="default-title text-center">
                    <h1>Pricing Plan</h1>
                    <p>
                    Make your account enjoyed our features. <br> More than 1 million teams and 6 million developers love Termository.
                    </p>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="cd-pricing-container cd-has-margins">
                <ul class="cd-pricing-list cd-bounce-invert">
                    <li>
                    <ul class="cd-pricing-wrapper">
                        <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header normal-bg1">
                            <div class="cd-price">
                            <h3> <span class="cd-value">$0</span>.00</h3>
                            </div>
                            <h2>Free</h2>
                        </header> 
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
                        </div> 
                        </li>
                        <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header normal-bg1">
                            <div class="cd-price">
                            <h3> <span class="cd-value">$50</span>.00</h3>
                            </div>
                            <h2>Basic</h2>
                        </header> 
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
                        </div> 

                        </li>
                    </ul> 
                    </li>
                    <li class="cd-popular">
                    <ul class="cd-pricing-wrapper">
                        <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header normal-bg2">
                            <div class="cd-price">
                            <h3> <span class="cd-value">$48</span>.99</h3>
                            </div>
                            <h2>Starndard</h2>
                        </header> 
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
                        </div> 
                        </li>
                        <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header normal-bg2">
                            <div class="cd-price">
                            <h3> <span class="cd-value">$200</span>.99</h3>
                            </div>
                            <h2>Starndard</h2>
                        </header> 
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
                        </div> 

                        </li>
                    </ul> 
                    </li>
                    <li>
                    <ul class="cd-pricing-wrapper">
                        <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header normal-bg1">
                            <div class="cd-price">
                            <h3> <span class="cd-value">$60</span>.99</h3>
                            </div>
                            <h2>Premium</h2>
                        </header> 
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
                        </div> 
                        </li>
                        <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header normal-bg1">
                            <div class="cd-price">
                            <h3> <span class="cd-value">$500</span>.99</h3>
                            </div>
                            <h2>Premium</h2>
                        </header> 
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
                        </div> 
                        </li>
                    </ul> 
                    </li>
                </ul> 
            </div> 
        </div>
        
        </div>
    </section> -->
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
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                <form method="post" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
            <!--  End Row -->
        </div>
    </section>
    <!--  Wild wide User -->
@endsection
