@extends('adminlte::page')
@section('content')



<div>
    <h3>Catalago Servicios <span class="derecha">{{now()}}</span></h3>
</div>


<table class="table table-hover">
    <thead class="thead-light" style="text-align: center;">
        <tr class="center">
                <th>NombreServicio</th>
                <th>Descripcion</th>
                <th>Disponibilidad</th>
            </tr>
        </tr>
    </thead>
    <tbody>

    @foreach ($catalogos as $catalagos)
    
        <tr>
            <td>{{$catalagos->NombreServicio}}</td>
                <td>{{$catalagos->Descripcion}}</td>
                <td>{{$catalagos->Disponibilidad?'Disponible':'NoDisponible'}}</td>
            
          
        </tr>
    @endforeach
    </tbody>
</table>
@stop
