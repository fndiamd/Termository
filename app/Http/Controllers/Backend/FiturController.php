<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class FiturController extends Controller{
    public function index(){
      return view('backend.pages.fitur.view');
    }
    public function createView(){
      return view('backend.pages.fitur.create');
    }
    public function updateView($id){
        $data = [
          'data' => Admin::find($id)
        ];
      return view('backend.pages.fitur.update', $data);
    }
  }
