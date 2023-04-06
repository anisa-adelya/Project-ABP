<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function LoginAdmin(){
        return view('loginAdmin');
    }

    public function RegisterAdmin(){
        return view('registerAdmin');
    }

    public function SaveRegisterAdmin(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/LoginAdmin');
    }

    public function LoginProses(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/Admin');
        }
        return redirect('/LoginAdmin');
    }

    public function LogoutAdmin(){
        Auth::logout();
        return redirect('/LoginAdmin');
    }
}
