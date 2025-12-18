<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar | Pytabelajar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('icon/pytagotech.icon.cc.png') }}" />
    <style>
        body {
            background-image: url('{{ asset("assets/image/authbackground.jpg") }}');
            font-family: 'Poppins', sans-serif;
        }

        .card {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.9);
            border-radius: 1rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-6">

    <div class="w-full max-w-md card p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-extrabold text-green-400 mb-2">Pytabelajar</h1>
            <p class="text-slate-600 text-sm">Buat akunmu dan mulai belajar web development 🚀</p>
        </div>
        @if (session('error'))
            <div class="flex items-start sm:items-center p-4 mb-4 text-sm text-red-700 rounded-base bg-red-200 border-2 border-red-500 rounded-lg"
                role="alert">
                <svg class="w-4 h-4 me-2 shrink-0 mt-0.5 sm:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p>{{ session('error') }}</p>
            </div>
        @endif
        {{-- Form Register --}}
        <form method="POST" action="{{ route('register.post') }}" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-slate-700 text-sm font-medium mb-1">Nama Lengkap</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                    placeholder="Masukkan nama lengkap"
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
            </div>

            <div>
                <label for="email" class="block text-slate-700 text-sm font-medium mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                    placeholder="Masukkan email aktif"
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
            </div>

            <div>
                <label for="password" class="block text-slate-700 text-sm font-medium mb-1">Password</label>
                <input id="password" type="password" name="password" placeholder="Minimal 8 karakter"
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
            </div>

            <div>
                <label for="password_confirmation" class="block text-slate-700 text-sm font-medium mb-1">Konfirmasi
                    Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation"
                    placeholder="Ulangi password"
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full py-2.5 bg-gradient-to-r from-green-600 to-[#3bda43] text-white font-semibold rounded-lg shadow-md hover:opacity-95 transition">
                Daftar Sekarang
            </button>
        </form>

        <p class="text-center mt-6 text-sm text-slate-600">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-green-500 font-semibold hover:underline">Masuk Sekarang</a>
        </p>
    </div>

</body>

</html>
