@extends('principal')

@section('titulo', 'Preguntas')

@section('contenido')

	@include('Maestros.Mensajes.errorSesionM')

	@include('Maestros.Mensajes.sucesoM')

<div class="col-md-12">
	<div class="container-fluid" style="margin-top: 20px;">
		<div class='panel panel-default'>
			<div class="panel-heading">
			@foreach ($temas as $tema)
				<h2 class="panel-title">Preguntas del tema {{ $tema->tema }}.</h2>
			@endforeach

			</div>
			<div class="panel-body">

				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<th>Pregunta: </th>
							<th>Respuesta: </th>
						</thead>
					@foreach ($preg as $pregunta)
						<tr>
							<td>{{ $pregunta->preg }}</td>
							<td>{{ $pregunta->resp }}</td>
							<td>
								<a title="Editar" type="button" class="btn btn-primary" href='#editarP{{ $pregunta->id_preg }}' data-toggle="modal">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</a>
								@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.RegBancoM.editarPreg')
							</td>
							<td>
								{!! Form::open(['route' => ['maestros00001.preguntas.destroy', $pregunta->id_preg], 'method' => 'DELETE']) !!}
								{!! Form::hidden('id_temas', $pregunta->fk_temas, ['class' => 'form-control', 'required']) !!}
								{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
								{!! Form::close() !!}

							</td>
						</tr>
					@endforeach


					</table>
					{!! $preg->render() !!}
				</div>


			</div>
		</div>
	</div>
</div>



@endsection