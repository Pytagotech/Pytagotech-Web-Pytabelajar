<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password | Pytabelajar</title>
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
            <h1 class="text-2xl font-bold text-green-600">Lupa Password?</h1>
            <p class="text-slate-500 text-sm mt-2">Jangan khawatir, masukkan email kamu untuk mendapatkan link reset
                password.</p>
        </div>

        @if (session('status'))
            <div class="mb-4 p-3 bg-green-50 text-green-700 rounded-xl text-sm border border-green-200">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Email Terdaftar</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email kamu"
                    class="w-full px-4 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-green-500 outline-none transition">
                @error('email')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-3 bg-green-600 text-white font-bold rounded-xl hover:bg-green-700 transition transform active:scale-95 shadow-lg shadow-green-100">
                Kirim Link Reset
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-sm font-semibold text-green-600 hover:underline">Kembali ke
                Login</a>
        </div>
    </div>
</body>

</html>
