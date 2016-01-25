@if (isset($todos))
<div class='modal fade' id="editar{{ $materia->fk_clave_asig }}">
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class="modal-header">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Editar Usuarios.</h4>
			</div>
			<div class="modal-body">

				{!! Form::model($materia, ['route' => ['maestros00001.registrarMaterias.update', $materia->id_as_ma], 'method' => 'PUT']) !!}
					<div class="form-group">
						{!! Form::label('fk_clave_asig', 'Clave de la Materia:') !!}
						{!! Form::text('fk_clave_asig', null, ['class' => 'form-control', 'readonly']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('nom_asig', 'Nombre de la Asignatura:') !!}
						{!! Form::text('nom_asig', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la Materia', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('seccion', 'Sección:') !!}
						{!! Form::number('seccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la seccion a la que pertenece la materia en numero.', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('periodo', 'Periodo:') !!}
						{!! Form::text('periodo', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: ENE-JUN 2016', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::hidden('fk_maestros', $materia->fk_maestros, ['class' => 'form-control', 'placeholder' => ' ', 'required']) !!}
					</div>


			</div>
			<div class="modal-footer">
				<div class="form-group">
					{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
					<button tyle="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
				</div>
			</div>
			{!! Form::close() !!}

		</div>
	</div>
</div>
@endif