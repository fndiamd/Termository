<?php
    namespace App\Http\Controllers\Backend;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\User;

    class UserController extends Controller{
        public function index(){
            $user = User::all()->toArray();
            return view('backend.pages.user.view', compact('user'));
        }
        public function createView(){
            return view('backend.pages.user.create');
        }
        public function create(){
            return view('backend.pages.user.create');
        }
        public function updateView($id){
            $userUpdate = User::find($id);
            return view('backend.pages.user.update', compact('userUpdate'));
        }
        public function update(Request $req, $id){
            $user = User::find($id);
        }
        public function delete($id){
            User::find($id)->delete();
            return redirect(url('/admin/user-view'));
        }
    }