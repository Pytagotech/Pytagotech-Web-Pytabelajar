@extends('layouts.admin')

@section('title', 'Kelola Services')
@section('page_title', 'Daftar Services')

@section('content')
  @if (session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded-md mb-4">
      {{ session('success') }}
    </div>
  @endif

  <div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-semibold text-[#1E3A8A]">Daftar Services</h2>
    <a href="{{ route('admin.services.create') }}"
       class="px-4 py-2 bg-[#1E3A8A] text-white rounded-lg font-semibold hover:bg-[#2563EB] transition">
      ➕ Tambah Service
    </a>
  </div>

  <div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="min-w-full border border-gray-200">
      <thead class="bg-[#1E3A8A] text-white">
        <tr>
          <th class="py-3 px-4 text-left">#</th>
          <th class="py-3 px-4 text-left">Judul</th>
          <th class="py-3 px-4 text-left">Deskripsi</th>
          <th class="py-3 px-4 text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($services as $service)
          <tr class="border-b hover:bg-gray-50 transition">
            <td class="py-3 px-4">{{ $loop->iteration }}</td>
            <td class="py-3 px-4 font-semibold text-[#1E3A8A]">{{ $service->title }}</td>
            <td class="py-3 px-4 text-gray-700">{{ Str::limit($service->description, 70) }}</td>
            <td class="py-3 px-4 text-center space-x-2">
              <a href="{{ route('admin.services.edit', $service->id) }}"
                 class="inline-block px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition">✏️ Edit</a>

              <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="inline-block"
                    onsubmit="return confirm('Yakin ingin menghapus service ini?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition">
                  🗑️ Hapus
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="4" class="py-6 text-center text-gray-500">Belum ada service yang ditambahkan.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection
