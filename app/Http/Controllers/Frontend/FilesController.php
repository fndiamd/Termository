<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Category;
use App\Files;
use Validator;

class FilesController extends Controller
{
    public function uploadFiles(Request $req){
       
    }

    public function explore(){
        $data = [
            'category' => Category::all(),
            'files' => Files::all(),
        ];
        return view('frontend.pages.explore', $data);
    }
}
