<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verifikasi Email | Pytabelajar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('icon/pytabelajar.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("assets/image/authbackground.jpg") }}');
            background-size: cover;
            background-position: center;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
            border-radius: 1.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-6 bg-slate-100">

    <div class="w-full max-w-md card p-10 text-center">
        {{-- Ikon Ilustrasi --}}
        <div class="inline-flex items-center justify-center w-20 h-20 bg-green-100 rounded-full mb-6">
            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>

        <h1 class="text-2xl font-extrabold text-slate-800 mb-2">Cek Email Kamu!</h1>
        <p class="text-slate-600 mb-8 leading-relaxed">
            Link verifikasi telah dikirim ke alamat email kamu. Silakan klik link tersebut untuk mengaktifkan akun Pytabelajar.
        </p>

        {{-- Pesan Sukses (Jika kirim ulang berhasil) --}}
        @if (session('resent'))
            <div class="mb-6 p-3 bg-green-50 border border-green-200 text-green-700 text-sm rounded-xl font-medium">
                Link baru berhasil dikirim ulang! Silahkan cek email kamu.
            </div>
        @endif

        <div class="space-y-4">
            {{-- Tombol Kirim Ulang --}}
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="w-full py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-xl shadow-lg shadow-green-200 transition-all transform active:scale-95">
                    Kirim Ulang Link
                </button>
            </form>

            {{-- Link Kembali/Bantuan --}}
            <div class="pt-4 border-t border-slate-100">
                <p class="text-xs text-slate-500 mb-4">
                    Tidak menerima email? Cek folder spam atau klik tombol di atas.
                </p>
                <a href="{{ route('home') }}" class="text-sm font-bold text-green-600 hover:text-green-700 transition">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

</body>
</html>
