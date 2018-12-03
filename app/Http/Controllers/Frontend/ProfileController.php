<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Files;

class ProfileController extends Controller{
    public function index(){
        $disk = Auth::user()->used_storage;
        $usageDisk = ( $disk / 15000000 ) * 100; 
        $data = [
            'category' => Category::all(),
            'files' => Files::all(),
            'usageDisk' => $usageDisk,
            'disk' => $disk,
        ];
        return view('frontend.pages.user.dashboard', $data);
    }

    public function viewSetting(){
        $data = [
            'user' => User::find( Auth::user()->id_user),
            'category' => Category::all(),
            'usageDisk' => $usageDisk,
            'disk' => $disk
        ];

        return view('frontend.pages.user.setting', $data);
    }
}
