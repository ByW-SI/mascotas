@extends('principal')
@section('content')

<div class="container">
	<div class="panel panel-group">
		@include('empleado.head')
		<ul class="nav nav-pills">
			<li class="nav-item"><a class="nav-link active" href="{{ route('empleados.show', ['empleado' => $empleado]) }}">Generales:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.laborals.index', ['empleado' => $empleado]) }}">Laborales:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.estudios.index', ['empleado' => $empleado]) }}">Estudios:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.emergencias.index', ['empleado' => $empleado]) }}">Emergencias:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.vacaciones.index', ['empleado' => $empleado]) }}">Vacaciones:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.faltas.index', ['empleado' => $empleado]) }}">Administrativo:</a></li>
		</ul>
		<div class="panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-4">
						<h5>Datos Generales aqui:</h5>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-sm-3">
						<label class="control-label">Teléfono:</label>
						<dd>{{ $empleado->telefono ? $empleado->telefono : 'N/A' }}</dd>
					</div>
					<div class="form-group col-sm-3">
						<label class="control-label">Celular:</label>
						<dd>{{ $empleado->movil ? $empleado->movil : 'N/A' }}</dd>
					</div>
					<div class="form-group col-sm-3">
						<label class="control-label">NSS (IMSS):</label>
						<dd>{{ $empleado->nss ? $empleado->nss : 'N/A' }}</dd>
					</div>
					<div class="form-group col-sm-3">
						<label class="control-label">CURP:</label>
						<dd>{{ $empleado->curp ? $empleado->curp : 'N/A' }}</dd>
					</div>
					<div class="form-group col-sm-3">
						<label class="control-label">INFONAVIT:</label>
						<dd>{{ $empleado->infonavit ? $empleado->infonavit : 'N/A' }}</dd>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-sm-12 text-center">
						<a class="btn btn-warning" href="{{ route('empleados.edit', ['empleado' => $empleado]) }}">
							<i class="fa fa-pencil"></i><strong> Editar</strong>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection