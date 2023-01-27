<nav class="navbar navbar-expand-lg bg-sigma text-white">
    <div class="container">
        <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
        </div>
    </div>
</nav>