<div class="col-md-6">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
				<div class="panel-heading">
					<h3 class="panel-title">Registro de Materias.</h3>
				</div>
				<div class="panel-body">

				@if(count($perfil) === 0)
					<h4>No ha registrado sus datos de usuario</h4>
					Le recomendamos registrar sus datos para proceder a registrar las asignaturas que cursa.
				@else

				{!! Form::open(['route' => 'regmat.store', 'method' => 'POST']) !!}

					<div class="form-group">
					{!! Form::label('clave_asig', 'Asígnatura a la que se encuentra inscrito:') !!}
					{!! Form::select('clave_asig', $listaAsig, null, ['class' => 'form-control']) !!}
					{!! Form::label('id_as_ma', 'Ingrese la sección de la asignatura:') !!}
					{!! Form::select('id_as_ma', $listaSeccion, null, ['class' => 'form-control']) !!}
				</div>
					<div class="form-group">
						{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}
				@endif
				</div>
			</div>
		</div>
	</div>

{{--  --}}

<div class="col-md-6">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
				<div class="panel-heading">
					<h3 class="panel-title">Asignaturas Registradas.</h3>
				</div>
				<div class="panel-body">
					@if (count($perfil) === 0)

					<h4>No ha registrado sus datos de usuario</h4>
					Le recomendamos registrar sus datos para proceder a registrar las asignaturas que cursa.

					@else

				<table class="table table-striped">
					<tr>
						<th>Clave de la asignatura: </th>
						<th>Apellido Paterno: </th>
						<th>

					</tr>
					@foreach ($asig as $asignatura)
					<tr>
						<td>{{ $asignatura->clave_asig }}</td>
						<td>{{ $asignatura->nom_asig }}</td>
						<td>
							{!! Form::open(['route' => ['datos.destroy', $asignatura->clave_asig], 'method' => 'DELETE']) !!}
								{!! Form::submit('Eliminar Registro', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}

						</td>
					</tr>

					@endforeach

				</table>
				@endif
				</div>
			</div>
		</div>
	</div>