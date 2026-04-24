<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // Menampilkan halaman login
    // Menampilkan halaman login
public function showLoginForm()
    {
        // Pengecekan dimatikan. 
        // Siapapun yang akses /loginadmin, akan selalu melihat form login.
        return view('Admin.loginadmin');
    }

    // Memproses form login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Cek apakah user yang login adalah admin
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/homeadmin');
            } else {
                // Jika bukan admin, keluarkan dan beri pesan error
                Auth::logout();
                return back()->with('error', 'Akses ditolak. Akun Anda bukan Administrator.');
            }
        }

        return back()->with('error', 'Email atau Password salah.');
    }

    // Memproses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}