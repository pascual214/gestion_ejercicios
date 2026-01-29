<div class="card w-96 bg-base-100 card-md shadow-sm">
    <div class="card-body">
        <h2 class="card-title">{{$exercise->name}}</h2>
        <p>{{$exercise->description}}</p>
        <p>{{$exercise->time}}</p>
        <p>{{$exercise->type}}</p>
        <div class="justify-end card-actions">
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-secondary bg-red-600 border-red-700">Borrar</button>
        </div>
    </div>
</div>
