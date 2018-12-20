<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Files;
use App\LogDownload;
use Validator;
use DB;

class FilesController extends Controller
{
    public function uploadFiles(Request $request){
        $data = $request->only([
            'category',
            'title',
            'description',
            'uploadField',
            'private'
        ]);

        Validator::make([
            'title' => 'required|string|min:5',
            'category' => 'required',
            'description' => 'required|min:10',
            'uploadField' => 'max:50000|required'
        ],
        [
            'uploadField.max' => 'Max upload 50MB',
            'title.required' => 'Field title cannot be empty',
            'title.min' => 'Field title minimum have 5 characters',
            'category.required' => 'You must select one of category',
            'description.required' => 'Field description cannot be empty',
            'description.min' => 'Field description minimum have 5 characters',
        ])->validate();

        $file = $request->uploadField;
        $extension = $file->getClientOriginalExtension();
        $nameFiles = 'termository-'.\Carbon\Carbon::now()->format("YmdHis").'.'.$extension;
        
        $users = Auth::user()->id_user;
        $sizeFile = ($file->getSize() / 1024);
        //dd($extension);
        switch($request->category){
            case 1 :
                $folder = 'compressed';
                break;
            case 2 : 
                $folder = 'documents';
                break;
            case 3 : 
                $folder = 'music';
                break;
            case 4 : 
                $folder = 'pictures';
                break;
            case 5 : 
                $folder = 'videos';
                break;
        }

        $path = 'repository-upload/'.$folder;
        $request->private ? $status = 0 : $status = 1;
        
        $uploadSuccess = $file->move($path, $nameFiles);
        if($uploadSuccess){
            Files::create([
                'id_category' => $request->category,
                'id_user' => $users,
                'title' => $request->title,
                'desc' => $request->description,
                'attachment' => $nameFiles,
                'size_file' => $sizeFile,
                'type_file' => $extension,
                'flag' => 1,
                'status' => $status
            ]); 

            return redirect(url('profile'))->withInput()->with('sweet-alert', [
                'title' => 'Yay!',
                'type' => 'success',
                'text' => 'Upload files success',
            ]);
        }else{
            return redirect(url('profile'))->withInput()->with('sweet-alert', [
                'title' => 'Hmm!',
                'type' => 'error',
                'text' => 'error when uploading files',
            ]);
        }
        
    }

    public function download($file){
        $category = DB::table('files')->select('id_file', 'id_category')->where('attachment', $file)->first();
        switch($category->id_category){
            case 1 :
                $folder = 'compressed';
                break;
            case 2 : 
                $folder = 'documents';
                break;
            case 3 : 
                $folder = 'music';
                break;
            case 4 : 
                $folder = 'pictures';
                break;
            case 5 : 
                $folder = 'videos';
                break;
        }

        $pathFile = 'repository-upload/'.$folder."/$file";
        $time = new \DateTime();
        LogDownload::create([
            'id_file' => $category->id_file,
            'ip_address' => \Request::ip(),
            'time_download' => $time,
        ]);
        return response()->download($pathFile);

    }

    public function delete($id){
        DB::table('files')->where('id_file', $id)->delete();
        return redirect(url('profile'))->withInput()->with('sweet-alert', [
            'title' => 'Yay!',
            'type' => 'success',
            'text' => 'File deleted!',
        ]);
    }

    public function moveToTrash($id){
        Files::where('id_file', $id)->update([
            'flag' => 0
        ]);

        return redirect(url('profile'))->withInput()->with('sweet-alert', [
            'title' => 'Yay!',
            'type' => 'success',
            'text' => 'Your file has move to trash',
        ]);
    }

    public function explore(){
        $data = [
            'category' => Category::all(),
            'files' => DB::table('files')->where('status', 1)->get(),
        ];
        return view('frontend.pages.explore', $data);
    }

    public function exploreCategory($category){
        $idCategory = DB::table('category')->select('id_category')->where('category', $category)->first();
        $disk = DB::table('files')->where('id_user', Auth::user()->id_user)->sum('size_file');
        $usageDisk = ( $disk / 150000 ) * 100; 
        $file = DB::table('files')->select('*')
        ->where('id_category', $idCategory->id_category)
        ->where('id_user', Auth::user()->id_user)->get();

        $data = [
            'category' => Category::all(),
            'files' => $file
        ];
        return view('frontend.pages.explore', $data);
    }

    public function search(Request $req){
        $key = $req->key;
        $files = DB::table('files')->select('*')->where('title', 'like', "%$key%")->get();
        $data = [
            'category' => Category::all(),
            'files' => $files
        ];
        return view('frontend.pages.explore', $data);
    }

    public function changeAccess($id){
        $files = DB::table('files')->select('status')->where('id_file', $id)->first();
        if($files->status == 1){
            Files::where('id_file', $id)->update([
                'status' => 0
            ]);

            $acc = "private";
        }else{
            Files::where('id_file', $id)->update([
                'status' => 1
            ]);
            
            $acc = "public";
        }
        
        return redirect(url('profile'))->withInput()->with('sweet-alert', [
            'title' => 'Yay!',
            'type' => 'success',
            'text' => 'Your files has been '.$acc,
        ]);
    }

    public function updateFiles($id, Request $request){
        $data = $request->only([
            'category',
            'title',
            'description',
            'uploadField',
            'private'
        ]);

        $users = Auth::user()->id_user;
        $request->private ? $status = 0 : $status = 1;
        
        if($request->uploadField){
            Validator::make([
                'title' => 'required|string|min:5',
                'category' => 'required',
                'description' => 'required|min:10',
                'uploadField' => 'max:50000|required'
            ],
            [
                'uploadField.max' => 'Max upload 50MB',
                'title.required' => 'Field title cannot be empty',
                'title.min' => 'Field title minimum have 5 characters',
                'category.required' => 'You must select one of category',
                'description.required' => 'Field description cannot be empty',
                'description.min' => 'Field description minimum have 5 characters',
            ])->validate();

            $file = $request->uploadField;
            $extension = $file->getClientOriginalExtension();
            $nameFiles = 'termository-'.\Carbon\Carbon::now()->format("YmdHis").'.'.$extension;

            $sizeFile = ($file->getSize() / 1024);
            switch($request->category){
                case 1 :
                    $folder = 'compressed';
                    break;
                case 2 : 
                    $folder = 'documents';
                    break;
                case 3 : 
                    $folder = 'music';
                    break;
                case 4 : 
                    $folder = 'pictures';
                    break;
                case 5 : 
                    $folder = 'videos';
                    break;
            }

            $path = 'repository-upload/'.$folder;
            
            $uploadSuccess = $file->move($path, $nameFiles);
            if($uploadSuccess){
                Files::where('id_file', $id)->update([
                    'id_category' => $request->category,
                    'id_user' => $users,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'attachment' => $nameFiles,
                    'size_file' => $sizeFile,
                    'type_file' => $extension,
                    'status' => $status
                ]); 

                return redirect(url('profile'))->withInput()->with('sweet-alert', [
                    'title' => 'Yay!',
                    'type' => 'success',
                    'text' => 'Update files success',
                ]);
            }else{
                return redirect(url('profile'))->withInput()->with('sweet-alert', [
                    'title' => 'Hmm!',
                    'type' => 'error',
                    'text' => 'error when update files',
                ]);
            }
        }else{
            Validator::make([
                'title' => 'required|string|min:5',
                'category' => 'required',
                'description' => 'required|min:10',
            ],
            [
                'title.required' => 'Field title cannot be empty',
                'title.min' => 'Field title minimum have 5 characters',
                'category.required' => 'You must select one of category',
                'description.required' => 'Field description cannot be empty',
                'description.min' => 'Field description minimum have 5 characters',
            ])->validate();

            Files::where('id_file', $id)->update([
                'id_category' => $request->category,
                'id_user' => $users,
                'title' => $request->title,
                'desc' => $request->description,
                'status' => $status
            ]);

            return redirect(url('profile'))->withInput()->with('sweet-alert', [
                'title' => 'Yay!',
                'type' => 'success',
                'text' => 'Update files success',
            ]);
        }
    }

    public function restore($id){
        Files::where('id_file', $id)->update([
            'flag' => 1
        ]);

        return redirect(url('profile'))->withInput()->with('sweet-alert', [
            'title' => 'Yay!',
            'type' => 'success',
            'text' => 'Your file has been restored',
        ]);
    }
}
