<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller{
    use AuthenticatesUsers;
    protected $redirectTo = '/sign-in';
    
    public function index (){
        return view('frontend.pages.login');
    }
}
