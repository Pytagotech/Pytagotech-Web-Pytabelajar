<header class="bg-white/90 backdrop-blur-sm shadow-sm px-6 py-4 flex justify-between items-center sticky top-0 z-40 border-b border-gray-100 animate-fade-down">
    <h1 class="md:ml-0 ml-12 text-xl font-bold bg-gradient-to-r from-green-700 to-green-500 bg-clip-text text-transparent">
        @yield('page_title')
    </h1>

    <div class="flex items-center gap-4 animate-avatar">
        <span class="text-slate-600 font-semibold hidden sm:block">
            {{ auth()->user()->name ?? 'Admin' }}
        </span>

        <div class="relative">
    <img
        src="{{ auth()->user()->avatar
            ? asset('storage/' . auth()->user()->avatar)
            : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name ?? 'User') . '&background=16a34a&color=fff' }}"
        alt="Avatar"
        class="w-10 h-10 rounded-full object-cover border-2 border-green-500 shadow-sm
               transition-transform hover:scale-105">

    {{-- Status Online --}}
    <span
        class="absolute bottom-0 right-0 w-3 h-3 bg-green-500
               border-2 border-white rounded-full">
    </span>
</div>

    </div>
</header>
