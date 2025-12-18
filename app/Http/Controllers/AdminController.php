<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Tampilkan dashboard admin
     */
    public function dashboard()
{
    $totalUsers = User::count();
    $totalServices = \App\Models\Service::count();

    return view('admin.dashboard', [
        'title' => 'Dashboard Admin',
        'user' => auth()->user(),
        'totalUsers' => $totalUsers,
        'totalServices' => $totalServices,
    ]);
}


    /**
     * Tampilkan profil admin
     */
    public function profile()
    {
        return view('admin.profile', [
            'title' => 'Profil Admin',
            'user' => Auth::user(),
        ]);
    }

    /**
     * Update profil admin (nama, email, password)
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed', // password_confirmation otomatis dicek
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // Jika password diisi, hash dan update
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save(); // simpan perubahan

        return back()->with('success', 'Profil berhasil diperbarui!');
    }
}
