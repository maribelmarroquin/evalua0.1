@extends('principal')

@section('titulo', 'UV')

@section('contenido')


	@include('Alumnos.Messages.errorSesion')

	@include('Alumnos.Messages.sucesoSesion')


	<div class="dropdown" align="right" style="margin-top: 20px; margin-right: 20px;">
	  	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	    	<span class="glyphicon glyphicon-user" aria-hidden="true"></span> {!! Auth::user()->email !!}
	    	<span class="caret"></span>
	  	</button>
		<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
		    <li><a href="#"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Ajustes</a></li>
		    <li role="separator" class="divider"></li>
		    <li><a href="/logout">Cerrar Sesión</a></li>
	 	</ul>
	</div>

	<h3 style="text-align: center;">SISTEMA DE EVALUACIONES.</h3>

	<div class="container-fluid" style="margin-top: 20px;">
		<div class='panel panel-default'>
			<div class="panel-body">
				<div class="btn-group-vertical" role="group" aria-label="...">
  					<ul class="nav nav-tabs">
  						<li role="presentation" class="active"><a href="#datosGenerales" data-toggle="tab">Datos Generales</a></li>
  						<li role="presentation"><a href="#resEvalua" data-toggle="tab">Resultados de Evaluaciones</a></li>
					</ul>
				</div>
				@include('Alumnos.SesionAlum.datPerfil.contPestañas')
			</div>
		</div>
	</div>





@endsection