

<div style="margin-top: 20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title">Registrar Preguntas</h3>
		</div>
		<div class="panel-body">
			@foreach ($asig as $clave_asig)

			@endforeach


			{!! Form::open(['route' => 'maestros00001.editarTemas.store', 'method' => 'POST']) !!}
				<div class="form-group">
					{!! Form::label('preg', 'Pregunta:') !!}
					{!! Form::textarea('preg', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Ingrese la pregunta.', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('resp', 'Respuesta:') !!}
					{!! Form::textarea('resp', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Ingrese la respuesta', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('fk_temas', 'Tema al que pertenece la pregunta:') !!}
					{!! Form::select('fk_temas', $listaTemas, null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::hidden('clave_asig', $clave_asig->clave_asig, ['class' => 'form-control', 'placeholder' => 'Ingrese el título de la Unidad', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Registrar Reactivo', ['class' => 'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}

		</div>
	</div>
</div>
