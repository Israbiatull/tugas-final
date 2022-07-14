<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        var_dump("test");
        die();
        $request->validate([
            'name' => 'required |max:255',
            // 'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        dd('registrasi berhasil');
    }
}
