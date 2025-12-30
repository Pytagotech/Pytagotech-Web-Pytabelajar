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
    <section id="about" class="relative overflow-hidden bg-white">
        <!-- glow background -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-green-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 -right-32 w-96 h-96 bg-emerald-200/30 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

                <!-- TEXT -->
                <div class="about-left opacity-0 translate-y-10 transition-all duration-1000">
                    <span
                        class="inline-block mb-3 px-4 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold tracking-widest">
                        Tentang Kami
                    </span>

                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-800 leading-tight">
                        Belajar Web Jadi <br>
                        <span class="text-green-600">Seru & Bermakna</span>
                    </h2>

                    <p class="mt-6 text-slate-600 leading-relaxed">
                        Pytabelajar adalah platform les privat interaktif yang membantu anak-anak
                        memahami dunia web development dari nol. Kami percaya belajar harus terasa
                        menyenangkan, bukan menakutkan.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="w-2 h-2 mt-2 rounded-full bg-green-600"></div>
                            <p class="text-slate-700 font-medium">
                                Kurikulum <span class="font-bold">project-based</span> yang bikin anak aktif
                            </p>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-2 h-2 mt-2 rounded-full bg-green-600"></div>
                            <p class="text-slate-700 font-medium">
                                Mentor sabar dengan <span class="font-bold">feedback rutin</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- VISUAL CARD -->
                <div class="relative about-right opacity-0 translate-y-10 transition-all duration-1000 delay-200">

                    <div class="relative bg-white rounded-3xl p-6 shadow-2xl border border-slate-100">
                        <div
                            class="relative h-64 rounded-2xl bg-gradient-to-br from-green-50 via-emerald-50 to-sky-50 overflow-hidden">

                            <!-- floating dots -->
                            <div class="absolute top-6 left-6 w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                            <div class="absolute bottom-10 right-10 w-4 h-4 bg-emerald-400 rounded-full animate-pulse">
                            </div>

                            <!-- center text -->
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <h3 class="text-xl font-extrabold text-slate-800">
                                    Web Development
                                </h3>
                                <p class="mt-2 text-sm text-slate-600">
                                    HTML • CSS • JavaScript
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- floating badge -->
                    <div
                        class="absolute -top-6 -right-6 bg-white px-5 py-3 rounded-2xl shadow-xl border border-slate-100 animate-float">
                        <p class="text-xs text-slate-400 uppercase font-bold tracking-wider">
                            Fokus
                        </p>
                        <p class="text-sm font-bold text-green-600">
                            Anak & Remaja
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- SERVICES --}}
    <section id="services" class="bg-slate-50">
        <div class="max-w-6xl mx-auto px-6 py-20">

            <!-- SECTION TITLE -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-slate-800 tracking-tight">
                    Services
                </h2>

                <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                    Layanan yang kami sediakan untuk membantu kebutuhan digital Anda
                    dengan kualitas terbaik dan pendekatan profesional.
                </p>

                <!-- accent -->
                <div class="mt-6 mx-auto w-20 h-[4px] rounded-full bg-green-500"></div>
            </div>

            <!-- SERVICES GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @forelse ($services as $service)
                    <div
                        class="group relative bg-white rounded-3xl p-8
                           border border-slate-200
                           transition-all duration-300
                           hover:-translate-y-1
                           hover:border-green-300
                           hover:shadow-xl">

                        <!-- soft glow -->
                        <div
                            class="absolute inset-0 rounded-3xl pointer-events-none
                               ring-1 ring-transparent
                               group-hover:ring-green-200
                               transition">
                        </div>

                        <h4 class="text-xl font-extrabold text-slate-800 tracking-tight">
                            {{ $service->title }}
                        </h4>

                        <p class="mt-4 text-slate-600 text-sm leading-relaxed">
                            {{ $service->description }}
                        </p>

                        <div class="mt-6 w-14 h-[3px] rounded-full bg-green-500/80"></div>
                    </div>
                @empty
                    <div class="col-span-2 text-center text-slate-500 italic py-20">
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
                                <img src="{{ $testimony->user && $testimony->user->avatar
                                    ? asset('storage/' . $testimony->user->avatar)
                                    : 'https://ui-avatars.com/api/?name=' .
                                        urlencode($testimony->user->name ?? 'User') .
                                        '&background=16a34a&color=fff' }}"
                                    alt="Foto Profil"
                                    class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm">


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
