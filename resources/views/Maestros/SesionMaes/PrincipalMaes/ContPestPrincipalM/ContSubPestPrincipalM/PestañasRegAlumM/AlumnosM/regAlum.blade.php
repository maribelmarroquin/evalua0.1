<div class="tab-content">

	@foreach ($usuarios as $usuario)

	@endforeach

	@foreach ($asig as $clave_asig)

	@endforeach

	<div style="margin-top: 20px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"></h3>
			</div>
			<div class="panel-body">
				{!! Form::open(['route' => 'maestros00001.alumnos.store', 'method' => 'POST']) !!}
					<div class="form-group">
						{!! Form::label('nom_alumno', 'Nombre(es):') !!}
						{!! Form::text('nom_alumno', null, ['class' => 'form-control', 'placeholder' => 'Inserte el nombre (es) del alumno.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('apa_alum', 'Apellido Paterno:') !!}
						{!! Form::text('apa_alum', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido paterno del alumno', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('ama_alum', 'Apellido Materno:') !!}
						{!! Form::text('ama_alum', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido materno del alumno.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('sem_alum', 'Semestre:') !!}
						{!! Form::number('sem_alum', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el semestre que esta cursando el alumno', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('email', 'E-mail:') !!}
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico con el que se registró el alumno', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::hidden('fk_asig_maes', $usuario->id_as_ma, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::hidden('clave_asig', $clave_asig->clave_asig, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Registrar Alumno', ['class' => 'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>