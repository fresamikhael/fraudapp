<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
      $credentials =  $request->validate([

            'email'=>'required|email:dns',
            'password'=>'required'

        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        dd('Login gagal');
    }


    public function logout(Request $request){
        Auth::logout();
         $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }
}
