<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:6']
        ]);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        if (auth()->attempt($credentials)) {
            // Jika autentikasi berhasil, alihkan ke halaman beranda atau tujuan setelah login
            return redirect('/events');
        } else {
            // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
            // toastr.error('Pesan error yang ingin ditampilkan', 'Judul Error');
            // toast.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
            return back()->with('loginError', 'Silahkan Hubungi Admin untuk mengaktifkan Akun');
        }
        return back()->with('loginError', 'Login Failed!');
    }
    public function logout(Request $request)
    {
        auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
