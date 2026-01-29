<x-layouts.layout>
    <!-- Session Status -->
    <div class="bg-gray-200 min-h-full flex justify-center items-center">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" class="bg-white p-5 rounded-2xl" action="{{ route('exercises.store') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="name" :value="__('Nombre')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="nombre" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />

                <x-text-input id="description" class="block mt-1 w-full"
                              type="text"
                              name="description"
                />

                <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="time" :value="__('Horas')" />

                <x-text-input id="time" class="block mt-1 w-full"
                              type="text"
                              name="time"
                />

                <x-input-error :messages="$errors->get('time')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="type" :value="__('Type')" />

                <x-text-input id="type" class="block mt-1 w-full"
                              type="text"
                              name="type"
                />

                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
            <div class="flex flex-row pt-4 justify-center items-center">
                <x-primary-button>
                    {{ __('Guardar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layouts.layout>
