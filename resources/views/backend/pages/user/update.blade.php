@extends('backend.index') 
@section('title') 
    User Update
@endsection 
@section('content')
<div class="form-row"> 
    <div class="form-group col-md-6"> 
        <label for="inputEmail4">Nama</label> 
    </div> 
    <div class="form-group col-md-6"> 
        <label for="inputPassword4">Email</label> 
    </div> 
</div> 
<div class="form-group"> 
    <label for="inputAddress">Gender</label> 
</div> 
<div class="form-group"> 
    <label for="inputAddress2">Phone</label> 
</div> 
<div class="form-row"> 
    <div class="form-group col-md-6"> 
        <label for="inputCity">Used Storage</label> 
    </div> 
    <div class="form-group col-md-4"> 
        <label for="inputState">Status</label> 
    </div> 
        <div class="form-group col-md-2"> 
        <label for="inputZip">Command</label> 
    </div> 
</div> 
<div class="form-group"> 
    <div class="form-check"> 
        <label class="form-check-label" for="gridCheck"> 
            Action
        </label> 
    </div> 
</div> 
<button type="submit" class="btn btn-primary">Sign in</button>
@endsection