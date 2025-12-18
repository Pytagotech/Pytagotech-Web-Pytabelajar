<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Verifikasi Email Akun Pytabelajar')
                ->view('mail.email-verification', [
                    'url' => $url,
                    'user' => $notifiable->name,
                    'introLines' => 'Terima kasih telah bergabung! Silakan klik tombol di bawah untuk memverifikasi email Anda.',
                ]);

        });

        ResetPassword::toMailUsing(function ($notifiable, $token) {
            // Build URL reset password secara manual
            $url = url(route('password.reset', [
                'token' => $token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));

            return (new MailMessage)
                ->subject('Notifikasi Atur Ulang Password Akun Pytabelajar')
                ->view('mail.reset-password', ['url' => $url]);
        });
    }
}
