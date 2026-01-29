<x-layouts.layout>
    <!-- Session Status -->
    <div class="bg-blue-100 min-h-full flex flex-col justify-center items-center mb-20 mt-19">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="flex flex-col bg-white p-6 rounded-2xl shadow-lg max-w-xl mx-auto my-8 space-y-4">
            <a href="{{ route('main') }}" class="flex items-center text-blue-600 hover:text-blue-800 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                <span>{{ __("Volver")}}</span>
            </a>

            <h2 class="text-2xl font-bold text-gray-800 text-center">{{ __("Editar ejercicio")}}</h2>
            <p class="text-gray-600">
                {{ __("Modifica los detalles de este ejercicio.") }}
            </p>

            <!-- Formulario de edición -->
            <form method="POST" class="bg-white p-5 rounded-2xl"
                  action="{{ route('exercises.update', $exercise->id) }}">
                @csrf
                @method('PUT')

                <!-- Input para volver a la misma página una vez editado el ejercicio -->
                <input type="hidden" name="page" value="{{ request()->page }}">

                <!-- Nombre -->
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                  value="{{ old('name', $exercise->name) }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Descripción -->
                <div class="mt-4">
                    <x-input-label for="description" :value="__('Descripción')" />
                    <x-text-input id="description" class="block mt-1 w-full"
                                  type="text"
                                  name="description"
                                  value="{{ old('description', $exercise->description) }}" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Tiempo -->
                <div class="mt-4">
                    <x-input-label for="time" :value="__('Tiempo (en minutos)')" />
                    <x-text-input id="time" class="block mt-1 w-full"
                                  type="text"
                                  name="time"
                                  value="{{ old('time', $exercise->time) }}" />
                    <x-input-error :messages="$errors->get('time')" class="mt-2" />
                </div>

                <!-- Tipo -->
                <div class="mt-4">
                    <x-input-label for="type" :value="__('Tipo')" />
                    <x-text-input id="type" class="block mt-1 w-full"
                                  type="text"
                                  name="type"
                                  value="{{ old('type', $exercise->type) }}" />
                    <x-input-error :messages="$errors->get('type')" class="mt-2" />
                </div>

                <div class="flex flex-row pt-4 justify-center items-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Editar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>
