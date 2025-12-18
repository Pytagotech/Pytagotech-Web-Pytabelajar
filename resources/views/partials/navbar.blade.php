<header class="fixed inset-x-0 top-0 z-50">
  <nav class="backdrop-blur-sm bg-white/95 border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
          <span class="text-2xl font-extrabold text-green-600 tracking-tight">Pytabelajar</span>
        </a>

        <div class="hidden md:flex md:items-center md:gap-8">
          <a href="#home" class="text-slate-600 hover:text-green-600 font-bold transition nav-link py-5">Home</a>
          <a href="#about" class="text-slate-600 hover:text-green-600 font-bold transition nav-link py-5">About</a>
          <a href="#services" class="text-slate-600 hover:text-green-600 font-bold transition nav-link py-5">Services</a>
          <a href="#testimony" class="text-slate-600 hover:text-green-600 font-bold transition nav-link py-5">Testimony</a>
          <a href="#contact" class="text-slate-600 hover:text-green-600 font-bold transition nav-link py-5">Contact</a>
        </div>

        <div class="flex items-center gap-3 relative">
          @guest
            <a href="{{ route('login') }}"
              class="hidden md:inline-block px-5 py-2 rounded-lg bg-white border border-green-200 text-green-700 font-bold shadow-sm hover:bg-green-50 transition">
              Login
            </a>
          @else
            <div class="hidden md:block relative">
              <button id="profileBtn" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-green-50 text-green-700 font-bold hover:bg-green-100 transition">
                {{ auth()->user()->name }}
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white border border-slate-100 rounded-xl shadow-xl z-50 overflow-hidden">
                <a href="{{ route('user.profile') }}" class="block px-4 py-3 text-slate-700 hover:bg-green-50 transition font-medium">Profil Saya</a>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="w-full text-left px-4 py-3 text-red-600 hover:bg-red-50 transition font-medium border-t border-slate-50">Logout</button>
                </form>
              </div>
            </div>
          @endguest

          <button id="menuBtn" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-slate-700 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-inner">
      <div class="px-4 pt-4 pb-6 space-y-2">
        <a href="#home" class="block px-3 py-2 rounded-md font-bold text-slate-700 hover:bg-green-50 hover:text-green-600 transition">Home</a>
        <a href="#about" class="block px-3 py-2 rounded-md font-bold text-slate-700 hover:bg-green-50 hover:text-green-600 transition">About</a>
        <a href="#services" class="block px-3 py-2 rounded-md font-bold text-slate-700 hover:bg-green-50 hover:text-green-600 transition">Services</a>
        <a href="#testimony" class="block px-3 py-2 rounded-md font-bold text-slate-700 hover:bg-green-50 hover:text-green-600 transition">Testimony</a>
        <a href="#contact" class="block px-3 py-2 rounded-md font-bold text-slate-700 hover:bg-green-50 hover:text-green-600 transition">Contact</a>

        <div class="pt-4 border-t border-gray-100">
          @guest
            <a href="{{ route('login') }}" class="block w-full text-center px-4 py-3 rounded-xl bg-green-600 text-white font-bold shadow-md hover:bg-green-700 transition">Login</a>
          @else
            <a href="{{ route('user.profile') }}" class="block w-full text-center px-4 py-3 rounded-xl border border-green-200 text-green-700 font-bold hover:bg-green-50 transition">Profil Saya</a>
            <form action="{{ route('logout') }}" method="POST" class="mt-2">
              @csrf
              <button type="submit" class="block w-full text-center px-4 py-3 rounded-xl bg-red-500 text-white font-bold hover:bg-red-600 transition">Logout</button>
            </form>
          @endguest
        </div>
      </div>
    </div>
  </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Dropdown & Mobile Menu Logic
    const profileBtn = document.getElementById('profileBtn');
    const profileDropdown = document.getElementById('profileDropdown');
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if(profileBtn) {
        profileBtn.addEventListener('click', e => {
            e.stopPropagation();
            profileDropdown.classList.toggle('hidden');
        });
    }

    menuBtn.addEventListener('click', e => {
        e.stopPropagation();
        mobileMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', () => {
        if(profileDropdown) profileDropdown.classList.add('hidden');
        mobileMenu.classList.add('hidden');
    });

    // Intersection Observer for Active Links
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    const observerOptions = {
        root: null,
        rootMargin: '-30% 0px -60% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach(link => {
                    // Update classes to Green Theme
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('text-green-600', 'border-b-2', 'border-green-600');
                        link.classList.remove('text-slate-600');
                    } else {
                        link.classList.remove('text-green-600', 'border-b-2', 'border-green-600');
                        link.classList.add('text-slate-600');
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));
});
</script>