@extends('adminlte::page')
@section('content')

<div>
    <h3>Pagos Clientes <span class="derecha">{{now()}}</span></h3>
</div>

<a href="{{ url('clientes/create') }} " class="btn btn-success">Agregar Nuevo Cliente</a>
<br>
<br>

<table class="table table-hover">
    <thead class="thead-light" style="text-align: center;">
        <tr class="center">
                <th>id_pagos</th>
                <th>FechaPago</th>
                <th>MontoPago</th>
                <th>Cancelar</th>
                <th>id_cliente</th>
                <th>id_catalogo</th>

            </tr>
        </tr>
    </thead>
    <tbody>

    @foreach ($pagosclientes as $pagosclientes)
        <tr>
                <td>{{$pagosclientes->id_pagos}}</td>
                <td>{{$pagosclientes->FechaPago}}</td>
                <td>{{$pagosclientes->MontoPago}}</td>
                <td>{{$pagosclientes->Cancelar}}</td>
                <td>{{$pagosclientes->id_cliente}}</td>
                <td>{{$pagosclientes->id_catalogo}}</td
        </tr>
    @endforeach
    </tbody>
</table>
@stop
