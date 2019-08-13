<nav class="navbar navbar-expand-md  navbar-dark" style="background-color: #1c3160;">
    
    <a class="navbar-brand imagenHeader-i" style="display: none" href="/">
        Mascotas
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fa fa-lock"></i><strong> Seguridad</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-universal-access"></i><strong> Perfiles</strong>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user-circle"></i><strong> Usuarios</strong>
                        </a>
                    </div>
                </li>  --}}
                             
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fas fa-briefcase"></i><strong> Recursos Humanos</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('empleados/create')}}"><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                        <a class="dropdown-item" href="{{ url('empleados') }}"><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                    </div>
                </li>  
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                       <i class="fas fa-book-open"></i><strong> Servicios</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('provedores.create') }}"><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                        <a class="dropdown-item" href="{{ route('provedores.index') }}"><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                    </div>
                </li>  --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fas fa-cart-arrow-down"></i><strong> Punto de venta</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('provedores.create') }}"><span>lorem</span><i class="fa fa-plus float-right"></i></a>
                        <a class="dropdown-item" href="{{ route('provedores.index') }}"><span>lorem</span><i class="fa fa-search float-right"></i></a>
                    </div>
                </li>  --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fas fa-file-invoice"></i><strong> Reportes</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('provedores.create') }}"><span>lorem</span><i class="fa fa-plus float-right"></i></a>
                        <a class="dropdown-item" href="{{ route('provedores.index') }}"><span>lorem</span><i class="fa fa-search float-right"></i></a>
                    </div>
                </li>    --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fas fa-truck"></i><strong> Provedores</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('provedores.create') }}"><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                        <a class="dropdown-item" href="{{ route('provedores.index') }}"><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                    </div>
                </li> 
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fas fa-paw"></i><strong> Pet life</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('pacientes.create') }}"><span>Alta Paciente</span> <i class="fa fa-plus float-right"></i></a>
                        <a class="dropdown-item" href="{{ route('pacientes.index') }}"><span>Buscar Paciente</span> <i class="fa fa-search"></i></a>
                    </div>
                </li>                       --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <strong><i class="fas fa-redo-alt"></i> Precargas</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('razas.index') }}"><i class="fas fa-feather"></i> Razas</a>
                    </div>
                </li>     --}}
                
                
                
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Punto de Venta
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>Venta</span><i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Historial</span><i class="fa fa-search float-right"></i></a>
                        </div>
                    </li>     --}}
                
                
                
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Productos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>Alta</span><i class="fa fa-plus float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Excel</span><i class="fa fa-search float-right"></i></a>
                        </div>
                    </li>     --}}
                
                
                
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            C.R.M.
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>General</span><i class="fa fa-search float-right"></i></a>
                        </div>
                    </li>    
                
                
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Oficinas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span>Buscar</span><i class="fa fa-search float-right"></i></a>
                            <a class="dropdown-item" href=""><span>Crear</span><i class="fa fa-plus float-right"></i></a>
                        </div>
                    </li>    
                

                
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                Usuarios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                                <a class="dropdown-item" href=""><span>Roles</span><i class="fa fa-search float-right"></i></a>
                    
                    
                                <a class="dropdown-item" href=""><span>Usuarios</span><i class="fa fa-search float-right"></i></a>
                    
                
                        </div>
                    </li> --}}
                
                
                
                {{-- <a  class="btn btn-info btn-sm" href="{{ url('logout') }}">
                        <strong>
                            <i class="far fa-save"></i>
                           <i class="fas fa-sign-out-alt"></i>
                            Salir
                        </strong>
                </a>
     --}}

            </ul>
        </div>
    </nav>
</div>
{{-- <div class="row m-0 p-0 text-white" style="background-color: #1c3160;">
    <div class="col">
        <ul id="pestanias" class="nav nav-tabs">
            <li id="pestania_1" class="nav-item">
                <a class="text-white nav-link pestania" onclick="abrirPestania('pestania_1')" href="#"><span>Prueba </span><span style="font-size: 1.2em;"><i onclick="cerrarPestania('pestania_${no_pestanias}')" class="fas fa-times-circle ml-2"></i></span></a>
            </li>
        </ul>
    </div>
</div> --}}
<script>

    var no_pestanias = 0;
    $(document).ready(function(){

        //CREAR PESTAÑA
        $('.dropdown-item').click({url: 'www.facebook.com'}, crearPestania);

        //CERRAR PESTAÑA





        



    });

    function crearPestania(event){
        no_pestanias++;
        //alert(no_pestanias);
        let titulo = event.data.url;
        let nuevapestania = `<li id="pestania_${no_pestanias}" class="nav-item">
                                <a class="text-white nav-link pestania" onclick="abrirPestania('pestania_${no_pestanias}')" href="#"><span> ${titulo + no_pestanias} </span><span style="font-size: 1.2em;"><i onclick="cerrarPestania('pestania_` + no_pestanias + `')" class="fas fa-times-circle ml-2"></i></span></a>
                            </li>`
        $('#pestanias').append(nuevapestania);
        //return false;
    }

    function cerrarPestania(id){
        alert('#'+id);
        $('#'+id).remove();
    }

    function abrirPestania(id){
        $('.nav-link.pestania').removeClass('active text-dark');
        $('.nav-link.pestania').addClass('text-white');
        $('#'+id).find('a').addClass('active text-dark');
        
    }
</script>