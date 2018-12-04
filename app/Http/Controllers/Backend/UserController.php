<?php
    namespace App\Http\Controllers\Backend;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\User;

    class UserController extends Controller{
        public function index(){
            return view('backend.pages.user.view');
        }
        public function createView(){
            return view('backend.pages.user.create');
        }
        public function create(){
            return view('backend.pages.user.create');
        }
        public function updateView($id){
            return view('backend.pages.user.update');
        }
        public function update(Request $req, $id){
            $user = User::find($id);
        }
        public function delete(Request $req, $id){
            User::delte($id);
            return url('backend.pages.user.view');
        }
    }