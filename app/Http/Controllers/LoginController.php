<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // kalo login tdk berhasil
        FacadesAlert::warning('Ups!', 'Invalid Credentials');
        return back()->withInput($request->only('email'));
    }

    public function logout() 
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
