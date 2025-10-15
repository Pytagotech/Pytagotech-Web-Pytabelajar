@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard Admin')

@section('content')
<div class="grid md:grid-cols-3 gap-6">
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="font-semibold text-[#1E3A8A] mb-2">Total Pengguna</h3>
    <p class="text-3xl font-bold text-[#2563EB]">{{ number_format($totalUsers) }}</p>
  </div>

  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="font-semibold text-[#1E3A8A] mb-2">Kursus Aktif</h3>
    <p class="text-3xl font-bold text-[#2563EB]">122</p>
  </div>

  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="font-semibold text-[#1E3A8A] mb-2">Pesan Masuk</h3>
    <p class="text-3xl font-bold text-[#2563EB]">345</p>
  </div>
</div>

<div class="mt-8 bg-white p-6 rounded-xl shadow">
  <h2 class="text-lg font-semibold text-[#1E3A8A] mb-4">Aktivitas Terbaru</h2>
  <ul class="text-gray-600 space-y-2">
    <li>👤 <strong>Akhdan</strong> menambahkan kursus baru</li>
    <li>💬 Pengguna <strong>Raka</strong> mengirim pesan ke admin</li>
    <li>📈 5 pengguna baru bergabung minggu ini</li>
  </ul>
</div>
@endsection
