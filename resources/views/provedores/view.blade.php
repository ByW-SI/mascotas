@extends('principal')
@section('content')

<div class="container" id="tab">
	<div role="application" class="panel panel-group">
		@include('provedores.head')
		@include('provedores.links')
		<div class="card mb-5">
			<div class="card-header">
				<div class="row">
					<div class="col-sm-4">
						<h5>Dirección Física:</h5>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="form-group col-3">
						<label class="control-label" for="calle"><strong>Calle:</strong></label>
						<dd>{{ $provedore->calle }}</dd>
					</div>
					<div class="form-group col-3">
						<label class="control-label" for="numext"><strong>Número exterior:</strong></label>
						<dd>{{ $provedore->numext }}</dd>
					</div>	
					<div class="form-group col-3">
						<label class="control-label" for="numinter"><strong>Número interior:</strong></label>
						<dd>{{ $provedore->numinter ? $provedore->numinter : 'N/A' }}</dd>
					</div>
					<div class="form-group col-3">
						<label class="control-label" for="colonia"><strong>Colonia:</strong></label>
						<dd>{{ $provedore->colonia }}</dd>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-3">
						<label class="control-label" for="estado"><strong>Estado:</strong></label>
						<dd>{{ $provedore->estado }}</dd>
					</div>
					<div class="form-group col-3">
						<label class="control-label" for="ciudad"><strong>Ciudad:</strong></label>
						<dd>{{ $provedore->ciudad }}</dd>
					</div>
					<div class="form-group col-3">
						<label class="control-label" for="municipio"><strong>Municipio:</strong></label>
						<dd>{{ $provedore->municipio }}</dd>
					</div>
					<div class="form-group col-3">
						<label class="control-label" for="calle1">Entre calles:</label>
						<dd>{{ $provedore->calle1 ? $provedore->calle1 : 'N/A' }}</dd>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-3">
						<label class="control-label" for="referencia">Referencia:</label>
						<dd>{{ $provedore->referencia ? $provedore->referencia : 'N/A' }}</dd>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center">
						<a class="btn btn-warning" href="{{ route('provedores.edit', ['provedore'=>$provedore]) }}">
					       <strong>Editar</strong>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection