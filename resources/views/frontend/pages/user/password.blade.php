@extends('frontend.layouts.profile')
@section('title')
    Setting Password
@endsection
@section('content')
<main class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <form action="{{ url('profile/setting-password') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="password_old">Password Old</label>
                            <input type="password" name="password_old" class="form-control" required placeholder="Enter your old password">
                            @value($errors->first('password_old'))
                                <small class="text-danger">
                                    {{ $errors->first('password_old') }}
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
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection