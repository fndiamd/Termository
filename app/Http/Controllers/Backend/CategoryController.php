<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Validator;

class CategoryController extends Controller{
    public function index(){
      $category = Category::all()->toArray();
      return view('backend.pages.category.view',compact('category'));
    }

    public function createView(){
      return view('backend.pages.category.create');
    }

    public function updateView($id){
      $category = Category::find($id);
      return view('backend.pages.category.update', compact('category'));
    }

    public function create(Request $req){
      $data = $req->only([
          'category',
          'faicon'
      ]);
      Validator::make($data, [
          'category' => 'required|alpha_spaces|unique:category',
          'faicon' => 'required',
      ],[
        'category.required' => 'Nama category tidak boleh kosong.',
        'category.alpha_spaces' => 'Nama category hanya boleh berisi abjad dan space',
        'category:unique' => 'Category sudah ada',
        'faicon.required' => 'First name tidak boleh kosong.',
        ])->validate();

      Category::create([
          'category' => $req->category,
          'faicon' => $req->faicon
      ]);
          return redirect(url('admin/category-view'));
    }

    public function update(Request $req, $id){
      $datalama = Category::find($id);
      $databaru = $req->only([
          'category',
          'faicon'
      ]);

      Validator::make($databaru, [
        'category' => 'required|alpha_spaces',
        'faicon' => 'required',
      ],[
        'category.required' => 'Nama category tidak boleh kosong.',
        'category.alpha_spaces' => 'Nama category hanya boleh berisi abjad dan space',
        'category:unique' => 'Category sudah ada',
        'faicon.required' => 'First name tidak boleh kosong.',
        ])->validate();

      $datalama->update([
          'category' => $req->category,
          'faicon' => $req->faicon
      ]);
          return redirect(url('admin/category-view'));
      }

      public function delete($id){
        Category::find($id)->delete();
        return redirect(url('admin/category-view'));
      }
  }
