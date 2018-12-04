<?php
  namespace App\Http\Controllers\Backend;
  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;

  class RouterController extends Controller{
    public function index (){
        return view('backend.pages.dashboard');
    }
    public function adminView(){
      return view('backend.pages.admin.view');
    }
    public function categoryView(){
      return view('backend.pages.category.view');
    }
    public function logDownloadView(){
      return view('backend.pages.logDownload.view');
    }
    public function logViewView(){
      return view('backend.pages.logView.view');
    }
    public function fiturView(){
      return view('backend.pages.fitur.view');
    }
  }
