<?php
    namespace App\Http\Controllers\Backend;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Files;

    class FileController extends Controller{
        public function index(){
            $file = Files::all()->toArray();
            return view('backend.pages.file.view', compact('file'));
        }
        public function createView(){
            return view('backend.pages.file.create');
        }
        public function create(){
            return view('backend.pages.file.create');
        }
        public function updateView($id){
            $fileUpdate = Files::find($id);
            return view('backend.pages.file.update', compact('fileUpdate'));
        }
        public function update(Request $req, $id){
            $fileUpdate = Files::find($id);
        }
        public function delete($id){
            Files::find($id)->delete();
            return redirect(url('/admin/file-view'));
        }
    }
