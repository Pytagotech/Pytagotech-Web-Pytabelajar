@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard Admin')

@section('content')
<div class="grid md:grid-cols-3 gap-6 animate-fade-up">
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-green-50 rounded-xl group-hover:bg-green-100 transition-colors">
                <i class="fa-solid fa-user text-green-600 text-xl"></i>
            </div>
            <span class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-full">+12%</span>
        </div>
        <h3 class="font-medium text-slate-500 text-sm">Total Pengguna</h3>
        <p class="text-3xl font-bold text-slate-800 mt-1">{{ number_format($totalUsers) }}</p>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-emerald-50 rounded-xl group-hover:bg-emerald-100 transition-colors">
                <i class="fa-solid fa-layer-group text-emerald-600 text-xl"></i>
            </div>
        </div>
        <h3 class="font-medium text-slate-500 text-sm">Total Services</h3>
        <p class="text-3xl font-bold text-slate-800 mt-1">{{ number_format($totalServices) }}</p>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-lime-50 rounded-xl group-hover:bg-lime-100 transition-colors">
                <i class="fa-solid fa-graduation-cap text-lime-600 text-xl"></i>
            </div>
        </div>
        <h3 class="font-medium text-slate-500 text-sm">Total Siswa</h3>
        <p class="text-3xl font-bold text-slate-800 mt-1">123</p>
    </div>
</div>

<div class="mt-8 bg-white p-8 rounded-2xl border border-gray-100 shadow-sm animate-fade-up" style="animation-delay: 200ms;">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
            <span class="w-2 h-6 bg-green-500 rounded-full"></span>
            Aktivitas Terbaru
        </h2>
        <button class="text-sm text-green-600 font-semibold hover:underline">Lihat Semua</button>
    </div>
    
    <div class="space-y-6">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-plus text-green-600"></i>
            </div>
            <div class="flex-1">
                <p class="text-sm text-slate-600 leading-relaxed">
                    <strong class="text-slate-900">Akhdan</strong> menambahkan kursus baru di kategori <span class="text-green-600 font-medium">Programming</span>
                </p>
                <span class="text-xs text-slate-400">2 menit yang lalu</span>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center flex-shrink-0">
                <i class="fa-regular fa-message text-green-600"></i>
            </div>
            <div class="flex-1">
                <p class="text-sm text-slate-600 leading-relaxed">
                    Pengguna <strong class="text-slate-900">Raka</strong> mengirim pesan bantuan ke admin
                </p>
                <span class="text-xs text-slate-400">1 jam yang lalu</span>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-chart-line text-green-600"></i>
            </div>
            <div class="flex-1">
                <p class="text-sm text-slate-600 leading-relaxed">
                    <strong class="text-slate-900">5 pengguna baru</strong> telah bergabung minggu ini
                </p>
                <span class="text-xs text-slate-400">Hari ini, 08:00 AM</span>
            </div>
        </div>
    </div>
</div>
@endsection