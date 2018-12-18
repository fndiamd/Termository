@extends('backend.index')
@section('title')
  Update Admin
@endsection
@section('content')
<div class="container">
  <form action="{{ url('admin/admin-update', $admins['id_admin']) }}" method="post">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName4">Username</label>
        <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Username">
        @value($errors->first('name'))
            <small class="text-danger">
                {{ $errors->first('name') }}
            </small>
        @endvalue
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="text" class="form-control" name="email" id="inputPassword4" placeholder="Email">
        @value($errors->first('email'))
            <small class="text-danger">
                {{ $errors->first('email') }}
            </small>
        @endvalue
      </div>
    </div>
    <div class="from-row">
      <div class="form-group">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
        @value($errors->first('password'))
            <small class="text-danger">
                {{ $errors->first('password') }}
            </small>
        @endvalue
      </div>
      <div class="form-group">
        <label for="inputPassword4">Re-Type Password</label>
        <input type="password" class="form-control" name="passwordConfirm" id="inputPassword4" placeholder="Password">
        @value($errors->first('passwordConfirm'))
            <small class="text-danger">
                {{ $errors->first('passwordConfirm') }}
            </small>
        @endvalue
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
