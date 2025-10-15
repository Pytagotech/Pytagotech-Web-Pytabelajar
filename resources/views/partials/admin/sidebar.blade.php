<aside class="w-64 bg-gradient-to-b from-[#1E3A8A] to-[#1E40AF] text-white flex flex-col p-5 space-y-8 shadow-xl animate-fade-left">
    <div class="text-center text-2xl font-bold tracking-wide">
        Pyta<span class="text-[#60A5FA]">Belajar</span>
        <div class="text-xs text-gray-300 font-normal mt-1">Admin Panel</div>
    </div>

    <nav aria-label="Admin sidebar" class="flex flex-col gap-2 text-[15px]">
        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link flex items-center gap-2 px-4 py-2 rounded-lg hover:bg-[#2563EB]/70 transition {{ request()->routeIs('admin.dashboard') ? 'bg-[#2563EB]' : '' }}">
            📊 <span>Dashboard</span>
        </a>

        <a href="{{ route('admin.services.index') }}"
           class="sidebar-link flex items-center gap-2 px-4 py-2 rounded-lg hover:bg-[#2563EB]/70 transition {{ request()->routeIs('admin.services.*') ? 'bg-[#2563EB]' : '' }}">
            🧰 <span>Services</span>
        </a>

        <a href="{{ route('admin.profile') }}"
           class="sidebar-link flex items-center gap-2 px-4 py-2 rounded-lg hover:bg-[#2563EB]/70 transition {{ request()->routeIs('admin.profile') ? 'bg-[#2563EB]' : '' }}">
            👤 <span>Profil</span>
        </a>

        <form method="POST" action="{{ route('logout') }}" class="mt-6 border-t border-white/20 pt-4">
            @csrf
            <button type="submit" class="sidebar-link w-full text-left flex items-center gap-2 px-4 py-2 rounded-lg hover:bg-red-600/80 transition">
                🚪 <span>Logout</span>
            </button>
        </form>
    </nav>
</aside>
