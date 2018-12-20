@extends('backend.index') 
@section('title') 
    User Detail
@endsection 
@section('content')
<div class="container">
    <div class="form-row"> 
        <div class="form-group col-md-6"> 
            <label for="NameUser">Name</label>
            <input type="text" class="form-control" id="NamaUser" value="{{$userUpdate->first_name}} {{$userUpdate->last_name}}" readonly>
        </div>
        <div class="form-group col-md-6"> 
            <label for="EmailUser">Email</label> 
            <input type="email" class="form-control" id="EmailUser" value="{{$userUpdate['email']}}" readonly>
        </div> 
    </div> 
    <div class="form-group"> 
        <label for="GenderUser">Gender</label>
        <input type="text" class="form-control" id="GenderUser" value="{{$userUpdate['gender']}}" readonly>
    </div> 
    <div class="form-group"> 
        <label for="PhoneUser">Phone</label>
        <input type="text" class="form-control" id="PhoneUser" value="{{$userUpdate['phone']}}" readonly>
    </div> 
    <div class="form-row"> 
        <div class="form-group col-md-6"> 
            <label for="StorageUser">Available Storage</label>
            <input type="text" class="form-control" id="StorageUser" value="{{$userUpdate['used_storage']}}" readonly>
        </div> 
        <div class="form-group col-md-6"> 
            <label for="StatusUser">Status</label> 
            <input type="text" class="form-control" id="StatusUser" value="{{$userUpdate['status']}}" readonly>
        </div>
    </div>
    <a href="{{url('/admin/user-view/')}}"><button type="submit" class="btn btn-primary">Back</button></a>
</div>
@endsection