<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat Testimoni Baru - Pytabelajar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('icon/pytagotech.icon.cc.png') }}">
  <style>
    body {
      background: linear-gradient(135deg, #E6F7FF 0%, #F9FBFC 100%);
      font-family: 'Poppins', sans-serif;
    }

    .card {
      backdrop-filter: blur(12px);
      background: rgba(255, 255, 255, 0.95);
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
      background: linear-gradient(90deg, #2A7EA3, #3BAFDA);
    }

    .btn-primary:hover {
      opacity: 0.9;
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4 py-10">
  <div class="card w-full max-w-lg p-8">
    <h1 class="text-2xl font-bold text-[#0f3b45] text-center mb-2">Tulis Testimoni Kamu</h1>
    <p class="text-center text-slate-600 mb-6 text-sm">Bagikan pengalamanmu agar orang lain ikut termotivasi!</p>

    {{-- Pesan Error --}}
    @if ($errors->any())
      <div class="bg-red-50 text-red-700 border border-red-200 rounded-lg p-3 mb-5 text-sm">
        <ul class="space-y-1">
          @foreach ($errors->all() as $error)
            <li>• {{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Form Testimoni --}}
    <form action="{{ route('testimonies.store') }}" method="POST" class="space-y-5">
      @csrf

      <div>
        <label class="block font-medium text-slate-700 mb-1">Pesan Testimoni</label>
        <textarea 
          name="message" 
          rows="5" 
          class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3BAFDA] focus:border-[#3BAFDA] placeholder:text-slate-400"
          placeholder="Ceritakan pengalaman kamu belajar di Pytabelajar...">{{ old('message') }}</textarea>
      </div>

      <div class="flex justify-between items-center pt-2">
        <a href="{{ route('home') }}" class="text-slate-500 hover:text-slate-700 text-sm transition">
          ← Kembali ke Beranda
        </a>
        <button 
          type="submit" 
          class="btn-primary text-white font-semibold px-6 py-2 rounded-lg shadow-sm transition">
          Kirim Testimoni
        </button>
      </div>
    </form>
  </div>
</body>
</html>
