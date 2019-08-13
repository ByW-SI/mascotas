@extends('principal')
@section('content')

<div class="container" id="tab">
	<div role="application" class="panel panel-group">
		@include('provedores.head')
		<ul role="tablist" class="nav nav-pills">
			<li class="nav-item">
				<a href="{{ route('provedores.show',['provedore'=>$provedore]) }}" class="nav-link">Dirección Fìsica:</a>
			</li>
			{{-- @endif
			@if($cmp->nombre == 'ver datos proveedor') --}}
			<li class="nav-item">
				<a href="{{ route('provedores.direccionfisica.index',['provedore'=>$provedore]) }}" class="nav-link active">Dirección Fiscal:</a>
			</li>
			<li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
				<a href="{{ route('provedores.contacto.index',['cliente'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-3">Contacto:</a>
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
						<h5>Dirección Fiscal:</h5>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="form-group col-sm-3">
    					<label class="control-label" for="calle">Calle:</label>
    					<dd>{{$direccion->calle}}</dd>
  					</div>
  					<div class="form-group col-sm-3">
    					<label class="control-label" for="numext">Numero exterior:</label>
    					<dd>{{$direccion->numext}}</dd>
  					</div>	
  					<div class="form-group col-sm-3">
    					<label class="control-label" for="numint">Numero interior:</label>
    					<dd>{{$direccion->numint}}</dd>
  					</div>		
				</div>
				<div class="row" id="perfisica">
					<div class="form-group col-sm-3">
  						<label class="control-label" for="colonia">Colonia:</label>
  						<dd>{{$direccion->colonia}}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="municipio">Delegación o Municipio:</label>
  						<dd>{{$direccion->municipio}}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="ciudad">Ciudad:</label>
  						<dd>{{$direccion->ciudad}}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="estado">Estado:</label>
  						<dd>{{$direccion->estado}}</dd>
  					</div>
				</div>
				<div class="row" id="perfisica">
					<div class="form-group col-sm-3">
  						<label class="control-label" for="calle1">Entre calle:</label>
  						<dd>{{$direccion->calle1}}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="calle2">Y calle:</label>
  						<dd>{{$direccion->calle2}}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="referencia">Referencia:</label>
  						<dd>{{$direccion->referencia}}</dd>
  					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center">
						<a class="btn btn-warning" href="{{ route('provedores.direccionfisica.edit',['provedore'=>$provedore, 'direccionfisica'=>$direccion]) }}">
							<strong>Editar</strong>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection