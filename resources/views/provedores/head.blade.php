<div class="card mb-5">
	<div class="card-header">
		<div class="row">
			<div class="col-sm-4">
				<h4>Datos del Proveedor:</h4>
			</div>
			<div class="col-sm-4 text-center">
				<a class="btn btn-success" href="{{ route('provedores.create') }}">
					<i class="fa fa-plus" aria-hidden="true"></i><strong> Agregar Proveedor</strong>
				</a>
			</div>
			<div class="col-sm-4 text-center">
				<a class="btn btn-primary" href="{{ route('provedores.index') }}">
					<i class="fa fa-bars" aria-hidden="true"></i><strong> Lista de Proveedores</strong>
				</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			  <div class="form-group col-sm-3">
				<label class="control-label" for="tipopersona"><strong>Tipo de Persona:</strong></label>
				<dd>{{ $provedore->tipopersona }}</dd>
			  </div>
			@if($provedore->tipopersona == "Fisica")
				<div class="form-group col-sm-3">
					  <label class="control-label" for="nombre"><strong>Nombre(s):</strong></label>
					  <dd>{{ $provedore->nombre }}</dd>
				  </div>
				  <div class="form-group col-sm-3">
					  <label class="control-label" for="apellidopaterno"><strong>Apellido Paterno:</strong></label>
					  <dd>{{ $provedore->apellidopaterno }}</dd>
				  </div>
				  <div class="form-group col-sm-3">
					  <label class="control-label" for="apellidomaterno"><strong>Apellido Materno:</strong></label>
					  <dd>{{ $provedore->apellidomaterno }}</dd>
				  </div>
			@else
				<div class="form-group col-sm-3">
					  <label class="control-label" for="razonsocial"><strong>Razón Social:</strong></label>
					  <dd>{{ $provedore->razonsocial }}</dd>
				  </div>
			@endif
			  <div class="form-group col-sm-3">
				  <label class="control-label" for="rfc"><strong>RFC:</strong></label>
				  <dd>{{ $provedore->rfc }}</dd>
			  </div>
			<div class="form-group col-sm-3">
				<label class="control-label" for="rfc"><strong>Correo Electrónico:</strong></label>
				<dd> {{ $provedore->email }}</dd>
			</div>
		</div>
	</div>
</div>