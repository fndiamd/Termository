<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouterController extends Controller{
    public function index (){
        return view('backend.pages.dashboard');
    }
    public function userView(){
      return view('backend.pages.user.view');
    }
    public function categoryView(){
      return view('backend.pages.category.view');
    }
    public function fileView(){
      return view('backend.pages.file.view');
    }
    public function orderView(){
      return view('backend.pages.order.view');
    }
    public function logDownloadView(){
      return view('backend.pages.log.logDownload');
    }
    public function logViewView(){
      return view('backend.pages.log.logView');
    }
    public function fiturView(){
      return view('backend.pages.feature.view');
    }
  }
