@extends('backend.index') 
@section('title') 
    Order Update
@endsection 
@section('content')
<div class="container">
    <div class="form-row"> 
        <div class="form-group col-md-6"> 
            <label for="Featureorder">Feature</label>
            <input type="text" class="form-control" id="FeatureOrder" value="{{$orderUpdate->id_feature}}" readonly>
        </div>
        <div class="form-group col-md-6"> 
            <label for="UserOrder">User</label> 
            <input type="text" class="form-control" id="UserOrder" value="{{$orderUpdate->id_user}}" readonly>
        </div> 
    </div> 
    <div class="form-group"> 
        <label for="OrderDate">Order Date</label>
        <input type="text" class="form-control" id="OrderDate" value="{{$orderUpdate->order_date}}" readonly>
    </div> 
    <div class="form-group"> 
        <label for="PaymentOrder">Payment</label>
        <input type="text" class="form-control" id="PaymentOrder" value="{{$orderUpdate->payment}}" readonly>
    </div>
    <div class="form-group"> 
        <label for="inputState">Status</label> 
        <input type="email" class="form-control" id="inputEmail4" value="{{$orderUpdate->status}}" readonly>
    </div>
    <a href="{{url('/admin/order-view/')}}"><button type="submit" class="btn btn-primary">Back</button></a>
</div>
@endsection