<header class="bg-primary text-white p-4 flex justify-between items-center">
    <div class = "container">
    <div class="text-xl font-bold">Planeación Tecnológica Empresarial</div>
    <nav class="navbar navbar-expand-lg navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('empresas.index') }}">Empresas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</header>
