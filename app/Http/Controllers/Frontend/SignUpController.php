<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class SignUpController extends Controller{
    public function index (){
        return view('frontend.pages.signup');
    }

    public function requestSignup(Request $req){
        //data inputan
        $data = $req->only([
            'firstName',
            'lastName',
            'password',
            'passwordConfirm',
            'gender',
            'email', 
            'phone',
            'hint'
        ]);

        Validator::make($data, [
            //definisi rules
            'firstName' => 'required|alpha_spaces',
            'lastName' => 'required|alpha_spaces',
            'password' => 'required|min:8',
            'passwordConfirm' => 'required|same:password',
            'gender' => 'required',
            'email' => 'email|required|unique:users',
            'phone' => 'required|numeric',
            'hint' => 'required'
        ],[
            'firstName.required' => 'First name tidak boleh kosong.',
            'firstName.alpha_spaces' => 'First name hanya boleh berisi abjad dan space',
            'lastName.required' => 'Last name tidak boleh kosong.',
            'lastName.alpha_spaces' => 'Last name hanya boleh berisi abjad dan space',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
            'passwordConfirm.required' => 'Password Confirm tidak boleh kosong.',
            'passwordConfirm.same' => 'Password Confirm harus sama dengan Password',
            'gender.required' => 'Gender tidak boleh kosong.',
            'email.email' => 'E-mail harus valid',
            'email.required' => 'E-mail tidak boleh kosong',
            'email:unique' => 'E-mail sudah pernah digunakan',
            'phone.required' => 'Phone tidak boleh kosong.',
            'phone.numeric' => 'Phone hanya boleh diisi angka',
            'hint.required' => 'Hint tidak boleh kosong'  
        ])->validate();

        User::create([
            'name' => $req->firstName." ".$req->lastName,
            'email' => $req->email,
            'gender' => $req->gender,
            'password' => $req->password,
            'phone' => $req->phone,
            'hint' => $req->hint,
            'used_storage' => 0,
            'status' => 0
        ]);

        return redirect('/get-started');
    }
}
