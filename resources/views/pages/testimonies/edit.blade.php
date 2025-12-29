<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimoni - Pytabelajar</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('icon/pytagotech.icon.cc.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #ecfdf5 0%, #f0fdfa 100%);
            font-family: 'Poppins', sans-serif;
        }

        .card {
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.96);
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .star {
            cursor: pointer;
            transition: color 0.2s ease, transform 0.15s ease;
        }

        .star:hover {
            transform: scale(1.15);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4 py-10">

<div class="card w-full max-w-lg p-8">
    <h1 class="text-2xl font-bold text-green-700 text-center mb-2">
        Edit Testimoni
    </h1>
    <p class="text-center text-slate-600 mb-6 text-sm">
        Perbarui testimoni Anda agar tetap relevan.
    </p>

    {{-- Error --}}
    @if ($errors->any())
        <div class="bg-red-50 text-red-700 border border-red-200 rounded-lg p-3 mb-5 text-sm">
            <ul class="space-y-1">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORM --}}
    <form action="{{ route('testimonies.update', $testimony->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        {{-- RATING --}}
        <div>
            <label class="block font-medium text-slate-700 mb-2">
                Rating
            </label>

            <div class="flex gap-2 text-2xl text-slate-300" id="starRating">
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fa-solid fa-star star" data-value="{{ $i }}"></i>
                @endfor
            </div>

            <input
                type="hidden"
                name="rating"
                id="ratingInput"
                value="{{ old('rating', $testimony->rating) }}">
        </div>

        {{-- MESSAGE --}}
        <div>
            <label class="block font-medium text-slate-700 mb-1">
                Pesan Testimoni
            </label>
            <textarea
                name="message"
                rows="5"
                required
                class="w-full border border-slate-300 rounded-lg px-4 py-2
                       focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500
                       placeholder:text-slate-400"
                placeholder="Edit pengalaman Anda...">{{ old('message', $testimony->message) }}</textarea>
        </div>

        {{-- ACTION --}}
        <div class="flex justify-between items-center pt-2">
            <a href="{{ route('home') }}"
               class="text-slate-500 hover:text-slate-700 text-sm transition">
                Kembali ke Beranda
            </a>

            <button
                type="submit"
                class="bg-green-600 hover:bg-green-700
                       text-white font-semibold px-6 py-2 rounded-lg shadow transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

{{-- SCRIPT STAR RATING --}}
<script>
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('ratingInput');

    function updateStars(rating) {
        stars.forEach(star => {
            const value = star.getAttribute('data-value');
            star.classList.toggle('text-yellow-400', value <= rating);
            star.classList.toggle('text-slate-300', value > rating);
        });
    }

    stars.forEach(star => {
        star.addEventListener('click', () => {
            const rating = star.getAttribute('data-value');
            ratingInput.value = rating;
            updateStars(rating);
        });

        star.addEventListener('mouseover', () => {
            updateStars(star.getAttribute('data-value'));
        });
    });

    document.getElementById('starRating').addEventListener('mouseleave', () => {
        updateStars(ratingInput.value);
    });

    // Init with existing rating
    updateStars(ratingInput.value);
</script>

</body>
</html>
