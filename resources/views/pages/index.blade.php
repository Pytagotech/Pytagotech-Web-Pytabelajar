@extends('layouts.main')

@section('title', 'Pytabelajar — Belajar Web Development')

@section('content')

    {{-- HERO --}}
    <section id="home" class="relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0">
            <span class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-yellow-300 opacity-30 blur-3xl"></span>
            <span class="absolute bottom-1/4 -left-12 w-80 h-80 rounded-full bg-purple-300 opacity-30 blur-3xl"></span>
            <span class="absolute top-1/2 right-1/4 w-64 h-64 rounded-full bg-sky-300 opacity-30 blur-3xl"></span>
        </div>

        <div class="relative max-w-6xl mx-auto px-6 py-20 md:py-28 text-center z-10">
            {{-- Badge --}}
            <div
                class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full text-sm font-bold text-green-700 border-2 border-dashed border-green-500 mb-8 shadow-sm">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-ping"></span>
                Les Privat di Malang
            </div>

            <h1 class="text-slate-800 text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
                Belajar Jadi <span class="text-green-600 relative inline-block">Seru
                    <span class="absolute bottom-1 left-0 right-0 h-3 bg-yellow-300 -z-10 transform rotate-1"></span>
                </span> Kalau Caranya Tepat!
            </h1>

            <p class="mt-6 text-slate-600 max-w-2xl mx-auto text-base sm:text-lg">
                Gabung bersama pelajar lainnya yang sedang membangun karier di dunia bersama Pytabelajar.
            </p>

            <div class="mt-10 flex items-center justify-center gap-4 flex-wrap">
                <a href="#contact"
                    class="bg-green-600 text-white hover:bg-green-700 px-6 py-3 rounded-lg font-bold transition flex items-center gap-2 shadow-lg shadow-green-200">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Konsultasi Sekarang</span>
                </a>
                <a href="#services"
                    class="bg-white text-green-700 hover:bg-slate-50 px-6 py-3 border-2 border-green-600 rounded-lg font-bold transition">
                    Lihat Program
                </a>
            </div>

            <div class="mt-10 flex items-center justify-center gap-4 flex-wrap text-sm font-semibold">
                <span
                    class="flex items-center gap-2 px-4 py-2 rounded-full border border-green-200 bg-white text-slate-700 hover:bg-green-50 hover:border-green-300 transition">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                    </svg>
                    Guru ke Rumah
                </span>

                <span
                    class="flex items-center gap-2 px-4 py-2 rounded-full border border-green-200 bg-white text-slate-700 hover:bg-green-50 hover:border-green-300 transition">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                    </svg>
                    Jadwal Fleksibel
                </span>

                <span
                    class="flex items-center gap-2 px-4 py-2 rounded-full border border-green-200 bg-white text-slate-700 hover:bg-green-50 hover:border-green-300 transition">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                    </svg>
                    Project-Based
                </span>
            </div>

        </div>

        {{-- Wave separator --}}
        <div class="absolute inset-x-0 bottom-0 leading-[0]">
            <svg viewBox="0 0 1200 60" preserveAspectRatio="none" class="w-full h-8 text-white fill-current">
                <path d="M0,0 C150,40 350,40 600,20 C850,0 1050,20 1200,40 L1200,60 L0,60 Z"></path>
            </svg>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="max-w-6xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <h2 class="text-3xl font-extrabold text-slate-800">Tentang Kami</h2>
                <p class="mt-4 text-slate-600 leading-relaxed">
                    Pytabelajar adalah platform les privat interaktif yang membantu anak-anak memahami dunia web development
                    dari nol. Dengan metode pembelajaran yang menyenangkan, si kecil bisa menguasai HTML, CSS, hingga
                    JavaScript!
                </p>

                <div class="mt-8 space-y-4">
                    <div class="flex items-center gap-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-lg bg-green-100 text-green-700 flex items-center justify-center font-bold">
                            ✓</div>
                        <span class="text-slate-700 font-medium">Kurikulum project-based & fun learning</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-lg bg-green-100 text-green-700 flex items-center justify-center font-bold">
                            ✓</div>
                        <span class="text-slate-700 font-medium">Mentor sabar & feedback rutin</span>
                    </div>
                </div>
            </div>

            {{-- Ilustrasi kartu --}}
            <div class="relative order-1 md:order-2 px-4">
                <div class="bg-white rounded-3xl p-4 shadow-2xl transform rotate-2 border border-slate-100">
                    <div
                        class="bg-gradient-to-br from-yellow-50 to-purple-50 rounded-2xl h-64 flex items-center justify-center">
                        <i class="fa-solid fa-laptop-code text-7xl text-green-500"></i>
                    </div>
                </div>
                {{-- Floating info (Standar Tailwind animation) --}}
                <div
                    class="absolute -top-4 -left-2 bg-white rounded-2xl px-4 py-3 shadow-xl flex items-center gap-3 animate-bounce">
                    <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center text-green-600">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div>
                        <div class="text-[10px] uppercase tracking-wider text-slate-400 font-bold">Hasil</div>
                        <div class="font-bold text-slate-800 text-sm">Percaya Diri</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section id="services" class="bg-slate-50">
        <div class="max-w-6xl mx-auto px-6 py-20">
            <div class="text-center mb-12">
                <span
                    class="inline-block mb-4 px-5 py-1.5 rounded-full bg-green-100 text-green-700 text-xs font-bold uppercase tracking-widest shadow-sm">
                    Program Kami
                </span>

                <h1 class="text-3xl md:text-4xl font-extrabold text-slate-800 tracking-tight">
                    Services
                </h1>

                <div class="mt-4 mx-auto w-16 h-1 rounded-full bg-green-600"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse ($services as $service)
                    <div
                        class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-all border border-transparent hover:border-green-200 flex gap-5">

                        <div
                            class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center flex-shrink-0 text-green-600 text-2xl group-hover:scale-110 transition">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <div>
                            <h4 class="text-lg font-bold text-slate-800">
                                {{ $service->title }}
                            </h4>

                            <p class="mt-1 text-slate-600 text-sm leading-relaxed">
                                {{ $service->description }}
                            </p>

                            <span
                                class="inline-block mt-3 px-3 py-1 rounded-full bg-green-50 text-green-700 text-[10px] font-bold uppercase">
                                Program
                            </span>
                        </div>
                    </div>
                @empty
                    <div class="col-span-2 text-center text-slate-500 italic">
                        Belum ada program yang tersedia.
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section id="testimony" class="max-w-6xl mx-auto px-6 py-20">

        {{-- Heading --}}
        <div class="text-center mb-12">
            <h3>Apa Kata Mereka</h3>
            <h2 class="text-3xl font-extrabold text-slate-800 mt-2">
                Cerita dari Orang Tua
            </h2>
        </div>

        {{-- Button Tulis Testimoni --}}
        <div class="text-center mb-12">
            @auth
                <a href="{{ route('testimonies.create') }}"
                    class="inline-block px-6 py-3 bg-green-600 text-white rounded-xl shadow hover:bg-green-700 transition">
                    Tulis Testimoni
                </a>
            @endauth
        </div>

        {{-- Testimoni Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @if ($testimonies->isEmpty())
                <div class="col-span-full text-center py-16">
                    <p class="text-slate-500">
                        Belum ada testimoni yang ditampilkan.
                    </p>
                </div>
            @else
                @foreach ($testimonies as $testimony)
                    <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-100 flex flex-col justify-between">

                        {{-- Rating + Message --}}
                        <div>
                            <div class="flex mb-4 gap-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i
                                        class="fa-solid fa-star text-xs
                                   {{ $i <= $testimony->rating ? 'text-yellow-400' : 'text-slate-300' }}">
                                    </i>
                                @endfor
                            </div>

                            <p class="text-slate-600 italic text-sm">
                                "{{ $testimony->message }}"
                            </p>
                        </div>

                        {{-- User Info + Edit --}}
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-600
                                        flex items-center justify-center
                                        text-white font-bold text-xs">
                                    {{ strtoupper(substr($testimony->user->name ?? 'U', 0, 1)) }}
                                </div>

                                <div>
                                    <div class="font-bold text-slate-800 text-sm">
                                        {{ $testimony->user->name ?? 'User' }}
                                    </div>
                                    <div class="text-xs text-slate-400">
                                        {{ Str::mask($testimony->user->email ?? '-', '*', 2, -10) }}
                                    </div>

                                </div>
                            </div>

                            {{-- Tombol Edit (HANYA PEMILIK) --}}
                            @auth
                                @if (auth()->id() === $testimony->user_id)
                                    <a href="{{ route('testimonies.edit', $testimony->id) }}"
                                        class="text-sm text-green-600 hover:text-green-700 font-medium">
                                        Edit
                                    </a>
                                @endif
                            @endauth
                        </div>

                    </div>
                @endforeach
            @endif

        </div>
    </section>




    {{-- CONTACT --}}
    <section id="contact" class="px-6 py-10">
        <div class="max-w-4xl mx-auto rounded-3xl bg-green-600 overflow-hidden relative shadow-2xl shadow-green-200">
            <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-green-800 opacity-50"></div>
            <div class="relative p-10 md:p-16 text-center text-white">
                <h3 class="text-3xl font-extrabold">Siap Mulai Perjalanan Belajar?</h3>
                <p class="mt-4 text-green-50 opacity-90">Konsultasi gratis dulu, baru putuskan. Kami siap bantu temukan
                    program terbaik.</p>
                <div class="mt-10">
                    <a href="https://wa.me/62881026454972" target="_blank"
                        class="inline-flex items-center gap-3 bg-white text-green-700 font-bold px-8 py-4 rounded-xl shadow-lg hover:bg-slate-50 transition transform hover:-translate-y-1">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        Hubungi Admin
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
