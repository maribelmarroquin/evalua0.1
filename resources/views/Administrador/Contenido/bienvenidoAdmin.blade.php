@extends('principal')

@section('titulo', 'UV')

@section('contenido')

@include('Maestros.Mensajes.errorSesionM')

@include('Maestros.Mensajes.sucesoM')


	<div class="dropdown" align="right" style="margin-top: 20px; margin-right: 20px;">
	  	<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	    	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> {!! Auth::user()->email !!}
	    	<span class="caret"></span>
	  	</button>
		<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
		    <li><a href="salir">Cerrar Sesión</a></li>
	 	</ul>
	</div>

	<h2 style="color: #036;text-align: center;">SISTEMA DE EVALUACIONES.</h2>

	<div class="container-fluid" style="margin-top: 20px;">
		<div class='panel panel-default'>
			<div class="panel-body">
				<div class="btn-group-vertical" role="group" aria-label="...">
  					<ul class="nav nav-tabs">
  						<li role="presentation" class="active"><a href="#datosUsuario" data-toggle="tab">Datos Personales</a></li>
  						<li role="presentation"><a href="#usuarios" data-toggle="tab">Gestión de Usuarios</a></li>
  						<li role="presentation"><a href="#cambioContra" data-toggle="tab">Ajustes</a></li>
					</ul>
				</div>
				@include('Administrador.Contenido.Pestañas.info')
			</div>
		</divC
	</div>

<div class="navbar  navbar-default navbar-fixed-bottom" >
	<p class="navbar-text navbar-right" style="margin-right: 20px;">

	  		<a href="http://uv.mx/"><span class="glyphicon glyphicon-education"></span> Universidad Vercruzana</a> / Facultad de Medicina, Ciudad Mendoza, Veracruz. / <a href="http://uv.mx/estado-tiempo/"><span class="glyphicon glyphicon-cloud"></span> Estado del tiempo del sitio Web uv.mx</a> / <a href="/admin001002/inicio/registro"><span class="glyphicon glyphicon-cog"></span></a>
	</p>
</div>

@endsection