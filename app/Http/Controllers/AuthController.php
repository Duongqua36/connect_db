<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showFormLogin(){
        return view('login');
    }

    function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $data = [
            'email'=> $email,
            'password'=>$password
        ];
        if (!Auth::attempt($data)){
            session()->flash('backend error',' Đăng nhập thất bại!');
            return redirect()->route('layout.index');
        }
        return redirect()->route('login.dashboard');
    }
}
