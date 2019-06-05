@extends('layouts.blank')
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
			<li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
				<a href="{{ route('provedores.contacto.index',['provedore'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-3">Contacto:</a>
			</li>
			<li class="active">
				<a href="{{ route('provedores.datosgenerales.index',['provedore'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link active" id="ui-id-3">Datos Generales:</a>
			</li>
			<li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-3" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false">
				<a href="{{ route('provedores.datosbancarios.index', ['cliente' => $provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-4">Datos Bancarios:</a>
			</li>
			{{-- @endif
			@endforeach --}}
		</ul>
		<div class="panel panel-default">
		 	<div class="panel-heading">
		 		<div class="row">
		 			<div class="col-sm-4">
		 				<h5>Datos Generales:</h5>
		 			</div>
		 		</div>
		 	</div>
		 	<div class="panel-body">
		 		<div class="row">
		 			<div class="form-group col-sm-4">
		 				<label class="control-label" for="nombre">Tamaño de la empresa:</label>
						<dd>{{$datos->tamano}}</dd>
		 			</div>
		 			<div class="form-group col-sm-4">
		 				<label class="control-label" for="nombre">Giro de la empresa:</label>
		 				@if($datos->giro_id == null)
		 				<dd>No tiene giro</dd>
		 				@else
						<dd>{{$giro->nombre}}</dd>
						@endif
		 			</div>
		 			<div class="form-group col-sm-4">
		 				<label class="control-label" for="nombre">Forma de contacto:</label>
		 				@if($datos->forma_contacto_id == null)
		 				<dd>No tiene forma de contacto</dd>
		 				@else
		 				<dd>{{$formaContacto->nombre}}</dd>
		 				@endif
		 			</div>
		 		</div>
		 		<div class="row">
		 			<div class="form-group col-sm-4">
		 				<label class="control-label" for="web">Sitio web:</label>
		 				<dd><a href="{{$datos->web}}" target="_blank">{{$datos->web}}</a></dd>
		 			</div>

		 			<div class="form-group col-sm-4">
		 				<label class="control-label" for="comentario">Comentarios:</label>
		 				<dd>{{$datos->comentario}}</dd>
		 			</div>
		 			<div class="form-group col-sm-4">
		 				<label class="control-label" for="fechacontacto">Fecha de contacto:</label>
		 				<dd>{{$datos->fechacontacto}}</dd>
		 				
		 			</div>
		 		</div>
		 		<div class="row">
		 			<div class="col-sm-12 text-center">
						<a class="btn btn-warning" href="{{ route('provedores.datosgenerales.edit',['provedores'=>$provedore,'datosgenerale'=>$datos]) }}">
							<strong>Editar</strong>
						</a>	
		 			</div>
		 		</div>
		 	</div>
		</div>
	@endsection