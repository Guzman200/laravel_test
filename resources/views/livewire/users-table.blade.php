@extends('welcome')

@section('contenido')
<div>
    <table class="table" id="tabla_test">
        <thead class="bg-info">
        <tr>
            <th class="bg-info" scope="col">#</th>
            <th class="bg-info" scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Email</th>
            <th scope="col">Dirección</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($tests as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->direccion}}</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
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
    
@endsection