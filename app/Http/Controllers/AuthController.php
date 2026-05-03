<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // TAMPIL LOGIN
    public function showLogin() {
        return view('auth.login');
    }

    // TAMPIL REGISTER
    public function showRegister() {
        return view('auth.register');
    }

    // PROSES REGISTER
    public function register(Request $request) {
        DB::table('users')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => md5($request->password),
            'role' => 'user'
        ]);

        return redirect('/login');
    }

    // PROSES LOGIN
    public function login(Request $request) {
        $user = DB::table('users')
            ->where('email', $request->email)
            ->where('password', md5($request->password))
            ->first();

        if ($user) {
            Session::put('email', $user->email);
            Session::put('role', $user->role);
            Session::put('username', $user->username);

            if ($user->role == 'admin') {
                return redirect('/admin');
            } elseif ($user->role == 'mekanik') {
                return redirect('/mekanik');
            } else {
                return redirect('/user');
            }
        }

        return back()->with('error', 'Login gagal');
    }

    // LOGOUT
    public function logout() {
        Session::flush();
        return redirect('/login');
    }
}