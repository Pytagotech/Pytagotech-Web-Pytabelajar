@extends('layouts.main')

@section('title', 'Pytabelajar — Belajar Web Development')

@section('content')

    {{-- HERO --}}
    <section id="home" class="relative">
        <div class="relative overflow-hidden">
            <div class="absolute inset-0" aria-hidden="true">
                <div class="h-full bg-gradient-to-br from-[#3BAFDA] to-[#2A7EA3] opacity-95"></div>
            </div>

            <div class="relative max-w-4xl mx-auto px-6 py-28 text-center">
                <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">Belajar <span
                        class="text-yellow-300">Web Development</span> Lebih Mudah</h1>
                <p class="mt-4 text-slate-100 max-w-2xl mx-auto text-base sm:text-lg">Gabung bersama ribuan pelajar yang
                    sudah sukses membangun karier di dunia teknologi bersama Pytabelajar.</p>

                <div class="mt-8 flex items-center justify-center gap-4">
                    <a href="#contact"
                        class="inline-flex items-center gap-3 bg-white text-[#2A7EA3] font-semibold px-5 py-3 rounded-xl shadow-lg hover:translate-y-[-2px] transition">
                        Konsultasi Sekarang
                    </a>
                    <a href="#services"
                        class="inline-flex items-center gap-2 bg-white/10 text-white font-medium px-4 py-3 rounded-xl hover:opacity-90 transition">Lihat
                        Layanan</a>
                </div>
            </div>

            <div class="pointer-events-none absolute inset-x-0 -bottom-1">
                <svg viewBox="0 0 1200 60" preserveAspectRatio="none" class="w-full h-6 md:h-8 text-white fill-current">
                    <path d="M0,0 C150,40 350,40 600,20 C850,0 1050,20 1200,40 L1200,60 L0,60 Z"></path>
                </svg>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="max-w-6xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#0f3b45]">Tentang Kami</h2>
                <p class="mt-4 text-slate-600 leading-relaxed">Pytabelajar adalah platform belajar interaktif yang membantu
                    Anda memahami dunia pemrograman dari nol. Dengan metode pembelajaran yang menyenangkan dan dukungan
                    mentor profesional, Anda bisa menguasai web development secara efektif.</p>

                <ul class="mt-6 space-y-3">
                    <li class="flex items-start gap-3">
                        <span
                            class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-[#E9F6FB] text-[#2A7EA3] font-semibold">✓</span>
                        <span class="text-slate-700">Kurikulum praktis & project-based</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span
                            class="inline-flex items-center justify-center w-9 h-9 rounded-lg bg-[#E9F6FB] text-[#2A7EA3] font-semibold">✓</span>
                        <span class="text-slate-700">Mentor profesional & feedback rutin</span>
                    </li>
                </ul>
            </div>

            <div class="rounded-lg overflow-hidden shadow-md bg-white">
                <!-- placeholder image / illustration -->
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=8d5b4a8b0b3f3b1b0d2b2d0b2a5f5c6b"
                    alt="Belajar coding" class="w-full h-64 object-cover sm:h-80">
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section id="services" class="bg-[#E9F6FB]">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h3 class="text-2xl font-extrabold text-[#0f3b45]">Layanan Kami</h3>
                    <p class="mt-1 text-slate-600">
                        Pilih layanan yang sesuai untuk meningkatkan skill web developmentmu.
                    </p>
                </div>

                <div class="w-full md:w-80">
                    <input id="searchService" type="text" placeholder="Cari layanan..." aria-label="Cari layanan"
                        class="w-full px-4 py-2 rounded-lg border border-white/60 bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-[#3BAFDA]">
                </div>
            </div>

            <div id="serviceList" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                @forelse (($services ?? collect()) as $service)
                    <div class="service-card bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition">
                        <h4 class="text-lg font-bold text-[#2A7EA3]">{{ $service->title }}</h4>
                        <p class="mt-2 text-slate-600">{{ $service->description }}</p>
                        <div class="mt-4">
                            <a class="inline-block px-3 py-2 rounded-lg text-sm font-semibold bg-[#E6FBFF] text-[#2A7EA3]"
                                href="#">
                                Daftar
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-slate-500 italic">
                        Belum ada layanan yang tersedia saat ini.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- TESTIMONY --}}
    <section id="testimony" class="max-w-6xl mx-auto px-6 py-16">
        <div class="text-center">
            <h3 class="text-2xl font-extrabold text-[#0f3b45]">Apa Kata Mereka</h3>
            <p class="mt-2 text-slate-600">Beberapa testimoni singkat dari peserta kami.</p>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 border border-green-300 rounded-md p-3 mt-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            @forelse (($testimonies ?? collect()) as $testimony)
                <div class="testi-card bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition">
                    <p class="text-slate-600 italic">“{{ $testimony->message }}”</p>
                    <h4 class="mt-4 text-sm font-semibold text-[#2A7EA3]">
                        – {{ $testimony->user->name ?? 'Anonymous' }}
                    </h4>

                    @if (Auth::check() && Auth::id() === $testimony->user_id)
                        <div class="flex items-center gap-2 mt-3">
                            <a href="{{ route('testimonies.edit', $testimony->id) }}"
                                class="text-sm text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('testimonies.destroy', $testimony->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin hapus testimoni ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm text-red-600 hover:underline">Hapus</button>
                            </form>
                        </div>
                    @endif
                </div>
            @empty
                <p class="col-span-3 text-center text-slate-500">Belum ada testimoni.</p>
            @endforelse
        </div>

        @auth
            <div class="text-center mt-10">
                <a href="{{ route('testimonies.create') }}"
                    class="px-4 py-2 bg-[#2A7EA3] text-white rounded-lg hover:bg-[#236a87] transition">
                    + Tambah Testimoni
                </a>
            </div>
        @endauth
    </section>



    {{-- CONTACT --}}
    <section id="contact" class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-[#3BAFDA] to-[#2A7EA3] opacity-95"></div>
        <div class="relative max-w-4xl mx-auto px-6 py-16 text-center text-white">
            <h3 class="text-3xl font-extrabold">Konsultasi Sekarang?</h3>
            <p class="mt-3">Klik tombol di bawah untuk langsung terhubung dengan Admin melalui WhatsApp.</p>
            <div class="mt-6">
                {{-- link yang bisa di hubungi --}}
                <a href="https://wa.me/6281234567890" target="_blank" id="contactAdmin"
                    class="inline-flex items-center gap-3 bg-white text-[#2A7EA3] font-semibold px-5 py-3 rounded-xl shadow-lg hover:translate-y-[-2px] transition">
                    Hubungi Admin
                </a>

            </div>
        </div>
    </section>


@endsection
