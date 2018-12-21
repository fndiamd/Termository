<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Validator;

class AdminController extends Controller{
    public function index(){
      $admins = Admin::all()->toArray();
      return view('backend.pages.admin.view', compact('admins'));
    }

    public function createView(){
      return view('backend.pages.admin.create');
    }

    public function updateView($id){
      $admins = Admin::find($id);
      return view('backend.pages.admin.update', compact('admins'));
    }

    public function create(Request $req){
      $data = $req->only([
          'name',
          'email',
          'passwordConfirm',
          'password'
      ]);
      Validator::make($data, [
          'name' => 'required|alpha_spaces',
          'email' => 'email|required|unique:admin',
          'passwordConfirm' => 'required|same:password',
          'password' => 'required|min:8',
      ],[
        'name.required' => 'Name tidak boleh kosong.',
        'name.alpha_spaces' => 'Name hanya boleh berisi abjad dan space',
        'password.required' => 'Password tidak boleh kosong',
        'password.min' => 'Password minimal 8 karakter',
        'passwordConfirm.required' => 'Password Confirm tidak boleh kosong.',
        'passwordConfirm.same' => 'Password Confirm harus sama dengan Password',
        'email.email' => 'E-mail harus valid',
        'email.required' => 'E-mail tidak boleh kosong',
        'email:unique' => 'E-mail sudah pernah digunakan',
        ])->validate();

      Admin::create([
          'name' => $req->name,
          'email' => $req->email,
          'password' => $req->password,
          'status' => 1
      ]);
      return redirect(url('admin/admin-view'));
    }

    public function update(Request $req, $id){
      $datalama = Admin::find($id);
      $databaru = $req->only([
        'name',
        'email',
        'passwordConfirm',
        'password'
      ]);

      Validator::make($databaru, [
        'name' => 'required|alpha_spaces',
        'email' => 'email|required|unique:admin',
        'passwordConfirm' => 'required|same:password',
        'password' => 'required|min:8',
      ],[
        'name.required' => 'Name tidak boleh kosong.',
        'name.alpha_spaces' => 'Name hanya boleh berisi abjad dan space',
        'password.required' => 'Password tidak boleh kosong',
        'password.min' => 'Password minimal 8 karakter',
        'passwordConfirm.required' => 'Password Confirm tidak boleh kosong.',
        'passwordConfirm.same' => 'Password Confirm harus sama dengan Password',
        'email.email' => 'E-mail harus valid',
        'email.required' => 'E-mail tidak boleh kosong',
        'email:unique' => 'E-mail sudah pernah digunakan',
        ])->validate();

      $datalama->update([
          'name' => $req->name,
          'email' => $req->email,
          'password' => $req->password,
          'status' => 1
      ]);
        return redirect(url('admin/admin-view'));
      }

      public function delete($id){
        Admin::find($id)->delete();
        return redirect(url('admin/admin-view'));
      }
  }
