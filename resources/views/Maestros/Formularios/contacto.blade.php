@extends('principal')

@section('titulo', 'UV')

@section('contenido')
	<a style="font-size: 40px; margin-left: 20px;" href="javascript:history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span></a>

	<h3 style="text-align: center">Bienvenido al Sistema de Evaluaciones - Contacto.</h3>
	@include('Maestros.Mensajes.errorSesionM')
	@include('Maestros.Mensajes.sucesoM')

<div class="col-md-6">
		<div class="container-fluid" style="margin-top: 20px; margin-bottom: 50px">
			<div class='panel panel-primary'>
				<div class="panel-body">
					{!! Form::open(['route' => 'contacto.store', 'method' => 'POST']) !!}
					<div class="form-group">
						{!! Form::label('nombre', 'Nombre:') !!}
						{!! Form::text('nombre', null ,['class' =>'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('email', 'E-mail:') !!}
						{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('mensaje', 'Mensaje:') !!}
						{!! Form::textarea('mensaje', null, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Enviar Mensaje', ['class' => 'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="container-fluid" style="margin-top: 20px; margin-bottom: 50px">
			<div class='panel panel-primary'>
				<div class="panel-heading">
					<h3 class="panel-title">Su opinión es muy importante.</h3>
				</div>
				<div class="panel-body">
					<p>
					Si gusta realizar alguna queja o sugerencia, puede realizarla a travéz de éste medio. Se le contactará a la brevedad posible.
					</p>
					<p>
					También se le recomienda que escriba de manera correcta la dirección de su correo electrónico, para poder contactarle como se ha mencionado.
					</p>
				</div>
			</div>
		</div>
	</div>

<div class="navbar  navbar-default navbar-fixed-bottom" >
	<p class="navbar-text navbar-right" style="margin-right: 20px;">

	  		<a href="../../maestros00001/contacto"><span class="glyphicon glyphicon-envelope"></span> Contacto con el administrador</a> / <a href="http://uv.mx/"><span class="glyphicon glyphicon-education"></span> Universidad Vercruzana</a> / Facultad de Medicina, Ciudad Mendoza, Veracruz. / <a href="http://uv.mx/estado-tiempo/"><span class="glyphicon glyphicon-cloud"></span> Estado del tiempo del sitio web uv.mx</a>
	</p>
</div>

@endsection