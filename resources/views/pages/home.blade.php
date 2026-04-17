@extends('layouts.app')

@section('content')

    <!-- ─── Hero ─── -->
    <section class="max-w-5xl mx-auto px-6 pt-32 pb-20 fade-in">

        <div class="inline-flex items-center gap-2 bg-black/[0.04] border border-black/[0.06] px-4 py-2 rounded-full mb-10">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            <p class="text-xs text-black/55 tracking-wide">Disponible pour de nouvelles opportunités</p>
        </div>

        <p class="text-black/50 tracking-[0.25em] uppercase text-xs">
            Développeuse full-stack & mobile
        </p>

        <h1 class="mt-5 text-5xl font-semibold leading-tight text-black max-w-3xl">
            Je crée des <span class="bg-[#eedbce] px-2 rounded-sm">expériences digitales</span><br>
            simples, modernes et utiles.
        </h1>

        <p class="mt-7 text-lg text-black/65 max-w-xl leading-relaxed">
            Passionnée par le développement, j'aime concevoir des applications
            qui allient fonctionnalité, design et compréhension utilisateur.
        </p>

        <div class="mt-10 flex flex-wrap gap-5 items-center">
            <a href="/projets"
               class="bg-black text-white px-7 py-3.5 rounded-xl hover:bg-black/80 transition text-sm font-medium">
                Voir mes projets
            </a>
            <a href="/contact"
               class="text-sm text-black/60 hover:text-black transition flex items-center gap-2">
                Me contacter
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

    </section>


    <!-- ─── Chiffres clés ─── -->
    <section class="max-w-5xl mx-auto px-6 pb-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <div class="rounded-[24px] bg-[#faf6f3] border border-black/5 p-7">
                <p class="text-4xl font-semibold">+10</p>
                <p class="text-sm text-black/50 mt-2">Projets réalisés</p>
            </div>

            <div class="rounded-[24px] bg-[#faf6f3] border border-black/5 p-7">
                <p class="text-4xl font-semibold">3+</p>
                <p class="text-sm text-black/50 mt-2">Années de code</p>
            </div>

            <div class="rounded-[24px] bg-[#faf6f3] border border-black/5 p-7">
                <p class="text-4xl font-semibold">Flutter</p>
                <p class="text-sm text-black/50 mt-2">Stack de cœur</p>
            </div>

        </div>
    </section>


    <!-- ─── Projets récents ─── -->
    <section class="max-w-5xl mx-auto px-6 pb-24">

        <div class="flex items-end justify-between mb-8">
            <div>
                <p class="text-xs uppercase tracking-[0.25em] text-black/40 mb-2">Sélection</p>
                <h2 class="text-3xl font-semibold">Projets récents</h2>
            </div>
            <a href="/projets" class="text-sm text-black/50 hover:text-black transition">
                Tous les projets →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Projet 1 -->
            <a href="/projets"
               class="group relative overflow-hidden rounded-[28px] bg-[#f0e8e2] p-8 flex flex-col justify-between min-h-64 hover:shadow-md transition-shadow">
                <div>
                    <span class="text-xs bg-white/70 px-3 py-1 rounded-full text-black/60">Mobile · Flutter</span>
                    <h3 class="text-xl font-semibold mt-5">On Sort</h3>
                    <p class="text-sm text-black/55 mt-2 leading-relaxed">
                        On Sort est une application mobile qui facilite la découverte d'activités et d'événements locaux en groupe. Que vous cherchiez une sortie entre amis, une activité en famille ou un rendez-vous romantique, On Sort vous propose des idées adaptées à vos envies et à votre localisation.
                    </p>
                </div>
                <div class="flex items-center gap-2 mt-6 text-sm font-medium text-black/60 group-hover:text-black transition">
                    Voir le projet
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </a>

            <!-- Projet 2 -->
            <a href="/projets"
               class="group relative overflow-hidden rounded-[28px] bg-zinc-900 text-white p-8 flex flex-col justify-between min-h-64 hover:shadow-md transition-shadow">
                <div>
                    <span class="text-xs bg-white/10 px-3 py-1 rounded-full text-white/60">Web · Laravel</span>
                    <h3 class="text-xl font-semibold mt-5">Coprism</h3>
                    <p class="text-sm text-white/50 mt-2 leading-relaxed">
                       Coprism est une solution rh innovante qui révolutionne la gestion des ressources humaines en entreprise. Grâce à une interface intuitive et des fonctionnalités avancées, Coprism facilite le suivi des congés, la gestion frais pro, etc.
                    </p>
                </div>
                <div class="flex items-center gap-2 mt-6 text-sm font-medium text-white/60 group-hover:text-white transition">
                    Voir le projet
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </div>
            </a>

        </div>
    </section>


    <!-- ─── Présentation rapide ─── -->
    <section class="max-w-5xl mx-auto px-6 pb-24">
        <div class="rounded-[32px] bg-[#eedbce]/40 border border-[#e1c2ac]/50 p-10 md:p-14 flex flex-col md:flex-row gap-10 items-center">

            <div class="shrink-0 w-20 h-20 rounded-full bg-[#e1c2ac] flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-black/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
            </div>

            <div>
                <p class="text-xs uppercase tracking-[0.25em] text-black/40 mb-3">En bref</p>
                <p class="text-lg font-medium leading-relaxed text-black max-w-xl">
                    Développeuse full-stack & mobile en recherche d'emploi, je conçois des applications
                    pensées pour l'utilisateur — avec Flutter côté mobile et Laravel côté web.
                    Rigoureuse, curieuse et investie, je cherche une équipe où je peux apprendre,
                    contribuer et <em>vraiment</em> m'impliquer.
                </p>
                <a href="/a-propos" class="mt-5 inline-flex items-center gap-2 text-sm text-black/55 hover:text-black transition">
                    En savoir plus sur moi →
                </a>
            </div>

        </div>
    </section>


    <!-- ─── CTA Contact ─── -->
    <section class="max-w-5xl mx-auto px-6 pb-32">
        <div class="rounded-[32px] bg-black text-white p-12 md:p-16 text-center">

            <p class="text-xs uppercase tracking-[0.25em] text-white/35 mb-4">Recruteurs & équipes</p>
            <h2 class="text-3xl md:text-4xl font-semibold">Ouverte aux opportunités</h2>
            <p class="mt-4 text-white/55 max-w-md mx-auto leading-relaxed text-sm">
                Je recherche activement un poste de développeuse full-stack ou mobile —
                CDI, alternance ou stage. Si mon profil vous intéresse, j'adorerais échanger.
            </p>

            <div class="mt-8 flex flex-wrap gap-4 justify-center">
                <a href="/contact"
                   class="inline-block bg-white text-black px-8 py-4 rounded-xl font-medium hover:bg-white/90 transition text-sm">
                    Me contacter →
                </a>
                <a href="/cv/telecharger" target="_blank"
                   class="inline-flex items-center gap-2 border border-white/20 text-white/80 hover:text-white hover:border-white/50 px-8 py-4 rounded-xl font-medium transition text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    Télécharger mon CV
                </a>
            </div>

        </div>
    </section>
@endsection
