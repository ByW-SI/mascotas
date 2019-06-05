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
		 				<h5>Datos Generales: <small><i class="fa fa-asterisk" aria-hidden="true"></i>Campos Requeridos</small></h5>
		 			</div>
		 		</div>
		 	</div>
			<form role="form" id="form-cliente" method="POST" action="{{ route('provedores.datosgenerales.update',['provedore'=>$provedore, 'datosgenerale'=>$datos]) }}" name="form">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
			 	<input type="hidden" name="provedor_id" value="{{$provedore->id}}">
			 	<div class="panel-body">
			 		<div class="row">
			 			<div class="form-group col-sm-4">
			 				<label class="control-label" for="giro_id"><i class="fa fa-asterisk" aria-hidden="true"></i>Giro:</label>
							<select type="select" name="giro_id" class="form-control" id="giro_id" required="">
								@foreach ($giros as $giro)
								<option id="'{{$giro->id}}'" value="{{$giro->id}}" @if ($datos->giro_id == $giro->id)
									selected="selected"
								@endif >{{$giro->nombre}}</option>
								@endforeach
							</select>
			 			</div>
			 			<div class="form-group col-sm-4">
			 				<label class="control-label" for="nombre"><i class="fa fa-asterisk" aria-hidden="true"></i>Tamaño de la empresa:</label>
							<select type="select" name="tamano" class="form-control" id="tamano">
								<option id="micro" value="micro" @if ($datos->tamano == "micro")
									selected="selected" 
									{{-- expr --}}
								@endif>Micro</option>
								<option id="pequeña" value="pequeña" @if ($datos->tamano == "pequeña")
									selected="selected" 
									{{-- expr --}}
								@endif>Pequeña</option>
								<option id="mediana" value="mediana" @if ($datos->tamano == "mediana")
									selected="selected" 
									{{-- expr --}}
								@endif>Mediana</option>
								<option id="grande" value="grande" @if ($datos->tamano == "grande")
									selected="selected" 
									{{-- expr --}}
								@endif>Grande</option>
							</select>
			 			</div>
			 			<div class="form-group col-sm-4">
			 				<label class="control-label" for="forma_contacto_id"><i class="fa fa-asterisk" aria-hidden="true"></i>Forma de contacto:</label>
							<select type="select" name="forma_contacto_id" class="form-control" id="forma_contacto_id">
								@foreach ($formaContactos as $formaContacto)
								<option id="{{$formaContacto->id}}" value="{{ $formaContacto->id }}"<?php echo $datos->forma_contacto_id == $formaContacto->id ? ' selected=""' : '' ?>>{{ $formaContacto->nombre }}</option>
								@endforeach
							</select>
			 			</div>
			 		</div>
			 		<div class="row">
			 			<div class="form-group col-sm-4">
			 				<label class="control-label" for="web">Sitio web:</label>
			 				<input type="text" class="form-control" id="web" name="web" value="{{ $datos->web }}" autofocus>
			 			</div>

			 			<div class="form-group col-sm-4">
			 				<label class="control-label" for="comentario">Comentarios:</label>
			 				<textarea  class="form-control" rows="5" id="comentario" name="comentario">{{ $datos->comentario }}</textarea>
			 			</div>
			 			<div class="form-group col-sm-4">
			 				<label class="control-label" for="fechacontacto">Fecha de contacto:</label>
			 				<input type="date" class="form-control" id="fechacontacto" name="fechacontacto" value="{{ $datos->fechacontacto }}">
			 			</div>
			 		</div>
			 		<div class="row">
			 			<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-success">
								<strong>Guardar</strong>
							</button>
			 			</div>
			 		</div>
	 			</div>
	 		</form>
		</div>
	</div>
</div>

@endsection