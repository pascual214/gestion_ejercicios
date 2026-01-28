<x-layouts.layout>
    @guest
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
                    <a href="{{ route('login') }}"><button class="btn btn-primary">{{__("Empezar")}}</button></a>
                </div>
            </div>
        </div>
    @endguest
    @auth
            <div class="flex w-full flex-col">
                <div class="card bg-blue-100 grid h-40 place-items-center">
                    <h2 class="text-2xl font-semibold text-center"> {{ __("Elige tus ejercicios, crea tu entrenamiento")}}</h2>
                    <h4>{{ __("Elige los ejericicios que mas te gustan, editalos o borralos y crea entrenamientos a tu gusto.") }}</h4>
                </div>
                <div class="divider " ></div>
                <div class="card bg-blue-100 grid place-items-center p-6">
                <div class="flex flex-wrap gap-6 justify-center">

                        @foreach($exercises as $exercise)
                            <x-layouts.cards :exercise="$exercise" />
                        @endforeach

                    </div>
                </div>
            </div>
    @endauth
</x-layouts.layout>
