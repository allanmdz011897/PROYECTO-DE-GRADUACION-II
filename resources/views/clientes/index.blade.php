Inicio (Despliegue de datos)
@extends('adminlte::page')
@section('content')
    

<table class="table table-hover">
    <thead class="thead-light" style="text-align: center;">
        <tr>
            <th>id_cliente</th>
            <th>NoNIT</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>NumeroTelefono</th>
            <th>NITEmpresa</th>
            <th>NombreComercial</th>
            <th>FechaProximoPago</th>
            <th>MontoPago</th>
            <th>Cuotas</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($clientes as $clientes)
    
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$clientes->NoNIT}}</td>
            <td>{{$clientes->Nombre}}</td>
            <td>{{$clientes->Apellido}}</td>
            <td>{{$clientes->NumeroTelefono}}</td>
            <td>{{$clientes->NITEmpresa}}</td>
            <td>{{$clientes->NombreComercial}}</td>
            <td>{{$clientes->FechaProximoPago}}</td>
            <td>{{$clientes->MontoPago}}</td>
            <td>{{$clientes->payment_number}}</td>
            <td>
            
                <form action="{{ url('/clientes', ['id' => $clientes->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="Delete" />
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </td>
          
        </tr>
    @endforeach
    </tbody>
</table>
{!! $clientes !!}
@endsection