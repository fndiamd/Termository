<?php
  namespace App\Http\Controllers\Backend;
  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;
  use App\Order;

  class OrderController extends Controller{
    public function index(){
      return view('backend.pages.order.view');
    }
    public function createView(){
      return view('backend.pages.order.create');
    }
    public function create(){
      return view('backend.pages.order.create');
    }
    public function updateView($id){
      return view('backend.pages.order.update');
    }
    public function update($id){
      $user = User::find($id);
    }
    public function delete($id){
      User::delete($id);
      return url('backend.pages.order.view');
    }
}