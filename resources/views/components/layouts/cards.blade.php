<div class="card w-96 bg-base-100 card-md shadow-sm">
    <div class="card-body">
        <h2 class="card-title">{{$exercise->name}}</h2>
        <p>{{$exercise->description}}</p>
        <p>{{$exercise->time}}</p>
        <p>{{$exercise->type}}</p>
        <div class="justify-end card-actions">
            <button class="btn btn-primary">Editar</button>
            <form action="{{ route('exercises.destroy', $exercise->id) }}" method="POST">

                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmar(event)" class="btn btn-secondary bg-red-600 border-red-700">
                    {{ __("Borrar") }}
                </button>
            </form>
        </div>
    </div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmar(e) {
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
                    cancelButtonText: "{{ __("Cancelar")}}"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Solo se envía si se confirma el borrado
                    }
                });
            }
        </script>
