@extends('layouts.app')

@section('content')

    <section class="max-w-5xl mx-auto px-6 py-24">

        <p class="text-xs uppercase tracking-[0.25em] text-black/40 mb-4">Contact</p>
        <h1 class="text-4xl md:text-5xl font-semibold text-black mb-4">Parlons-en</h1>
        <p class="text-black/55 max-w-md leading-relaxed text-sm mb-12">
            Je suis disponible pour un poste de développeuse full-stack ou mobile.
            Remplis le formulaire et je te réponds sous 48h.
        </p>

        {{-- MESSAGE SUCCÈS --}}
        @if (session('success'))
            <div class="mb-8 px-5 py-4 rounded-xl bg-[#ebd4c4] text-black text-sm font-medium">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST"
              class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            {{-- NOM --}}
            <div class="flex flex-col gap-2">
                <label for="nom" class="text-xs uppercase tracking-[0.2em] text-black/40">Nom</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}"
                       placeholder="Jean Dupont"
                       class="bg-[#faf6f3] border border-black/10 rounded-xl px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#e1c2ac] transition
                   @error('nom') border-red-400 @enderror">
                @error('nom') <p class="text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- EMAIL --}}
            <div class="flex flex-col gap-2">
                <label for="email" class="text-xs uppercase tracking-[0.2em] text-black/40">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       placeholder="jean@example.com"
                       class="bg-[#faf6f3] border border-black/10 rounded-xl px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#e1c2ac] transition
                   @error('email') border-red-400 @enderror">
                @error('email') <p class="text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- SUJET --}}
            <div class="flex flex-col gap-2 md:col-span-2">
                <label for="sujet" class="text-xs uppercase tracking-[0.2em] text-black/40">Sujet</label>
                <input type="text" id="sujet" name="sujet" value="{{ old('sujet') }}"
                       placeholder="Proposition de poste, collaboration..."
                       class="bg-[#faf6f3] border border-black/10 rounded-xl px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#e1c2ac] transition
                   @error('sujet') border-red-400 @enderror">
                @error('sujet') <p class="text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- MESSAGE --}}
            <div class="flex flex-col gap-2 md:col-span-2">
                <label for="message" class="text-xs uppercase tracking-[0.2em] text-black/40">Message</label>
                <textarea id="message" name="message" rows="6"
                          placeholder="Décris ton projet ou ton opportunité..."
                          class="bg-[#faf6f3] border border-black/10 rounded-xl px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#e1c2ac] transition resize-none
                      @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                @error('message') <p class="text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- SUBMIT --}}
            <div class="md:col-span-2">
                <button type="submit"
                        class="bg-[#2c1810] text-[#faf6f3] px-8 py-4 rounded-xl text-sm font-medium hover:bg-[#3d2418] transition">
                    Envoyer le message →
                </button>
            </div>

        </form>

    </section>

@endsection
