<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setel Ulang Password | Pytabelajar</title>
    <link rel="icon" type="image/png" href="{{ asset('icon/pytagotech.icon.cc.png') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('assets/image/authbackground.jpg') }}');
            font-family: 'Poppins', sans-serif;
        }

        .card {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-6">
    <div class="w-full max-w-md card p-8 rounded-2xl shadow-xl">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-green-600">Password Baru 🛡️</h1>
            <p class="text-slate-500 text-sm mt-2">Silakan buat password baru yang kuat untuk akun kamu.</p>
        </div>

        <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email kamu"
                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-green-500 outline-none">
                @error('email')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Password Baru</label>
                <input type="password" name="password" placeholder="Masukkan password baru"
                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-green-500 outline-none">
                @error('password')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi password baru"
                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-green-500 outline-none">
            </div>

            <button type="submit"
                class="w-full py-3 bg-green-600 text-white font-bold rounded-xl hover:bg-green-700 transition transform active:scale-95 shadow-lg shadow-green-100">
                Simpan Password Baru
            </button>
        </form>
    </div>
</body>

</html>
