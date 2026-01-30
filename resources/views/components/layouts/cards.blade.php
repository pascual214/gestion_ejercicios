<div class="card w-96 bg-base-100 card-md shadow-sm">
    <div class="card-body shadow-lg hover:shadow-[0_10px_25px_rgba(0,0,0,0.25)] transition-shadow duration-300">
        <h2 class="card-title justify-center font-bold underline">{{$exercise->name}}</h2>
        <p class="text-center">{{$exercise->description}}</p>
        <p>{{__("Tiempo del ejercicio: ")}}<strong>{{$exercise->time}}{{ __(" min")}}</strong></p>
        <p>{{ __("Tipo de ejercicio: ")}}<strong>{{$exercise->type}}</strong></p>
        <div class="justify-end card-actions">

            <a href="{{ route('exercises.edit', ['exercise' => $exercise->id, 'page' => request()->page]) }}"><button class="btn btn-primary">{{ __("Editar")}}</button></a>

            <form action="{{ route('exercises.destroy', $exercise->id) }}" method="POST">

                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmarBorrado(event)" class="btn btn-secondary bg-red-600 border-red-700">
                    {{ __("Borrar") }}
                </button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmarBorrado(e) {
    e.preventDefault(); // Evita el envío automático
        const button = e.currentTarget;
        const form = button.closest("form");

        Swal.fire({
            title: "{{__("¿Estás seguro?")}}",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "{{ __("Sí, borrar")}}",
            cancelButtonText: "{{ __("Cancelar")}}",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Solo se envía si se confirma el borrado
            }
        });
    }
</script>
