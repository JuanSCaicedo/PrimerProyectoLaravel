<header>
    <h1>Juan DevOps</h1>
    <nav>
        <ul>
            <li><a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
            </li>
            <li><a href="{{ route('cursos.index') }}"
                    class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">Cursos</a>
            </li>
            <li><a href="{{ route('nosotros') }}"
                    class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
            </li>
            <li><a href="{{ route('contactanos.index') }}"
                class="{{ request()->routeIs('contactanos.index') ? 'active' : '' }}">Contáctanos</a>
        </li>
        </ul>
    </nav>
</header>
