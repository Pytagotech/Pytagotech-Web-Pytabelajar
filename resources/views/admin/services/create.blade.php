@extends('layouts.admin')

@section('title', 'Tambah Service')
@section('page_title', 'Tambah Service')

@section('content')
  <div class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-6">
    <h2 class="text-lg font-semibold text-[#1E3A8A] mb-4">Tambah Service Baru</h2>

    <form action="{{ route('admin.services.store') }}" method="POST">
      @csrf

      <div class="mb-4">
        <label class="block font-semibold text-gray-700 mb-1">Judul</label>
        <input type="text" name="title" value="{{ old('title') }}"
               class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#1E3A8A] focus:outline-none">
        @error('title') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label class="block font-semibold text-gray-700 mb-1">Deskripsi</label>
        <textarea name="description" rows="4"
                  class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#1E3A8A] focus:outline-none">{{ old('description') }}</textarea>
        @error('description') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div class="flex justify-between items-center">
        <a href="{{ route('admin.services.index') }}"
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition"><i class="fa-solid fa-arrow-left"></i> Kembali</a>

        <button type="submit"
                class="px-5 py-2 bg-[#1E3A8A] text-white rounded-lg font-semibold hover:bg-[#2563EB] transition">
          Simpan
        </button>
      </div>
    </form>
  </div>
@endsection
