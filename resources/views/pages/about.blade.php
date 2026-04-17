@extends('layouts.app')

@section('content')

    <section class="relative py-24 px-6 md:px-12 lg:px-20">

        <div class="max-w-6xl mx-auto">

            <!-- Header -->
            <div class="max-w-4xl">
                <p class="text-sm text-black/50 uppercase tracking-[0.3em]">
                    À propos de moi
                </p>

                <h1 class="text-4xl md:text-6xl font-semibold mt-4 leading-tight">
                    Développeuse d’applications web & mobile,
                    avec une vision orientée produit et management.
                </h1>

                <p class="mt-6 text-lg text-black/70 leading-relaxed">
                    Passionnée par la conception de solutions digitales utiles,
                    j’évolue entre développement technique, expérience utilisateur
                    et gestion de projet avec l’ambition de prendre à terme des
                    responsabilités de pilotage.
                </p>
            </div>

            <!-- Main Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-16">

                <!-- Left -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Profil -->
                    <div class="rounded-3xl border border-black/10 bg-white p-8">
                        <h2 class="text-2xl font-semibold">
                            Mon profil
                        </h2>

                        <p class="mt-5 text-black/70 leading-relaxed">
                            Développeuse polyvalente, je travaille sur des projets web
                            et mobiles avec une forte appétence pour Flutter et les
                            interfaces modernes, tout en restant ouverte aux opportunités
                            backend, full-stack ou produit.
                        </p>

                        <p class="mt-4 text-black/70 leading-relaxed">
                            J’aime transformer un besoin métier en solution concrète :
                            analyser, structurer, développer puis améliorer en continu.
                            Mon approche combine logique technique, organisation
                            et sens de l’utilisateur final.
                        </p>

                        <p class="mt-4 text-black/70 leading-relaxed">
                            À long terme, mon objectif est d’évoluer vers le management
                            de projet digital afin de coordonner des équipes,
                            piloter des produits et accompagner leur réussite.
                        </p>
                    </div>

                    <!-- Parcours -->
                    <div class="rounded-3xl border border-black/10 bg-white p-8">
                        <h2 class="text-2xl font-semibold">
                            Parcours académique
                        </h2>

                        <div class="mt-6 space-y-6">

                            <div class="border-l-2 border-black/10 pl-5">
                                <p class="font-medium text-black">
                                    Master Manager de Projet Web & Digital
                                </p>
                                <p class="text-sm text-black/60 mt-1">
                                    Pilotage de projet, stratégie digitale,
                                    coordination d’équipe, management.
                                </p>
                            </div>

                            <div class="border-l-2 border-black/10 pl-5">
                                <p class="font-medium text-black">
                                    Bachelor Concepteur Développeur d’Applications
                                </p>
                                <p class="text-sm text-black/60 mt-1">
                                    Développement logiciel, architecture applicative,
                                    bases de données, méthodologies projet.
                                </p>
                            </div>

                            <div class="border-l-2 border-black/10 pl-5">
                                <p class="font-medium text-black">
                                    BTS Systèmes Numériques
                                    option Informatique & Réseaux
                                </p>
                                <p class="text-sm text-black/60 mt-1">
                                    Infrastructure, réseau, systèmes,
                                    programmation et maintenance.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Vision -->
                    <div class="rounded-3xl border border-black/10 bg-white p-8">
                        <h2 class="text-2xl font-semibold">
                            Ce que je recherche
                        </h2>

                        <p class="mt-5 text-black/70 leading-relaxed">
                            Rejoindre des projets innovants où je peux apporter
                            ma polyvalence technique, continuer à progresser
                            et participer à la création de produits à impact.
                        </p>

                        <p class="mt-4 text-black/70 leading-relaxed">
                            Je suis particulièrement intéressée par le développement
                            mobile Flutter, les produits SaaS, les environnements agiles
                            et les structures où l’évolution vers des responsabilités
                            projet est encouragée.
                        </p>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="space-y-8">

                    <!-- Expertise Card -->
                    <div class="relative overflow-hidden rounded-[32px] border border-black/10 bg-white p-8">

                        <div class="absolute top-0 right-0 w-32 h-32 bg-black/[0.03] rounded-full blur-3xl"></div>

                        <p class="text-xs uppercase tracking-[0.25em] text-black/40">Mon Atelier</p>

                        <h3 class="text-2xl font-semibold mt-2">Stack & outils</h3>

                        <p class="text-sm text-black/55 mt-3 leading-relaxed">
                            Chaque outil choisi avec intention. Ma priorité : du code qui tient dans la durée.
                        </p>

                        <div class="mt-7 space-y-6">

                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-2">
                                        <!-- Phone icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-black/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <rect x="7" y="2" width="10" height="20" rx="2" />
                                            <circle cx="12" cy="18" r="1" fill="currentColor" stroke="none"/>
                                        </svg>
                                        <p class="text-sm font-semibold text-black">Mobile</p>
                                    </div>
                                    <span class="text-xs text-black/40 italic bg-black/5 px-3 py-1 rounded-full">Priorité n°1</span>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-4 py-2 rounded-2xl bg-black text-white text-sm font-medium">Flutter</span>
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">Dart</span>
                                </div>
                            </div>

                            <div class="h-px bg-black/5"></div>

                            <div>
                                <div class="flex items-center gap-2 mb-3">
                                    <!-- Code brackets icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-black/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <polyline points="16 18 22 12 16 6" />
                                        <polyline points="8 6 2 12 8 18" />
                                    </svg>
                                    <p class="text-sm font-semibold text-black">Web</p>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">Laravel</span>
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">PHP</span>
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">JavaScript</span>
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">HTML / CSS</span>
                                </div>
                            </div>

                            <div class="h-px bg-black/5"></div>

                            <div>
                                <div class="flex items-center gap-2 mb-3">
                                    <!-- Server/layers icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-black/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <ellipse cx="12" cy="5" rx="9" ry="3" />
                                        <path d="M3 5v5c0 1.657 4.03 3 9 3s9-1.343 9-3V5" />
                                        <path d="M3 10v5c0 1.657 4.03 3 9 3s9-1.343 9-3v-5" />
                                    </svg>
                                    <p class="text-sm font-semibold text-black">Infrastructure</p>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">Git</span>
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">Docker</span>
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">CI/CD</span>
                                    <span class="px-4 py-2 rounded-2xl bg-black/5 text-sm">Cloud</span>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Human Skills -->
                    <div class="rounded-[32px] border border-black/10 bg-zinc-50 p-8">

                        <p class="text-xs uppercase tracking-[0.25em] text-black/40">Ce que je suis vraiment</p>
                        <h3 class="text-2xl font-semibold mt-3">Au-delà du code</h3>

                        <div class="mt-7 space-y-3">

                            <div class="rounded-2xl bg-white p-5 border border-black/5 flex items-start gap-4">
                                <span class="text-xs font-semibold text-black/25 mt-0.5 shrink-0 w-6 text-right">01</span>
                                <div>
                                    <p class="text-sm font-semibold">Persévérance</p>
                                    <p class="text-xs text-black/50 mt-1 leading-relaxed">Je ne lâche pas un bug tant qu'il n'est pas résolu — même à 23h un dimanche.</p>
                                </div>
                            </div>

                            <div class="rounded-2xl bg-white p-5 border border-black/5 flex items-start gap-4">
                                <span class="text-xs font-semibold text-black/25 mt-0.5 shrink-0 w-6 text-right">02</span>
                                <div>
                                    <p class="text-sm font-semibold">Adaptabilité</p>
                                    <p class="text-xs text-black/50 mt-1 leading-relaxed">J'apprends vite. Chaque nouveau contexte est une opportunité, pas un obstacle.</p>
                                </div>
                            </div>

                            <div class="rounded-2xl bg-white p-5 border border-black/5 flex items-start gap-4">
                                <span class="text-xs font-semibold text-black/25 mt-0.5 shrink-0 w-6 text-right">03</span>
                                <div>
                                    <p class="text-sm font-semibold">Esprit d'équipe</p>
                                    <p class="text-xs text-black/50 mt-1 leading-relaxed">Je code mieux entourée. La collaboration est une énergie, pas une contrainte.</p>
                                </div>
                            </div>

                            <div class="rounded-2xl bg-white p-5 border border-black/5 flex items-start gap-4">
                                <span class="text-xs font-semibold text-black/25 mt-0.5 shrink-0 w-6 text-right">04</span>
                                <div>
                                    <p class="text-sm font-semibold">Organisation</p>
                                    <p class="text-xs text-black/50 mt-1 leading-relaxed">Notion, post-its ou todo-list — peu importe l'outil, je garde toujours le cap.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
