@extends('layouts.admin')

@section('title', 'Kelola Services')
@section('page_title', 'Daftar Services')

@section('content')
  {{-- Alert Success --}}
  @if (session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6 flex items-center gap-3 animate-fade-in">
      <i class="fa-solid fa-circle-check"></i>
      <span class="text-sm font-medium">{{ session('success') }}</span>
    </div>
  @endif

  {{-- Header & Action --}}
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
    <div>
        <h2 class="text-2xl font-bold text-slate-800">Daftar Services</h2>
        <p class="text-sm text-slate-500">Kelola layanan dan kursus yang tersedia di Pytabelajar</p>
    </div>
    <a href="{{ route('admin.services.create') }}"
       class="flex items-center gap-2 px-6 py-3 bg-green-600 text-white rounded-xl font-bold hover:bg-green-700 shadow-lg shadow-green-100 transition-all active:scale-95">
      <i class="fa-solid fa-plus text-sm"></i> Tambah Service
    </a>
  </div>

  {{-- Table Section --}}
  <div class="bg-white shadow-sm border border-gray-100 rounded-2xl overflow-hidden">
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-100">
        <thead class="bg-gray-50/50">
          <tr>
            <th class="py-4 px-6 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">#</th>
            <th class="py-4 px-6 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Informasi Service</th>
            <th class="py-4 px-6 text-left text-xs font-bold text-slate-500 uppercase tracking-wider">Deskripsi Singkat</th>
            <th class="py-4 px-6 text-center text-xs font-bold text-slate-500 uppercase tracking-wider">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          @forelse ($services as $service)
            <tr class="hover:bg-green-50/30 transition-colors group">
              <td class="py-4 px-6 text-sm text-slate-500">
                {{ $loop->iteration }}
              </td>
              <td class="py-4 px-6">
                <div class="font-bold text-slate-800 group-hover:text-green-700 transition-colors">
                    {{ $service->title }}
                </div>
                <div class="text-[10px] text-green-600 font-bold uppercase tracking-tight">Active Service</div>
              </td>
              <td class="py-4 px-6 text-sm text-slate-600 leading-relaxed">
                {{ Str::limit($service->description, 80) }}
              </td>
              <td class="py-4 px-6 text-center">
                <div class="flex justify-center items-center gap-2">
                    {{-- Edit Button --}}
                    <a href="{{ route('admin.services.edit', $service->id) }}"
                       class="p-2 bg-amber-50 text-amber-600 rounded-lg hover:bg-amber-100 transition shadow-sm"
                       title="Edit Service">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    {{-- Delete Button --}}
                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" 
                          class="inline-block"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus service ini?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit"
                              class="p-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition shadow-sm"
                              title="Hapus Service">
                        <i class="fa-solid fa-trash-can"></i>
                      </button>
                    </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="py-12 text-center">
                <div class="flex flex-col items-center">
                    <i class="fa-solid fa-folder-open text-slate-200 text-5xl mb-4"></i>
                    <p class="text-slate-500 font-medium">Belum ada service yang ditambahkan.</p>
                </div>
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection