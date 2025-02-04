<?php

namespace App\Http\Controllers;

use App\Models\User;
// use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('laporan.view');
        }
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('nipn_nim', 'password');

    if ($user = User::validateUser($credentials['nipn_nim'], $credentials['password'])) {
        Auth::login($user);
        session(['user_level' => $user->level]);

        return redirect()->route('laporan.view');
    }

    return redirect()->back()
        ->withInput($request->only('nipn_nim'))
        ->with('error', 'Username atau Password Salah!');
}

    public function logout()
    {
        Auth::logout();
        session()->forget('user_level');
        return redirect()->route('login');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }
}