<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Menampilkan formulir login admin.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function login(Request $request)
    {
        // Validasi input pengguna
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required'
        ], [
            // Pesan kesalahan kustom
            'username.required' => 'ID Admin wajib diisi.',
            'password.required' => 'Password wajib diisi.'
        ]);
    
        // Mengambil admin berdasarkan username
        $admin = Admin::where('username', $validated['username'])->first();
    
        // Memeriksa apakah admin ada dan password benar
        if (!$admin || !Hash::check($validated['password'], $admin->password)) {
            return back()->withErrors([
                'credentials' => 'ID ADMIN atau PASSWORD salah '
            ])->withInput($request->only('username')); // Tetapkan nilai input username
        }
    
        // Mengasumsikan autentikasi berbasis sesi atau token telah diatur
        // Auth::login($admin);
    
        // Mengarahkan ke dasbor admin setelah login berhasil
        return redirect()->route('admin.Transaksi');
    }
    

    /**
     * Menampilkan dasbor admin.
     *
     * @return \Illuminate\Contracts\View\View
     */
   
}