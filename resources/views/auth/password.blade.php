@extends('principal')

@section('titulo', 'UV')

@section('contenido')
	<a style="font-size: 40px; margin-left: 20px;" href="javascript:history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span></a>

	<h3 style="text-align: center">Bienvenido al Sistema de Evaluaciones - Olvidé mi contraseña.</h3>
	@include('Maestros.Mensajes.errorSesionM')
	@include('Maestros.Mensajes.sucesoM')

<div class="col-md-6">
		<div class="container-fluid" style="margin-top: 20px; margin-bottom: 50px">
			<div class='panel panel-primary'>
				<div class="panel-body">
					{!! Form::open(['url'=>'/password/email', 'method'=>'POST']) !!}

					<div class="form-group">
						{!! Form::label('email', 'E-mail registrado:') !!}
						{!! Form::email('email',  old('email') ) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>



<div class="navbar  navbar-default navbar-fixed-bottom" >
	<p class="navbar-text navbar-right" style="margin-right: 20px;">

	  		<a href="/contacto"><span class="glyphicon glyphicon-envelope"></span> Contacto con el administrador</a> / <a href="http://uv.mx/"><span class="glyphicon glyphicon-education"></span> Universidad Vercruzana</a> / Facultad de Medicina, Ciudad Mendoza, Veracruz. / <a href="http://uv.mx/estado-tiempo/"><span class="glyphicon glyphicon-cloud"></span> Estado del tiempo del sitio web uv.mx</a>
	</p>
</div>

@endsection