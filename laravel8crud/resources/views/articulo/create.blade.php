@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/articulos" method="POST">
    @csrf
<div class="mb-3">
    <label for="" class="form-label">Producto</label>
    <input id="producto" name="producto" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Marca</label>
    <input id="marca" name="marca" type="text" class="form-control" tabindex="2">
</div>

<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
</div>

<div class="mb-3">
    <label for="" class="form-label">Precio Costo</label>
    <input id="precio_costo" name="precio_costo" type="number" step="any" value="0.00" class="form-control" tabindex="4">
</div>

<div class="mb-3">
    <label for="" class="form-label">Precio Venta</label>
    <input id="precio" name="precio_venta" type="number_venta" step="any" value="0.00" class="form-control" tabindex="5">
</div>

<div class="mb-3">
    <label for="" class="form-label">Existencia</label>
    <input id="existencia" name="existencia" type="number" class="form-control" tabindex="6">
</div>

<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection