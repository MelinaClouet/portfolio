@extends('layouts.app')

@section('content')

    <div class="max-w-5xl mx-auto px-6 pt-32 pb-24 fade-in">

        <p class="text-black/60 tracking-widest uppercase text-sm">
            Développeuse full-stack & mobile
        </p>

        <h1 class="mt-6 text-5xl font-semibold leading-tight text-black">
            Je crée des <span class="bg-[#eedbce] px-2">expériences digitales</span><br>
            simples, modernes et utiles.
        </h1>

        <p class="mt-8 text-lg text-black/70 max-w-2xl leading-relaxed">
            Passionnée par le développement, j’aime concevoir des applications
            qui allient fonctionnalité, design et compréhension utilisateur.
        </p>

        <div class="mt-10 flex gap-6">

            <a href="/projets"
               class="bg-[#e1c2ac] text-black px-6 py-3 rounded-xl hover:bg-[#ebd4c4] transition">
                Voir mes projets
            </a>

            <a href="/contact"
               class="text-black/70 hover:text-black transition">
                Me contacter →
            </a>

        </div>

    </div>

@endsection
