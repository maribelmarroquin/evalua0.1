@extends('principal')

@section('titulo', 'UV')

@section('contenido')

	@include('Maestros.Mensajes.errorSesionM')

	@include('Maestros.Mensajes.sucesoM')

<div class="col-md-6">
	<div class="container-fluid" style="margin-top: 20px;">
		<div class='panel panel-default'>
			<div class="panel-heading">
				<h3 class="panel-title">Editar Datos de Personales.</h3>
			</div>
			<div class="panel-body">

				@foreach ($temas as $tema)

				@endforeach

				{!! Form::model($tema, ['route' => ['maestros00001.editarTemas.update', $tema->id_temas], 'method' => 'PUT']) !!}
					<div class="form-group">
						{!! Form::label('tema', 'Tema:') !!}
						{!! Form::text('tema', null, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('unidad', 'No. de Unidad:') !!}
						{!! Form::text('unidad', null, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('nom_uni', 'Título de la Unidad:') !!}
						{!! Form::text('nom_uni', null, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
					</div>
					{!! Form::hidden('fk_asig', null, ['class' => 'form-control', 'required']) !!}

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>



@endsection