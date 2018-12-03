@extends('frontend.layouts.master')
@section('title')
    Get started Termository
@endsection
@section('content')
    <section class="bg-white default-space begin-section-2">
        <div class="container-fluid register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="{{ asset('images/normal/rocket.png') }}" alt=""/>
                    <h3>Welcome Termository</h3>
                    <p>You are 30 seconds away from earning your own money!</p>
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Create your account FREE!</h3>
                            <form method="post" action="{{ url('request-signup') }}">
                                @csrf
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="firstName" class="form-control" placeholder="First Name *" required/>
                                            @value($errors->first('firstName'))
                                                <small class="text-danger">
                                                    {{ $errors->first('firstName') }}
                                                </small>
                                            @endvalue
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lastName" class="form-control" placeholder="Last Name *" required />
                                            @value($errors->first('lastName'))
                                                <small class="text-danger">
                                                    {{ $errors->first('lastName') }}
                                                </small>
                                            @endvalue
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password *" required/>
                                            @value($errors->first('password'))
                                                <small class="text-danger">
                                                    {{ $errors->first('password') }}
                                                </small>
                                            @endvalue
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="passwordConfirm" class="form-control"  placeholder="Confirm Password *" required/>
                                            @value($errors->first('passwordConfirm'))
                                                <small class="text-danger">
                                                    {{ $errors->first('passwordConfirm') }}
                                                </small>
                                            @endvalue
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="1">
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="0">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            @value($errors->first('gender'))
                                                <small class="text-danger">
                                                    {{ $errors->first('gender') }}
                                                </small>
                                            @endvalue
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" required/>
                                            @value($errors->first('email'))
                                                <small class="text-danger">
                                                    {{ $errors->first('email') }}
                                                </small>
                                            @endvalue
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                                </div>
                                                <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                                @value($errors->first('phone'))
                                                    <small class="text-danger">
                                                        {{ $errors->first('phone') }}
                                                    </small>
                                                @endvalue
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="hint" class="form-control" placeholder="Enter Your Answer *" value="" />
                                            @value($errors->first('hint'))
                                                <small class="text-danger">
                                                    {{ $errors->first('hint') }}
                                                </small>
                                            @endvalue
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection