<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('laporan.view');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nipn_nim' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('nipn_nim', 'password');

        // Validate user with MD5
        if ($user = User::validateUser($credentials['nipn_nim'], $credentials['password'])) {
            Auth::login($user);
            session([
                'user_id' => $user->user_id,
                'user_level' => $user->role_id
            ]);

            return redirect()->route('laporan.view');
        }

        return redirect()->back()
            ->withInput($request->only('nipn_nim'))
            ->with('error', 'NIPN/NIM atau Password Salah!');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nipn_nim' => 'required|string|unique:user,nipn_nim|max:50',
            'email' => 'required|string|email|unique:user,email|max:100',
            'password' => 'required|string|min:6|confirmed',
            'kontak' => 'required|string|max:20',
        ]);

        // Create user with MD5 hashed password
        $user = User::create([
            'nipn_nim' => $request->nipn_nim,
            'email' => $request->email,
            'password' => md5($request->password), // Hash with MD5
            'kontak' => $request->kontak,
            'role_id' => 3, // Default role
        ]);

        return redirect()->route('user.login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();

        return redirect()->route('user.login')->with('success', 'Logout berhasil!');
    }
}
