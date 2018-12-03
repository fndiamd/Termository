<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/login';

    public function showLoginForm(){
        return view('backend.pages.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login');
    }

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

}