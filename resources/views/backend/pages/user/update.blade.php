@extends('backend.index') 
@section('title') 
    User Update
@endsection 
@section('content')
<div class="container">
    <div class="form-row"> 
        <div class="form-group col-md-6"> 
            <label for="NameUser">Nama</label>
            <input type="text" class="form-control" id="NamaUser" value="Namaku :*" readonly>
        </div>
        <div class="form-group col-md-6"> 
            <label for="EmailUser">Email</label> 
            <input type="email" class="form-control" id="EmailUser" value="Emailku :*" readonly>
        </div> 
    </div> 
    <div class="form-group"> 
        <label for="GenderUser">Gender</label>
        <input type="text" class="form-control" id="GenderUser" value="Apa hayo" readonly>
    </div> 
    <div class="form-group"> 
        <label for="PhoneUser">Phone</label>
        <input type="text" class="form-control" id="PhoneUser" value="Berapa hayo" readonly>
    </div> 
    <div class="form-row"> 
        <div class="form-group col-md-6"> 
            <label for="StorageUser">Available Storage</label>
            <input type="email" class="form-control" id="StorageUser" value="Kok tinggal dikit :((" readonly>
        </div> 
        <div class="form-group col-md-4"> 
            <label for="StatusUser">Status</label> 
            <input type="email" class="form-control" id="StatusUser" value="Masih Jomblo :((" readonly>
        </div>
    </div>
    <a href="{{url('/admin/user-view/')}}"><button type="submit" class="btn btn-primary">Back</button></a>
</div>
@endsection