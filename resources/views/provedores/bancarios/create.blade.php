@extends('principal')
@section('content')

<div class="container" id="tab">
	<form role="form" id="form-cliente" method="POST" action="{{ route('provedores.datosbancarios.store', ['provedore' => $provedore]) }}" name="form">
		{{ csrf_field() }}
		<div role="application" class="panel panel-group" >
			<div class="panel-default">
			@include('provedores.head')
			<ul role="tablist" class="nav nav-pills">
				{{-- @foreach(Auth::user()->perfil->componentes as $cmp)
				@if($cmp->nombre == 'ver proveedor') --}}
				<li class="nav-item">
					<a href="{{ route('provedores.show',['provedore'=>$provedore]) }}" class="nav-link">Dirección Fìsica:</a>
				</li>
				{{-- @endif
				@if($cmp->nombre == 'ver datos proveedor') --}}
				<li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
					<a href="{{ route('provedores.direccionfisica.index', ['provedore'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-2">Dirección Fiscal:</a>
				</li>
				<li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
					<a href="{{ route('provedores.contacto.index', ['provedore'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-3">Contacto:</a>
				</li>
				<li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
					<a href="{{ route('provedores.datosgenerales.index', ['provedore'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-3">Datos Generales:</a>
				</li>
				<li class="nav-item">
					<a href="#tab4" class="nav-link active">Datos Bancarios:</a>
				</li>
				{{-- @endif
				@endforeach --}}
			</ul>
			<div class="card mb-5">
				<div class="card-header">
					<div class="row">
						<div class="col-sm-4">
							<h5>Datos Bancarios: <small><small><i class="fa fa-asterisk" aria-hidden="true"></i>Campos Requeridos</small></small></h5>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="form-group col-sm-3">
	    					<label class="control-label" for="banco"><small><small><i class="fa fa-asterisk" aria-hidden="true"></i></small></small> Banco:</label>
	    					<select class="form-control" id="banco" name="banco_id" required="">
	    						<option>Seleccionar</option>
	    						@foreach($bancos as $banco)
	    						<option value="{{ $banco->id }}">{{ $banco->nombre }}</option>
	    						@endforeach
	    					</select>
	    				</div>
						<div class="form-group col-sm-3">
	  						<label class="control-label" for="cuenta"><small><small><i class="fa fa-asterisk" aria-hidden="true"></i></small></small> Número de Cuenta:</label>
	  						<input type="text" class="form-control" id="cuenta" name="cuenta" required="">
	  					</div>
						<div class="form-group col-sm-3">
	  						<label class="control-label" for="clabe"><small><small><i class="fa fa-asterisk" aria-hidden="true"></i></small></small> CLABE:</label>
	  						<input type="text" class="form-control" id="clabe" name="clabe" required="">
	  					</div>
						<div class="form-group col-sm-3">
	  						<label class="control-label" for="beneficiario"><small><small><i class="fa fa-asterisk" aria-hidden="true"></i></small></small> Beneficiario:</label>
	  						<input type="text" class="form-control" id="beneficiario" name="beneficiario" required="">
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
			</div>
		</div>
	</form>
</div>
@endsection