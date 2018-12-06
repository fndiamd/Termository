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
          'password'
      ]);
      Validator::make($data, [
          'name' => 'required|alpha_spaces',
          'email' => 'email|required|unique:admin',
          'password' => 'required|min:8',
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
          'password'
      ]);

      Validator::make($databaru, [
          'name' => 'required|alpha_spaces',
          'email' => 'email|required|unique:admin',
          'password' => 'required|min:8',
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
