<div class="tab-content">
{{-- Esta es la tabla con pestañas perteneciente a Datos Generales --}}

	<div class="tab-pane fade in active" id="datosGeneralesM">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
				<div class="panel-body">
					<div class="btn-group-vertical" role="group" id='myTabs'>
	  					<ul class="nav nav-tabs">
	  						<li role="presentation" class="active"><a href="#datosUsuarioM" aria-controls="datosUsuarioM" data-toggle="tab">Datos del Usuario</a></li>
							<li role="presentation"><a href="#regDatUsuarioM" aria-controls="regDatUsuarioM" data-toggle="tab">
							@if (count($perfil) === 0)
								Registro de datos del Usuario
							@else
								Editar datos de Usuario
							@endif
	  						</a></li>

	  						<li role="presentation"><a href="#regMatM" aria-controls="regMatM" data-toggle="tab">Registro de Materias</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="datosGenerales">
							@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.pestañasDatGenM')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Esta es la tabla con pestañas perteneciente a Generar Evaluación --}}

	<div class="tab-pane fade" id="genEvaluacionM">
		<h3 style="color: #036;text-align: center;">Generador de Evaluaciónes</h3>
		<div class="col-md-4 col-md-offset-3" style="margin-top: 20px;">
			<div class="container-fluid" >
				<div class='panel panel-default'>
					<div class="panel-heading">
						<h3 class="panel-title">Asignaturas que imparte.</h3>
					</div>
					<div class="panel-body">

						@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.pestañasGenEvaM')
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-md-offset-1" style="margin-top: 20px;">
			<div class="container-fluid" >
				<div class='panel panel-default'>
					<div class="panel-heading">
						<h3 class="panel-title">Instrucciones.</h3>
					</div>
					<div class="panel-body">
						<p>
							De click en el botón que indique la materia de la que desea generar una Evaluación.
						</p>

					</div>
				</div>
			</div>
		</div>

	</div>

	{{-- Esta es la tabla con pestañas perteneciente a Banco de Reactivos--}}
	<div class="tab-pane fade" id="bancoReacM">

		<h3 style="color: #036;text-align: center;">Banco de Reactivos</h3>
		<div class="col-md-4 col-md-offset-3" style="margin-top: 20px;">
			<div class="container-fluid" >
				<div class='panel panel-default'>
					<div class="panel-heading">
						<h3 class="panel-title">Asignaturas que imparte.</h3>
					</div>
					<div class="panel-body">

						@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.pestañasBancoReacM')
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-md-offset-1" style="margin-top: 20px;">
			<div class="container-fluid" >
				<div class='panel panel-default'>
					<div class="panel-heading">
						<h3 class="panel-title">Instrucciones.</h3>
					</div>
					<div class="panel-body">
						<p>
							De click en el botón que indique la materia en la que desea ingresar reactivos en el banco de preguntas.
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>




