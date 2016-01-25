<div class="tab-content">

	@if (isset($materias))

		<div class="table-responsive">
			<table class="table table-striped">
				@foreach ($materias as $materia)
				<tr>
					<td><a type="button" class="btn btn-primary btn-lg btn-block" href="alumnos/{{ $materia->fk_clave_asig }}" >{{ $materia->nom_asig }}</a></td>
				</tr>
				@endforeach
			</table>
		</div>
	@else
		<h4>No ha registrado aún las Materias que imparte.</h4>
		Es indispensable realizar el registro de las materias que imparte para proceder a generar su banco de preguntas.
	@endif
</div>