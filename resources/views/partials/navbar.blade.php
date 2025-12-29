<style>
    html {
        scroll-behavior: smooth;
    }

    /* Mencegah section tertutup header saat scroll manual atau klik anchor */
    section[id] {
        scroll-margin-top: 5rem;
        /* Setara h-20 (tinggi header) */
    }

    .nav-link-active {
        color: #16a34a !important;
        /* green-600 */
        border-bottom: 2px solid #16a34a !important;
    }

    .animate-fade-down {
        animation: fadeDown 0.4s ease-out;
    }

    @keyframes fadeDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<header class="fixed inset-x-0 top-0 z-50 animate-fade-down">
    <nav class="backdrop-blur-md bg-white/90 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <span
                        class="text-2xl font-black bg-gradient-to-r from-green-700 to-green-500 bg-clip-text text-transparent tracking-tight">
                        Pyta<span class="text-green-600">Belajar</span>
                    </span>
                </a>

                {{-- Desktop Navigation (Essential Link) --}}
                <div class="hidden md:flex md:items-center md:gap-6">
                    @foreach (['Home' => '#home', 'Tentang' => '#about', 'Layanan' => '#services', 'Testimoni' => '#testimony', 'Kontak' => '#contact'] as $label => $link)
                        <a href="{{ $link }}"
                            class="nav-link text-slate-600 hover:text-green-600 font-bold text-sm transition-all py-2 border-b-2 border-transparent">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>

                {{-- Auth Section (Essential Features) --}}
                <div class="flex items-center gap-4 relative">
                    @guest
                        <a href="{{ route('login') }}"
                            class="hidden md:inline-block px-6 py-2.5 rounded-xl bg-green-600 text-white font-bold shadow-lg shadow-green-100 hover:bg-green-700 transition-all">
                            Login
                        </a>
                    @else
                        <div class="hidden md:block relative">
                            <button id="profileBtn"
                                class="flex items-center gap-3 px-4 py-2 rounded-xl bg-green-50 text-green-700 font-bold
                                    hover:bg-green-100 transition-all border border-green-100">
                                <img src="{{ auth()->user()->avatar
                                    ? asset('storage/' . auth()->user()->avatar)
                                    : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=16a34a&color=fff' }}"
                                    alt="Profile"
                                    class="w-8 h-8 rounded-full object-cover border-2 border-white shadow-sm">
                                <span>{{ explode(' ', auth()->user()->name)[0] }}</span>
                                <i class="fa-solid fa-chevron-down text-[10px]"></i>
                            </button>


                            {{-- Dropdown Desktop --}}
                            <div id="profileDropdown"
                                class="hidden absolute right-0 mt-3 w-52 bg-white border border-slate-100 rounded-2xl shadow-2xl z-50 overflow-hidden py-2">
                                <a href="{{ route('user.profile') }}"
                                    class="flex items-center gap-3 px-4 py-3 text-slate-700 hover:bg-green-50 transition font-semibold">
                                    <i class="fa-solid fa-user text-green-500"></i> Profil Saya
                                </a>
                                <div class="border-t border-slate-50 my-1"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-3 text-red-600 hover:bg-red-50 transition font-bold flex items-center gap-3">
                                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endguest

                    {{-- Mobile Menu Trigger --}}
                    <button id="menuBtn"
                        class="md:hidden p-2 rounded-xl text-slate-700 hover:bg-green-50 transition-colors">
                        <i class="fa-solid fa-bars-staggered text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu Panel --}}
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-100 pb-6 shadow-inner">
            <div class="px-6 pt-4 space-y-2">
                @foreach (['Home' => '#home', 'About' => '#about', 'Services' => '#services', 'Testimony' => '#testimony', 'Contact' => '#contact'] as $label => $link)
                    <a href="{{ $link }}"
                        class="block px-4 py-3 rounded-xl font-bold text-slate-700 hover:bg-green-50 hover:text-green-600 transition">{{ $label }}</a>
                @endforeach

                <div class="pt-4 border-t border-gray-50 mt-4">
                    @guest
                        <a href="{{ route('login') }}"
                            class="block w-full text-center px-4 py-4 rounded-2xl bg-green-600 text-white font-bold shadow-lg shadow-green-100">Login</a>
                    @else
                        <a href="{{ route('user.profile') }}"
                            class="block w-full text-center px-4 py-4 rounded-2xl border-2 border-green-100 text-green-700 font-bold hover:bg-green-50">Profil
                            Saya</a>
                        <form action="{{ route('logout') }}" method="POST" class="mt-3">
                            @csrf
                            <button type="submit"
                                class="block w-full text-center px-4 py-4 rounded-2xl bg-red-500 text-white font-bold hover:bg-red-600">Logout</button>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const profileBtn = document.getElementById('profileBtn');
        const profileDropdown = document.getElementById('profileDropdown');
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const navLinks = document.querySelectorAll('.nav-link, #mobileMenu a');

        // 1. Logic Klik Link (Fix Offset Manual agar lebih presisi)
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        const headerHeight = 80;
                        const targetPos = target.getBoundingClientRect().top + window
                            .pageYOffset - headerHeight;
                        window.scrollTo({
                            top: targetPos,
                            behavior: 'smooth'
                        });
                        mobileMenu.classList.add('hidden'); // Tutup menu mobile
                    }
                }
            });
        });

        // 2. Toggle Profile & Menu
        if (profileBtn) {
            profileBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                profileDropdown.classList.toggle('hidden');
            });
        }

        menuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', () => {
            if (profileDropdown) profileDropdown.classList.add('hidden');
            mobileMenu.classList.add('hidden');
        });

        // 3. Scroll Spy (Highlighting)
        const sections = document.querySelectorAll('section[id]');
        window.addEventListener('scroll', () => {
            let current = "";
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= (sectionTop - 120)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('nav-link-active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('nav-link-active');
                }
            });
        });
    });
</script>
