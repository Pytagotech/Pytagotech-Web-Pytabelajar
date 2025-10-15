<header class="fixed inset-x-0 top-0 z-50">
  <nav class="backdrop-blur-sm bg-white/95 border-b border-white/40 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Brand -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
          <span class="text-2xl font-extrabold text-[#3BAFDA]">Pytabelajar</span>
        </a>

        <!-- Desktop links -->
        <div class="hidden md:flex md:items-center md:gap-8">
          <a href="#home" class="text-slate-700 hover:text-[#3BAFDA] font-medium transition">Home</a>
          <a href="#about" class="text-slate-700 hover:text-[#3BAFDA] font-medium transition">About</a>
          <a href="#services" class="text-slate-700 hover:text-[#3BAFDA] font-medium transition">Services</a>
          <a href="#testimony" class="text-slate-700 hover:text-[#3BAFDA] font-medium transition">Testimony</a>
          <a href="#contact" class="text-slate-700 hover:text-[#3BAFDA] font-medium transition">Contact</a>
        </div>

        <!-- Right controls -->
        <div class="flex items-center gap-3 relative">
          @guest
            <a href="{{ route('login') }}"
              class="hidden md:inline-block px-4 py-2 rounded-lg bg-white border border-[#bfe9f6] text-[#2A7EA3] font-semibold shadow-sm hover:shadow-md transition">
              Login
            </a>
          @else
            <!-- Desktop profile dropdown -->
            <div class="hidden md:block relative">
              <button id="profileBtn" class="flex items-center gap-2 px-4 py-2 rounded-lg bg-[#e7f9ff] text-[#2A7EA3] font-semibold hover:bg-[#d8f2fc] transition">
                {{ auth()->user()->name }}
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-40 bg-white border border-slate-200 rounded-lg shadow-lg">
                <a href="{{ route('user.profile') }}" class="block px-4 py-2 text-slate-700 hover:bg-slate-50 rounded-t-lg transition">Profil Saya</a>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 rounded-b-lg transition">Logout</button>
                </form>
              </div>
            </div>
          @endguest

          <!-- Mobile menu button -->
          <button id="menuBtn" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-slate-700 hover:bg-slate-100 focus:ring-2 focus:ring-[#3BAFDA]">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-200 shadow-md">
      <div class="px-4 pt-4 pb-6 space-y-3">
        <a href="#home" class="block px-3 py-2 rounded-md font-medium text-slate-700 hover:bg-slate-50">Home</a>
        <a href="#about" class="block px-3 py-2 rounded-md font-medium text-slate-700 hover:bg-slate-50">About</a>
        <a href="#services" class="block px-3 py-2 rounded-md font-medium text-slate-700 hover:bg-slate-50">Services</a>
        <a href="#testimony" class="block px-3 py-2 rounded-md font-medium text-slate-700 hover:bg-slate-50">Testimony</a>
        <a href="#contact" class="block px-3 py-2 rounded-md font-medium text-slate-700 hover:bg-slate-50">Contact</a>

        @guest
          <a href="{{ route('login') }}" class="block w-full text-center px-4 py-2 rounded-lg bg-[#3BAFDA] text-white font-semibold shadow-sm hover:opacity-95 transition">Login</a>
        @else
          <a href="{{ route('user.profile') }}" class="block w-full text-center px-4 py-2 rounded-lg border border-[#bfe9f6] text-[#2A7EA3] font-semibold shadow-sm hover:bg-[#e6f9ff] transition">Profil Saya</a>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="block w-full text-center mt-2 px-4 py-2 rounded-lg bg-red-500 text-white font-semibold hover:bg-red-600 transition">Logout</button>
          </form>
        @endguest
      </div>
    </div>
  </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Desktop dropdown
  const profileBtn = document.getElementById('profileBtn');
  const profileDropdown = document.getElementById('profileDropdown');
  if(profileBtn) {
    profileBtn.addEventListener('click', e => {
      e.stopPropagation();
      profileDropdown.classList.toggle('hidden');
    });
    document.addEventListener('click', e => {
      if(!profileDropdown.contains(e.target) && !profileBtn.contains(e.target)) {
        profileDropdown.classList.add('hidden');
      }
    });
  }

  // Mobile menu
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  menuBtn.addEventListener('click', e => {
    e.stopPropagation();
    mobileMenu.classList.toggle('hidden');
  });
  document.addEventListener('click', e => {
    if(!mobileMenu.contains(e.target) && !menuBtn.contains(e.target)) {
      mobileMenu.classList.add('hidden');
    }
  });
});
</script>
