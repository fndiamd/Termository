<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Validator;

class AdminController extends Controller{
    public function index(){
      return view('backend.pages.admin.view');
    }
    public function createView(){
      return view('backend.pages.admin.create');
    }

    public function updateView($id){
      return view('backend.pages.admin.update', $data);
    }

    public function create(Request $req){
      $data = $req->only([
          'name',
          'email',
          'password'
      ]);
      Validator::make($data, [
          //definisi rules
          'name' => 'required|alpha_spaces',
          'email' => 'email|required|unique:users',
          'password' => 'required|min:8',
      ],[
          'name.required' => 'First name tidak boleh kosong.',
          'name.alpha_spaces' => 'First name hanya boleh berisi abjad dan space',
          'email.email' => 'E-mail harus valid',
          'email.required' => 'E-mail tidak boleh kosong',
          'email:unique' => 'E-mail sudah pernah digunakan',
          'password.required' => 'Password tidak boleh kosong',
          'password.min' => 'Password minimal 8 karakter',
      ])->validate();

      Admin::create([
          'name' => $req->name,
          'email' => $req->email,
          'password' => $req->password,
          'status' => "1"
      ]);
        echo "data berhasil ditambah";
    }

    public function update(Request $req, $id){
      $datalama = Admin::where('id_admin',$id);
      $databaru = $req->only([
          'name',
          'email',
          'password'
      ]);

      Validator::make($databaru, [
          //definisi rules
          'name' => 'required|alpha_spaces',
          'email' => 'email|required|unique:users',
          'password' => 'required|min:8',
      ],[
          'name.required' => 'First name tidak boleh kosong.',
          'name.alpha_spaces' => 'First name hanya boleh berisi abjad dan space',
          'email.email' => 'E-mail harus valid',
          'email.required' => 'E-mail tidak boleh kosong',
          'email:unique' => 'E-mail sudah pernah digunakan',
          'password.required' => 'Password tidak boleh kosong',
          'password.min' => 'Password minimal 8 karakter',
      ])->validate();

      $datalama->update([
          'name' => $req->name,
          'email' => $req->email,
          'password' => $req->password,
          'status' => "1"
      ]);
        echo "data berhasil diupdate";
      }
  }
