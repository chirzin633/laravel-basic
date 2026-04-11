<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 md:py-0 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <a href="#" class="text-xl">Company</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
        <svg class="fill-current text-gray-900"
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav class="flex items-center gap-18">
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-0 block {{ request()->is('/') ? 'text-teal-700 font-bold' : 'text-gray-700' }}" href="/">Home</a></li>
                <li><a class="md:p-4 py-3 px-0 block {{request()->is('about') ? 'text-teal-700 font-bold' : 'text-gray-700' }}" href="{{route('about')}}">About</a></li>
                <li><a class="md:p-4 py-3 px-0 block {{request()->is('contact') ? 'text-teal-700 font-bold' : 'text-gray-700' }}" href="/contact">Contact</a></li>
                <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2 {{request()->routeIs('siswa') ? 'text-teal-700 font-bold' : 'text-gray-700' }}" href="{{ route('siswa.index') }}">Daftar Siswa</a></li>
            </ul>
            @auth()
                <span class="font-bold"> Hi, {{ Auth::user()->name }}</span>
            @endauth
            
        </nav>
    </div>
</header>