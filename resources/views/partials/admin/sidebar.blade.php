<label for="sidebar-toggle"
    class="lg:hidden fixed top-4 left-4 z-50 bg-green-700 text-white p-2 rounded-md cursor-pointer shadow-md">
    ☰
</label>

<input type="checkbox" id="sidebar-toggle" class="hidden peer">

<aside
    class="fixed lg:static inset-y-0 left-0 w-64 bg-gradient-to-b from-green-800 to-green-900 text-white flex flex-col p-5 space-y-8 shadow-xl
    translate-x-[-100%] peer-checked:translate-x-0 lg:translate-x-0 transition-transform duration-300 ease-in-out z-40">

    <div class="text-center text-2xl font-bold tracking-wide border-b border-white/10 pb-4">
        Pyta<span class="text-green-400">Belajar</span>
        <div class="text-[10px] uppercase tracking-widest text-green-200/60 font-semibold mt-1">Admin Panel</div>
    </div>

    <nav aria-label="Admin sidebar" class="flex flex-col gap-2 text-[15px]">

        <a href="{{ route('admin.dashboard') }}"
            class="sidebar-link flex items-center gap-3 px-4 py-2.5 rounded-xl transition duration-200
            {{ request()->routeIs('admin.dashboard') ? 'bg-white/20 shadow-inner' : 'hover:bg-white/10' }}">
            <i class="fa-solid fa-gauge w-5 text-green-300"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('admin.services.index') }}"
            class="sidebar-link flex items-center gap-3 px-4 py-2.5 rounded-xl transition duration-200
            {{ request()->routeIs('admin.services.*') ? 'bg-white/20 shadow-inner' : 'hover:bg-white/10' }}">
            <i class="fa-solid fa-user-gear w-5 text-green-300"></i>
            <span>Services</span>
        </a>

        <a href="{{ route('admin.profile') }}"
            class="sidebar-link flex items-center gap-3 px-4 py-2.5 rounded-xl transition duration-200
            {{ request()->routeIs('admin.profile') ? 'bg-white/20 shadow-inner' : 'hover:bg-white/10' }}">
            <i class="fa-solid fa-user w-5 text-green-300"></i>
            <span>Profil</span>
        </a>

        <a href="{{ route('home') }}"
            class="sidebar-link flex items-center gap-3 px-4 py-2.5 rounded-xl transition duration-200
            {{ request()->routeIs('home') ? 'bg-white/20 shadow-inner' : 'hover:bg-white/10' }}">
            <i class="fa-solid fa-house w-5 text-green-300"></i>
            <span>Home</span>
        </a>


        <form method="POST" action="{{ route('logout') }}" class="mt-6 border-t border-white/10 pt-6">
            @csrf
            <button type="submit"
                class="sidebar-link w-full text-left flex items-center gap-3 px-4 py-2.5 rounded-xl text-red-200 hover:bg-red-500/20 hover:text-red-400 transition duration-200">
                <i class="fa-solid fa-right-from-bracket w-5"></i>
                <span>Logout</span>
            </button>
        </form>
    </nav>
</aside>
