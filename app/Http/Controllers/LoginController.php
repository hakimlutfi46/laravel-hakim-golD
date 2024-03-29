<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            if (Auth::user()->role === 'admin') {
                return redirect('/admin')->with('success', "Login Berhasil");
            } else {
                return redirect()->route('user')->with('success', "Login Berhasil");
            }
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
