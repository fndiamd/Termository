<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller{
    public function index (){
        return view('frontend.pages.dashboard');
        
    }
}
