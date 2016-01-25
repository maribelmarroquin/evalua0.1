<div style="margin-top: 20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">
		    <h3 class="panel-title">Registrar Temas</h3>
		</div>
		<div class="panel-body">
		@foreach ($asig as $clave_asig)



			{!! Form::open(['route' => 'maestros00001.temas.store', 'method' => 'POST']) !!}
				<div class="form-group">
					{!! Form::label('tema', 'Tema:') !!}
					{!! Form::text('tema', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tema de las preguntas a registrar.', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('unidad', 'Unidad:') !!}
					{!! Form::number('unidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese en numero de unidad', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nom_uni', 'Nombre de la Unidad:') !!}
					{!! Form::text('nom_uni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título de la Unidad', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::hidden('fk_asig', $clave_asig->clave_asig, ['class' => 'form-control', 'placeholder' => 'Ingrese el título de la Unidad', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Registrar Tema', ['class' => 'btn btn-primary']) !!}
				</div>

			{!! Form::close() !!}
@endforeach
		</div>
	</div>
</div>