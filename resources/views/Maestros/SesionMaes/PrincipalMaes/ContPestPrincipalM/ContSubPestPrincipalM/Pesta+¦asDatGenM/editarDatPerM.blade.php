				<div class="panel-heading">
					<h3 class="panel-title">Editar Datos de Personales.</h3>
				</div>
				<div class="panel-body">

				@foreach ($perfil as $datos)

				@endforeach

				{!! Form::model($datos, ['route' => ['maestros00001.principal.update', $datos->id_maes], 'method' => 'PUT']) !!}
					<div class="form-group">
						{!! Form::label('name', 'Matrícula:') !!}
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la nueva matrícula']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('nom_maes', 'Nombre(s):') !!}
						{!! Form::text('nom_maes', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('apa_maes', 'Apellido Paterno:') !!}
						{!! Form::text('apa_maes', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su apellido paterno', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('ama_maes', 'Apellido Materno:') !!}
						{!! Form::text('ama_maes', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su apellido materno.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::hidden('id', Auth::user()->id , ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}
				</div>

