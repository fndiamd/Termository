<?php
  namespace App\Http\Controllers\Backend;
  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;
  use App\Order;

  class OrderController extends Controller{
    public function index(){
      $order = Order::all()->toArray();
      return view('backend.pages.order.view', compact('order'));
    }
    public function createView(){
      return view('backend.pages.order.create');
    }
    public function create(){
      return view('backend.pages.order.create');
    }
    public function updateView($id){
      $orderUpdate = Order::find($id);
      return view('backend.pages.order.update', compact('orderUpdate'));
    }
    public function update($id){
      $user = User::find($id);
    }
    public function delete($id){
      Order::find($id)->delete();
      return redirect(url('/admin/order-view'));
    }
}