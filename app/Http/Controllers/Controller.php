<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, alihkan pengguna ke halaman index
            return redirect()->route('index');
        } else {
            // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

}