@extends('frontend.layouts.profile')
@section('title')
    Setting Account
@endsection
@section('content')
    <main class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <form action="{{ url('profile/settings') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" required value="{{ $user->first_name }}">
                                @value($errors->first('firstName'))
                                    <small class="text-danger">
                                        {{ $errors->first('firstName') }}
                                    </small>
                                @endvalue
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName"  required value="{{ $user->last_name }}">
                                @value($errors->first('lastName'))
                                    <small class="text-danger">
                                        {{ $errors->first('lastName') }}
                                    </small>
                                @endvalue
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control" name="email" id="email" required value="{{ $user->email }}" disable>
                                @value($errors->first('email'))
                                    <small class="text-danger">
                                        {{ $errors->first('email') }}
                                    </small>
                                @endvalue
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                    </div>
                                    <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="{{ $user->phone }}" />
                                    @value($errors->first('phone'))
                                        <small class="text-danger">
                                            {{ $errors->first('phone') }}
                                        </small>
                                    @endvalue
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <div class="maxl">
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="1" @if(Auth::user()->gender == 1) checked="checked" @endif>
                                    <span> Male </span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="0" @if(Auth::user()->gender == 0) checked="checked" @endif>
                                    <span>Female </span> 
                                </label>
                            </div>
                            @value($errors->first('gender'))
                                <small class="text-danger">
                                    {{ $errors->first('gender') }}
                                </small>
                            @endvalue
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required placeholder="Type your password">
                                @value($errors->first('password'))
                                    <small class="text-danger">
                                        {{ $errors->first('password') }}
                                    </small>
                                @endvalue
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passwordConfirm">Confirm Password</label>
                                <input type="password" name="passwordConfirm" class="form-control" required placeholder="Confirm password">
                                @value($errors->first('passwordConfirm'))
                                    <small class="text-danger">
                                        {{ $errors->first('passwordConfirm') }}
                                    </small>
                                @endvalue
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <a href="{{ url('profile/setting-password') }}" class="btn btn-warning">
                            <i class="fa fa-key"></i> Change Password
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection