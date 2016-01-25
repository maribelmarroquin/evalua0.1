@extends('principal')

@section('titulo', 'UV')

@section('contenido')

	<h3 style="text-align: center">Bienvenido al Sistema de Evaluaciones, Administrador.</h3>
	@include('Maestros.Mensajes.errorSesionM')
	@include('Maestros.Mensajes.sucesoM')


<div class="col-xs-6 col-md-offset-3">
	<div class="container-fluid" style="margin-top: 20px;">
		<div class='panel panel-primary'>
			@include('Administrador.Formularios.sesionA')
		</div>
	</div>
</div>

<div class="navbar  navbar-default navbar-fixed-bottom" >
	<p class="navbar-text navbar-right" style="margin-right: 20px;">

	  		<a href="http://uv.mx/"><span class="glyphicon glyphicon-education"></span> Universidad Vercruzana</a> / Facultad de Medicina, Ciudad Mendoza, Veracruz. / <a href="http://uv.mx/estado-tiempo/"><span class="glyphicon glyphicon-cloud"></span> Estado del tiempo del sitio Web uv.mx</a> / <a href="/admin001002/inicio/registro"><span class="glyphicon glyphicon-cog"></span></a>
	</p>
</div>



@endsection

