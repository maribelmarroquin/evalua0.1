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

<a style="font-size: 40px; margin-left: 20px;" href="../../maestros00001/principal"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span></a>

	<h2 style="text-align: center;">Banco de Reactivos de la materia *{{ $asignatura->nom_asig }}*</h2>

	<div style="margin: 20px;">
		<div class="panel panel-success">
		  <div class="panel-body">

			<div class="col-md-6" style="margin-top: 20px;">
			    <div class="panel panel-primary">
		  			<div class="panel-body">
		    			<div class="btn-group-vertical" role="group" aria-label="...">
		  					<ul class="nav nav-tabs">
		  						<li role="presentation" class="active"><a href="#regTemasM" aria-controls="regTemasM" data-toggle="tab">Registrar Temas</a></li>
								<li role="presentation"><a href="#regPreguntasM" aria-controls="regPreguntasM" data-toggle="tab">Registrar Preguntas</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="regTemasM">
								@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.RegBancoM.regTemasM')
							</div>
							<div class="tab-pane fade" id="regPreguntasM">
							@if (count($temas)===0)
								<h4>No ha registrado aún los temas correspondientes a su Asignatura.</h4>
								Es indispensable realizar el registro de los temas que corresponden a la asignatura *{{ $asignatura->nom_asig }}* para proceder a generar su banco de preguntas.
							@else

								@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.RegBancoM.regPreguntasM')
							@endif
							</div>
						</div>
		  			</div>
				</div>
			</div>
	@endforeach
			<div class="col-md-6" style="margin-top: 20px;">
				<div class="panel panel-primary">
		  			<div class="panel-heading">
		    			<h3 class="panel-title">Lista de Temas Registrados</h3>
		  			</div>
		  			<div class="panel-body">
						@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.RegBancoM.lisTemas')
		  			</div>
				</div>
			</div>

		  </div>
		</div>
	</div>


@endsection