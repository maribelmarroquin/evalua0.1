<div class="col-md-6 col-md-offset-3">
		<div class="container-fluid" style="margin-top: 20px;">
			<div class='panel panel-primary'>
				<div class="panel-heading">
					<h3 class="panel-title">Cambio de Contraseña.</h3>
				</div>
				<div class="panel-body">

				{!! Form::open(['route' => 'maestros00001.cambio.store', 'method' => 'POST']) !!}
					<div class="form-group">
						{!! Form::label('password', 'Contraseña actual:') !!}
						{!! Form::password('password' ,['class' =>'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('pass_n', 'Ingresar nueva contraseña:') !!}
						{!! Form::password('pass_n',['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('pass_n2', 'Repita la nueva contraseña:') !!}
						{!! Form::password('pass_n2',['class' => 'form-control', 'required']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

{{-- -----------------------------------------Listado de Materias Registradas-------------------------------------- --}}