<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignUpController extends Controller{
    public function index (){
        return view('frontend.pages.signup');
    }

    public function requestSignup(Request $r){
        echo 'oke';
    }
}
