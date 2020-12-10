<div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tests as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->direccion}}</td>
            <td>{{$item->telefono}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @if ( $tests->lastPage() > 1 )
        <div class="card-footer">
        <div class="float-right">
            {{ $tests->links('pagination::bootstrap-4') }}
        </div>
        </div>
    @endif
    
</div>