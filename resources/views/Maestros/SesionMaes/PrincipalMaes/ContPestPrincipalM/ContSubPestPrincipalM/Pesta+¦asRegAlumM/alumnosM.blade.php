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

	<h2 style="text-align: center;">Registro de Alumnos a la materia *{{ $asignatura->nom_asig }}*</h2>

	<div style="margin: 20px;">
		<div class="panel panel-success">
		  <div class="panel-body">

			<div class="col-md-6" style="margin-top: 20px;">
			    <div class="panel panel-primary">
		  			<div class="panel-body">
		    			<div class="btn-group-vertical" role="group" aria-label="...">
		  					<ul class="nav nav-tabs">
		  						<li role="presentation" class="active"><a href="#regAlum" aria-controls="regAlum" data-toggle="tab">Registro de alumnos</a></li>
								<li role="presentation"><a href="#lisAlum" aria-controls="lisAlum" data-toggle="tab">Lista de Alumnos</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="regAlum">
								@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasRegAlumM.AlumnosM.regAlum')
							</div>
							<div class="tab-pane fade" id="lisAlum">


								{{--@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.RegBancoM.regPreguntasM')--}}

							</div>
						</div>
		  			</div>
				</div>
			</div>
	@endforeach
			<div class="col-md-6" style="margin-top: 20px;">
				<div class="panel panel-primary">
		  			<div class="panel-heading">
		    			<h3 class="panel-title">Lista de Usuarios</h3>
		  			</div>
		  			<div class="panel-body">
						{{--  @include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.RegBancoM.lisTemas')--}}
		  			</div>
				</div>
			</div>

		  </div>
		</div>
	</div>


@endsection