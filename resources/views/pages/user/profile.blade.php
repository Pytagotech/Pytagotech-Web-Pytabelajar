@extends('layouts.main')
@section('title', 'Profil Saya')

@section('content')
<div class="relative max-w-3xl mx-auto px-6 py-10">

    {{-- Glow --}}
    <div class="absolute inset-0 -z-10">
        <span class="absolute -top-20 -right-20 w-72 h-72 bg-green-300/30 rounded-full blur-3xl"></span>
        <span class="absolute bottom-0 -left-20 w-72 h-72 bg-sky-300/30 rounded-full blur-3xl"></span>
    </div>

    <div class="bg-white/80 backdrop-blur rounded-3xl p-8 shadow-xl border border-slate-100">

        @if(session('success'))
            <div class="mb-6 bg-green-100 text-green-700 px-4 py-3 rounded-xl font-semibold">
                {{ session('success') }}
            </div>
        @endif

        {{-- Header --}}
        <div class="flex flex-col sm:flex-row items-center gap-6 mb-10">
            <div class="relative group">
                <img
                    id="avatarPreview"
                    src="{{ $user->avatar
                        ? asset('storage/'.$user->avatar)
                        : 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&background=16a34a&color=fff' }}"
                    class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg transition">

                <label for="avatar"
                    class="absolute inset-0 bg-black/40 rounded-full flex items-center justify-center
                           opacity-0 group-hover:opacity-100 cursor-pointer transition">
                    <i class="fa-solid fa-camera text-white text-xl"></i>
                </label>
            </div>

            <div class="text-center sm:text-left">
                <h2 class="text-2xl font-extrabold text-slate-800">{{ $user->name }}</h2>
                <p class="text-slate-500">{{ $user->email }}</p>
                <span class="inline-block mt-2 px-4 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-full">
                    USER
                </span>
            </div>
        </div>

        {{-- Form --}}
        <form method="POST" action="{{ route('user.profile.update') }}"
              enctype="multipart/form-data" class="space-y-6">
            @csrf

            <input type="file" name="avatar" id="avatar" accept="image/*" class="hidden">

            @if($user->avatar)
                <label class="flex items-center gap-2 text-sm text-red-600 font-semibold">
                    <input type="checkbox" name="remove_avatar">
                    Hapus avatar
                </label>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="font-bold text-sm">Nama</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                        class="w-full mt-2 px-4 py-3 rounded-xl border focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="font-bold text-sm">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                        class="w-full mt-2 px-4 py-3 rounded-xl border focus:ring-2 focus:ring-green-500">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="password" name="password" placeholder="Password baru"
                    class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-green-500">
                <input type="password" name="password_confirmation" placeholder="Konfirmasi password"
                    class="w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-green-500">
            </div>

            <button class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl font-bold shadow-lg">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>

{{-- LIVE PREVIEW SCRIPT --}}
<script>
document.getElementById('avatar').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (!file) return;

    if (!file.type.startsWith('image/')) {
        alert('File harus berupa gambar!');
        e.target.value = '';
        return;
    }

    const reader = new FileReader();
    reader.onload = function (event) {
        document.getElementById('avatarPreview').src = event.target.result;
    };
    reader.readAsDataURL(file);
});
</script>
@endsection
