<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('guru.login');
    }

    public function authenticate(Request $request)
    {
        // validasi password dan email
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'required' => 'Atribut ini wajib untuk diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'guru') {
                return redirect()->intended('/guru')->with(['success' => 'Login berhasil selamat datang, ' . $user->name]);
            } elseif ($user->role === 'siswa') {
                return redirect()->intended('/siswa')->with(['success' => 'Login berhasil selamat datang, ' . $user->name]);
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah bro.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
