@extends('adminlte::page')

@section('title', 'Prueba')

@section('content_header')
    <h1>Editar Artículo</h1>
@stop

@section('content')
   <form action="/citas/{{$articulo->id}}" method="POST">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Doctor</label>
    <input id="doctor" readonly name="doctor" type="text" class="form-control" value="{{$articulo->doctor}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sucursal</label>
    <input id="sucursal" name="sucursal" type="text" class="form-control" value="{{$articulo->sucursal}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Departamento</label>
    <input id="departamento" name="departamento"  class="form-control" value="{{$articulo->departamento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de servicio</label>
    <input id="tipo_servicio" name="tipo_servicio" type="text" class="form-control" value="{{$articulo->tipo_servicio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de Cita</label>
    <input id="fecha" name="fecha"  class="form-control" value="{{$articulo->fecha}}">
  </div>
  <a href="/citas" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop