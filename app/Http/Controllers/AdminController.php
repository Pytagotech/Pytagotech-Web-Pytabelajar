<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Dashboard Admin
     */
    public function dashboard()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard Admin',
            'user' => auth()->user(),
            'totalUsers' => User::count(),
            'totalServices' => \App\Models\Service::count(),
        ]);
    }

    /**
     * Profile Admin
     */
    public function profile()
    {
        return view('admin.profile', [
            'title' => 'Profil Admin',
            'user' => Auth::user(),
        ]);
    }

    /**
     * Update Profile (Admin)
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload avatar
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }
            $validated['avatar'] = $request->file('avatar')->store('avatars');
        }

        // Update data
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'avatar' => $validated['avatar'] ?? $user->avatar,
            'password' => !empty($validated['password'])
                ? Hash::make($validated['password'])
                : $user->password,
        ]);

        return back()->with('success', 'Profil berhasil diperbarui ✨');
    }
}
