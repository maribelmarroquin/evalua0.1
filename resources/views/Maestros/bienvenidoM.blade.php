@extends('principal')

@section('titulo', 'UV')

@section('contenido')

	<h3 style="text-align: center">Bienvenido al Sistema de Evaluaciones.</h3>
	@include('Maestros.Mensajes.errorSesionM')
	@include('Maestros.Mensajes.sucesoM')

	<div class="col-xs-6" style="margin-top: 20px;">
	<div class="container-fluid">
		<div class='panel panel-primary'>
			@include('Maestros.Formularios.registroM')
		</div>
	</div>
</div>
<div class="col-xs-6">
	<div class="container-fluid" style="margin-top: 20px;">
		<div class='panel panel-primary'>
			@include('Maestros.Formularios.sesionM')
		</div>
	</div>
</div>

<div class="navbar  navbar-default navbar-fixed-bottom" >
	<p class="navbar-text navbar-right" style="margin-right: 20px;">

	  		<a href="/contacto"><span class="glyphicon glyphicon-envelope"></span> Contacto con el administrador</a> / <a href="http://uv.mx/"><span class="glyphicon glyphicon-education"></span> Universidad Vercruzana</a> / Facultad de Medicina, Ciudad Mendoza, Veracruz. / <a href="http://uv.mx/estado-tiempo/"><span class="glyphicon glyphicon-cloud"></span> Estado del tiempo del sitio Web uv.mx</a>
	</p>
</div>



@endsection

