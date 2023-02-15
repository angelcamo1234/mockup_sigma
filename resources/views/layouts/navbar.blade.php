<nav class="navbar navbar-expand-lg bg-dblue text-white">
    <div class="container">
        <button class="btn float-end bg-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 6l16 0"></path>
                <path d="M4 12l16 0"></path>
                <path d="M4 18l16 0"></path>
             </svg>
        </button>
        {{-- <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        {{-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'home' ? 'text-success' : 'text-white' }} nav-link active" aria-current="page" href="{{ route('home') }}">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'seguimiento_general' ? 'text-success' : 'text-white' }} nav-link active" aria-current="page" href="{{ route('seguimiento_general') }}">SEGUIMIENTO GENERAL</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'gestion_por_dealer' ? 'text-success' : 'text-white' }} nav-link active" href="{{ route('gestion_por_dealer') }}">GESTIÓN POR DEALER</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'retencion' ? 'text-success' : 'text-white' }} nav-link" href="{{ route('retencion') }}">RETENCIÓN</a>
                </li>                
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'stock_dealer' ? 'text-success' : 'text-white' }} nav-link" href="{{ route('stock_dealer') }}">STOCK DEALER</a>
                </li>
            </ul>
        </div> --}}
    </div>
</nav>

<div class="offcanvas offcanvas-start w-25 bg-dblue sidebar" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false" style="width: 220px!important">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title d-none d-sm-block text-white" id="offcanvas">MENÚ</h6>
        <button type="button" class="btn-close bg-secondary" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-0">
        {{-- <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start " id="menu">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'home' ? 'text-primary' : 'text-white' }}">
                    <span class="d-none d-sm-inline">INICIO</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('seguimiento_general') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'seguimiento_general' ? 'text-primary' : 'text-white' }}">
                    <span class="d-none d-sm-inline">SEGUIMIENTO GENERAL</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('gestion_por_dealer') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'gestion_por_dealer' ? 'text-primary' : 'text-white' }}">
                    <span class="d-none d-sm-inline">GESTIÓN POR DEALER</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('retencion') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'retencion' ? 'text-primary' : 'text-white' }}">
                    <span class="d-none d-sm-inline">RETENCIÓN</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('stock_dealer') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'stock_dealer' ? 'text-primary' : 'text-white' }}">
                    <span class="d-none d-sm-inline">STOCK DEALER</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('metas') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'metas' ? 'text-primary' : 'text-white' }}">
                    <span class="d-none d-sm-inline">METAS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('gestion') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'gestion' ? 'text-primary' : 'text-white' }}">
                    <span class="d-none d-sm-inline">GESTIÓN</span>
                </a>
            </li>
        </ul> --}}
        <ul class="nav flex-column" id="nav_accordion">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'home' ? 'text-primary' : 'text-white' }}">
                    <span class="d-none d-sm-inline">INICIO</span>
                </a>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link text-white" href="#">REPORTES @include('layouts.row_down')</a>
                <ul class="submenu collapse">
                    <li class="nav-item">
                        <a href="{{ route('seguimiento_general') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'seguimiento_general' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">SEGUIMIENTO GENERAL</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gestion_por_dealer') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'gestion_por_dealer' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">GESTIÓN POR DEALER</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('retencion') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'retencion' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">RETENCIÓN</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('stock_dealer') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'stock_dealer' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">STOCK DEALER</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link text-white" href="#">GESTIÓN @include('layouts.row_down')</a>
                <ul class="submenu collapse">
                    <li class="nav-item">
                        <a href="{{ route('metas') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'metas' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">METAS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gestion') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'gestion' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">GESTIÓN JEFE</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('asignar_dealer') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'asignar_dealer' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">ASIGNACIÓN DEALER</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link text-white" href="#">REPORTES @include('layouts.row_down')</a>
                <ul class="submenu collapse">
                    <li class="nav-item">
                        <a href="{{ route('reportes.comparador_mecanica') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'reportes.comparador_mecanica' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">COMPARADOR<br>REPUESTOS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reportes.comparador_repuestos') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'reportes.comparador_repuestos' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">COMPARADOR<br>MECÁNICA</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reportes.comparador_pyp') }}" class="nav-link text-truncate {{ Route::currentRouteName() == 'reportes.comparador_pyp' ? 'text-primary' : 'text-white' }}">
                            <span class="d-none d-sm-inline">COMPARADOR<br>PYP</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>