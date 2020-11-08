Seccion para crear clientes
@extends('adminlte::page')

@section('content')
<form action="{{url('/clientes')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}

			<div class="form-group">
            	<label for="NoNIT">{{'No NIT'}}</label>
            	<input type="text" name="NoNIT" id="NoNIT "class="form-control" placeholder="No. NIT:" value="">
            </div>
            <div class="form-group">
            	<label for="Nombre">{{'Nombre'}}</label>
            	<input type="text" name="Nombre" id="Nombre "class="form-control" placeholder="Nombre" value="">
            </div>

            <div class="form-group">
            	<label for="Apellido">{{'Apellido'}}</label>
            	<input type="text" name="Apellido" id="Apellido" class="form-control" placeholder="Apellido:">
            </div>

			 <div class="form-group">
            	<label for="NumeroTelefono">{{'NumeroTelefono'}}</label>
            	<input type="text" name="NumeroTelefono" id="NumeroTelefono" class="form-control" placeholder="Numero de Telefono:">
            </div>

			 <div class="form-group">
            	<label for="NITEmpresa">{{'NITEmpresa'}}</label>
            	<input type="text" name="NITEmpresa" id="NITEmpresa" class="form-control" placeholder="NIT de Empresa:">
            </div>

			 <div class="form-group">
            	<label for="NombreComercial">{{'NombreComercial'}}</label>
            	<input type="text" name="NombreComercial" id="NombreComercial" class="form-control" placeholder="Nombre Comercial:">
            </div>

			<div class="form-group">
            	<label for="FechaProximoPago">{{'FechaProximoPago'}}</label>
            	<input type="date" name="FechaProximoPago" id="FechaProximoPago" class="form-control" placeholder="Fecha del Proximo Pago:">
            </div>

			<div class="form-group">
            	<label for="MontoPago">{{'MontoPago'}}</label>
            	<input type="text" name="MontoPago" id="MontoPago" class="form-control" placeholder="Monto de Pago:">
			</div>
			
			<div class="form-group">
				<label for="payment_number">Cuotas:</label>
				<input type="text" name="payment_number" id="payment_number" class="form-control" placeholder="Cuotas:">
					
			</div>




			
            <div class="form-group">
            	<button class="btn btn-primary" type="submit" value="Agregar">Agregar</button>
            </div>

			
		</div>
	</div>
	</form>
	 @stop
