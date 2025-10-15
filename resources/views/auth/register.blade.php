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
      background: linear-gradient(135deg, #1e3a8a 0%, #3bafd9 100%);
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

    .brand-text {
      background: linear-gradient(90deg, #2563eb, #3bafd9);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen p-6">

  <div class="w-full max-w-md card p-8">
    <div class="text-center mb-8">
      <h1 class="text-3xl font-extrabold brand-text mb-2">Pytabelajar</h1>
      <p class="text-slate-600 text-sm">Buat akunmu dan mulai belajar web development 🚀</p>
    </div>

    {{-- Notifikasi Error --}}
    @if(session('error'))
      <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded mb-4 text-sm">
        {{ session('error') }}
      </div>
    @endif

    @if($errors->any())
      <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded mb-4 text-sm">
        <ul class="list-disc pl-5 space-y-1">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Form Register --}}
    <form method="POST" action="{{ route('register.post') }}" class="space-y-5">
      @csrf

      <div>
        <label for="name" class="block text-slate-700 text-sm font-medium mb-1">Nama Lengkap</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required
          placeholder="Masukkan nama lengkap"
          class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <div>
        <label for="email" class="block text-slate-700 text-sm font-medium mb-1">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required
          placeholder="Masukkan email aktif"
          class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <div>
        <label for="password" class="block text-slate-700 text-sm font-medium mb-1">Password</label>
        <input id="password" type="password" name="password" required
          placeholder="Minimal 8 karakter"
          class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <div>
        <label for="password_confirmation" class="block text-slate-700 text-sm font-medium mb-1">Konfirmasi Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required
          placeholder="Ulangi password"
          class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <button type="submit"
        class="w-full py-2.5 bg-gradient-to-r from-blue-600 to-[#3BAFDA] text-white font-semibold rounded-lg shadow-md hover:opacity-95 transition">
        Daftar Sekarang
      </button>
    </form>

    <p class="text-center mt-6 text-sm text-slate-600">
      Sudah punya akun?
      <a href="{{ route('login') }}" class="text-blue-500 font-semibold hover:underline">Masuk Sekarang</a>
    </p>
  </div>

</body>
</html>
