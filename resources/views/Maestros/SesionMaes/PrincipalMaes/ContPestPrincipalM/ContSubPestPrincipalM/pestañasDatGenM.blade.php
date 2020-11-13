<div class="tab-content">

	{{-- Este es el contenido de la tabla Datos del Usuario --}}
	<div class="tab-pane fade in active" id="datosUsuarioM">
		@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasDatGenM.datPerM')
	</div>

	{{-- Este es el contenido de la tabla Registro de datos del Usuario --}}

	<div class="tab-pane fade" id="regDatUsuarioM">
		@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasDatGenM.regDatPerM')
	</div>

	{{-- Este es el contenido de la tabla  Registro de Materias --}}
	<div class="tab-pane fade" id="regMatM">
		@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasDatGenM.regMatM')
	</div>

	{{-- Este es el contenido de la tabla  Cambio de Contraseña--}}
</div>