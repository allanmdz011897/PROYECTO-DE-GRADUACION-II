@extends('adminlte::page')

@section('content')
<form action="{{url('/pagosclientes')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			
			<div class="form-group">
            	<label for="FechaPago">{{'Fecha Pago'}}</label>
            	<input type="date" name="FechaPago" id="FechaProximoPago" class="form-control" placeholder="Fecha de Pago:">
            </div>

            <div class="form-group">
            	<label for="Cancelar">{{'Cancelar'}}</label>
            	<input type="text" name="Cancelar" id="Cancelar "class="form-control" placeholder="MontoACancelar:" value="">
            </div>
			
            <div class="form-group">
            	<button class="btn btn-primary" type="submit" value="Agregar">Agregar</button>
            </div>

			
		</div>
	</div>
	</form>
	 @stop
