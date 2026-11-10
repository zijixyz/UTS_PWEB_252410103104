<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function showLogin()
    {
        if (session()->has('username')) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate(['username' => 'required|min:3',],
        ['username.required' => 'Username wajib diisi.', 'username.min'      => 'Username minimal 3 karakter.',]);
        session(['username' => $request->username]);
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        return view('dashboard', [
            'username'   => session('username'),
            'waktuLogin' => now()->format('d M Y'),
            'menuAktif'  => 'Dashboard',
        ]);
    }

    public function profile()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        return view('profile', [
            'username'  => session('username'),
            'menuAktif' => 'Profile',
            'bio'       => 'Mahasiswa Informatika Universitas Jember',
        ]);
    }

    public function pengelolaan()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $daftarBarang = [
            ['id' => 1, 'nama' => 'Mouse',    'kategori' => 'Aksesoris',  'status' => 'Aktif'],
            ['id' => 2, 'nama' => 'Keyboard', 'kategori' => 'Aksesoris',  'status' => 'Aktif'],
            ['id' => 3, 'nama' => 'Monitor',  'kategori' => 'Elektronik', 'status' => 'Aktif'],
            ['id' => 4, 'nama' => 'Headset',  'kategori' => 'Audio',      'status' => 'Aktif'],
        ];

        return view('pengelolaan', [
            'username'     => session('username'),
            'menuAktif'    => 'Pengelolaan',
            'daftarBarang' => $daftarBarang,
        ]);
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
