<div class="col-md-12">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
				<div class="panel-heading">
					<h3 class="panel-title">Materias Registradas.</h3>
				</div>
				<div class="panel-body">
					@if (isset($todos))
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<th>ID_usuario: </th>
									<th>Usuario: </th>
									<th>Correo Electrónico: </th>
									<th>Contraseña: </th>
								</thead>
								@foreach ($todos as $todo)
								<tr>

									<td>{{ $todo->id}}</td>
									<td>{{ $todo->name }}</td>
									<td>{{ $todo->email }}</td>
									<td>{{ $todo->password }}</td>
									<td>{{ $todo->tipo }}</td>
									<td>
										{!! Form::open(['route' => ['maestros00001.registrarMaterias.destroy', $todo->id], 'method' => 'DELETE']) !!}
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