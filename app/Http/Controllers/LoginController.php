<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
          'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request){

      $credentials = [
        'username' => $request->username,
        'password' => $request->password
      ];


      if(Auth::attempt($credentials)){
        return redirect()->intended('/');
      }

      return back();

    }

    public function logout(Request $request){

      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');

    }
}
