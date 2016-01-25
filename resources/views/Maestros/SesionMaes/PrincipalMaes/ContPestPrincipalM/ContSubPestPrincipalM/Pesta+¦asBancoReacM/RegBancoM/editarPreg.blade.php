<div class='modal fade' id="editarP{{ $pregunta->id_preg }}">
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class="modal-header">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Editar Pregunta.</h4>
			</div>
			<div class="modal-body">

			{!! Form::model($pregunta, ['route' => ['maestros00001.preguntas.update', $pregunta->id_preg], 'method' => 'PUT']) !!}
				<div class="form-group">
					{!! Form::label('preg', 'Pregunta:') !!}
					{!! Form::textarea('preg', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Ingrese la pregunta.', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('resp', 'Nombre de la Unidad:') !!}
					{!! Form::textarea('resp', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'Ingrese la respuesta', 'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::hidden('fk_temas', null, ['class' => 'form-control']) !!}
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