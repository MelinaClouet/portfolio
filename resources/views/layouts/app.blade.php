<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body class="bg-white text-black antialiased relative">
<div class="fixed inset-0 -z-10">
    <div class="absolute top-[-200px] left-1/2 w-[600px] h-[600px] bg-[#eedbce]/40 blur-3xl rounded-full -translate-x-1/2"></div>
    <div class="absolute bottom-[-200px] right-[-100px] w-[500px] h-[500px] bg-[#e1c2ac]/30 blur-3xl rounded-full"></div>
</div>

<!-- NAV -->
<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-black/5" x-data="{ open: false }">

    <div class="max-w-5xl mx-auto px-6 py-5 flex justify-between items-center">

        <!-- LOGO -->
        <a href="/" class="text-black font-semibold tracking-tight text-lg">
            Melina
        </a>

        <!-- LINKS DESKTOP -->
        <div class="hidden md:flex items-center gap-8 text-sm">

            <a href="/"
               class="transition {{ request()->is('/') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
                Home
            </a>

            <a href="/projets"
               class="transition {{ request()->is('projets') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
                Projets
            </a>

            <a href="/a-propos"
               class="transition {{ request()->is('a-propos') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
                À propos
            </a>

            <a href="/contact"
               class="px-4 py-2 rounded-xl transition
               {{ request()->is('contact') ? 'bg-[#ebd4c4] text-black' : 'bg-[#e1c2ac] text-black hover:bg-[#ebd4c4]' }}">
                Contact
            </a>

        </div>

        <!-- BURGER MOBILE -->
        <button @click="open = !open"
                class="md:hidden flex flex-col justify-center items-center w-8 h-8 gap-1.5 focus:outline-none"
                aria-label="Menu">
            <span class="block w-5 h-px bg-black transition-all duration-300"
                  :class="open ? 'rotate-45 translate-y-2' : ''"></span>
            <span class="block w-5 h-px bg-black transition-all duration-300"
                  :class="open ? 'opacity-0' : ''"></span>
            <span class="block w-5 h-px bg-black transition-all duration-300"
                  :class="open ? '-rotate-45 -translate-y-2' : ''"></span>
        </button>

    </div>

    <!-- MENU MOBILE -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden border-t border-black/5 bg-white/95 backdrop-blur px-6 py-5 flex flex-col gap-4 text-sm">

        <a href="/" @click="open = false"
           class="transition {{ request()->is('/') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
            Home
        </a>

        <a href="/projets" @click="open = false"
           class="transition {{ request()->is('projets') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
            Projets
        </a>

        <a href="/a-propos" @click="open = false"
           class="transition {{ request()->is('a-propos') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
            À propos
        </a>

        <a href="/contact" @click="open = false"
           class="w-full text-center px-4 py-3 rounded-xl transition
           {{ request()->is('contact') ? 'bg-[#ebd4c4] text-black' : 'bg-[#e1c2ac] text-black hover:bg-[#ebd4c4]' }}">
            Contact
        </a>

    </div>

</nav>

<!-- CONTENT -->
<main>
    @yield('content')
</main>

</body>
</html>
