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

		    <li><a href="../../maestros00001/salir">Cerrar Sesión</a></li>
	 	</ul>
	</div>

	@foreach ($asig as $asignatura)

<a style="font-size: 40px; margin-left: 20px;" href="javascript:history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span></a>

	<h2 style="text-align: center;">Generar Evaluación de la Asignatura *{{ $asignatura->nom_asig }}*.</h2>

		<div class="panel panel-success" style="margin: 20px;">
			<div class="panel-body">
				<div class="btn-group-vertical" role="group" aria-label="...">
  					<ul class="nav nav-tabs">
  						<li role="presentation" class="active"><a href="#evaAbierta" aria-controls="evaAbierta" data-toggle="tab" style='background-color:#09C; color:#fff;'>Evaluación de Preguntas Abiertas</a></li>
  						<li role="presentation"><a href="#evaRel" aria-controls="evaRel" data-toggle="tab" style='background-color:#069; color:#fff;'>Evaluación de Relación de Columnas</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="evaAbierta">
						{{-- Aquí va el contenido de cada pestaña --}}
						@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasGenEvaM.EvaAbierta.evaAbierta')
					</div>
					<div class="tab-pane fade" id="evaRel">
						@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasGenEvaM.EvaRel.evaRel')
					</div>
				</div>
		  </div>
		</div>

	@endforeach

@endsection