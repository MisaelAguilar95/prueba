@extends('adminlte::page')

@section('title', 'PRUEBA')

@section('content_header')
    <h1>Listado de Citas</h1>
@stop

@section('content')
   <a href="citas/create" class="btn btn-primary mb-3">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Doctor</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Departamento</th>
            <th scope="col">Tipo de Servicio</th>
            <th scope="col">Fecha de Cita</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id}}</td>
            <td>{{$articulo->doctor}}</td>
            <td>{{$articulo->sucursal}}</td>
            <td>{{$articulo->departamento}}</td>
            <td>{{$articulo->tipo_servicio}}</td>
            <td>{{$articulo->fecha}}</td>
            <td>
                <form action="{{ route ('citas.destroy',$articulo->id)}}" method="POST">
                <a href="/citas/{{ $articulo->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop