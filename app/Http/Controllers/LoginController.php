<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function authenticate(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($login)){
            $request->session()->regenerate();
            return redirect()->intended('/')->with('succes','Anda berhasil login');
        }
        return back()->with([
            'loginError'=>'Data yang anda masukan salah!'
        ]);
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect ('/');
    }
}
