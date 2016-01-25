@extends('principal')

@section('titulo', 'Examen de preguntas abiertas.')

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


<a style="font-size: 40px; margin-left: 20px;" href="javascript:history.go(-1);"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span></a>

@foreach ($unidad as $uni)


<h2 style="color: #036;text-align: center;">Generar Evaluación de la Unidad {{ $uni->nom_uni }}.</h2>

@endforeach

<div class="col-md-12" style="margin-top: 20px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"></h3>
			</div>
			<div class="panel-body">

{{-- ------------------------------Generar Evaluacion Resuelto------------------------------------ --}}
		<div class="col-md-6 col-md-offset-3" >
			<a type="button" class="btn btn-warning btn-lg btn-block " href="javascript:location.reload()">Generar una Evaluación Diferente</a>
		</div>

			@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasGenEvaM.EvaRel.impEvaResRel')
	{{-- ------------------------------Generar Evaluacion Sin Resolver------------------------------------ --}}
			@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasGenEvaM.EvaRel.impEvaRel')

			</div>
		</div>
	</div>
</div>



@endsection