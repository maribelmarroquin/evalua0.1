@if (isset($asig))
	@foreach ($asig as $clave_asig)
	@endforeach



	<div class="table-responsive">
	{!! Form::open(['route'=>['maestros00001.temas.show', $clave_asig->clave_asig], 'method' => 'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search']) !!}
		<div class="form-group">
			{!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Búsqueda']) !!}
		</div>
			{!! Form::submit('Buscar', ['class' => 'btn btn-default']) !!}
	{!! Form::close() !!}
		<table class="table table-striped">
			<thead>
				<th>Tema de Preguntas: </th>
				<th>No. Unidad: </th>
				<th>Nombre de la unidad: </th>
			</thead>
			@foreach ($temas as $tema)
			<tr>

				<td><a type="button" class="btn btn-success" href="javascript:window.open('../../maestros00001/preguntas/{{ $tema->id_temas }}','Preguntas del tema {{ $tema->tema }}','width=800,height=600,left=50,top=50,directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no');void 0">{{ $tema->tema }}</a></td>

				<td>{{ $tema->unidad }}</td>
				<td>{{ $tema->nom_uni }}</td>
				<td>
					<a title="Editar" type="button" class="btn btn-primary" href="javascript:window.open('../../maestros00001/editarTemas/{{ $tema->id_temas }}','Editar el tema {{ $tema->tema }}','width=600,height=500,left=50,top=50,toolbar=yes');void 0">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
				</td>
				<td>


					{!! Form::open(['route' => ['maestros00001.temas.destroy', $tema->id_temas], 'method' => 'DELETE']) !!}
						{!! Form::hidden('clave_asig', $clave_asig->clave_asig, ['class' => 'form-control', 'placeholder' => 'Ingrese el título de la Unidad', 'required']) !!}

						{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}

				</td>
			</tr>
			@endforeach
		</table>
		{!! $temas->render() !!}
	</div>
@else
	<h4>No ha registrado aún las Materias que imparte.</h4>
	Es indispensable realizar el registro de las materias que imparte para proceder a generar su banco de preguntas.
@endif