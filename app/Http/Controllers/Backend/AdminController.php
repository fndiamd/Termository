<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class AdminController extends Controller{
    public function index(){
      return view('backend.pages.admin.view');
    }
    public function createView(){
      return view('backend.pages.admin.create');
    }
    public function updateView($id){
        $data = [
          'data' => Admin::find($id)
        ];
      return view('backend.pages.admin.update', $data);
    }
  }
