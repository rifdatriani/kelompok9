<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function masukForm()
    {
        return view('masuk');
    }

    // Proses login
    public function masuk(Request $request)
    {
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('success', 'Berhasil masuk!');
        }

        return back()->withErrors(['masukError' => 'NIM atau password salah!']);
    }

    // Menampilkan halaman daftar
    public function daftarForm()
    {
        return view('daftar');
    }

    // Proses pendaftaran
    public function daftar(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'nim' => 'required|string|max:15|unique:users,nim',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->username,
            'nim' => $request->nim,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('masuk')->with('success', 'Pendaftaran berhasil!');
    }

    // Logout
    public function keluar()
    {
        Auth::keluar();
        return redirect()->route('masuk')->with('success', 'Berhasil keluar!');
    }
}
