<div class="panel-heading">
	<h3 class="panel-title">Formulario de Registro al sistema de Evaluaciones.</h3>
</div>
<div class="panel-body">

{!! Form::open(['route' => 'maestros00001.inicio.store', 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Matrícula:') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su matrícula de Docente.', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'E-mail:') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Contraseña:') !!}
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese una contraseña.', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password_r', 'Repetir contraseña:') !!}
		{!! Form::password('password_r', ['class' => 'form-control', 'placeholder' => 'Repita su nueva contraseña.', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::hidden('tipo', 'B', ['class' => 'form-control', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>

{!! Form::close() !!}
</div>