@extends('layouts.plantillabase');

@section('contenido')
    <a href="articulos/create" class="btn btn-primary">CREAR</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">id_Producto</th>
                <th scope="col">Producto</th>
                <th scope="col">Marca</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio Costo</th>
                <th scope="col">Precio Venta</th>
                <th scope="col">Existencia</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id}}</td>
                    <td>{{$articulo->producto}}</td>
                    <td>{{$articulo->marca}}</td>
                    <td>{{$articulo->descripcion}}</td>
                    <td>{{$articulo->precio_costo}}</td>
                    <td>{{$articulo->precio_venta}}</td>
                    <td>{{$articulo->existencia}}</td>
                    <td>
                        <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection