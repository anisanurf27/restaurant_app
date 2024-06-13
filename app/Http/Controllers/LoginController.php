<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:admin,user'
        ]);

        // Mencari user berdasarkan email dan role
        $user = User::where('email', $request->email)
            ->where('role', $request->role)
            ->first();

        if ($user && $user->password === $request->password) {
            // Jika autentikasi berhasil, login pengguna
            Auth::login($user);

            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }
        }

        // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors([
            'error' => 'Email, password, atau peran pengguna salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
