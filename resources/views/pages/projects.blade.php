@extends('layouts.app')

@section('content')


        <div class="max-w-5xl mx-auto px-6 py-24">

            <!-- HEADER -->
            <div class="mb-20">

                <h1 class="text-5xl font-semibold text-black">
                    Projets
                </h1>

                <p class="mt-6 text-black/60 max-w-2xl leading-relaxed">
                    Une sélection de projets où j’ai travaillé sur le backend, le mobile
                    et l’expérience utilisateur.
                </p>

            </div>

            <!-- CASE STUDIES -->

            <div class="space-y-24">
                <!-- PROJECT -->
                <div class="border-l-2 border-[#e1c2ac] pl-6 fade-in">

                    <div class="grid lg:grid-cols-2 gap-12 items-center">

                        <!-- GAUCHE : texte -->
                        <div>
                            <p class="text-sm text-black/50 uppercase tracking-widest">
                                Plateforme RH / SaaS
                            </p>

                            <h2 class="text-3xl font-semibold mt-2">
                                Coprism
                            </h2>

                            <div class="mt-2">
                                <a href="https://www.coprism.com/"
                                   target="_blank"
                                   class="text-sm text-[#e1c2ac] hover:text-black transition underline underline-offset-4">
                                    Voir le site →
                                </a>
                            </div>

                            <p class="mt-4 text-black/70 leading-relaxed">
                                Coprism est une plateforme RH utilisée par des entreprises (dont MMA),
                                composée d'une application web, d'une application mobile et d'une API.
                                Elle permet la gestion et la centralisation des processus RH et des échanges
                                entre collaborateurs et services internes.
                            </p>
                        </div>

                        <!-- DROITE : image -->
                        <div class="relative max-w-60 my-3 mx-auto group rounded-2xl transition-shadow duration-700 hover:shadow-lg">
                            <img
                                src="/files/coprism.png"
                                alt="Aperçu de Coprism"
                                class="w-full h-auto object-top rounded-sm transition-transform duration-700 ease-in-out group-hover:-translate-y-1"
                            />
                            <div class="absolute inset-0 bg-black/0 group-hover:transition-colors duration-500 rounded-2xl"></div>
                            <div class="absolute inset-x-0 top-0 h-px bg-white/40"></div>
                            <div class="mt-4 absolute right-2 bg-white/100 backdrop-blur-sm text-[10px] uppercase tracking-widest text-black/40 px-2 py-1 rounded-sm">
                                Interface mobile
                            </div>
                        </div>
                    </div>

                    <!-- DETAILS -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">

                        <div>
                            <p class="text-black font-medium">Contexte</p>
                            <p class="text-black/60 mt-1">
                                Produit utilisé en environnement entreprise avec enjeux de fiabilité et sécurité des données RH.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Rôle</p>
                            <p class="text-black/60 mt-1">
                                Développeuse full-stack impliquée sur le web, l’API et l’écosystème mobile.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Réalisations</p>
                            <p class="text-black/60 mt-1">
                                Développement de fonctionnalités applicatives + intégration d’API externes.
                                Mise en place d’un système de coffre-fort numérique via l’API DigiPoste.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Stack</p>
                            <p class="text-black/60 mt-1">
                                API REST (Laravel), application web (Laravel), application mobile (Flutter),
                                intégration API (DigiPoste, Stripe, etc.), Firebase (push notifications),
                                Scaleway (hébergement, queues, stockage)
                            </p>
                        </div>

                    </div>

                </div>



                <div class="border-l-2 border-[#e1c2ac] pl-6 fade-in">

                    <div class="grid lg:grid-cols-2 gap-12 items-center">

                        <!-- GAUCHE : texte -->
                        <div>
                            <p class="text-sm text-black/50 uppercase tracking-widest">
                                Application mobile
                            </p>

                            <h2 class="text-3xl font-semibold mt-2">
                                OnSort
                            </h2>

                            <div class="mt-2">
                                <a href="https://on-sort.fr/"
                                   target="_blank"
                                   class="text-sm text-[#e1c2ac] hover:text-black transition underline underline-offset-4">
                                    Voir le site →
                                </a>
                            </div>

                            <p class="mt-4 text-black/70 leading-relaxed">
                                Application mobile permettant à des groupes d'utilisateurs de voter
                                pour des activités et de prendre des décisions collectives de manière simple et rapide.
                            </p>
                        </div>

                        <!-- DROITE : image -->
                        <div class="relative max-w-60 my-3 mx-auto group rounded-2xl transition-shadow duration-700 hover:shadow-lg">
                            <img
                                src="/files/onSort.png"
                                alt="Aperçu de Coprism"
                                class="w-full h-auto object-top rounded-sm transition-transform duration-700 ease-in-out group-hover:-translate-y-1"
                            />
                            <div class="absolute inset-0 bg-black/0 group-hover:transition-colors duration-500 rounded-2xl"></div>
                            <div class="absolute inset-x-0 top-0 h-px bg-white/40"></div>
                            <div class="mt-4 absolute right-2 bg-white/100 backdrop-blur-sm text-[10px] uppercase tracking-widest text-black/40 px-2 py-1 rounded-sm">
                                Interface mobile
                            </div>
                        </div>

                    </div>

                    <!-- DETAILS -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">

                        <div>
                            <p class="text-black font-medium">Contexte</p>
                            <p class="text-black/60 mt-1">
                                Projet startup d'école visant à faciliter le choix d'activités entre amis.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Problème</p>
                            <p class="text-black/60 mt-1">
                                Difficulté à prendre des décisions en groupe de manière rapide et équitable.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Solution</p>
                            <p class="text-black/60 mt-1">
                                Système de vote + filtres + statistiques de choix.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Stack</p>
                            <p class="text-black/60 mt-1">
                                Flutter, API REST (Node.js), géolocalisation
                            </p>
                        </div>

                    </div>

                </div>

                <div class="border-l-2 border-[#e1c2ac] pl-6 fade-in">

                    <p class="text-sm text-black/50 uppercase tracking-widest">
                        Expérience professionnelle
                    </p>

                    <h2 class="text-3xl font-semibold mt-2">
                        Wevox - Développeuse full-stack
                    </h2>

                    <p class="mt-4 text-black/70 leading-relaxed">
                        Participation au développement d’une solution SaaS, avec une implication
                        full-stack et une forte dimension relation client.
                    </p>

                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">

                        <div>
                            <p class="text-black font-medium">Rôle</p>
                            <p class="text-black/60 mt-1">
                                Développement full-stack + support produit
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Client</p>
                            <p class="text-black/60 mt-1">
                                Déplacements en séminaires et présentations produit
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Compétences</p>
                            <p class="text-black/60 mt-1">
                                API, frontend, relation client, démonstration produit
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Impact</p>
                            <p class="text-black/60 mt-1">
                                Amélioration de la compréhension client et adoption produit
                            </p>
                        </div>

                    </div>

                </div>

                <div class="border-l-2 border-[#e1c2ac] pl-6 fade-in">

                    <p class="text-sm text-black/50 uppercase tracking-widest">
                        Outil desktop
                    </p>

                    <h2 class="text-3xl font-semibold mt-2">
                        Générateur d’étiquettes (C#)
                    </h2>

                    <p class="mt-4 text-black/70 leading-relaxed">
                        Application desktop permettant de générer automatiquement des étiquettes
                        d’impression à partir de données saisies par l’utilisateur.
                    </p>

                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">

                        <div>
                            <p class="text-black font-medium">Contexte</p>
                            <p class="text-black/60 mt-1">
                                Stage en entreprise avec besoin d’automatisation d’impression.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Problème</p>
                            <p class="text-black/60 mt-1">
                                Saisie manuelle répétitive et source d’erreurs.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Solution</p>
                            <p class="text-black/60 mt-1">
                                Interface simple + génération automatique + impression directe.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Stack</p>
                            <p class="text-black/60 mt-1">
                                C#, .NET
                            </p>
                        </div>

                    </div>

                </div>
            </div>


        </div>

@endsection
