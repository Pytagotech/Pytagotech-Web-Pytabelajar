<footer class="mt-16 bg-[#0a0f0a] text-slate-400 border-t border-green-900/30">
    <div class="max-w-6xl mx-auto px-6 pt-12 pb-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12 text-left">

            {{-- Kolom 1: Brand & Deskripsi --}}
            <div class="space-y-4">
                <div class="text-2xl font-bold text-white">
                    Pyta<span class="text-green-500">Belajar</span>
                </div>
                <p class="text-sm leading-relaxed">
                    Platform belajar pemrograman Python dan pengembangan teknologi terbaik untuk membangun karir masa depan Anda.
                </p>
                <div class="flex gap-4">
                    <a href="https://www.instagram.com/pytabelajar" class="w-8 h-8 rounded-full bg-green-900/20 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@pytabelajar" class="w-8 h-8 rounded-full bg-green-900/20 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full bg-green-900/20 flex items-center justify-center hover:bg-green-600 hover:text-white transition">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>

            {{-- Kolom 2: Quick Links --}}
            <div>
                <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Navigasi</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-green-500 transition">Beranda</a></li>
                    <li><a href="#about" class="hover:text-green-500 transition">Tentang Kami</a></li>
                    <li><a href="#services" class="hover:text-green-500 transition">Layanan</a></li>
                    <li><a href="#testimony" class="hover:text-green-500 transition">Testimoni</a></li>
                    <li><a href="#contact" class="hover:text-green-500 transition">Contact</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Kontak --}}
            <div>
                <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Bantuan</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope text-green-500"></i> pytabelajar@gmail.com
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-green-500"></i> +62 895 1428 6519
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-green-500"></i> Indonesia
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Footer --}}
        <div class="border-t border-white/5 pt-8 text-center">
            <p class="text-xs">
                &copy; {{ date('Y') }} <span class="text-white font-semibold">Pytabelajar</span>. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
