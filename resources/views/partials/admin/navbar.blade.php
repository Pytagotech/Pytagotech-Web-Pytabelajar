<header class="bg-white/90 backdrop-blur-sm shadow-sm px-6 py-4 flex justify-between items-center sticky top-0 z-40 border-b border-gray-100 animate-fade-down">
  <h1 class="text-xl font-semibold text-[#1E3A8A]">@yield('page_title')</h1>

  <div class="flex items-center gap-4 animate-avatar">
    <span class="text-gray-700 font-medium hidden sm:block">{{ auth()->user()->name ?? 'Admin' }}</span>
    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Admin') }}&background=1E3A8A&color=fff"
         alt="Avatar"
         class="w-10 h-10 rounded-full border-2 border-[#1E3A8A] shadow-sm">
  </div>
</header>
