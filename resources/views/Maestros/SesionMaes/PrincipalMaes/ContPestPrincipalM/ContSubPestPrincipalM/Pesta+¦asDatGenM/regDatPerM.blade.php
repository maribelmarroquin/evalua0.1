<div class="col-md-6">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-default'>
			@if(count($perfil) ==! 0)
				@include('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasDatGenM.editarDatPerM')
			@else
				<div class="panel-heading">
					<h3 class="panel-title">Registro de Datos de Personales.</h3>
				</div>
				<div class="panel-body">

				{!! Form::open(['route' => 'maestros00001.principal.store', 'method' => 'POST']) !!}
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
						{!! Form::hidden('fk_users', Auth::user()->id , ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Registrar Datos', ['class' => 'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}
				</div>
			@endif
			</div>
		</div>
	</div>
