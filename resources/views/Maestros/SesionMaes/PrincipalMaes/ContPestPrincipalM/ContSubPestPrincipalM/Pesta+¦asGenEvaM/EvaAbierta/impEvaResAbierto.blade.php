

<script type="text/javascript">
	function imprimir(){
	  var objeto=document.getElementById('imprimemeRes');  //obtenemos el objeto a imprimir
	  var ventana=window.open('','_blank');  //abrimos una ventana vacía nueva
	  ventana.document.write(objeto.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
	  ventana.document.close();  //cerramos el documento
	  ventana.print();  //imprimimos la ventana
	  ventana.close();  //cerramos la ventana
	}
</script>

<div class="col-md-6" style="margin-top: 20px;">
	<div class="panel panel-primary">
	  	<div class="panel-heading">

			<h3 class="panel-title"><button type="button" class="btn btn-info btn-lg btn-block " onclick="imprimir();">Imprimir Evaluación Resuelta</button></h3>
	  	</div>
		<div id="imprimemeRes">
  			<div class="panel-body">
				<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
				<script src="{{ asset('js/bootstrap.js') }}"></script>
				<div class="col-md-12" >
					<div class="table-responsive">
						<table class="table table-condensed" style="font-size: 11px;" >
							<thead>
								<tr>
							  		<th colspan="2" style="text-align: left;"><img src="{{ asset('img/uv.jpg') }}" style="width: 80px;"></th>
							  		<th colspan="5" style="text-align: center; font-size: 20px;">Universidad Veracruzana</th>
							  		<th style="text-align: right;"><img src="{{ asset('img/med.gif') }}" style="width: 50px;"></th>
								</tr>
								<tr>
									<th colspan="4">Facultad de Medicina, Cd. Mendoza, Ver.</th>
								@foreach ($maestro as $maes)
									<th colspan="4" style="text-align: right;">Catedrático: {{ $maes->nom_maes }} {{ $maes->apa_maes }} {{ $maes->ama_maes }}</th>
								@endforeach
								</tr>
								<tr>
									<th style="text-align: right;">Folio:</th>
									<th style="text-align: left;"> {{ $contador=include('contador/ControlaContador.php') }}</th>
								@foreach ($asig as $asignatura)
									<th style="text-align: right;">Asignatura:</th>
									<th style="text-align: left;">{{ $asignatura->nom_asig }}</th>
								@endforeach
								@foreach ($se_pe as $sec_per)
									<th style="text-align: right;">Sección:</th>
									<th style="text-align: left;">{{ $sec_per->seccion }}</th>
									<th style="text-align: right;">Periodo: </th>
									<th style="text-align: left;">{{ $sec_per->periodo }}</th>
								@endforeach
								</tr>
								<tr>
									<th colspan="8">Nombre del Alumno: </th>
								</tr>
							</thead>
							<tbody>
							@foreach ($preg as $preguntas)

								<tr>
									<th colspan="8">{{ ++$c }}.- {{ $preguntas->preg }}</th>

								</tr>
								<tr>
									<td colspan="8">R{{ $c }}= {{ $preguntas->resp }}</td>

								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
	  	</div>
	</div>
</div>
