<?php
    namespace App\Http\Controllers\Backend;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Files;
    use DB;

    class FileController extends Controller{
        public function index(){
            $file = DB::table('files')
                    ->join('category', 'files.id_category', 'category.id_category')
                    ->join('users', 'files.id_user', 'users.id_user')
                    ->select('files.*', 'category.category', 'users.first_name', 'users.last_name')
                    ->get();
            
            // $file = Files::all();
            $data = [
                'files' => $file
            ];
            return view('backend.pages.file.view', $data);
        }
        public function createView(){
            return view('backend.pages.file.create');
        }
        public function create(){
            return view('backend.pages.file.create');
        }
        public function updateView($id){
            $fileUpdate = DB::table('files')
                    ->join('category', 'files.id_category', 'category.id_category')
                    ->join('users', 'files.id_user', 'users.id_user')
                    ->select('files.*', 'category.category', 'users.first_name', 'users.last_name')
                    ->where('id_file', $id)
                    ->first();
            $data = [
                'fileUpdate' => $fileUpdate
            ];

            return view('backend.pages.file.update', $data);
        }
        public function update(Request $req, $id){
            $fileUpdate = Files::find($id);
        }
        public function delete($id){
            Files::find($id)->delete();
            return redirect(url('/admin/file-view'));
        }
    }
