<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $currentUser = (object)[  // Setelah login berhasil, rubah ke Auth::user(), dan di userlist.blade.php juga GANTI menjadi if(Auth::user()->role_id == 1)
            'user_id' => 4,
            'role_id' => 1,
        ];

        // Role ID 2 hanya bisa melihat daftar user
        if ($currentUser->role_id == 2) {
            return view('user.userList', compact('users', 'currentUser'));
        }

        // Role ID 1 (Admin) bisa melihat dan mengelola user
        return view('user.userList', compact('users', 'currentUser'));
    }

    public function create()
    {
        $currentUser = $currentUser = (object)[  // Setelah login berhasil, rubah ke Auth::user(), dan di userlist.blade.php juga GANTI menjadi if(Auth::user()->role_id == 1)
            'user_id' => 4,
            'role_id' => 1,
        ];

        // Hanya role_id 1 yang bisa tambah user
        if ($currentUser->role_id != 1) {
            return redirect()->route('users.index')->with('error', 'Anda tidak memiliki izin untuk menambah user.');
        }

        return view('user.userForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nipn_nim' => 'required|string|max:50|unique:user,nipn_nim',
            'email' => 'required|string|email|max:100|unique:user,email',
            'password' => 'required|string|min:8',
            'kontak' => 'required|string|max:20',
            'role_id' => 'required|in:1,2',
        ]);

        User::create([
            'nipn_nim' => $request->nipn_nim,
            'email' => $request->email,
            'password' => md5($request->password), // Hash dengan MD5
            'kontak' => $request->kontak,
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('users.index')->with('success', 'Berhasil menambahkan user baru.');
    }

    public function edit(User $user)
    {
        $currentUser = $currentUser = (object)[  // Setelah login berhasil, rubah ke Auth::user(), dan di userlist.blade.php juga GANTI menjadi if(Auth::user()->role_id == 1)
            'user_id' => 4,
            'role_id' => 1,
        ];

        // Hanya role_id 1 yang bisa edit user
        if ($currentUser->role_id != 1) {
            return redirect()->route('users.index')->with('error', 'Anda tidak memiliki izin untuk mengedit user.');
        }

        return view('user.userForm', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nipn_nim' => 'required|string|max:50|unique:user,nipn_nim,' . $user->user_id . ',user_id',
            'email' => 'required|string|email|max:100|unique:user,email,' . $user->user_id . ',user_id',
            'password' => 'nullable|string|min:8',
            'kontak' => 'required|string|max:20',
            'role_id' => 'required|in:1,2',
        ]);

        $data = $request->only(['nipn_nim', 'email', 'kontak', 'role_id']);

        if ($request->filled('password')) {
            $data['password'] = md5($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', "User {$user->nipn_nim} berhasil diperbarui.");
    }

    public function destroy(User $user)
    {
        $currentUser = Auth::user();

        // Hanya role_id 1 yang bisa hapus user
        if ($currentUser->role_id != 1) {
            return redirect()->route('users.index')->with('error', 'Anda tidak memiliki izin untuk menghapus user.');
        }

        $user->delete();
        return redirect()->route('users.index')->with('success', "User {$user->nipn_nim} berhasil dihapus.");
    }
}
