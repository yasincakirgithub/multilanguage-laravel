<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Lang;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        return view('pages.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect() -> route('homepage',[Lang::getLocale()]);
    }

    public function login_post(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect() -> route('homepage',[Lang::getLocale()]);
        } else {
            return redirect()->route('login',[Lang::getLocale()])->withErrors('Yanlış kullanıcı adı veya şifre');
        }
    }


}