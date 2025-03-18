<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }
    public function register(){
        return view('auth/register');
    }
    public function loginproses(Request $request){
        $request->validate([
            'nip'     =>  'required',
            'password'     =>  'required|min:8',
        ],[
            'nip.required'       =>'NIP ora olih kosong',
            'password.required'    =>'Password ora olih kosong',
            'password.min'         =>'Password Minimal 8 Karakter',
        ]);

        // pencocokan data
        $data = array(
            'nip'           => $request->nip,
            'password'      => $request->password,
        );

        if (Auth::attempt()) {

            return redirect()->route('dashboard');
        } else{
            return redirect()->back()->with('error','NIP atau Password salah');
        }
    }
}
