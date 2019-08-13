@extends('principal')
@section('content')

<form method="POST" action="{{ route('provedores.store') }}">
	{{ csrf_field() }}
	<div class="card mb-5">
		{{-- Header - datos del proveedor --}}
		<div class="card-header">
			<div class="row">
				<div class="col-4">
					<h5>DATOS DEL PROVEEDOR:</h5>
				</div>
				{{-- @foreach(Auth::user()->perfil->componentes as $cmp)
					@if($cmp->nombre == "indice proveedores") --}}
						<div class="col-sm-4 text-center">
							<a href="{{ route('provedores.index') }}" class="btn btn-primary">
								<i class="fa fa-bars" aria-hidden="true"></i>
								<strong>Lista de Proveedores</strong>
							</a>
						</div>
					{{-- @endif
				@endforeach --}}
			</div>
		</div>
		{{-- Formulario - datos del proveedor --}}
		<div class="card-body">
			{{-- <div class=""> --}}
				<div class="row">
					<div class="form-group col-md-3">
						<label class="control-label" for="tipopersona">Tipo de Persona:</label>
						<select type="select" name="tipopersona" class="form-control" id="tipopersona" onchange="tipo(this)">
							<option id="Fisica" value="Fisica">Fisica</option>s
							<option id="Moral" value="Moral">Moral</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label class="control-label" for="rfc">✱RFC:</label>
						<input type="text" class="form-control" id="varrfc" name="rfc" required minlength="12" maxlength="13" pattern="^[A-Za-z]{4}[0-9]{6}[A-Za-z0-9]{3}" placeholder="Ingrese RFC" title="Siga el formato del RFC">
					</div>
					{{-- <div id="perfisica" class="row"> --}}
						<div class="form-group col-md-3">
							<label class="control-label" for="nombre">✱Nombre:</label>
							<input type="text" class="form-control" id="nombre" name="nombre">
						</div>
						<div class="form-group col-md-3">
							<label class="control-label" for="apellidopaterno">✱Apellido Paterno:</label>
							<input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno">
						</div>
						<div class="form-group col-md-3">
							<label class="control-label" for="apellidomaterno">Apellido Materno:</label>
							<input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno">
						</div>
					{{-- </div> --}}
					{{-- <div id="permoral" style="display:none;" class="row"> --}}
						<div class="form-group col-md-3">
							<label class="control-label" for="razonsocial">✱Razon Social:</label>
							<input type="text" class="form-control" id="razonsocial" name="razonsocial">
						</div>
					{{-- </div> --}}
					<div class="form-group col-md-3">
						<label class="control-label" for="alias">✱Alias:</label>
						<input type="text" class="form-control" id="alias" name="alias" required autofocus>
					</div>
				</div>
			{{-- </div> --}}
		</div>
		{{-- Header - dirección física --}}
		<div class="card-header">	
			<div class="row">
				<div class="col-md-3">
					<h5>DIRECCIÓN FÍSICA:</h5>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="form-group col-md-3">
					<label class="control-label" for="calle">✱Calle:</label>
					<input type="text" class="form-control" id="calle" name="calle" required>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label" for="numext">✱Número exterior:</label>
					<input type="text" class="form-control" id="numext" name="numext" required>
				</div>	
				<div class="form-group col-md-3">
					<label class="control-label" for="numinter">Número interior:</label>
					<input type="text" class="form-control" id="numinter" name="numinter">
				</div>
				<div class="form-group col-md-3">
					<label class="control-label" for="colonia">✱Colonia:</label>
					<input type="text" class="form-control" id="colonia" name="colonia" required>
				</div>
			{{-- </div>
			<div class="row"> --}}
				<div class="form-group col-md-3">
					<label class="control-label" for="estado">✱Estado:</label>
					<input type="text" class="form-control" id="estado" name="estado" required>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label" for="ciudad">✱Ciudad:</label>
					<input type="text" class="form-control" id="ciudad" name="ciudad" required>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label" for="municipio">✱Municipio:</label>
					<input type="text" class="form-control" id="municipio" name="municipio" required>
				</div>
				<div class="form-group col-md-3">
					<label class="control-label" for="calle1">Entre calles:</label>
					<input type="text" class="form-control" id="calle1" name="calle1">
				</div>
			{{-- </div>
			<div class="row"> --}}
				<div class="form-group col-md-3">
					<label class="control-label" for="referencia">Referencia:</label>
					<input type="text" class="form-control" id="referencia" name="referencia">
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-4 offset-4 text-center">
					<button type="submit" class="btn btn-success">
						<i class="fa fa-check"></i> Guardar
					</button>
				</div>
				<div class="col-4 text-right text-danger">
					<h5>✱Campos Requeridos</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="card mb-5">
		
	</div>
</form>

<script type="text/javascript">
	
	function tipo(tipo) {
		if(tipo.value == 'Fisica') {
			document.getElementById('perfisica').style.display='block';
			document.getElementById('permoral').style.display='none';
			$('#nombre').prop('required', true);
			$('#apellidopaterno').prop('required', true);
			$('#razonsocial').prop('required', false);
			document.getElementById('varrfc').pattern = '^[A-Za-z]{4}[0-9]{6}[A-Za-z0-9]{3}';
		} else {
			document.getElementById('perfisica').style.display='none';
			document.getElementById('permoral').style.display='block';
			$('#nombre').prop('required', false);
			$('#apellidopaterno').prop('required', false);
			$('#razonsocial').prop('required', true);
			document.getElementById('varrfc').pattern = '^[A-Za-z]{3}[0-9]{6}[A-Za-z0-9]{3}';
		}
	}

</script>

@endsection