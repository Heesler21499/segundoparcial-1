@extends('layouts.plantillabase');


@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="" class="form-label">Producto</label>
    <input id="producto" name="producto" type="text" class="form-control" value="{{$articulo->producto}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Marca</label>
    <input id="marca" name="marca" type="text" class="form-control" value="{{$articulo->marca}}">
</div>

<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
</div>

<div class="mb-3">
    <label for="" class="form-label">Precio Costo</label>
    <input id="precio_costo" name="precio_costo" type="number" step="any" value="0.00" class="form-control" value="{{$articulo->precio_costo}}">
</div>

<div class="mb-3">
    <label for="" class="form-label">Precio Venta</label>
    <input id="precio" name="precio_venta" type="number_venta" step="any" value="0.00" class="form-control" value="{{$articulo->precio_venta}}">
</div>

<div class="mb-3">
    <label for="" class="form-label">Existencia</label>
    <input id="existencia" name="existencia" type="number" class="form-control" value="{{$articulo->existencia}}">
</div>

<a href="/articulos" class="btn btn-secondary">Cancelar</a>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>


@endsection