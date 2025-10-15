@extends('layouts.admin')
@section('title', 'Profil Admin')
@section('page_title', 'Profil Saya')

@section('content')
<div class="bg-white p-6 rounded-xl shadow max-w-xl">
  @if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  @if ($errors->any())
    <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
      <ul class="list-disc list-inside">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="flex items-center gap-6 mb-6">
    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Admin') }}&background=2563EB&color=fff"
         class="w-24 h-24 rounded-full border-4 border-[#1E3A8A]">
    <div>
      <h2 class="text-2xl font-bold text-[#1E3A8A]">{{ auth()->user()->name }}</h2>
      <p class="text-gray-600">{{ auth()->user()->email }}</p>
    </div>
  </div>

  <hr class="my-6">

  <form method="POST" action="{{ route('admin.profile.update') }}">
    @csrf

    {{-- Nama --}}
    <label class="block mb-2 font-semibold text-[#1E3A8A]">Nama Lengkap</label>
    <input type="text" name="name" class="w-full border rounded-lg px-4 py-2 mb-4"
           value="{{ old('name', auth()->user()->name) }}">

    {{-- Email --}}
    <label class="block mb-2 font-semibold text-[#1E3A8A]">Email</label>
    <input type="email" name="email" class="w-full border rounded-lg px-4 py-2 mb-4"
           value="{{ old('email', auth()->user()->email) }}">

    {{-- Password Baru (Opsional) --}}
    <label class="block mb-2 font-semibold text-[#1E3A8A]">Password Baru (opsional)</label>
    <input type="password" name="password" class="w-full border rounded-lg px-4 py-2 mb-4">

    {{-- Konfirmasi Password --}}
    <label class="block mb-2 font-semibold text-[#1E3A8A]">Konfirmasi Password Baru</label>
    <input type="password" name="password_confirmation" class="w-full border rounded-lg px-4 py-2 mb-6">

    <button type="submit"
            class="bg-[#2563EB] text-white px-6 py-2 rounded-lg hover:bg-[#1D4ED8] transition">
      Update Profil
    </button>
  </form>
</div>
@endsection
