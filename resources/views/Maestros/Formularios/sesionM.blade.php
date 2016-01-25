<div class="panel-heading">
	<h3 class="panel-title">Iniciar Sesión.</h3>
</div>
<div class="panel-body">

	{!! Form::open(['route' => 'maestros00001.sesion.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('email', 'E-mail:') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su correo electrónico.', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Contraseña:') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña.', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Iniciar Sesión', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
	<div class="form-group"><a href="/password/email">Olvidé mi contraseña.</a></div>
</div>