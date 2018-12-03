<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Files;

class FilesController extends Controller
{
    public function explore(){
        $data = [
            'category' => Category::all(),
            'files' => Files::all(),
        ];
        return view('frontend.pages.explore', $data);
    }
}
