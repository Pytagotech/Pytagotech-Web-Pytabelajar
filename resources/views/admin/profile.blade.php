@extends('layouts.admin')
@section('title', 'Profil Admin')
@section('page_title', 'Profil Saya')

@section('content')
<div class="max-w-2xl animate-fade-up">
    <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
        
        {{-- Alert Success --}}
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-3">
                <i class="fa-solid fa-circle-check"></i>
                <span class="text-sm font-medium">{{ session('success') }}</span>
            </div>
        @endif

        {{-- Alert Errors --}}
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Header Profil --}}
        <div class="flex flex-col sm:flex-row items-center gap-6 mb-8">
            <div class="relative">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Admin') }}&background=16a34a&color=fff"
                     class="w-28 h-28 rounded-full border-4 border-green-100 shadow-sm">
                <div class="absolute bottom-1 right-1 bg-green-500 w-6 h-6 rounded-full border-4 border-white"></div>
            </div>
            <div class="text-center sm:text-left">
                <h2 class="text-2xl font-bold text-slate-800">{{ auth()->user()->name }}</h2>
                <p class="text-slate-500">{{ auth()->user()->email }}</p>
                <span class="inline-block mt-2 px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full uppercase tracking-wider">
                    Administrator
                </span>
            </div>
        </div>

        <hr class="border-gray-100 mb-8">

        <form method="POST" action="{{ route('admin.profile.update') }}" class="space-y-5">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                {{-- Nama --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">Nama Lengkap</label>
                    <input type="text" name="name" 
                           class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition"
                           value="{{ old('name', auth()->user()->name) }}" required>
                </div>

                {{-- Email --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">Email Address</label>
                    <input type="email" name="email" 
                           class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition"
                           value="{{ old('email', auth()->user()->email) }}" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pt-2">
                {{-- Password Baru --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">Password Baru <span class="text-xs font-normal text-slate-400">(opsional)</span></label>
                    <input type="password" name="password" 
                           class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition"
                           placeholder="••••••••">
                </div>

                {{-- Konfirmasi Password --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-slate-700">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" 
                           class="w-full border border-gray-200 rounded-xl px-4 py-2.5 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition"
                           placeholder="••••••••">
                </div>
            </div>

            <div class="pt-6">
                <button type="submit"
                        class="w-full sm:w-auto bg-green-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-green-700 shadow-lg shadow-green-100 transition-all transform active:scale-95">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection