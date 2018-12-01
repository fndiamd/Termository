<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class LoginController extends Controller{
    use AuthenticatesUsers;
    protected $redirectTo = '/sign-in';

    public function showLoginForm(){
        return view('frontend.pages.login');
        //dd(session()->all());
    }

    public function __construct(){
        $this->middleware('guest', ['except' => 'logout']);
    }
}
