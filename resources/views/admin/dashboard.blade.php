@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard Admin')

@section('content')
<div class="grid md:grid-cols-3 gap-6">
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="font-semibold text-[#1E3A8A] mb-2"><i class="fa-solid fa-user"></i> Total Pengguna</h3>
    <p class="text-3xl font-bold text-[#2563EB]">{{ number_format($totalUsers) }}</p>
  </div>

  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="font-semibold text-[#1E3A8A] mb-2"><i class="fa-brands fa-discourse"></i> Total Services</h3>
    <p class="text-3xl font-bold text-[#2563EB]">{{ number_format($totalServices) }}</p>
  </div>

  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
    <h3 class="font-semibold text-[#1E3A8A] mb-2"><i class="fa-solid fa-users"></i> Total Siswa</h3>
    <p class="text-3xl font-bold text-[#2563EB]">123</p>
  </div>
</div>

<div class="mt-8 bg-white p-6 rounded-xl shadow">
  <h2 class="text-lg font-semibold text-[#1E3A8A] mb-4">Aktivitas Terbaru</h2>
  <ul class="text-gray-600 space-y-2">
    <li><i class="fa-solid fa-user"></i> <strong>Akhdan</strong> menambahkan kursus baru</li>
    <li><i class="fa-regular fa-message"></i> Pengguna <strong>Raka</strong> mengirim pesan ke admin</li>
    <li><i class="fa-solid fa-chart-line"></i> 5 pengguna baru bergabung minggu ini</li>
  </ul>
</div>
@endsection
