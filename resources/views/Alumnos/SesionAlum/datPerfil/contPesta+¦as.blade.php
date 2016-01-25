<div class="tab-content">

	<div class="tab-pane fade in active" id="datosGenerales">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
				<div class="panel-body">
					<div class="btn-group-vertical" role="group" aria-label="...">
	  					<ul class="nav nav-tabs">
	  						<li role="presentation" class="active"><a href="#datosUsuario" data-toggle="tab">Datos del Usuario</a></li>
							<li role="presentation"><a href="#regDatUsuario" data-toggle="tab">
							@if (count($perfil) === 0)
								Registro de datos del Usuario
							@else
								Editar datos de Usuario
							@endif
	  						</a></li>

	  						<li role="presentation"><a href="#regMat" data-toggle="tab">Registro de Materias</a></li>
	  						<li role="presentation"><a href="#camContra" data-toggle="tab">Cambio de Contraseña</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="datosGenerales">
							@include('Alumnos.SesionAlum.datPerfil.pestDatGen')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="resEvalua">
		<h4>Resultados de Evaluaciones</h4>

	</div>
</div>