@extends('principal')
@section('content')
	{{-- expr --}}
	<div class="container">
		<div class="panel panel-group">
			@include('empleado.head')
			<div>
				<ul class="nav nav-pills">
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.show', ['empleado' => $empleado]) }}">Generales:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.laborals.index', ['empleado' => $empleado]) }}">Laborales:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.estudios.index', ['empleado' => $empleado]) }}">Estudios:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.emergencias.index', ['empleado' => $empleado]) }}">Emergencias:</a></li>
			<li class="nav-item"><a class="nav-link active" href="{{ route('empleados.vacaciones.index', ['empleado' => $empleado]) }}">Vacaciones:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.faltas.index', ['empleado' => $empleado]) }}">Administrativo:</a></li>
		</ul>
			</div>
			<div class="panel-default">
				<div class="panel-heading"><h5>Vacaciones:
				&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-asterisk" aria-hidden="true"></i>Campos Requeridos</h5></div>
				<div class="panel-body">
					<form role="form" method="POST" action="{{ route('empleados.vacaciones.store',['empleado'=>$empleado]) }}">
						{{ csrf_field() }}
						<input type="hidden" name="empleado_id" value="{{$empleado->id }}">
						<div class="col-xs-12 offset-md-2 mt-3">
						<div class="form-group col-xs-4">
								<label class="control-label" for="fechainicio" id="lbl_vacaciones"><i class="fa fa-asterisk" aria-hidden="true"></i>Fecha de Inicio:</label>
								<input type="date" class="form-control" id="id_vacaciones" name="fechainicio">
							</div>
						<div class="form-group col-xs-4">
								<label class="control-label" for="fechafin" id="lbl_vacaciones"><i class="fa fa-asterisk" aria-hidden="true"></i>Fecha de Fin:</label>
								<input type="date" class="form-control" id="id_vacaciones_fin" name="fechafin">
							</div>
						
						</div>
						<div class="col-xs-12 offset-md-2 mt-3">
									<div class="form-group col-xs-4">
			    					<label class="control-label" for="diastomados">Número de días de vacaciones:</label>
			    					<input type="text" class="form-control" id="dias_vac" name="diastomados">
			  			</div>
						</div>
						<div class="col-xs-12 offset-md-2 mt-3">
									<div class="form-group col-xs-4">
			    					<label class="control-label" for="diasrestantes">Días vacaiones restantes:</label>
			    					<input type="text" class="form-control" id="dias_vac_rest" name="diasrestantes">
			  			</div>
						</div>
						<div class="col-xs-12 offset-md-2 mt-6">
							<div class="form-group col-xs-2">
								<label class="" for="periodo1">Periodo de:<input type="text" class="form-control" id="dias_vac_rest" name="periodo1"></label> 
							</div>
								<div class="form-group col-xs-2">
									<label>al día : </label><input type="text" class="form-control" id="dias_vac_rest" name="periodo2">
								 </div>
								<div class="form-group col-xs-2">
								<label class="" for="dias_vac_rest">Días totales: </label> <input type="text" class="form-control" id="dias_vac_rest" name="diastotal">
							</div>
						</div>
						<button type="submit" class="btn btn-success">Guardar</button>
						
					</form>
					<div class="col-xs-12 offset-md-2 mt-6">
						<table class="table table-striped table-bordered table-hover" style="color:rgb(51,51,51); border-collapse: collapse; margin-bottom: 0px">
							<thead>
								<tr class="info">
									<th>@sortablelink('created_at','Fecha:')</th>
									<th>@sortablelink('fechainicio','Fecha de inicio:')</th>
									<th>@sortablelink('fechafin','Fecha Fin:')</th>
									<th>@sortablelink('diastomados','Días:')</th>
									<th>@sortablelink('diasrestantes','Días Restantes:')</th>
								</tr>
							</thead>
							@if(is_array($vacaciones) || is_object($vacaciones))
									@foreach ($vacaciones as $vacacion)
										
										<tr class="active">
											<td>{{$vacacion->created_at}}</td>
											<td>{{$vacacion->fechainicio}}</td>
											<td>{{$vacacion->fechafin}}</td>
											<td>{{$vacacion->diastomados}}</td>
											<td>{{$vacacion->diasrestantes}}</td>
										</tr>
									@endforeach
							@endif
						</table>

					</div>

				</div>
			</div>
		</div>
	</div>	
@endsection