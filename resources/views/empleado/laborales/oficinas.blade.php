<option value="">Seleccionar</option>
@foreach($estado->oficinas as $oficina)
	<option value="{{ $oficina->id }}">{{ $oficina->nombre }} - {{ $oficina->abreviatura }}</option>
@endforeach