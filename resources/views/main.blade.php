<x-layouts.layout>
    <div
        class="hero min-h-screen"
        style="background-image: url('images/pizarra.png');"
    >
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">{{ __('Crea, guarda y comparte') }}</h1>
                <p class="mb-5">
                    {{ __('Crea tus entrenamientos para todas las edades y niveles, guardalos y compartelos con amigos, entrenadores o compañeros.') }}
                </p>
                <button class="btn btn-primary">{{__("Empezar")}}</button>
            </div>
        </div>
    </div>
</x-layouts.layout>
