@extends('principal')
@section('content')

<div class="container" id="tab">
	<div role="application" class="panel panel-group">
		@include('provedores.head')
		<ul role="tablist" class="nav nav-pills">
			{{-- @foreach(Auth::user()->perfil->componentes as $cmp)
			@if($cmp->nombre == 'ver proveedor') --}}
			<li class="nav-item">
				<a href="{{ route('provedores.show',['provedore'=>$provedore]) }}" class="nav-link">Dirección Fìsica:</a>
			</li>
			{{-- @endif
			@if($cmp->nombre == 'ver datos proveedor') --}}
			<li class="nav-item">
				<a href="{{ route('provedores.direccionfisica.index',['provedore'=>$provedore]) }}" class="nav-link">Dirección Fisica:</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('provedores.contacto.index',['provedore'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link active">Contacto:</a>
			</li>
			<li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
				<a href="{{ route('provedores.datosgenerales.index',['cliente'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-3">Datos Generales:</a>
			</li>
			<li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-3" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false">
				<a href="{{ route('provedores.datosbancarios.index', ['cliente' => $provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-4">Datos Bancarios:</a>
			</li>
			{{-- @endif
			@endforeach --}}
		</ul>
		<div class="card mb-5">
			<div class="card-header">
				<div class="row">
					<div class="col-sm-4">
						<h5>Contactos:</h5>
					</div>
					<div class="col-sm-4 text-center">
						<a type="button" class="btn btn-success" href="{{ route('provedores.contacto.create',['provedore'=>$provedore]) }}">
							<strong>Agregar</strong>
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				@if($contactos->count() == 0)
				<h3>Aún no tiene contactos.</h3>
				@else
				<table class="table table-striped table-bordered table-hover" style="margin-bottom: 0px">
					<tr class="info">
						<th>Nombre del contacto</th>
						<th>Telefono Directo</th>
						<th>Celular</th>
						<th>Correo Electronico</th>
						<th>Operaciones</th>
					</tr>
					@foreach ($contactos as $contacto)
					<tr class="active">
						<td>{{ $contacto->nombre }} {{$contacto->apater}} {{$contacto->amater}}</td>
						<td>{{$contacto->telefonodir}}</td>
						<td>{{$contacto->celular1}}</td>
						<td>{{$contacto->email1}}</td>
						<td class="text-center">
							<a class="btn btn-primary btn-sm" href="{{ route('provedores.contacto.show',['provedore'=>$provedore,'contacto'=>$contacto]) }}">
								<strong>Ver</strong>
							</a>
							<a class="btn btn-warning btn-sm" href="{{ route('provedores.contacto.edit',['provedore'=>$provedore,'contacto'=>$contacto]) }}">
								<strong>Editar</strong>
							</a>
						</td>
					</tr>
					@endforeach
				</table>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection