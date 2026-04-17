<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-red-800 text-black antialiased relative">
<div class="fixed inset-0 -z-10">
    <div class="absolute top-[-200px] left-1/2 w-[600px] h-[600px] bg-[#eedbce]/40 blur-3xl rounded-full -translate-x-1/2"></div>
    <div class="absolute bottom-[-200px] right-[-100px] w-[500px] h-[500px] bg-[#e1c2ac]/30 blur-3xl rounded-full"></div>
</div>

<!-- NAV -->
<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-black/5">

    <div class="max-w-5xl mx-auto px-6 py-5 flex justify-between items-center">

        <!-- LOGO -->
        <a href="/" class="text-black font-semibold tracking-tight text-lg">
            Melina
        </a>

        <!-- LINKS -->
        <div class="flex items-center gap-8 text-sm">

            <!-- HOME -->
            <a href="/"
               class="transition
               {{ request()->is('/') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
                Home
            </a>

            <!-- PROJETS -->
            <a href="/projets"
               class="transition
               {{ request()->is('projets') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
                Projets
            </a>

            <!-- ABOUT -->
            <a href="/a-propos"
               class="transition
               {{ request()->is('a-propos') ? 'text-black font-medium' : 'text-black/60 hover:text-black' }}">
                À propos
            </a>

            <!-- CONTACT (CTA toujours visible mais actif aussi possible) -->
            <a href="/contact"
               class="px-4 py-2 rounded-xl transition
               {{ request()->is('contact') ? 'bg-[#ebd4c4] text-black' : 'bg-[#e1c2ac] text-black hover:bg-[#ebd4c4]' }}">
                Contact
            </a>

        </div>

    </div>

</nav>
<!-- CONTENT -->
<main>
    @yield('content')
</main>

</body>
</html>
