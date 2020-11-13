<div class="tab-content">

	@if (isset($materias))

		<div class="table-responsive">
			<table class="table table-striped">
				@foreach ($materias as $materia)
				<tr>
					<td><a type="button" class="btn btn-default btn-lg btn-block" style="background-color:#0D480D; color:#fff;" href="generador/{{ $materia->fk_clave_asig }}" >{{ $materia->nom_asig }}</a></td>
				</tr>
				@endforeach
			</table>
		</div>
	@else
		<h4>No ha registrado aún las Materias que imparte.</h4>
		Es indispensable realizar el registro de las materias que imparte para proceder a generar una Evaluación.
	@endif
</div>