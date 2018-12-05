@extends('backend.index')
@section('title')
  Update Admin
@endsection
@section('content')
<div class="container">
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName4">Username</label>
        <input type="name" class="form-control" id="inputEmail4" placeholder="Username">
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputPassword4" placeholder="Email">
      </div>
    </div>
    <div class="from-row">
      <div class="form-group">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="inputPassword4">Re-Type Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection
