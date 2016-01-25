<div class="col-md-4">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
				<div class="panel-heading">
					<h3 class="panel-title">Registro de Materias.</h3>
				</div>
				<div class="panel-body">

				@foreach ($perfil as $dato)

				{!! Form::open(['route' => 'maestros00001.registrarMaterias.store', 'method' => 'POST']) !!}
					<div class="form-group">
						{!! Form::label('clave_asig', 'Clave de la Materia:') !!}
						{!! Form::text('clave_asig', null, ['class' => 'form-control', 'placeholder' => 'EJ3M910.', 'required', 'data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'
Asegúrese de insertar correctamente
la clave de la materia,
ya que no prodrá modificarla
posteriormente y tendrá que eliminar
el registro completo.']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('nom_asig', 'Nombre de la Asignatura:') !!}
						{!! Form::text('nom_asig', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la Materia', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('seccion', 'Sección:') !!}
						{!! Form::number('seccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la seccion a la que pertenece la materia en numero.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('periodo', 'Periodo:') !!}
						{!! Form::text('periodo', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: ENE-JUN 2016', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::hidden('fk_maestros', $dato->id_maes, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Registrar Materia', ['class' => 'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
				@endforeach
				</div>
			</div>
		</div>
	</div>

{{-- -----------------------------------------Listado de Materias Registradas-------------------------------------- --}}
	<div class="col-md-8">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
				<div class="panel-heading">
					<h3 class="panel-title">Materias Registradas.</h3>
				</div>
				<div class="panel-body">
					@if (isset($materias))
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<th>Clave de Materia: </th>
									<th>Sección: </th>
									<th>Materia: </th>
									<th>Periodo: </th>
								</thead>
								@foreach ($materias as $materia)
								<tr>

									<td>{{ $materia->fk_clave_asig }}</td>
									<td>{{ $materia->seccion }}</td>
									<td>{{ $materia->nom_asig }}</td>
									<td>{{ $materia->periodo }}</td>
									<td><a type="button" class="btn btn-primary" href="#editar{{ $materia->fk_clave_asig }}" data-toggle="modal">Editar</a>
									@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasDatGenM.editarMatEmerM')
									</td>
									<td>
										{!! Form::open(['route' => ['maestros00001.registrarMaterias.destroy', $materia->fk_clave_asig], 'method' => 'DELETE']) !!}
											{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
										{!! Form::close() !!}

									</td>
								</tr>
								@endforeach
							</table>
						</div>
					@else
						<h4>No ha registrado aún las Materias que imparte.</h4>
						Es indispensable realizar el registro de las materias que imparte para proceder a generar su banco de preguntas.
					@endif
				</div>
			</div>
		</div>
	</div>