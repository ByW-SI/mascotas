<ul role="tablist" class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active"  href="#tab1">Dirección Física:</a>
    </li>
    {{-- @foreach(Auth::user()->perfil->componentes as $cmp)
    @if($cmp->nombre == 'ver datos proveedor') --}}
    <li role="presentation" tabindex="-1" class="nav-item" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
        <a href="{{ route('provedores.direccionfisica.index',['cliente'=>$provedore]) }}" role="presentation" tabindex="-1" class="nav-link" id="ui-id-2">Dirección Fiscal:</a>
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