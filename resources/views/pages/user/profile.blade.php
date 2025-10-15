<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya | Pytabelajar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f5f9fb] text-slate-800">

    <!-- Navbar -->
    <header class="fixed inset-x-0 top-0 z-50 bg-white border-b border-slate-200 shadow-sm">
        <nav class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="{{ route('home') }}" class="text-2xl font-extrabold text-[#3BAFDA]">Pytabelajar</a>

                <div class="flex items-center gap-4">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="px-3 py-1 rounded-md border border-[#3BAFDA] text-[#3BAFDA] font-semibold hover:bg-[#3BAFDA] hover:text-white transition">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Konten Profil -->
    <main class="max-w-3xl mx-auto px-6 pt-28 pb-16">
        <h2 class="text-3xl font-bold text-center text-[#0f3b45] mb-8">Profil Saya</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded-md text-center mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-lg p-8">
            <form action="{{ route('user.profile.update') }}" method="POST">
                @csrf

                {{-- Nama --}}
                <div class="mb-5">
                    <label class="block text-slate-700 font-semibold mb-1">Nama</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#2A7EA3] focus:outline-none">
                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-5">
                    <label class="block text-slate-700 font-semibold mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#2A7EA3] focus:outline-none">
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password baru --}}
                <div class="mb-5">
                    <label class="block text-slate-700 font-semibold mb-1">Password Baru</label>
                    <input type="password" name="password"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#2A7EA3] focus:outline-none"
                        placeholder="Kosongkan jika tidak ingin mengganti">
                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Konfirmasi Password --}}
                <div class="mb-6">
                    <label class="block text-slate-700 font-semibold mb-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#2A7EA3] focus:outline-none">
                </div>

                <div class="flex justify-between items-center gap-3">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center gap-1 px-3 py-1.5 bg-slate-200 text-slate-700 rounded-md font-semibold hover:bg-slate-300 transition">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-4 py-1.5 bg-[#0f3b45] text-white rounded-md font-semibold hover:bg-[#136577] transition">
                        Simpan
                    </button>
                </div>

            </form>
        </div>
    </main>

</body>

</html>
