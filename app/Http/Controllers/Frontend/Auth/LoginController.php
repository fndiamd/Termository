<?php

namespace App\Http\Controllers\Frontend\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function showLoginForm(){
        return view('frontend.pages.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

}