<?php
  namespace App\Http\Controllers\Backend;
  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;
  use App\LogDownload;
  use DB;

  class RouterController extends Controller{
    public function index (){
        return view('backend.pages.dashboard');
    }

    public function logDownloadView(){
      $data = [
        'total' => LogDownload::all()
      ];
      return view('backend.pages.log.logDownload', $data);
    }

    public function logViewView (){
      return view('backend.pages.log.logView');
    }
  }
