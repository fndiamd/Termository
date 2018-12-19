@extends('backend.index') 
@section('title') 
    Order Update
@endsection 
@section('content')
<div class="container">
    <div class="form-row"> 
        <div class="form-group col-md-6"> 
            <label for="Featureorder">Fitur</label>
            <input type="text" class="form-control" id="FeatureOrder" value="Fiturku :*" readonly>
        </div>
        <div class="form-group col-md-6"> 
            <label for="UserOrder">User</label> 
            <input type="text" class="form-control" id="UserOrder" value="Userku :*" readonly>
        </div> 
    </div> 
    <div class="form-group"> 
        <label for="OrderDate">Order Date</label>
        <input type="text" class="form-control" id="OrderDate" value="Kapan hayo" readonly>
    </div> 
    <div class="form-group"> 
        <label for="PaymentOrder">Payment</label>
        <input type="text" class="form-control" id="PaymentOrder" value="Apa hayo" readonly>
    </div>
    <div class="form-group"> 
        <label for="inputState">Status</label> 
        <input type="email" class="form-control" id="inputEmail4" value="Masih Jomblo :((" readonly>
    </div>
    <a href="{{url('/admin/order-view/')}}"><button type="submit" class="btn btn-primary">Back</button></a>
</div>
@endsection