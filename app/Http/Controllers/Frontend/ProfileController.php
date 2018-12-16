<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use App\Category;
use App\Files;

class ProfileController extends Controller{
    public function index(){
        $disk = Auth::user()->used_storage;
        $usageDisk = ( $disk / 15000000 ) * 100; 
        $data = [
            'category' => Category::all(),
            'files' => Files::all(),
            'usageDisk' => $usageDisk,
            'disk' => $disk,
        ];
        return view('frontend.pages.user.dashboard', $data);
    }

    public function viewSetting(){
        $disk = Auth::user()->used_storage;
        $usageDisk = ( $disk / 15000000 ) * 100; 
        $data = [
            'user' => User::find( Auth::user()->id_user),
            'category' => Category::all(),
            'files' => Files::all(),
            'usageDisk' => $usageDisk,
            'disk' => $disk,
        ];

        return view('frontend.pages.user.setting', $data);
    }

    public function setting(Request $req){
        $id_user = Auth::user()->id_user;
        //Data user
        $data = $req->only([
            'firstName', 'lastName', 'email', 'gender', 'password', 'passwordConfirm','phone' 
        ]);

        Validator::make($data, [
            //definisi rules
            'firstName' => 'required|alpha_spaces',
            'lastName' => 'required|alpha_spaces',
            'password' => 'required|min:8',
            'passwordConfirm' => 'required|same:password',
            'gender' => 'required',
            'phone' => 'required|numeric',
        ], [
            'firstName.required' => 'First name tidak boleh kosong.',
            'firstName.alpha_spaces' => 'First name hanya boleh berisi abjad dan space',
            'lastName.required' => 'Last name tidak boleh kosong.',
            'lastName.alpha_spaces' => 'Last name hanya boleh berisi abjad dan space',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
            'passwordConfirm.required' => 'Password Confirm tidak boleh kosong.',
            'passwordConfirm.same' => 'Password Confirm harus sama dengan Password',
            'gender.required' => 'Gender tidak boleh kosong.',
            'phone.required' => 'Phone tidak boleh kosong.',
            'phone.numeric' => 'Phone hanya boleh diisi angka',  
        ])->validate();

        if (\Hash::check($req->password, Auth::user()->password)){
            User::where('id_user', $id_user)->update([
                'first_name' => $req->firstName,
                'last_name' => $req->lastName,
                'email' => $req->email,
                'gender' => $req->gender,
                'phone' => $req->phone,
            ]);

            return redirect(url('profile/settings'))->withInput()->with('sweet-alert', [
                'title' => 'Yay!',
                'type' => 'success',
                'text' => 'Profile anda sudah diperbarui',
            ]);    
        }else{
            return redirect(url('profile/settings'))->withInput()->with('sweet-alert', [
                'title' => 'Hmm',
                'type' => 'error',
                'text' => 'Password yang anda masukan tidak sama.',
            ]);
        }
        
        
    }

    public function viewPasswordSetting(){
        $disk = Auth::user()->used_storage;
        $usageDisk = ( $disk / 15000000 ) * 100; 
        $data = [
            'user' => User::find( Auth::user()->id_user),
            'category' => Category::all(),
            'files' => Files::all(),
            'usageDisk' => $usageDisk,
            'disk' => $disk,
        ];
        return view('frontend.pages.user.password', $data);
    }

    public function passwordSetting(Request $req){
        $id_user = Auth::user()->id_user;
        $data = $req->only([
            'password_old',
            'password',
            'passwordConfirm'
        ]);

        if (\Hash::check($req->password_old, Auth::user()->password)){
            Validator::make($data, [
                'password_old' => 'required',
                'password' => 'required|min:8',
                'passwordConfirm' => 'required|same:password'
            ])->validate();
                
            User::where('id_user', $id_user)->update([
                'password' => \Hash::make($req->password)
            ]);

            return redirect(url('profile/setting-password'))->withInput()->with('sweet-alert', [
                'title' => 'Yay!',
                'type' => 'success',
                'text' => 'Your password has been changed',
            ]);
        }else{
            return redirect(url('profile/setting-password'))->withInput()->with('sweet-alert', [
                'title' => 'Hmm',
                'type' => 'error',
                'text' => 'Your password old is wrong',
            ]);
        }
    }
}
