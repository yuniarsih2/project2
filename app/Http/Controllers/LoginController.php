<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('menu');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::Attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/menu')->with([
                'message' => 'Berhasil login'
            ]);
        }
        return redirect('/login')->with([
            'message' => 'Kesalahan dalam authentikasi'
        ]);
    }

    public function actionlogout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
}
