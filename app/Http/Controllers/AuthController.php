<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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

        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => ['required', 'confirmed', Password::min(6)],
            ]);

            DB::beginTransaction();

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => 'user', // default user
            ]);
            DB::commit();

            Auth::login($user);

            event(new Registered($user));

            return redirect()->route('verification.notice')->with('success', 'Akun berhasil dibuat! Selamat datang di Pytabelajar 🎉');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Terjadi kesalahan saat proses login: '.$e->getMessage())->withInput();
        }
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

        try {
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
            } else {
                return redirect()->back()->with('error', 'Email atau password salah.')->withInput();
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat proses login: '.$e->getMessage())->withInput();
        }
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
     * Tampilan halaman verifikasi email
     */
    public function showVerifyEmail()
    {
        if (Auth::user()->hasVerifiedEmail()) {
            return redirect()->route('home');
        }

        return view('auth.verify-email');
    }

    /**
     * Verifikasi email
     */
    public function verifyEmail(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()->route('home')->with('success', 'Email berhasil diverifikasi!');
    }

    /** 
     * Kirim ulang link verifikasi email
     */
    public function resendVerification(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('home');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('resent', 'Verification link sent!');
    }

    /**
     * Tampilkan halaman lupa password
     */
    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    /**
     * Kirim email reset password
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::ResetLinkSent
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
    }

    /**
     * Tampilkan form reset password
     */
    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    /**
     * Proses reset password
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PasswordReset
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
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
            'email' => 'required|email|unique:users,email,'.$user->id,
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
