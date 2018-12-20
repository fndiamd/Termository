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
    public function userView(){
      return view('backend.pages.user');
    }
    public function categoryView(){
      return view('backend.pages.category');
    }
    public function fileView(){
      return view('backend.pages.file');
    }
    public function orderView(){
      return view('backend.pages.order');
    }
    public function logDownloadView(){
      return view('backend.pages.logDownload');
    }
    public function logViewView(){
      return view('backend.pages.logView');
    }
    public function fiturView(){
      return view('backend.pages.fitur');
    }
  }
