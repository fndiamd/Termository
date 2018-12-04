<?php
    namespace App\Http\Controllers\Backend;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\File;

    class FileController extends Controller{
        public function index(){
            return view('backend.pages.file.view');
        }
        public function createView(){
            return view('backend.pages.file.create');
        }
        public function create(){
            return view('backend.pages.file.create');
        }
        public function updateView($id){
            return view('backend.pages.file.update');
        }
        public function update(Request $req, $id){
            $user = File::find($id);
        }
        public function delete(Request $req, $id){
            File::delte($id);
            return url('backend.pages.file.view');
        }
    }