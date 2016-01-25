<div class="tab-content">

	@if (isset($asignatura))


	<div class="col-md-8" style="margin-top: 20px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"></h3>
			</div>
			<div class="panel-body">

				<div class="table-responsive">
					<table class="table table-striped">


						@foreach ($unidad as $uni)
						{!! Form::open(['route' => ['maestros00001.generaRel.show', $asignatura->clave_asig], 'method' => 'GET']) !!}
						<tr>
							<td>
								{!! Form::label('cantidad', 'Ingrese la cantidad de preguntas que desea que contenga la evaluación:') !!}
								{!! Form::number('cantidad', null, ['class' => 'form-control', 'required']) !!}
							</td>
							<td>
								{!! Form::hidden('unidad', $uni->unidad, ['class' => 'form-control', 'required']) !!}
								{!! Form::submit( $uni->unidad .'.- '.  $uni->nom_uni , ['class' => 'btn btn-default btn-lg btn-block', 'style'=>'background-color:#069; color:#fff;']) !!}
							</td>
						</tr>
						{!! Form::close() !!}
						@endforeach


					</table>
					{!! $unidad->render() !!}
				</div>
	@else
		<h4>No ha registrado aún las Materias que imparte.</h4>
		Es indispensable realizar el registro de las materias que imparte para proceder a generar una Evaluación.
	@endif
			</div>
		</div>
	</div>
</div>