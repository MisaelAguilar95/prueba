@extends('adminlte::page')

@section('title', 'Prueba')

@section('content_header')
   <h1>Crear Cita</h1>
@stop

@section('content')
    
<form action="/citas" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre de Doctor</label>
    <input id="doctor" name="doctor" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sucursal</label>
    <input id="sucursal" name="sucursal" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Departamento</label>
    <input id="departamento" name="departamento" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de Servicio</label>
    <input id="tipo_servicio" name="tipo_servicio"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de Cita</label>
    <input id="fecha" name="fecha"  type ="datetime-local"class="form-control" tabindex="3">
  </div>

  <a href="/citas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop