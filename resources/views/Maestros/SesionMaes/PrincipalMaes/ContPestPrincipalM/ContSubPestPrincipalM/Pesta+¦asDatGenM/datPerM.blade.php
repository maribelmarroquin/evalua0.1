<div class="col-md-6">
	<div class="container-fluid" style="margin-top: 20px;">
		<div class='panel panel-default'>
			<div class="panel-heading">
				<h3 class="panel-title">Datos Personales.</h3>
			</div>
			<div class="panel-body">

			@if (count($perfil) === 0)

					<h4>No ha registrado aun sus datos personales.</h4>
					Se le recomienda llevar a cabo el registro para futuras evaluaciones.

			@endif

				<table class="table table-striped">

					@foreach ($perfil as $dato)
					<tr>
						<th>Nombre(s): </th>
						<td>{{ $dato->nom_maes }}</td>
					</tr>
					<tr>
						<th>Apellido Paterno: </th>
						<td>{{ $dato->apa_maes }}</td>
					</tr>
					<tr>
						<th>Apellido Materno:</th>
						<td>{{ $dato->ama_maes }}</td>
					</tr>
					<tr>
						<th>Matrícula: </th>
						<td>{{ $dato->name}}</td>
					</tr>
					<tr>
						<th>E-mail: </th>
						<td>{{ $dato->email }}</td>
					</tr>

					@endforeach

				</table>
			</div>
		</div>
	</div>
</div>