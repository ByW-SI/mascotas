@extends('principal')
@section('content')

	<div class="container">
		<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-sm-4">
							<h4 class="card-title">Pacientes:</h4>
						</div>
						<div class="col-sm-4 text-center">
							<a class="btn btn-success btn-sm" href="{{ route('empleados.create') }}">
								<i class="fa fa-plus"></i><strong> Agregar Paciente</strong>
							</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							@if($pacientes->count() > 0)
								<table id="empleados" class="table table-striped table-bordered table-hover" style=" margin-bottom: 0px;">
									<thead>
									<tr class="info">
										<th>Dueño</th>
										<th>Mascota</th>
										<th>Raza</th>
										<th>Teléfono</th>
										<th>Celular</th>
										<th>Correo electrónico</th>
										<th class="text-center">Acciones</th>
									</tr>
									</thead>
									<tbody>
									@foreach ($empleados as $empleado)
											<tr>
												<td>{{ $empleado->id }}</td>
												<td>{{ $empleado->nombre }}</td>
												<td>{{ $empleado->appaterno }}</td>
												<td>{{ $empleado->apmaterno }}</td>
												<td>{{ $empleado->rfc }}</td>
												@if(count($empleado->laborales) > 0)
												<td>{{ $empleado->laborales->last()->puesto->nombre }}</td>
												<th>{{ $empleado->laborales->last()->oficina->nombre }}</th>
												@else
												<td> -- </td>
												<td> -- </td>
												@endif
												<td class="text-center">
													<a class="btn btn-primary btn-sm" href="{{ route('empleados.show', ['empleado' => $empleado]) }}">
														<i class="fa fa-eye"></i> Ver
													</a>
													<a class="btn btn-warning btn-sm" href="{{ route('empleados.edit', ['empleado' => $empleado]) }}">
														<i class="fa fa-pencil"></i> Editar
													</a>
												</td>
											</tr>
									@endforeach
									</tbody>
								</table>
							@else
								<h4>No hay Pacientes disponibles.</h4>
							@endif
						</div>
					</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
			    $('#empleados').DataTable({
					'language':{
					    "sProcessing":     "Procesando...",
					    "sLengthMenu":     "Mostrar _MENU_ registros",
					    "sZeroRecords":    "No se encontraron resultados",
					    "sEmptyTable":     "Ningún dato disponible en esta tabla",
					    "sInfo":           "Página _START_ al _END_ de un total de _TOTAL_ ",
					    "sInfoEmpty":      "Página 0 de un total de 0 ",
					    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					    "sInfoPostFix":    "",
					    "sSearch":         "Buscar:",
					    "sUrl":            "",
					    "sInfoThousands":  ",",
					    "sLoadingRecords": "Cargando...",
					    "oPaginate": {
					        "sFirst":    "Primero",
					        "sLast":     "Último",
					        "sNext":     "Siguiente",
					        "sPrevious": "Anterior"
					    },
					    "oAria": {
					        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
					    }
					}
				});
			} );
		</script>
	</div>

@endsection