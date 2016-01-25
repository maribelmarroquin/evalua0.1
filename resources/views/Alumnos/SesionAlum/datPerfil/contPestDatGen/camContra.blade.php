<div class="col-md-6">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
				<div class="panel-heading">
					<h3 class="panel-title">Cambio de Contraseña.</h3>
				</div>
				<div class="panel-body">

				{!! Form::open(['route' => 'store', 'method' => 'POST']) !!}
					<div class="form-group">
						{!! Form::label('nom_alumno', 'Nombre(s):') !!}
						{!! Form::text('nom_alumno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('apa_alumno', 'Apellido Paterno:') !!}
						{!! Form::text('apa_alumno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su apellido paterno', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('ama_alumno', 'Apellido Materno:') !!}
						{!! Form::text('ama_alumno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su apellido materno.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('sem_alumno', 'Semestre:') !!}
						{!! Form::text('sem_alumno', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número de semestre que cursa actualmente.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Registrar Datos', ['class' => 'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
