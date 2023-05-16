<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller

{
    // function index ini berfungsi untuk menampilkan halaman index dari folder hello/register/index
    public function  indexregister()
    {
        return view('auth.register');
    }

    // function store ini berfungsi untuk mengirim data inputan kedalam database
    public function storeregister(Request $request)
    {

    $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zip_code' => 'required',
            'password' => 'required'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi berhasil! , silahkan Login');
    }


    public function indexlogin()
    {
        return view('auth.login');
    }


    public function authanticate(Request $request)
    {

        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            if (Auth::user()->Admin == '1') {
                return redirect()->intended('/dashboard-admin');
            } else {
                return redirect()->intended('/');
            }

        }

        return back()->with('loginError', 'Login gagal! Silahkan coba lagi');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }



    public function dashboard()
    {
        return view('auth.dashboard');
    }
}
