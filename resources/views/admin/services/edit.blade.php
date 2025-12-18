@extends('layouts.admin')

@section('title', 'Edit Service')
@section('page_title', 'Edit Service')

@section('content')
<div class="max-w-3xl mx-auto animate-fade-up">
    <nav class="flex mb-4 text-sm text-slate-500" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2">
            <li><a href="{{ route('admin.services.index') }}" class="hover:text-green-600">Services</a></li>
            <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
            <li class="text-slate-800 font-medium">Edit Service</li>
        </ol>
    </nav>

    <div class="bg-white shadow-sm border border-gray-100 rounded-2xl p-8">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-amber-100 text-amber-600 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-pen-to-square text-lg"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-slate-800">Perbarui Service</h2>
                    <p class="text-sm text-slate-500">Ubah detail informasi layanan Anda</p>
                </div>
            </div>
            {{-- Status Badge Sederhana --}}
            <span class="hidden sm:block px-3 py-1 bg-green-50 text-green-600 text-xs font-bold rounded-full uppercase tracking-wider">
                ID: #{{ $service->id }}
            </span>
        </div>

        <hr class="border-gray-100 mb-8">

        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Judul Service --}}
            <div>
                <label class="block font-bold text-slate-700 mb-2">Judul Service</label>
                <input type="text" name="title" value="{{ old('title', $service->title) }}"
                       class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition @error('title') border-red-500 @enderror">
                @error('title') 
                    <p class="text-red-600 text-xs mt-2 flex items-center gap-1">
                        <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                    </p> 
                @enderror
            </div>

            {{-- Deskripsi Service --}}
            <div>
                <label class="block font-bold text-slate-700 mb-2 text-sm">Deskripsi Lengkap</label>
                <textarea name="description" rows="6"
                          class="w-full border border-gray-100 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition @error('description') border-red-500 @enderror">{{ old('description', $service->description) }}</textarea>
                @error('description') 
                    <p class="text-red-600 text-xs mt-2 flex items-center gap-1">
                        <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                    </p> 
                @enderror
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 pt-4 border-t border-gray-50 mt-8">
                <a href="{{ route('admin.services.index') }}"
                   class="w-full sm:w-auto px-6 py-3 bg-slate-100 text-slate-600 rounded-xl font-bold hover:bg-slate-200 transition text-center">
                    <i class="fa-solid fa-arrow-left text-sm mr-2"></i> Batal
                </a>

                <button type="submit"
                        class="w-full sm:w-auto px-10 py-3 bg-green-600 text-white rounded-xl font-bold hover:bg-green-700 shadow-lg shadow-green-100 transition-all transform active:scale-95">
                    <i class="fa-solid fa-check-double mr-2"></i> Perbarui Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection