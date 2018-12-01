@extends('frontend.index')
@section('title')
    Sign in to Termository
@endsection
@section('content')
    <section class="bg-white default-space begin-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sign In</h5>
                            <form class="form-signin" method="post" action="{{ url('request-signin') }}">
                                @csrf
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
                                    <label for="inputEmail">Email address</label>
                                    @value($errors->first('email'))
                                        <small class="text-danger">
                                            {{ $errors->first('email') }}
                                        </small>
                                    @endvalue
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                                    <label for="inputPassword">Password</label>
                                    @value($errors->first('password'))
                                        <small class="text-danger">
                                            {{ $errors->first('password') }}
                                        </small>
                                    @endvalue
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
                                    New to Termository ? <a href="{{ url('/get-started') }}" class="text-blue">Create an account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection