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

                    <p class="text-sm text-black/50 uppercase tracking-widest">
                        Plateforme RH / SaaS
                    </p>

                    <h2 class="text-3xl font-semibold mt-2">
                        Coprism
                    </h2>

                    <!-- LINK -->
                    <div class="mt-2">
                        <a href="https://www.coprism.com/"
                           target="_blank"
                           class="text-sm text-[#e1c2ac] hover:text-black transition underline underline-offset-4">
                            Voir le site →
                        </a>
                    </div>

                    <p class="mt-4 text-black/70 leading-relaxed">
                        Coprism est une plateforme RH utilisée par des entreprises (dont MMA),
                        composée d’une application web, d’une application mobile et d’une API.
                        Elle permet la gestion et la centralisation des processus RH et des échanges
                        entre collaborateurs et services internes.
                    </p>

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
                        Application mobile permettant à des groupes d’utilisateurs de voter
                        pour des activités et de prendre des décisions collectives de manière simple et rapide.
                    </p>

                    <!-- DETAILS -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">

                        <div>
                            <p class="text-black font-medium">Contexte</p>
                            <p class="text-black/60 mt-1">
                                Projet startup d’école visant à faciliter le choix d’activités entre amis.
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
                                Flutter, API Reset (Node.js), géolocalisation
                            </p>
                        </div>

                    </div>

                </div>

                <div class="border-l-2 border-[#e1c2ac] pl-6 fade-in">
                    <p class="text-sm text-black/50 uppercase tracking-widest">
                        Expérience professionnelle
                    </p>

                    <h2 class="text-3xl font-semibold mt-2">
                        Wevox - Développeuse Full-Stack
                    </h2>

                    <p class="mt-4 text-black/70 leading-relaxed">
                        Participation au développement d’une solution SaaS en environnement agile,
                        avec une implication sur l’ensemble de la stack (frontend & backend) et une
                        forte dimension produit et relation client.
                    </p>

                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">

                        <div>
                            <p class="text-black font-medium">Contexte</p>
                            <p class="text-black/60 mt-1">
                                Travail sur une plateforme SaaS orientée expérience collaborateur,
                                en collaboration avec une équipe produit et technique dans un cadre agile (Scrum).
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Rôle</p>
                            <p class="text-black/60 mt-1">
                                Développeuse full-stack impliquée sur les fonctionnalités front-end,
                                les APIs backend, ainsi que la maintenance et l’évolution du produit.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Missions</p>
                            <p class="text-black/60 mt-1">
                                Développement de nouvelles fonctionnalités, correction de bugs,
                                optimisation des performances, et participation aux revues de code.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Relation client</p>
                            <p class="text-black/60 mt-1">
                                Participation à des démonstrations produit, échanges avec les clients
                                lors de séminaires et collecte de retours utilisateurs pour améliorer le produit.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Compétences utilisées</p>
                            <p class="text-black/60 mt-1">
                                API REST, développement frontend, UX, communication client, gestion de feedback utilisateur.
                            </p>
                        </div>

                        <div>
                            <p class="text-black font-medium">Impact</p>
                            <p class="text-black/60 mt-1">
                                Contribution à l’amélioration de l’adoption produit et à une meilleure compréhension
                                des besoins clients grâce aux retours terrain.
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
