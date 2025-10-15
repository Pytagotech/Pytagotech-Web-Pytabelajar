<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman register
     */
    public function showRegister()
    {
        // Jika admin sudah login, abort 403
        if (auth()->check() && auth()->user()->isAdmin()) {
            abort(403, 'Halaman tidak tersedia. Logout dulu untuk mengakses.');
        }

        return view('auth.register');
    }

    /**
     * Proses registrasi user baru
     */
    public function register(Request $request)
    {
        // Jika admin sudah login, abort 403
        if (auth()->check() && auth()->user()->isAdmin()) {
            abort(403, 'Halaman tidak tersedia. Logout dulu untuk mengakses.');
        }

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user', // default user
        ]);

        Auth::login($user);

        return redirect('/login')->with('success', 'Akun berhasil dibuat! Selamat datang di Pytabelajar 🎉');
    }

    /**
     * Tampilkan halaman login
     */
    public function showLogin()
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            abort(403, 'Halaman tidak tersedia. Logout dulu untuk mengakses.');
        }

        return view('auth.login');
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        // Jika admin sudah login, abort 403
        if (auth()->check() && auth()->user()->isAdmin()) {
            abort(403, 'Halaman tidak tersedia. Logout dulu untuk mengakses.');
        }

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            if (Auth::user()->isAdmin()) {
                return redirect()->intended(route('admin.dashboard'));
            }

            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Logout user/admin
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    /**
     * Dashboard user biasa
     */
    public function dashboard()
    {
        return view('pages.index');
    }

    /**
     * Dashboard admin
     */
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    // Menampilkan halaman profil user
    public function showProfile()
    {
        $user = Auth::user();
        return view('pages.user.profile', compact('user'));
    }

    // Update profil user
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return back()->with('success', 'Profil berhasil diperbarui!');
    }

}
