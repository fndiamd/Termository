<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feature;
use Validator;

class FeatureController extends Controller{
    public function index(){
      $feature = Feature::all()->toArray();
      return view('backend.pages.feature.view', compact('feature'));
    }

    public function createView(){
      return view('backend.pages.feature.create');
    }

    public function updateView($id){
      $feature = Feature::find($id);
      return view('backend.pages.feature.update', compact('feature'));
    }

    public function create(Request $req){
      $data = $req->only([
          'title',
          'price',
          'available_storage',
          'description'
      ]);
      Validator::make($data, [
          'title' => 'required',
          'price' => 'required|numeric',
          'available_storage' => 'required|numeric',
          'description' => 'required',
      ],[
        'title.required' => 'Title tidak boleh kosong.',
        'price.required' => 'Price tidak boleh kosong.',
        'price.numeric' => 'Price hanya bisa diisi angka.',
        'available_storage.required' => 'Available storage tidak boleh kosong.',
        'available_storage.numeric' => 'Available storage hanya bisa diisi angka.',
        'description.required' => 'description tidak boleh kosong.',
        ])->validate();

      Feature::create([
          'title' => $req->title,
          'price' => $req->price,
          'available_storage' => $req->available_storage,
          'description' => $req->description
      ]);
          return redirect(url('admin/feature-view'));
    }

    public function update(Request $req, $id){
      $datalama = Feature::find($id);
      $databaru = $req->only([
          'title',
          'price',
          'available_storage',
          'description'
      ]);

      Validator::make($databaru, [
        'title' => 'required',
        'price' => 'required|numeric',
        'available_storage' => 'required|numeric',
        'description' => 'required',
      ],[
        'title.required' => 'Title tidak boleh kosong.',
        'price.required' => 'Price tidak boleh kosong.',
        'price.numeric' => 'Price hanya bisa diisi angka.',
        'available_storage.required' => 'Available storage tidak boleh kosong.',
        'available_storage.numeric' => 'Available storage hanya bisa diisi angka.',
        'description.required' => 'description tidak boleh kosong.',
        ])->validate();

      $datalama->update([
          'title' => $req->title,
          'price' => $req->price,
          'available_storage' => $req->available_storage,
          'description' => $req->description
      ]);
          return redirect(url('admin/feature-view'));
      }

      public function delete($id){
        Feature::find($id)->delete();
        return redirect(url('admin/feature-view'));
      }
  }
